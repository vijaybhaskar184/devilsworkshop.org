---
title: WordPress Post Date in human readable format
author: saorabhkumar
date: 2010-09-27
excerpt: 'Four months ago I was not able to print my posted date in  this format "18 days ago" in WordPress. But now I able to so and thought why not share the solution through this blog.  :-)'
url: /wordpress-post-date-in-human-readable-format/
views:
  - 7
dsq_thread_id:
  - 3152526107
categories:
  - Tips
tags:
  - date
  - tips
  - Wordpress
  - Wordpress Themes
  - Wordpress Tutorials
---
Four months ago I was not able to print my posted date in  this format &#8220;**18 days ago**&#8221; in **WordPress**. But now I am able to so and thought why not share the solution through this blog.  <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

<a href="http://wpveda.com/wordpress-post-date-in-human-readable-format/humen_redable/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/wordpress-post-date-in-human-readable-format/humen_redable/', '']);" rel="attachment wp-att-644"><img class="alignnone size-full  wp-image-52493" src="http://cdn.devilsworkshop.org/files/2010/07/humen_redable.png" alt="" width="419" height="285" /></a>

Steps to convert the earlier date as shown in the above figure (22 July,2010) to 5 days ago:

  * Use the following code snippet in your **fuction.php**

<pre><code class="no-highlight">      function rt_day_ago( $type = 'post' )
                {
                 $rt_misc = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
                 return human_time_diff($rt_misc('U'), current_time('timestamp')) . " " . __('ago');
                }</code></pre>

  * Call the above function where we want to display these post pages as well as comment pages.

<?php echo rt\_day\_ago() ?>

For more information <a href="http://codex.wordpress.org/Function_Reference/human_time_diff" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Function_Reference/human_time_diff', 'click here']);" target="_blank">click here</a>.

If you know some other way also to change the post timings, feel free to share it with me through your comments.
