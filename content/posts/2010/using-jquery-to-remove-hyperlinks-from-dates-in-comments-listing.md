---
title: Using jQuery to Remove Hyperlinks from Dates in Comments Listing
author: prasadnevase
date: 2010-09-22
excerpt: |
  Last time while developing a theme I had to do some customizations in Comments listing. As you all know we could achieve comments listing by two ways:
     1. WordPress's default comments listing function i.e wp_list_comments()
     2. Passing a callback function to it by which you can override your comments layout.
url: /using-jquery-to-remove-hyperlinks-from-dates-in-comments-listing/
views:
  - 22
dsq_thread_id:
  - 2947114089
categories:
  - Tips
tags:
  - hyperlinks
  - jQuery
  - Wordpress
---
Well friends, last time while developing a theme I had to do some customizations in Comments listing. As you all know we could achieve comments listing by two ways:

  1. WordPress&#8217;s default comments listing function i.e wp\_list\_comments()
  2. Passing a callback function to it by which you can override your comments layout.

In my case the WordPress&#8217;s default comment listing function wp\_list\_comments() was good enough to do the job. But, at the end as per the clients requirements I had to remove the hyper link that came with comment dates ( you can see those links bellow).<figure id="attachment_815" style="width: 520px;" class="wp-caption aligncenter">

<a href="http://wpveda.com/using-jquery-to-remove-hyperlinks-from-dates-in-comments-listing/comment-list/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/using-jquery-to-remove-hyperlinks-from-dates-in-comments-listing/comment-list/', '']);" rel="attachment wp-att-815"><img class="size-large  wp-image-52229" src="http://cdn.devilsworkshop.org/files/2010/09/comment-list-520x370.png" alt="" width="520" height="370" /></a><figcaption class="wp-caption-text">Comments with hyperlinks to Comment date</figcaption></figure> 

The solution to this is to override the default comment listing mechanism by passing a callback function to wp\_list\_comments(). But for this solution I needed to write the exact markup for which I had already applied the CSS, I was finding it bit difficult and time-consuming.

## How it was resolved using jQuery!

The following code helped remove those links.

` jQuery(".commentmetadata").each(function(e){<br />
jQuery(this).text(jQuery(this).text());<br />
})<br />
`  
This is how it looked after applying jQuery.<figure id="attachment_818" style="width: 520px;" class="wp-caption aligncenter">

<a href="http://wpveda.com/using-jquery-to-remove-hyperlinks-from-dates-in-comments-listing/comment-list2/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/using-jquery-to-remove-hyperlinks-from-dates-in-comments-listing/comment-list2/', '']);" rel="attachment wp-att-818"><img class="size-large wp-image-818" src="http://cdn.devilsworkshop.org/files/2010/09/comment-list2-520x361.png" alt="" width="520" height="361" /></a><figcaption class="wp-caption-text">Comments listing after removing hyperlinks</figcaption></figure> 

Hope this helps if you come across a similar situations! If you are interested to know how you fix such things using jQuery do share with your comments. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
