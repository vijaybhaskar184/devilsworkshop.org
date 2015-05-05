---
title: How to Enable Multiple Site Network Option in WordPress 3.0
author: denharsh
date: 2010-06-18
url: /how-to-enable-multiple-site-network-option-in-wordpress-3-0/
views:
  - 198
dsq_thread_id:
  - 2947111206
categories:
  - Tips
tags:
  - Wordpress
  - Wordpress 3.0
  - Wordpress 3.0 Features
  - Wordpress multi site
  - Wordpress Network
  - Wordpress Tutorials
---
We have been talking about <a href="http://wpveda.com/tag/wordpress-3-0/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/tag/wordpress-3-0/', 'WordPress 3.0']);" >WordPress 3.0</a> from long and one of the killer feature of Worpress 3.0 is empowering users to run multiple Websites from one blog. In WordPress 3.0 we have super admin and many more thing which we will keep discussing in coming posts.

In this post I will guide you on how you can enable the Network settings option to enable multi-site option in WordPress 3.0.

The process is simple and to get started with, open your WordPress installation directory via FTP and open wp-config file and add

<pre><code class="no-highlight">define(&lt;span class="str">'WP_ALLOW_MULTISITE'&lt;/span>, &lt;span class="kwrd">true&lt;/span>);</code></pre>

<!--.csharpcode, .csharpcode pre { 	font-size: small; 	color: black; 	font-family: consolas, "Courier New", courier, monospace; 	background-color: #ffffff; 	/*white-space: pre;*/ } .csharpcode pre { margin: 0em; } .csharpcode .rem { color: #008000; } .csharpcode .kwrd { color: #0000ff; } .csharpcode .str { color: #006080; } .csharpcode .op { color: #0000c0; } .csharpcode .preproc { color: #cc6633; } .csharpcode .asp { background-color: #ffff00; } .csharpcode .html { color: #800000; } .csharpcode .attr { color: #ff0000; } .csharpcode .alt  { 	background-color: #f4f4f4; 	width: 100%; 	margin: 0em; } .csharpcode .lnum { color: #606060; } -->

Once you have added it, refresh your dashboard and  go to Network settings under Tools section.

[<img class="wp-image-51804" style="float: none;margin-left: auto;margin-right: auto;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/networkmultiplesitewordpresswarning_thumb.png" border="0" alt="network-multiple-site-wordpress-warning" width="504" height="152" />][1]

At first you will see this warning message and to  get rid of this, you need to disable all your WordPress plugin at once and after that you will see page like this:

[<img style="float: none;margin: 10px auto 0px;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/networkmultiplesitewordpress_thumb.png" border="0" alt="network-multiple-site-wordpress" width="504" height="335" />][2]

Is isn&#8217;t it simple?. This is a quick post to show you how you can enable multi-site option in WordPress 3.0. We will be coming up with more detailed post on merging blogs  into one blog and more WordPress 3.0 tutorial. To keep you updated with latest post, don’t forget to subscribe to <a href="http://feeds.wpveda.com/wpveda" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://feeds.wpveda.com/wpveda', 'our Feeds']);" target="_blank">our Feeds</a> and twitter  <a href="http://twitter.com/wpveda" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://twitter.com/wpveda', '@wpveda']);" target="_blank">@wpveda</a>.

 [1]: http://cdn.devilsworkshop.org/files/2010/06/networkmultiplesitewordpresswarning.png
 [2]: http://cdn.devilsworkshop.org/files/2010/06/networkmultiplesitewordpress.png
