---
title: '[How to] Get WordPress Login Form in Front End'
author: suhasgirgaonkar
date: 2011-04-26
url: /wordpress-login-form-front/
views:
  - 27
dsq_thread_id:
  - 2947120549
categories:
  - Tips
tags:
  - Developers
  - Wordpress
  - WordPress. code
---
Sometime admin decides the posts under certain category eg. “Subscriber Posts” must be &nbsp;visible only for the subscribed users. For this he have to provide a login form at the front end, so that user can register them self and after login they can see those posts.

There are 2 ways to provide a login form.

  1. Create a custom menu from admin and give a URL of wp-login eg. *http://www.example.com/wp-login.php*
User can log in to this url, however this will not be a good practice as user may distract his mind from your site.

  2. Provide a login form on front-end so user will be on your site only. To create the custom login form follow the steps given below.

<a href="http://wpveda.com/wordpress-login-form-front/front_end_login_screen/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/wordpress-login-form-front/front_end_login_screen/', '']);" rel="attachment wp-att-2507"><img class="size-full  alignnone wp-image-50085" src="http://cdn.devilsworkshop.org/files/2011/04/front_end_login_screen.png" alt="" width="493" height="202" /></a>

## Step 1:

Create a simple page template.

<pre><code class="no-highlight">&lt;?php
/*
Template Name: Login Form
*/
?&gt;
&lt;?php get_header();?&gt;
&lt;?php get_sidebar(); ?&gt;

    &lt;div id="content" &gt;
&lt;!-- If user is not logged in the show the login form  --&gt;
    &lt;?php if(!is_user_logged_in ()) { ?&gt;
        &lt;div class="login-box" &gt;
&lt;!-- Login form start  --&gt;
            &lt;form method="post" action="&lt;?php echo site_url(); ?&gt;/wp-login.php" id="loginform_custom" name="loginform_custom"&gt;
                &lt;table&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Username&lt;/td&gt;
                        &lt;td&gt;&lt;input type="text" class="u-name" name="log" /&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Password&lt;/td&gt;
                        &lt;td&gt;&lt;input type="password" class="u-pass" name="pwd" /&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;&lt;/td&gt;
                        &lt;td&gt;&lt;input type="submit"  name="submit" value="Login" /&gt;&lt;a href="&lt;?php echo site_url();?&gt;/wp-login.php?action=register"&gt;Register&lt;/a&gt;&lt;a href="&lt;?php echo wp_lostpassword_url(); ?&gt;" title="Lost Password"&gt;Lost your password?&lt;/a&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/table&gt;     
            &lt;/form&gt;
&lt;!-- End  of login form --&gt;
            &lt;/div&gt;
            &lt;?php } else { ?&gt;
        &lt;?php
                 wp_get_current_user();
// Retrive the current user object. to check the user logged in or not.
                if ( 0 != $current_user-&gt;ID ) {
                        $subscriber_posts_cat = get_cat_ID('Subscriber Posts');
                        query_posts('cat=' . $subscriber_posts_cat.'&showposts=-1');
// Get all posts under Subscriber Posts category.
                        while ( have_posts() ) : the_post(); ?&gt;
                        &lt;div &lt;?php post_class('post-box') ?&gt;&gt;
                                     &lt;div class="post-date"&gt;
                &lt;ul&gt;
                &lt;li&gt;&lt;?php the_time('j'); ?&gt;&lt;/li&gt;
                &lt;li class="month"&gt;&lt;?php the_time('M'); ?&gt;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;/div&gt;
                        &lt;div class="post-title"&gt;
                            &lt;?php
                            if (is_singular ()) {
                                ?&gt;&lt;h1&gt;&lt;?php the_title(); ?&gt;&lt;/h1&gt;&lt;?php
                            }
                            else {
                                ?&gt;&lt;h2&gt;&lt;a href="&lt;?php the_permalink() ?&gt;" rel="bookmark" title="Permanent Link to &lt;?php the_title_attribute(); ?&gt;"&gt;&lt;?php the_title(); ?&gt;&lt;/a&gt;&lt;/h2&gt;&lt;?php
                            }
                           ?&gt;
                            &lt;div class="clear"&gt;&lt;/div&gt;
                        &lt;/div&gt;&lt;!-- .post-title --&gt;
                            &lt;div class="post-content clearp"&gt;
                                &lt;?php the_excerpt(); ?&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;?php endwhile; } } ?&gt;
    &lt;/div&gt;

&lt;?php get_footer(); ?&gt;
</code></pre>

In the above template first we have checked weather user is logged in or not. If user is logged in then he is able to see the posts under category “Subscriber Posts”. Otherwise user can see login form with the Register and Lost Password links.  
In the above login form “action” of form and the “name” of input fields of Username and Password is very important.

## Step 2:

To handle the redirection of admin login and subscriber login we have to write the redirection function in themes function.php file. That is if user role is admin then show him the dashboard and if the user role is subscriber then he will directly redirected to “Subscriber Posts” category page.

&nbsp;

<pre><code class="no-highlight">/* check the role of current loged in user for redirection */
add_action('admin_init','rt_checkRole');
function rt_checkRole() {

    global $wp_roles;
    $currentrole ='';
	foreach ( $wp_roles-&gt;role_names as $role =&gt; $name ) {
		if ( current_user_can( $role ) ){
                    $currentrole = $role;
                }
        }
        if($currentrole == 'subscriber')
            wp_redirect (site_url().'/front-end-login/');
}

/* redirect the user  depending on role */
add_action('template_redirect', 'rt_redirectuser');
function rt_redirectuser() {
    if (!is_user_logged_in() && (is_category(get_cat_ID('Subscriber Posts')) || rt_is_subscriber_post_cat()))  {  //user check if
           wp_redirect(site_url().'/front-end-login/');
           exit ();
    }
}
/* check the current category is  Subscriber Posts */
function rt_is_subscriber_post_cat(){
    if(is_single()){
        global $post;
        $cats = wp_get_post_categories($post-&gt;ID);
        $cat_id = get_cat_ID('Subscriber Posts');
        foreach($cats as $cat)
        {
            if($cat==$cat_id)
                return TRUE;
        }
            return FALSE;
    }
}
/* redirect the user to front end login form when he is loged out */
add_action('wp_logout', 'rt_logoutRedirect');
function rt_logoutRedirect()
{
        wp_redirect(site_url().'/front-end-login/');
        exit();
}</code></pre>

## Step 3:

Once user logged in to your site, “Log Out” menu will automaticlly get added in your menubar by adding the below function in your themes header.php file. Now add a filter on wp\_nav\_menu if the user is logged in.

<pre><code class="no-highlight">/* filter function */
function rt_menus($param)
&nbsp;{ return $param.'&lt;li&gt;&lt;a href="'.wp_logout_url().'" title="Logout"&gt;Logout&lt;/a&gt;&lt;/li&gt;'; }
/* menu code on header.php */
if( function_exists('wp_nav_menu') && has_nav_menu('primary') )
&nbsp;{ add_filter('wp_nav_menu_items','rt_menus');
wp_nav_menu(array('container' =&gt; '', 'menu_id' =&gt; 'rt-nav-menu', 'theme_location' =&gt; 'primary', 'depth' =&gt; '3'));
remove_filter('wp_nav_menu_items', 'rt_menus'); }</code></pre>

Add and tweak CSS as per your sites requirement, as the form will look in the screenshot image above. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
