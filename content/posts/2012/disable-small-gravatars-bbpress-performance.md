---
title: Disable small gravatars in bbPress for better performance
author: joshuaabenazer
date: 2012-08-17
url: /disable-small-gravatars-bbpress-performance/
dsq_thread_id:
  - 3015764019
categories:
  - Tutorial
tags:
  - bbPress
  - gravatar
  - Wordpress
---
If you are using bbPress for your forums you would notice a lot of tiny gravatars alongside each author name ( unless you are using a custom bbPress theme ). These images are 14&#215;14 in dimension, and depending on the no. of forums/topics you are displaying in a single page you could end up sending a lot of tiny requests for each image. This could effect the performance and load time of your page.

You can apply the following filters to remove the images and just display the name of the user.

<pre><code class="no-highlight">
function rtp_remove_bbp_author_gravatar( ) {
    return null;
}

function rtp_remove_bbp_gravatar( $author_link, $args ) {
    return preg_replace('/&lt;a.*&lt;img.*>&nbsp;/iU', '', $author_link );
}

function rtp_remove_bbp_remove_author_gravatar_link( $author_link, $args ) {
    return preg_replace('/&lt;a.*>&lt;\/a>/iU', '', $author_link );
}

add_filter( 'bbp_get_author_link', 'rtp_remove_bbp_gravatar', '', 2 );
add_filter( 'bbp_get_topic_author_display_name', 'rtp_remove_bbp_gravatar', '', 2 );
add_filter( 'bbp_get_reply_author_link', 'rtp_remove_bbp_gravatar', '', 2 );
add_filter( 'bbp_get_topic_author_avatar', 'rtp_remove_bbp_author_gravatar' );
add_filter( 'bbp_get_topic_author_link', 'rtp_remove_bbp_remove_author_gravatar_link', '', 2 );
</code></pre>
