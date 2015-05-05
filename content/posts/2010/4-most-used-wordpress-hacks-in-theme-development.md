---
title: 4 Most Used WordPress Hacks In Theme Development
author: smashingeeks
date: 2010-05-31
url: /4-most-used-wordpress-hacks-in-theme-development/
views:
  - 14
categories:
  - Tips
tags:
  - Wordpress
  - Wordpress Theme Development
  - Wordpress Themes
---
WordPress, is the most used and preferred blogging platform on the web. As obeserved on WordPress.com, there are over 22 million WordPress publishers as of February 2010: 10.6 million blogs hosted on WordPress.com plus 11.4 million active installations of the WordPress.org software. So, bloggers using WordPress must know WordPress from Top to Deep in order to have a unique blog.

There are many sites which constantly publishes Free and Premium WordPress Theme like WooThemes, Elegant Themes etc. and what the most used coding in theme development is our new collection. Below are some most used hacks we gathered for making WordPress Themes.

## Reduce Excerpt Length

WordPress, comes with a nice feature of adding <&#8211;more&#8211;> tag in the desired place. But if you want to manually select the words after which the more tag appears, then you can use the code.

<pre><code class="no-highlight">function new_excerpt_length($length) {	&lt;strong>return 40;&lt;/strong>}add_filter('excerpt_length', 'new_excerpt_length');</code></pre>

The code is simple to understand, it returns 40, that is you can get your pagebreak after 40 words. You can change it according to you.

## Turn Category ID into Name

This code just inputs a category ID and turns it into name.

<pre><code class="no-highlight">/* Turn a category ID to a Name */
function cat_id_to_name($id) {foreach((array)(get_categories()) as $category) {if ($id == $category-&gt;cat_ID) { return $category-&gt;cat_name; break; }}}</code></pre>

## Get Attached Image

If you want to fetch thumbnails from the Image attached to the post, then this code may help you.

<pre><code class="no-highlight">/* Get image attachment (sizes: thumbnail, medium, full) */function get_thumbnail($postid=0, $size='full') { if ($postid&lt;1) $postid = get_the_ID(); $thumb = get_post_meta($postid, "thumb", TRUE); // Declare the custom field for the image if ($thumb != null or $thumb != '') { echo $thumb; } elseif ($images = get_children(array( 'post_parent' =&gt; $postid, 'post_type' =&gt; 'attachment', 'numberposts' =&gt; '1', 'post_mime_type' =&gt; 'image', ))) foreach($images as $image) { $thumbnail=wp_get_attachment_image_src($image-&gt;ID, $size); ?&gt;</code></pre>

This piece of code can be seen in many WordPress Theme, which allows you to have your post thumbnails from Custom Fields or Image Attached to the post.

## Get Posts from Specific Category

The best way to enhance your homepage is to show posts from specific category. You can use the below code to get recently published posts from the desired category.

<pre><code class="no-highlight">function homepage_display_category_posts(){ if (is_home() || is_front_page()) { ?&gt; &lt;div id="cat"&gt; &lt;h2&gt;Recent From Tutorials&lt;/h2&gt;&lt;br&gt; &lt;?php $my_query = new WP_Query('&lt;strong>category_name=tutorials&showposts=5&lt;/strong>'); while ($my_query-&gt;have_posts()) : $my_query-&gt;the_post(); $do_not_duplicate = $post-&gt;ID; ?&gt; &lt;ul&gt;&lt;li&gt;&lt;a href="&lt;?php the_permalink() ?&gt;" rel="bookmark" title="&lt;?php the_title(); ?&gt;"&gt;&lt;?php the_title(); ?&gt;&lt;/a&gt;&lt;/li&gt;&lt;/u&gt; &lt;?php endwhile; ?&gt; &lt;/div&gt; &lt;?php } } </code></pre>

You can configure the code by just changing the value of category_name by replacing ***tutorials** *by your category slug*. *You can also change the number of posts to show by changing the number from 5 to your desired one.
