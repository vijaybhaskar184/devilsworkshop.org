---
title: Speed up your Blog by Tweaking Google Analytic code
author: suhastech
date: 2010-01-15
url: /speed-up-your-blog-by-tweaking-google-analytic-code/
views:
  - 41
categories:
  - Tips
tags:
  - Google
---
Loading speed of a website can be very vital to the visitor experience. Many of you might have observed that Google analytics code can slow your website down. Basically the problem is, your browser waits for the tracking code to be downloaded and **then** starts loading your website. This can slow down your website drastically. With this new Google analytic Asynchronous code you can stop this delay.

Follow these easy steps to tweak your blog analytic code :

1) Open your Google Analytics Account. Scroll to the website you want to analyse. You can find an account number of the form *UA-XXXXX-X*.

[<img class="wp-image-52977" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/01/UA_thumb.png" border="0" alt="UA" width="471" height="105" />][1]

2) Insert this code, after the <body> tag. Make sure you replace UA-XXXXX-X.

> <pre><code class="no-highlight">&lt;script type="text/javascript"&gt;

  var _gaq = _gaq || [];  _gaq.push(['_setAccount', '&lt;strong>UA-XXXXX-X&lt;/strong>']);  _gaq.push(['_trackPageview']);

  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);  })();

&lt;/script&gt;</code></pre>

<a href="http://code.google.com/apis/analytics/docs/tracking/asyncTracking.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/analytics/docs/tracking/asyncTracking.html', 'source']);" target="_blank">source</a>

***Meanwhile do let us know tweaks you use to speed up your blog?***

 [1]: http://cdn.devilsworkshop.org/files/2010/01/UA.png
