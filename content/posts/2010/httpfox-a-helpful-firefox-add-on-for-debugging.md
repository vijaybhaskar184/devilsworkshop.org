---
title: HttpFox – a helpful Firefox Add-on for Debugging
author: prasadnevase
date: 2010-07-26
excerpt: |
  Debugging had never been this easier like today. Different debugging tools and add-ons have really made programmers life easier. Let it be a Firebug, xDebug etc..
  
  HttpFox is one of such add on which can potentially help you to debug your code. Especially in debugging a query string.
url: /httpfox-a-helpful-firefox-add-on-for-debugging/
views:
  - 128
dsq_thread_id:
  - 2947112547
categories:
  - Reviews
tags:
  - debugging
  - Developers
  - HTML
  - HttpFox
  - Wordpress
---
Debugging had never been this easier like today. Different debugging tools and add-ons have really made programmers life easier. Let it be a Firebug, xDebug etc..

<a href="https://addons.mozilla.org/en-US/firefox/addon/6647/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/6647/', 'HttpFox']);" >HttpFox</a> is one of such add on which can potentially help you to debug your code. Especially in debugging a query string.

## What does HttpFox do?

  * Well, many times it happens that our page request goes through number of pages and gives the response in the form of web page. While programming we are passing many values as query string parametes but are not sure whether they are passed properly or not.
  * Most times these values which we sent as query string parameters gets manipulated in between and most times we end up appending values which are really not required. This certainly adds to the GET or POST overhead.
  * HttpFox will help you to know different page requests and what all pages get loaded and parameters uppended to it. To see this you just have to open HttpFox as you open firebug. But unlike firebug, HttpFox needs to be started by clicking on green button as shown in following screenshot.

[<img class="alignnone size-large  wp-image-52241" style="border: 1px solid grey" src="http://cdn.devilsworkshop.org/files/2010/07/HttpFoxStart-520x348.png" alt="" width="520" height="348" />][1]

## How to use HttpFox?

  * Once you start HttpFox, you are ready to debug.
  * Now you can click on a link which you want to debug and a result will be shown in HttpFox window *(refer screenshot)*
  * You can see query string parameters various other pages and scripts being loaded during this page request

[<img class="alignnone size-large wp-image-598" src="http://cdn.devilsworkshop.org/files/2010/07/HttpFox_running-520x142.png" alt="" width="520" height="142" />][2]

## What does HttpFox do that Firebug Cannot?

  * You may be wondering that why to use another addon, when firebug gets the job done.
  * There is a reason. Firebug though offers these facilities it becomes bulky. So for URL, Headers, Cookies etc why not have separate add-on like HttpFox?
  * That really makes sense doesn&#8217;t it? You can find more reviews <a href="https://addons.mozilla.org/en-US/firefox/reviews/display/6647?show=20&page=2" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/reviews/display/6647?show=20&page=2', 'here.']);" title="HttpFox Reviews"  target="_blank">here.</a>

## Installation

Installation is simple. Go to <a href="https://addons.mozilla.org/en-US/firefox/addon/6647/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/6647/', 'HttpFox Firefox Addon Page']);" >HttpFox Firefox Addon Page</a> and click on **&#8220;Add to Firefox&#8221;** button.

This will take some time and prompt you with &#8220;Add-on installed&#8221;. Restart Firefox browser and you are ready to go.<figure id="attachment_596" style="width: 204px;" class="wp-caption aligncenter">

<img class="size-full wp-image-596  " src="http://cdn.devilsworkshop.org/files/2010/07/HttpFox_icon.png" alt="" width="204" height="74" /><figcaption class="wp-caption-text">HttpFox icon after installation</figcaption></figure> 

## Summary

This is the basic functionality that is discussed. Beyond this HttpFox also provides other tabs like Headers, Cookie, Query String, POST Data, Content which you can further explore. So enjoy debugging! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://cdn.devilsworkshop.org/files/2010/07/HttpFoxStart.png
 [2]: http://cdn.devilsworkshop.org/files/2010/07/HttpFox_running.png
