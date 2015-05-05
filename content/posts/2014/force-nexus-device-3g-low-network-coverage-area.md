---
title: Force your Nexus device to use 3G in low network coverage area
author: vibin
date: 2014-01-17
excerpt: "Here's a simple way to force your Nexus device to use 3G (instead of EDGE) even if network coverage is low."
url: /force-nexus-device-3g-low-network-coverage-area/
dsq_thread_id:
  - 2947128012
categories:
  - Tips
tags:
  - Android
  - Nexus
---
One of the most irritating things about Nexus devices is how they don&#8217;t stick to the network you choose. Say you&#8217;ve got 3G data to use and network coverage is weak, your device will quickly switch back to EDGE (or whatever has good coverage).

Funny thing is, AOSP has built-in feature to &#8216;force&#8217; an Android device to use a network (even if coverage is nil) &#8211; but it is kind of hidden. Read on.

[<img class="aligncenter size-medium wp-image-79332" alt="Screenshot_2014-01-17-11-20-50" src="http://cdn.devilsworkshop.org/files/2014/01/Screenshot_2014-01-17-11-20-50-337x600.png" width="337" height="600" />][1]

To access the feature, open Phone/Dialer app, type **\*#\*#4636#\*#\***. Tap on Phone information. Scroll down and you&#8217;ll find a drop down menu where you can choose between different network modes. Choose &#8216;WCDMA only&#8217;.

That&#8217;s all. Now your device will stick to 3G regardless of network coverage.

If you want a quicker way to access the setting, then get this little app called &#8216;<a href="https://play.google.com/store/apps/details?id=de.mangelow.network" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=de.mangelow.network', 'Network&#8217;']);" >Network&#8217;</a>. It&#8217;ll directly launch the Phone information page and you can then change the network mode.

 [1]: http://cdn.devilsworkshop.org/files/2014/01/Screenshot_2014-01-17-11-20-50.png
