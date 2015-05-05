---
title: How to display sticky post alongwith the other posts
author: nitunlanjewar
date: 2010-09-29
excerpt: Sticky post is a kind of post that will be displayed on your home page always. I will tell you how to include other posts also along with your sticky post and arrange them date wise.
url: /how-to-display-sticky-post-alongwith-the-other-posts/
views:
  - 6
categories:
  - Tips
tags:
  - sticky post
  - Wordpress
---
### What is a **Sticky** **post**?

Sticky posts are useful when any blogger wants that post to be shown on the front page or home page of his/her blog. Whenever you declare the post as **&#8216;sticky&#8217; **from that moment the particular post will appear on the home page of your blog forever. 😉

**How to add a sticky post?**

  * Write on the post editor
  * Go to the publish box on the right hand side
  * Under the visibility section-> Click on the Stick check box
  * Publish the post (*see image below*)

<a href="http://wpveda.com/how-to-display-sticky-post-alongwith-the-other-posts/sticky-post/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/how-to-display-sticky-post-alongwith-the-other-posts/sticky-post/', '']);" rel="attachment wp-att-938"><img class="alignnone size-medium  wp-image-50347" src="http://cdn.devilsworkshop.org/files/2010/09/sticky-post-287x300.png" alt="" width="287" height="300" /></a>

This post will always appear on the home page. If you want the post to show according to date of other published posts then you need to add the code below in your &#8220;index.php&#8221; or &#8220;home.php&#8221; (in the php file of theme which shows blog home page).

<pre><code class="no-highlight">$sticky = get_option(‘sticky_posts’);
$args=array(
‘caller_get_posts’=&gt;1,
‘showposts’=&gt;4, );// change showposts count as you want
query_posts($args);</code></pre>

It must be added before the WordPress loop. By the above code you can get all the latest published or published/sticky post by the default way as WordPress shows.

Hope this post helped you in solving the sticky post problem. If you have any other way of doing so please share it through your comments.
