---
title: CSS Trick – Best Way To Preload An Image Without Using Javascript
author: huzaifadarbar
date: 2010-12-20
excerpt: You might have been observed on many web pages, when you mouse over on any image it disappears for 2-3 seconds and when you mouse over next time it works well, why it happens? The answer is simple the image which is on hover class is not been loaded yet, as a result when you mouse over first time it takes time to load but when you mouse over next time it
url: /css-trick-preload-image/
views:
  - 315
dsq_thread_id:
  - 2947116224
categories:
  - Tutorial
tags:
  - Birthday
  - 'Tips &amp; Hacks'
---
[<img class="alignright size-full wp-image-32595" title="css-stamp" src="http://cdn.devilsworkshop.org/files/2010/11/css-stamp.png" alt="" width="188" height="188" />][1]You might have been observed on many web pages, when you mouse over on any image it disappears for 2-3 seconds and when you mouse over next time it works well, why it happens?

The answer is simple the image which is on hover class is not been loaded yet, as a result when you mouse over first time it takes time to load but when you mouse over next time it behaves normal because the image has been loaded to your computer and ready for the next time. Below you can see how various techniques are used to preload an image.

## How to Preload an Image?

There are various techniques to preload an image, two methods are mentioned below without using javascript.

### Method  1

In this method we create a div and keep it at the end of the HTML document or after footer div, a class is assign to a div say **preloadClass** which hides the image** **using **display:none** property but the images are loaded at the end of the document so when you hover an image it will not flash for the first time.

<pre><code class="brush:xml">&lt;div class="preloadClass"&gt;
     &lt;img src="images/hover-image1.png&gt;
     &lt;img src="images/hover-image2.png /&gt;
     &lt;img src="images/hover-image3.png/&gt;
&lt;/div&gt;</code></pre>

<pre><code class="brush:css">.preloadClass{ display:none; }

.Demo:hover {  background-image:url(hover-image1.png);  }</code></pre>

### Method  2

In this method we call the image from the stylesheet and set its position to –1000px to shift away the image so that it disappears from the page.

<pre><code class="brush:xml">.preloadClass {
    background-image:url(hover-image.png);
    background-position: -1000px -1000px;
}

.Demo:hover { background: url(hover-image.png) no-repeat 50% 50%;}</code></pre>

I think adding extra markup to preload an image is not a good approach, especially where Web Standards are concerned. Mobile devices, may experience problems when dealing with the following preloading technique. So to avoid this we can implement Method 2.

The best solution is to use a sprite image, you just have to change the background position on hover class and you are done.

The above all technique is tested and compatible with all browsers.

CSS expert out there, do you have a better idea or solution please share it through your comments.

 [1]: http://cdn.devilsworkshop.org/files/2010/11/css-stamp.png
