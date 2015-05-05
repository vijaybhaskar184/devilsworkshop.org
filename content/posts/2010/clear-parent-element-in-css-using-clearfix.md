---
title: Clear Parent Element In CSS Using Clearfix
author: huzaifadarbar
date: 2010-11-09
excerpt: 'Overflow:hidden becomes undesirable to use at absolute positioned element it cuts off the element. So we can make use of clearfix technique. Clear element without structural markup. '
url: /clear-parent-element-in-css-using-clearfix/
views:
  - 362
dsq_thread_id:
  - 2947115008
categories:
  - Tips
tags:
  - Birthday
  - Developers
  - HTML
  - web design
---
Overflow:hidden is very popular method to clear floats without adding extra markup. I always use overflow:hidden but it becomes undesirable in few circumstances where I place absolute positioned element it cuts off the element. So we can make use of different methods.

I have explained it with two different examples below how we can clear the parent element.

A parent div with child element which has float property affects the parent div or makes it disappear.

## General

<pre><code class="no-highlight">&lt;div class="parent"&gt;
&lt;div class="child"&gt;child 1&lt;/div&gt;
&lt;div class="child"&gt;child 2&lt;/div&gt;
&lt;div class="child"&gt;child 3&lt;/div&gt;
&lt;div class="child"&gt;child 4&lt;/div&gt;
&lt;/div&gt;

&lt;!---------------------------------------------&gt;

.parent {   width: 416px;   padding: 20px ;  background-color: tan;   }
.child  {   width: 200px;   height: 100px;   float: left; border: 1px solid #000;   margin:2px;   background-color: green   }
.clear  {   clear:both   }</code></pre>

As you can see in the below image what happens when the child element has float property.

[<img class="wp-image-53928" style="border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/11/clear1_thumb.png" border="0" alt="clear1" width="456" height="230" />][1]

I have  added an extra div at the end this it will clear the float and solves the issue but in the next example I will show you how to clear it without including extra markup.

## Method 1

<pre><code class="no-highlight">&lt;div class="parent"&gt;
&lt;div class="child"&gt;child 1&lt;/div&gt;
&lt;div class="child"&gt;child 2&lt;/div&gt;
&lt;div class="child"&gt;child 3&lt;/div&gt;
&lt;div class="child"&gt;child 4&lt;/div&gt;

&lt;div class=”clear”&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

After clearing the float it results in something like this.

[<img style="border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/11/clera2_thumb.png" border="0" alt="clera2" width="456" height="252" />][2]

Now I am adding a class to a parent element which forces its children to self clear, in this technique we do not have to create extra markup. Both technique results in same but I found using <a href="http://www.yuiblog.com/blog/2010/09/27/clearfix-reloaded-overflowhidden-demystified/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.yuiblog.com/blog/2010/09/27/clearfix-reloaded-overflowhidden-demystified/', 'clearfix']);" >clearfix</a> better as it is also implemented in <a href="http://html5boilerplate.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://html5boilerplate.com/', 'HTML5 Boilerplate']);" >HTML5 Boilerplate</a>.

## Method 2

<pre><code class="no-highlight">&lt;div class="parent clearfix"&gt;
&lt;div class="child"&gt;child 1 &lt;/div&gt;
&lt;div class="child"&gt;child 2 &lt;/div&gt;
&lt;div class="child"&gt;child 3 &lt;/div&gt;
&lt;div class="chlid"&gt;child 4 &lt;/div&gt;
&lt;/div&gt;
&lt;!--------------------------------------------&gt;

.clearfix:before,
.clearfix:after {
content: ".";
display: block;
height: 0;
overflow: hidden;
}
.clearfix:after {clear: both;}
.clearfix {zoom: 1;} /* IE &lt; 8 */</code></pre>

That concludes two methods to clear parent element,  one uses extra markup and the other method saves the extra structural markup. Thanks to <a href="http://www.yuiblog.com/blog/2010/09/27/clearfix-reloaded-overflowhidden-demystified/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.yuiblog.com/blog/2010/09/27/clearfix-reloaded-overflowhidden-demystified/', 'Thierry Koblentz']);" >Thierry Koblentz</a> for Clearfix Realoded.

**  
**

 [1]: http://cdn.devilsworkshop.org/files/2010/11/clear1.png
 [2]: http://cdn.devilsworkshop.org/files/2010/11/clera2.png
