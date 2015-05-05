---
title: jQuery Codes to Fix Facebook Share’s Zero-Count
author: rahul286
date: 2010-12-06
excerpt: |
  Facebook share count in "box_count" format shrink to 1/4 of its size if total share-count is zero.
  This small jQuery code snippets is to fix that "shrinking".
url: /jquery-codes-to-fix-facebook-shares-zero-count/
views:
  - 355
dsq_thread_id:
  - 2947115917
categories:
  - Tutorial
tags:
  - Codes
  - Developers
  - Facebook
  - Javascript
---
It&#8217;s been a long time since Facebook started providing the official share-count. Before that, the void was  filled by a third-party service called <a href="http://www.fbshare.me/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fbshare.me/', 'fbShare.me']);" >fbShare.me</a>, which is still active and works fine.

During one of my performance-optimization experiment, I found that the official Facebook share-count loads much faster. Also, being &#8220;official&#8221;, it seems a safer choice keeping the future in mind.

But when I switched to new codes, a new problem surfaced as you can see in the screenshot below&#8230;

<img class="alignnone size-full wp-image-33940" title="Facebook Share Zero-Count" src="http://cdn.devilsworkshop.org/files/2010/12/Facebook-Share-Zero-Count.jpg" alt="" width="318" height="159" />

The issue is, if Facebook share count is zero, the big share button shrinks to 1/4 of its size and hides the counter because of the surrounding buttons near it. I prefer the share-count to show even if it was zero.

I really thought that Facebook might have some parameters or setting to fix it, but after a lot of brainstorming, I finally managed to fix it using jQuery codes below:

<pre><code class="brush:js">//fix facebook share's zero-count
jQuery(document).ready(function(){
	jQuery(".fb_share_no_count .fb_share_count_inner").text("0");
	jQuery(".fb_share_no_count").removeClass("fb_share_no_count");
});</code></pre>

Of course, for the above code to work smoothly, you must have jQuery included somewhere before the above code-snippet.

Here is how it will look like after the fix&#8230;

<img class="alignnone size-full wp-image-33941" title="Facebook Share Count Fixed" src="http://cdn.devilsworkshop.org/files/2010/12/Facebook-Share-Count-Fixed.jpg" alt="" width="333" height="116" />

I hope you will find this code useful! 😉
