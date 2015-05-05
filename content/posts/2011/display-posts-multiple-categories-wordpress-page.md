---
title: How To Display Posts from Multiple Categories on a WordPress page
author: pradeep910
date: 2011-04-22
url: /display-posts-multiple-categories-wordpress-page/
views:
  - 87
dsq_thread_id:
  - 2947120438
categories:
  - Tutorial
tags:
  - Wordpress
  - Wordpress Themes
---
We can assign multiple categories to posts, but not to pages by default. So I came up with some work around for adding category selection box in the WordPress page admin. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

I wanted to create a page template, showing 4 posts from each selected category. That is, I wanted to show posts from multiple categories on the same page.

Assigning categories to page, made my posts listing dynamic, and as I was creating a page template, it was flexible for me to loop through any categories of my choice.

[<img class="size-full  alignnone wp-image-52179" src="http://cdn.devilsworkshop.org/files/2011/04/categories-on-pages-copy-new.png" alt="" width="600" height="300" />][1]

Here is the code which goes to your functions.php,

Following lines adds a meta box to your page admin and displays the categories checklist.

<pre><code class="no-highlight">/* Define the custom box */

add_action('add_meta_boxes', 'rt_postmeta_side_form');

/* SIDEBAR META FORM - Adds a box to the main column on the Post and Page edit screens */

function rt_postmeta_side_form() {

	//this will add a meta box in sidebar for "pages"

	add_meta_box('rt_postmeta_side', "Set categories for this page",

		'rt_postmeta_side_form_body', 'page', 'side', 'high');

}

/* Prints the SIDEBAR box content */

function rt_postmeta_side_form_body() {

	global $post;

	// Use nonce for verification

	wp_nonce_field(plugin_basename(__FILE__), 'rt_postmeta_side_form');

	// The actual fields for data entry

	echo '
&lt;div>';

	echo '
&lt;div>
&lt;ul>';

	wp_terms_checklist($post-&gt;ID);

	echo '&lt;/ul>
&lt;/div>
&lt;/div>
';

}</code></pre>

Here I have used wp\_terms\_checklist() function which displays the categories checklist. This is the same function used by WordPress to show categories checklist on edit post page.  
After selecting categories and saving or updating page, all the categories data will be sent to a handler function.

See the code shown below,

Here, rt\_postmeta\_side\_form\_handler() function gets called when user saves or updates page and assigns any categories to the page using wp\_set\_post_terms() function.

<pre><code class="no-highlight">/* Do something with the data entered */
add_action('save_post', 'rt_postmeta_side_form_handler');

/* For SIDEBAR metabox - When the post is saved, saves our custom data */
function rt_postmeta_side_form_handler($post_id) {

    if (!isset($_POST['rt_postmeta_side_form'])) {
        return;
    }

    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if (!wp_verify_nonce($_POST['rt_postmeta_side_form'], plugin_basename(__FILE__))) {
        return $post_id;
    }

    // verify if this is an auto save routine. If it is our form has not been submitted, so we dont want
    // to do anything
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

    // Check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        /* Assigning categories to the current */
        wp_set_post_terms($post_id, $_POST['post_category'], 'category');
    }

    // OK, we're authenticated: we need to find and save the data
    //DO NOT EDIT ANYTHING ABOVE THIS LINE (unless working on custom-post type)

    //if we are altering any $post attribute we should return it
    return $post_id;
}</code></pre>

After doing this, You can retrieve all categories using get\_the\_category() function as,

<pre><code class="no-highlight">$all_page_categories = get_the_category($page_id);</code></pre>

By looping through categories array, we can display posts from each category by doing something like following,

<pre><code class="no-highlight">foreach( $all_page_categories  as $category  ) {

	$category_posts = get_posts( array( 'numberposts' =&gt; 4,  'category' =&gt; $category-&gt;term_id ) );

	/* Display your posts by looping through $category_posts again.. */

}</code></pre>

So this is how I have displayed posts from multiple categories on the same page.

I could have done it differently that is by not assigning categories to the page and just by setting some Category Ids in the custom field. Then storing that categories array into the post meta. But I found the earlier method a lot easier than playing around with post meta.

Do drop in your comments and questions. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://cdn.devilsworkshop.org/files/2011/04/categories-on-pages-copy-new.png
