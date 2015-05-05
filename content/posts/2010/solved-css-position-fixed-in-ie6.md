---
title: '[Solved] CSS Position fixed in IE6'
author: saorabhkumar
date: 2010-10-06
excerpt: 'When it comes to Internet Explorer most times we use the css property  position:fixed. This works fine most times but does not work in IE6. I have often faced this issues as a developer and finally I figured a way out based on some of my past experience with web-designing.'
url: /solved-css-position-fixed-in-ie6/
views:
  - 18
categories:
  - Tutorial
tags:
  - CSS
  - IE6
  - Wordpress
---
When it comes to Internet Explorer most times we use the **css property** position:fixed. This works fine most times but does not work in IE6. I have often faced this issues as a developer and finally I figured a way out based on some of my experience with web-designing.

### I use the steps below to solve the CSS position:fixed issue

  * Create a IE6.css file
  * Include this css file in head
  * Write the following line of code and it will work. 😉

<pre><code class="no-highlight">#body-background {
/**/position: absolute;
top: expression((0 + (ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop)) + 'px');
right: expression((20 + (ignoreMe2 = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft)) + 'px');
/**/ }</code></pre>

I find this a very practical solution. Do you know of any better ones? Do share them through your comments.
