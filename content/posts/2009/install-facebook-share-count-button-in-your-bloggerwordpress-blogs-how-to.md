---
title: 'Install Facebook ‘Share Count Button’ in your blogger/wordpress blogs [How-to]'
author: sauravjit
date: 2009-10-10
url: /install-facebook-share-count-button-in-your-bloggerwordpress-blogs-how-to/
robotsmeta:
  - index,follow
views:
  - 857
dsq_thread_id:
  - 2947103002
categories:
  - Tips
tags:
  - blogger facebook widget
  - Facebook
  - facebook widgets
  - share on facebook
  - Tutorials
  - wordpress facebook plugin
---
Few days back you read about <a title="Link to Add “Share on facebook” button to your blog/website" rel="bookmark" href="http://devilsworkshop.org/2009/10/03/add-share-on-facebook-button-to-your-blogwebsite/">Add “Share on facebook” button to your blog/website</a> with which you can install a Facebook &#8216;Share&#8217; button in your blog or website. That was a good way of using &#8216;Share&#8217; button with an option of four different buttons/links.

But today I am writing about how to install a Facebook &#8216;Share Count Button&#8217; in your blogger or wordpress blog which is just similar to &#8216;Share&#8217; button with an inbuilt counter too which counts the number of time that particular post is shared on Facebook.

This button is just similar to <a href="http://devilsworkshop.org/add-tweetmeme-retweet-button-in-your-blogger-blog/" target="_self">Tweetmeme button</a> for Twitter, but when any particular post isn&#8217;t shared at all on Facebook, it shows a Facebook logo rather than a zero.

### Blogger Installation:

  * Go to Dashboard>>Layout>>Edit HTML, check &#8216;Expand Widget Templates&#8217;

  * Now find the code

<data:post.body/>  
(use the default one if you are using page navigation hack)

  * Copy the code given below:

<div style=&#8217;float:right; margin-left:10px;&#8217;>  
<script>var fbShare = {  
size: &#8216;large&#8217;,  
google_analytics: &#8216;true&#8217;  
}</script>  
<script src=&#8221;http://widgets.fbshare.me/files/fbshare.js&#8221;></script>  
</div>

  * Now paste the above code after <data:post.body/> if you want to show the button after the body of the post, else use it before <data:post.body/>
  * Save the template and see the changes in your blog.

<img class="aligncenter size-full  wp-image-54137" src="http://cdn.devilsworkshop.org/files/fb-count.jpg" alt="fb count" width="496" height="159" />

Customization:

  * You can use the size &#8216;small&#8217; in place of &#8216;large&#8217; in the above code.
  * You may edit float or margin in the above code.

### WordPress installation:

To use this button on your wordpress blog just download the WordPress plugin for Facebook &#8216;Share Count Button&#8217; <a href="http://widgets.fbshare.me/plugins/wordpress/facebook-sharecount.zip" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://widgets.fbshare.me/plugins/wordpress/facebook-sharecount.zip', 'here(by fbshare.me)']);" target="_self">here(by fbshare.me)</a>.

**SOURCE: **<a href="http://www.fbshare.me/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fbshare.me/', 'fbshare']);" target="_self">fbshare</a>
