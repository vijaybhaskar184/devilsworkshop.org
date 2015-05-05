---
title: Chrome beta includes Opera-like data compression feature
author: vibin
date: 2013-03-06
excerpt: Google tries a experimental data compression feature in Chrome beta on Android, which works using its SPDY protocol. You can enable and try the feature right now.
url: /chrome-beta-includes-operalike-data-compression-feature/
dsq_thread_id:
  - 3200958584
categories:
  - Tips
tags:
  - Android
  - Chrome
---
Opera used to be very popular on mobile devices a year ago, but with Google releasing Chrome for Android and majority of Android users catching up with Android 4.0, Opera mobile is no longer as popular.

Opera&#8217;s both desktop and mobile clients (where it actually became popular) have data compression built-in, which essentially compresses website data before loading on your device and hence saving you data charges. Now, Google is testing the same kind of feature with Chrome beta.

[<img class="aligncenter size-medium wp-image-72011" alt="spdy-data-compression-chrome-beta" src="http://cdn.devilsworkshop.org/files/2013/03/SPDY-600x262.png" width="600" height="262" />][1]

The feature can be enabled in [Chrome beta][2] (which is a bleeding-edge version of Chrome for Android). To enable it, just go to chrome://flags, tap on Enable, below data compression proxy feature. Relaunch the browser for it to take effect.

Technically, if the feature is on, the user (when requests a website) will be routed to SPDY (pronounced as &#8216;speedy&#8217;) proxy which compresses and minifies HTML/CSS/image files and thus results in saving of data. This applies only for webpages which are not on a HTTPS connection.

I&#8217;ve tried the feature (it works both on Wi-Fi and cellular networks) and it does seem like it saves good amount of data. You can check the statistics directly through Chrome by visiting chrome://net-internals/#bandwidth.

[<img class="aligncenter size-medium wp-image-72012" alt="data-saving-compression" src="http://cdn.devilsworkshop.org/files/2013/03/Screenshot_2013-03-06-18-47-07-337x600.png" width="337" height="600" />][3]

Meanwhile, <a href="https://play.google.com/store/apps/details?id=com.opera.browser.beta" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.opera.browser.beta', 'Opera has lately released a webkit version']);" >Opera has lately released a webkit version</a> of their browser for Android and it too has this feature. This is after [Opera switching to Webkit][4] as their engine, leaving out Presto.

**Link:** <a href="https://play.google.com/store/apps/details?id=com.chrome.beta" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.chrome.beta', 'Chrome Beta']);" >Chrome Beta</a>

 [1]: http://cdn.devilsworkshop.org/files/2013/03/SPDY.png
 [2]: http://devilsworkshop.org/news/google-releases-beta-channel-chrome-android/70404/
 [3]: http://cdn.devilsworkshop.org/files/2013/03/Screenshot_2013-03-06-18-47-07.png
 [4]: http://devilsworkshop.org/news/opera-embraces-webkit-chromium/71447/
