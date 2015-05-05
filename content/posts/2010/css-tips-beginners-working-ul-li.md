---
title: 'Useful CSS Tip for Beginners – Set Internal Spacing For <ul> <li>'
author: huzaifadarbar
date: 2010-12-17
excerpt: 'For &lt;ul&gt; &lt;li&gt; we need to adjust spacing between the bullet and the text. So I write CSS for ul li but when I want to edit those properties, it’s a bit confusing which property is being used and where. In order to explain  this I have a small demonstration using below image that will help you understand CSS properties used in the following example.'
url: /css-tips-beginners-working-ul-li/
views:
  - 186
dsq_thread_id:
  - 2947116062
categories:
  - Tutorial
tags:
  - Birthday
  - List
  - 'Tips &amp; Hacks'
  - web design
---
[<img class="alignright size-full wp-image-32595" title="css-stamp" src="http://cdn.devilsworkshop.org/files/2010/11/css-stamp.png" alt="" width="188" height="188" />][1]For <ul><li>we need to adjust spacing between the bullet and the text. So I write CSS for ul li but when I want to edit those properties, it’s a bit confusing which property is being used and where. In order to explain  this I have a small demonstration using below image that will help you understand CSS properties used in the following example.

[<img style="background-image: none; padding-left: 0px; padding-right: 0px; display: inline; padding-top: 0px; border: 0pt none;" title="CSS-ul li bullet" src="http://cdn.devilsworkshop.org/files/2010/12/image_thumb.png" border="0" alt="CSS-ul li bullet" width="244" height="163" />][2]

**A** : Distance between text and the bullet i.e. padding-left for li.

**B** : Bottom distance between two li items i.e. margin-bottom for li.

**C, D **: Vertical and Horizontal position of a bullet i.e. background-position: x y.

**E** : margin-left of ul.

### HTML Code

> <ul>  
> <li>Home</li>  
> <li>Portfolio</li>  
> <li>Contact Us</li>  
> <li>About Us</li>  
> </ul>

### CSS Code

> ul {  
> margin-left: 20px;                                    /\*  E \*/  
> padding-left: 0px;  
> list-style:none;  
> }
> 
> li {  
> padding-left: 30px;                               /\*  A \*/  
> margin-bottom: 10px;                           /\*  B\*/  
> background:url(bullet.png) no-repeat 2px 8px;       /\*  C,D  \*/  
> }

Do drop in your views

 [1]: http://cdn.devilsworkshop.org/files/2010/11/css-stamp.png
 [2]: http://cdn.devilsworkshop.org/files/2010/12/image.png
