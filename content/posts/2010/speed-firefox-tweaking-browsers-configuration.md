---
title: Speed up your Firefox by tweaking your browser’s configuration
author: ankitdas123
date: 2010-12-25
url: /speed-firefox-tweaking-browsers-configuration/
views:
  - 395
categories:
  - Tips
tags:
  - Firefox
---
When it comes to browsing the Internet, Firefox is an unbeatable name. However, only a few people know that Firefox provides for certain configuration options which can enhance your browsing experience and let you speed up. Moreover, there is no need to install any add-on for speeding Firefox up.

<a rel="attachment wp-att-32947" href="http://devilsworkshop.org/sync-firefox-addons-across-multiple-pcs/firefox_browser_logo/"><img class="alignnone size-full wp-image-32947" title="Firefox_browser_logo" src="http://cdn.devilsworkshop.org/files/2010/11/Firefox_browser_logo.png" alt="" width="300" height="300" /></a>

Just follow the simple instructions as below:

  * Open a new tab in your Firefox browser window.
  * Type the url just as given – “about:config”

<img class="size-full wp-image-35205 alignnone" title="Firefox URL" src="http://cdn.devilsworkshop.org/files/2010/12/urlbar.jpg" alt="" width="661" height="28" />

  * It will display a warning to you as given below and you just need to accept that.

<img class="size-full wp-image-35206 alignnone" title="Firefox Warning" src="http://cdn.devilsworkshop.org/files/2010/12/warning_firefox.jpg" alt="" width="561" height="174" />

  * Look for the following settings and change the values.

Setting name: network.http.max-connections  
Default value: 30  
Change it to: 96

Setting name: network.http.max-connections-per-server  
Default value: 15  
Change it to: 32

Setting name: network.http.pipelining  
Default value: False  
Change it to: True

Setting name: network.http.proxy.pipelining  
Default value: False  
Change it to: True

Setting name: network.http.pipelining.maxrequests  
Default value: 4  
Change it to: any value between 4 and 8

<img title="Settings for Firefox" src="http://cdn.devilsworkshop.org/files/2010/12/settings_firefox.jpg" alt="" width="584" height="158" />

  * Restart your Firefox browser to make the changes effective.

Note: These settings are Firefox specific and do not apply to your Internet server speed.

*Drop in your comments on whether these speed tweaks really enhanced your browsing speed or not!*
