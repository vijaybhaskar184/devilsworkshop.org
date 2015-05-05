---
title: Clean Facebook Share API Cache Using URL Linter
author: rahul286
date: 2010-12-23
url: /clean-facebook-share-api-cache-url-linter/
views:
  - 1390
dsq_thread_id:
  - 2947116433
categories:
  - Tips
tags:
  - Bloggers
  - Cache
  - Cleanup
  - Facebook
  - Share APi
  - Tools
  - URL Linter
---
When was last time you have noticed that &#8220;facebook share&#8221; button on your post picking up wrong image or title or description? In an attempt to fix it, you might have edited your post and published changes to just notice that &#8220;facebook share&#8221; button is not displaying changes you have made.

[<img class="alignnone size-large  wp-image-50994" src="http://cdn.devilsworkshop.org/files/2010/12/Facebook-Share-API-Picking-Up-Wrong-Image-and-Description-600x346.png" alt="" width="600" height="346" />][1]

This happens because facebook like most high traffic site uses caching to reduce load on their server. So when you make a mistake it gets cached for a day (just a wild guess, it&#8217;s not documented anywhere as how much time facebook caches information from your page)

There are some stupid solutions on the web which tells you to change permalink or add some parameter to your URL. Well this flushes cache but also reset share/like count to zero.

### The best solution &#8211; Facebook URL Linter

Facebook provides a tool called <a href="http://developers.facebook.com/tools/lint/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://developers.facebook.com/tools/lint/', 'URL Linter']);" >URL Linter</a> which can immediately flush its share cache without affecting share/like count.

This tool is actually developed for developers working on facebook platform. This tool helps developers see how a URL will look like in facebook share pop-up.

If you are a geek, apart from cleaning up cache for your post, you can use this tool to further analyze how facebook looks at your site.

**Link:** <a href="http://developers.facebook.com/tools/lint/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://developers.facebook.com/tools/lint/', 'Facebook URL Linter']);" >Facebook URL Linter</a>

 [1]: http://cdn.devilsworkshop.org/files/2010/12/Facebook-Share-API-Picking-Up-Wrong-Image-and-Description.png
