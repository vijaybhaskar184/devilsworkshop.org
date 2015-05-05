---
title: Features which can be used with your WordPress 3.0
author: saorabhkumar
date: 2010-11-18
excerpt: 'There are lots of features in WordPress 3.0, but we do not use all the features in our theme. These features may keep our theme handy, flexible and secure.  '
url: /features-which-can-be-used-with-your-wordpress-3-0/
views:
  - 6
categories:
  - Tips
tags:
  - Tutorial
  - Wordpress
  - Wordpress MU
  - Wordpress Themes
  - Wordpress Tutorials
---
There are lots of features in **WordPress 3.0**, but we do not use all the features in our theme. These features may keep our theme handy, flexible and secure.

Some of these features are as below :

  * Custom Navigation Support.
  * Custom Background Support.
  * Custom Header Support.
  * Custom Post Type.
  * Thumbnail support.
  * Multi Site Support.

**Custom Navigation Support**  
In **WordPress 3.0** we have a new feature which is custom navigation support. Now any one can handle the **menu** very easily.  
Steps to provide this features in our theme are :

  * Open **&#8220;**Function.php&#8221;

<pre><code class="no-highlight">      past the following code snippet  // This theme uses wp_nav_menu()
      add_action( 'init', 'register_my_menu' );
       function rt_register_my_menu() 
       {
       t_register_nav_menu( 'primary-menu', __( 'Primary  Menu'));
       }</code></pre>

  * Refresh your WordPress 3.0 Admin Dashboard.
  * In the appearance tab we have a new option named Menu. Click on it.
  * The following screen will appear in front of you.

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/menu_show_up/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/menu_show_up/', '']);" rel="attachment wp-att-621"><img class="alignnone size-medium  wp-image-50148" src="http://cdn.devilsworkshop.org/files/2010/07/menu_show_up1-300x241.png" alt="" width="300" height="241" /></a>

When we will click on menu the following screen appears :

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/fullsettingsformenues/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/fullsettingsformenues/', '']);" rel="attachment wp-att-622"><img class="alignnone size-large wp-image-622" src="http://cdn.devilsworkshop.org/files/2010/07/FullSettingsformenues-520x232.png" alt="" width="520" height="232" /></a>

As you see in the image above, menu name is Primary Menu so when we have to call it just write the following code.

<pre><code class="no-highlight">  php wp_nav_menu('Primary Menu') ?&gt; 

  For more information &lt;a href="http://codex.wordpress.org/Function_Reference/wp_nav_menu" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Function_Reference/wp_nav_menu', 'click here']);" target="_blank">click here&lt;/a>.</code></pre>

**Custom Background Support**  
This feature is useful for those who want to change their ** WordPress** Theme background randomly. To enable this option use the following code in the &#8220;function.php&#8221; **.**

<pre><code class="no-highlight">  // This theme allows users to set a custom background   
     add_custom_background();</code></pre>

After Doing this, refresh WordPress 3.0 Admin dashboard.

We have a new option inside the appearance tab named Background.

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/backgroundsettings/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/backgroundsettings/', '']);" rel="attachment wp-att-623"><img class="alignnone size-large wp-image-623" src="http://cdn.devilsworkshop.org/files/2010/07/Backgroundsettings-520x401.png" alt="" width="520" height="401" /></a>

**Custom Header Support**  
It provides an option to change the header style randomly. To enable this feature use the following code in the** **&#8220;function.php&#8221;

<pre><code class="no-highlight">add_custom_image_header( 'rt_header_style', 'admin_header_style' ); // This Enables the Appearance &gt; Header
//This will allow croping features in backend</code></pre>

<pre><code class="no-highlight">define('HEADER_IMAGE_WIDTH', 960); // use width and height appropriate for your theme
define('HEADER_IMAGE_HEIGHT', 70);// Following Code is for Styling the Admin Side
if ( ! function_exists( 'admin_header_style' ) ) :
// gets included in the admin header
function admin_header_style() {
?&gt;<!--
#headimg {
width: php echo HEADER_IMAGE_WIDTH; ?&gt;-->px;
height: php echo HEADER_IMAGE_HEIGHT; ?&gt;px;
}
--&gt;

<!--
#header-wrapper {
background: url();
}
--></code></pre>

After adding this code, refresh WordPress 3.0 Admin dashboard.

You will see the an additional tab added below the appearance tab as in the image below.

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/headercustom/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/headercustom/', '']);" rel="attachment wp-att-624"><img class="alignnone size-large wp-image-624" src="http://cdn.devilsworkshop.org/files/2010/07/headerCustom-520x231.png" alt="" width="520" height="231" /></a>

