---
title: Enable Right-Click On Any Website (Including Orkut)
author: rahul286
date: 2008-09-14
url: /enable-right-click-website-greasemonkey-script-bookmarklet/
views:
  - 1349
dsq_thread_id:
  - 2947091911
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Google
  - Internet
  - Javascript
  - Software
  - Wordpress
---
There are many websites which prefer to disable right-clicking on web-pages specially images. To do this they normally use one of JavaScript ways.

The most popular way is to add following code to element tag on which you want to disable right-clicking.

`oncontextmenu="return false;"`

For example, say you have code for an image like below…

`<img src=”something” />`

Change it to…

`<img src=”something” oncontextmenu="return false;"/> `

Now reason I am posting about this is, popular social networking site Orkut, which I use quite often, started using code like above and disabled right-clicking on album images.

So as usual, we got to do something to get back our right to “right-click”!

**GreaseMonkey Script:** If you use [Firefox][1] and [GreaseMonkey][2], then easiest way to enable right click on any website is to <a href="http://userscripts.org/scripts/source/33732.user.js" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userscripts.org/scripts/source/33732.user.js', 'install right to “right-click” script']);" >install right to “right-click” script</a>.

**JavaScript:** If you are not fond of GreaseMonkey, then you can try following JavaScript.

`javascript: var items = document.evaluate('//*[@oncontextmenu=\"return false;\"]', document, null, 7 , null); for ( i = 0; i < items.snapshotLength; i++){items.snapshotItem(i).removeAttribute('oncontextmenu');};void(0);`

**Bookmarklet:** You can also [use this bookmarklet][3] in Firefox and other standard-compliant browser.

**Internet Explorer:** If you are an IE user, specially IE 6 then paste following code in address bar and hit enter whenever you stuck. Please **note code below is for Orkut only** and most likely to break anytime.  
`javascript: document.getElementById('m').oncontextmenu="";void(0);`

### Important Note:

From above all solutions, I am planning to take <a href="http://userscripts.org/scripts/source/33732.user.js" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userscripts.org/scripts/source/33732.user.js', 'GreaseMonkey solution']);" >GreaseMonkey solution</a> further. I will add more anti right-clicks hacks soon. As of now this script takes care of most famous way so it should work on many sites.

We can not blindly set &#8220;oncontextmenu&#8221; attribute to null or &#8220;return true&#8221; as some sites provides useful functions by overriding browser context-menu. WordPress, Google docs are some popular examples.

If you find a site where right-click is disabled and this script is failing to work,  please leave a comment below with page URL and element description where it failed to work. I will try to update this script ASAP.

**Link:** <a href="http://userscripts.org/scripts/source/33732.user.js" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userscripts.org/scripts/source/33732.user.js', 'Install Right to “Right-Click” Script']);" >Install Right to “Right-Click” Script</a> *([How][2]?)*

**Related: **[JavaScript to Unmask Password on Web Pages][4]

 [1]: http://devilsworkshop.org/firefox/
 [2]: http://devilsworkshop.org/firefox/greasemonkey/
 [3]: javascript: var items = document.evaluate('//*[@oncontextmenu=\"return false;\"]', document, null, 7 , null); for ( i = 0; i < items.snapshotLength; i++){items.snapshotItem(i).removeAttribute('oncontextmenu');};void(0);
 [4]: http://devilsworkshop.org/javascript-to-unmask-password-on-web-pages/
