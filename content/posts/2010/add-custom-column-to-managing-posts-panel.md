---
title: Add custom column to managing posts panel
author: umeshnevase
date: 2010-08-07
excerpt: A tutorial on how to add custom columns to to the post and page overview panel without any use of plugin.
url: /add-custom-column-to-managing-posts-panel/
views:
  - 39
dsq_thread_id:
  - 2947112985
categories:
  - Tutorial
tags:
  - Developers
  - Plugins
  - Themes
  - tutor
  - Wordpress
  - Wordpress Tutorials
---
<a href="http://www.deluxeblogtips.com/search/label/WordPress?max-results=5" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.deluxeblogtips.com/search/label/WordPress?max-results=5', 'WordPress']);" >WordPress</a> wp-admin shows you a list of posts and pages with their details such as title, author, categories, tags, comments, date.

Sometimes you might want to add new customized column to this page, such as &#8216;Author Gravatar&#8217;, &#8216;Views&#8217; or &#8216;Thumbnails&#8217;. This post will demonstrate how to go about it.

Here we are going to add post author gravatar column to post management page without the need of any third-party plugin.

*We can add this column using theme or plugin. From the below image  you will get  overview what I am going to explain you.*

<a href="http://wpveda.com/add-custom-column-to-managing-posts-panel/post1/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/add-custom-column-to-managing-posts-panel/post1/', '']);" rel="attachment wp-att-680"><img class="alignnone size-large  wp-image-52238" src="http://cdn.devilsworkshop.org/files/2010/08/post1-520x128.png" alt="" width="520" height="128" /></a>

First we need to register the column which we are going to add. Register column using `"<strong>manage_posts_columns</strong>"  filter.`

<pre><code style="padding-left: 30px">add_filter( 'manage_posts_columns', 'rt_add_gravatar_col');

function rt_add_gravatar_col($cols) {

$cols['author_gravatar'] = __('Gravatar');

return $cols;

}</code></pre>

The function **&#8216;rt\_add\_gravatar_col&#8217;** takes one argument **&#8216;$cols&#8217;**. Which is an array of the default registered columns.

Now we have to add action **&#8216;manage\_pages\_custom_column&#8217;** to display new column. You can add action hook as follows:

<pre><code style="padding-left: 30px">add_action( 'manage_posts_custom_column', 'rt_get_author_gravatar');

function rt_get_author_gravatar($column_name ) {

if ( $column_name  == 'author_gravatar'  ) {

echo get_avatar( get_the_author_email(), '35' );

}

}</code></pre>

The function ** &#8216;rt\_get\_author_gravatar&#8217;** takes one argument ** &#8216;$column_name&#8217;** which is the name of the column. WordPress **get_avatar**( get\_the\_author_email(), &#8217;35&#8217; ) gives you gravatar of an author. As I used the **&#8216;get_avatar&#8217;** function code you can use any other function code.

You can use the filter `'`**manage\_pages\_columns**&#8216; for  page management and action &#8216;**manage\_pages\_custom_column**&#8216; to display the column.

Similarly for custom post types you can use** &#8216;manage\_movie\_columns&#8217;** filter and **&#8216;manage\_movie\_custom_column&#8217;** action. Here I am  used movie as custom post type.  Replace** &#8216;movie&#8217;** word  with your custom post type.

Hopefully this will help you add a custom column to the post and page overview. Do drop in your views and suggestions through your comments.