**  
**

**Custom Post Type**  
This feature is very useful for designing the portfolio page or a shopping related site. Custom post type is just like post and pages but we can manage or handle it separately within the WordPress Dashboard and through custom queries. When creating custom post type we can use any name.

To enable this features use the following code snippet in the &#8220;function.php&#8221;

<pre><code class="no-highlight">add_action('init', 'rt_create_portfolio');
function rt_create_portfolio() {
$portfolio_args = array(
'label' =&gt; __('Portfolio'),
'singular_label' =&gt; __('Portfolio'),&gt;
'public' =&gt; true,
'show_ui' =&gt; true,
'capability_type' =&gt; 'post',
'hierarchical' =&gt; false,
'rewrite' =&gt; true,
'supports' =&gt; array('title', 'editor', 'thumbnail')&gt;
);
register_post_type('portfolio',$portfolio_args);
}
//Addindg More Coustome Fileds in portfolio Page
add_action("admin_init", "rt_add_portfolio");
function rt_add_portfolio(){
add_meta_box("portfolio_details", "Portfolio Options", "rt_portfolio_options", "portfolio", "normal", "low");
}</code></pre>

After adding this code refresh the WordPress 3.0 Admin dashboard.

You will see the additional tab added below the appearance tab as shown in the image below.

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/portfoliooptions/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/portfoliooptions/', '']);" rel="attachment wp-att-625"><img class="alignnone size-full wp-image-625" src="http://cdn.devilsworkshop.org/files/2010/07/portfoliooptions.png" alt="" width="260" height="250" /></a>

Now we have a same post page dashboard for portfolio page.

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/port_desc/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/port_desc/', '']);" rel="attachment wp-att-626"><img class="alignnone size-large wp-image-626" src="http://cdn.devilsworkshop.org/files/2010/07/port_desc-520x388.png" alt="" width="520" height="388" /></a>

There is an option inside portfolio &#8220;Add new &#8220;. On clicking a screen appears as below from which we are familiar. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/port_inner/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/port_inner/', '']);" rel="attachment wp-att-627"><img class="alignnone size-large wp-image-627" src="http://cdn.devilsworkshop.org/files/2010/07/port_inner-520x337.png" alt="" width="520" height="337" /></a>

**Thumbnail support : **

This feature was introduced with WordPress 2.9,  but after the launch of WordPress 3.0 it is widely used. There is an option while writing a post named as Featured Image.

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/featured/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/featured/', '']);" rel="attachment wp-att-628"><img class="alignnone size-full wp-image-628" src="http://cdn.devilsworkshop.org/files/2010/07/featured.png" alt="" width="279" height="280" /></a>

To enable this features use the following code in &#8220;function.php&#8221;

<pre><code class="no-highlight">/* add post thumbnail support */
add_theme_support('post-thumbnails'); 

For more details on this &lt;a href="http://codex.wordpress.org/Post_Thumbnails" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Post_Thumbnails', 'click here']);" >click here&lt;/a>.</code></pre>

?**Multi Site Support**

This is a WordPress MU feature. To enable this feature add the following code in the in the &#8220;config.php&#8221;. You can find this file under WordPress installation directory.

Open **`wp-config.php`**

  * add this line

<pre><code class="no-highlight">     define('WP_ALLOW_MULTISITE', true); &lt;strong>above&lt;/strong> where it says &lt;code>/* That's all, stop editing! Happy blogging. */</code>:&lt;/code></pre>

  * Save the file.
  * Refresh the WordPress dashboard.
  * Go to Dashboad->Tools->Network(Newly added)
  * Click on it you have following option see the screenshot.

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/multisite_one/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/multisite_one/', '']);" rel="attachment wp-att-631"><img class="alignnone size-large wp-image-631" src="http://cdn.devilsworkshop.org/files/2010/07/multisite_one-520x272.png" alt="" width="520" height="272" /></a>

After installing these options now it provides some code and will display a message. We just have to follow these steps and we have an option like WordPress MU. See the below image

<a href="http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/multi_site_optons/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/features-which-can-be-used-with-your-wordpress-3-0/multi_site_optons/', '']);" rel="attachment wp-att-632"><img class="alignnone size-large wp-image-632" src="http://cdn.devilsworkshop.org/files/2010/07/multi_site_optons-520x282.png" alt="" width="520" height="282" /></a>

If you know any other good features that can be helpful feel free to tell me through your comments.
