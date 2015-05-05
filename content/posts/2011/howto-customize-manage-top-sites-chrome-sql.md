---
title: '[Hack] How To Control Which Sites Appear on Chrome’s New Tab'
author: vibin
date: 2011-09-25
url: /howto-customize-manage-top-sites-chrome-sql/
dsq_thread_id:
  - 2954141476
categories:
  - Tips
tags:
  - Browsers
  - Chrome
  - 'Tips &amp; Hacks'
---
<a href="http://devilsworkshop.org/chrome-updates-logo-adds-html5-speech-support/chrome_new_logo-png/" rel="attachment wp-att-39005"><img class="size-full wp-image-39005 alignright" title="Chrome_new_logo.png" src="http://cdn.devilsworkshop.org/files/2011/03/Chrome_new_logo.png" alt="" width="180" height="180" /></a>If I want a site to appear on new tab page, I need to load that website repeatedly, this is hectic and I don&#8217;t want to install extensions like Speed Dial. Although, there&#8217;s an alternative way to get control over &#8216;Top Sites&#8217; in Chrome

**Related:** [[Trick] Display Custom Dials on Your Chrome’s New Tab Page][1]

Yesterday, I was playing with the user data of my Chrome profile, and suddenly I discovered something super interesting. With this hack, you can customize and control the sites that appear on new tab page.

## Let’s begin..

  * First of all, close Google Chrome, including background processes, as we’re tweaking Chrome itself.
  * Go to *C:\Users\home\AppData\Local\Google\Chrome\User Data\Default* (in Windows 7), XP and Vista paths will be a bit similar, just search for “Google” folder.
  * There you can see a file named ‘Top Sites’, that’s the file we need to tweak. This is actually a SQLite file, so you need a SQLite viewer in order to edit that file.
  * Here we’ll use a simple Firefox addon – SQLite manager for the purpose. <a href="https://addons.mozilla.org/en-US/firefox/addon/sqlite-manager/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/sqlite-manager/', 'Download and install it']);" target="_blank">Download and install it</a>.
  * Now after installing it, launch your Firefox, hit Tools (in the menu bar) > SQLite manager.
  * Now the addon will be opened in a new window, then, hit Database > Connect Database, and select the ‘Top Sites’ file which I showed you in the first.

<p style="text-align: center;">
  <a href="http://cdn.devilsworkshop.org/files/2011/09/Image-0071.png"><img class="aligncenter" style="background-image: none; padding-left: 0px; padding-right: 0px; display: inline; padding-top: 0px; border-style: initial; border-color: initial; border-width: 0px;" title="Image 007" src="http://cdn.devilsworkshop.org/files/2011/09/Image-007_thumb1.png" alt="Image 007" width="504" height="311" border="0" /></a>
</p>

  * After you have connected the database, hit Thumbnails (under Tables), which is in the left side bar.

<p style="text-align: center;">
  <a href="http://cdn.devilsworkshop.org/files/2011/09/Image-008.png"><img class="aligncenter" style="background-image: none; padding-left: 0px; padding-right: 0px; display: inline; padding-top: 0px; border-style: initial; border-color: initial; border-width: 0px;" title="Image 008" src="http://cdn.devilsworkshop.org/files/2011/09/Image-008_thumb.png" alt="Image 008" width="671" height="308" border="0" /></a>
</p>

  * And now there you’re!  You can have a glimpse of top sites in the right column, hit the *URL_Rank* tab for sites to be in order.

## Editing and Adding new ‘Top Sites’

<p style="text-align: center;">
  <a href="http://cdn.devilsworkshop.org/files/2011/09/Image-009.png"><img class="aligncenter" style="background-image: none; padding-left: 0px; padding-right: 0px; display: inline; padding-top: 0px; border-style: initial; border-color: initial; border-width: 0px;" title="Image 009" src="http://cdn.devilsworkshop.org/files/2011/09/Image-009_thumb.png" alt="Image 009" width="447" height="310" border="0" /></a>
</p>

  * To edit any site, right click on it > edit. There you can edit the site URL, rank, title and even thumbnail. Let’s have a close look at each part of it.

<p style="text-align: center;">
  <a href="http://cdn.devilsworkshop.org/files/2011/09/Image-0131.png"><img class="aligncenter" style="background-image: none; padding-left: 0px; padding-right: 0px; display: inline; padding-top: 0px; border-style: initial; border-color: initial; border-width: 0px;" title="Image 013" src="http://cdn.devilsworkshop.org/files/2011/09/Image-013_thumb1.png" alt="Image 013" width="470" height="367" border="0" /></a>
</p>

**URL:** This is obvious, to change the site, you need to change the URL.

**Rank:** Give it anything from 0 to infinity, more rank implies less probability of appearing on new tab page.

**Title:** Just add the meta title of the site.

**Thumbnail:** This is a bit painstaking, you need to get the thumbnail of the site you want to add. For this we’ll use <a href="http://www.webshotspro.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.webshotspro.com/', 'Webshots']);" target="_blank">Webshots</a>, just enter the URL of the site and you can get the thumbnail of it. That’s not all, now you need to resize the thumbnail to 212 X 132 exactly, I used MS Paint for this. In SQLite manager, you can add thumbnail by clicking on clip icon next to Thumbnail option.

  * After editing all these things, click Ok and the database will be updated accordingly.

I know, this may be a bit complex for some of you. If you weren’t able to follow this tutorial, we can help you, drop your doubts in the comments.

 [1]: http://devilsworkshop.org/trick-display-custom-dials-chromes-tab-page/
