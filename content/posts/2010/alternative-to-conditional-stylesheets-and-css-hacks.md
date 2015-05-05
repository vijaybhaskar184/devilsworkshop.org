---
title: Alternative To Conditional Stylesheets And CSS Hacks
author: huzaifadarbar
date: 2010-10-29
excerpt: Most people use CSS Stylesheets or CSS hacks for browser compatibility. Here is a way to use HTML/CSS for cross browser in a smart way. Here is a small tip about how to improve your code, that takes care of cross browser compatibility issues.
url: /alternative-to-conditional-stylesheets-and-css-hacks/
views:
  - 319
dsq_thread_id:
  - 2947114689
categories:
  - Tips
tags:
  - Birthday
  - Developers
  - HTML
---
When we  need to apply CSS for other browsers, we either create new CSS files and enclose it with conditional comments. This actually causes blocking issue, which slow downs  the site&#8217;s  loading speed for a few seconds. We might also use browser specific hacks which will create issues while getting W3C validation.

## **What happens with Conditional Stylesheets?  
**

Below I am using a typical example of using conditional stylesheets to work with various versions of Internet Explorer.

> <link rel=”stylesheet” type=”text/css” media=”screen” href=”css/style.css”/>
> 
> <!–[if IE 7]><link rel=”stylesheet” media=”screen” href=”css/ie7.css”/>
> 
> < ![endif]–>
> 
> <!–[if IE 6]><link rel=”stylesheet” media=”screen” href=”css/ie6.css”/>
> 
> < ![endif]–>

  * Conditional style-sheets will mean additional HTTP requests to download.
  * As the statement is included in the tag, rendering of the page is affected. This happens because the page has to wait until the style-sheets are loaded.
  * This can separate a single CSS rule into multiple files which should be avoided.

## **What happens when we use CSS Hacks?**

Example:

> .ClassName{ margin-right: 15px; _margin-right: 5px; float:right;}

  * CSS hacks are targeted at specific browsers but it certainly does not validate the code.
  * Use of hacks are not necessary as many time hacks and workarounds can be avoided by just coding things to work in IE from the beginning.

## Solution** **

We can make use of “Rob Larsen’s” technique which is used in <a href="http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/', 'Paul Irish’s']);" target="_blank">Paul Irish’s</a> <a href="http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/', 'boilerplate.']);" target="_blank">boilerplate.</a>

> <!&#8211;[if lt IE 7 ]> <html class=&#8221;ie6&#8243;> <![endif]&#8211;>  
> <!&#8211;[if IE 7 ]> <html class=&#8221;ie7&#8243;> <![endif]&#8211;>  
> <!&#8211;[if IE 8 ]> <html class=&#8221;ie8&#8243;> <![endif]&#8211;>  
> <!&#8211;[if IE 9 ]> <html class=&#8221;ie9&#8243;> <![endif]&#8211;>  
> <!&#8211;[if (gt IE 9)|!(IE)]><!&#8211;><html class=&#8221;&#8221;><!&#8211;<![endif]&#8211;>

  * This will fix the file blocking issue and we do not need to write any empty comment which also fixes the issue.
  * CMS platforms like WordPress and Drupal use the body class more heavily. This makes integrating there a touch simpler.
  * This technique when used will not be validated in HTML 4 but it works fine with HTML 5.

So CSS experts out there, do you find this article useful? Do drop in your views and any other alternate solutions through your comments.
