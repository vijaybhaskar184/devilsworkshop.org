---
title: JavaScript/jQuery Snippet to check if a function exists
author: rahul286
date: 2010-06-21
url: /javascriptjquery-snippet-to-check-if-a-function-exists/
views:
  - 122
dsq_thread_id:
  - 2947111573
categories:
  - Tips
tags:
  - Developers
  - Javascript
  - jQuery
  - Snippets
  - Wordpress
---
I am working on a very complex wordpress theme from last few weeks and on the way learning many new things.

To keep load time of this new theme in check, I am using many &#8216;if&#8217; statements in **header.php** to control which javascript library/jquery plugin loads on which page. So before making JavaScript/jQuery function calls, it became essential for me to check if function exists in current environment.

Following are code snippets I am using frequently in this case&#8230;

### JavaScript codes to check if function exists

<pre><code class="no-highlight">if(typeof window.rtFunction == 'function') {
	// function exists, so we can now call it
	rtFunction();
}</code></pre>

**Example:** Calling md5 function

<pre><code class="no-highlight">if(typeof window.md5 == 'function') {
	// function exists, so we can now call it
	md5(286);
}</code></pre>

### jQuery codes to check if function exists

<pre><code class="no-highlight">if( jQuery.isFunction(jQuery.fn.rtFunction) ){
	// function exists, so we can now call it
	jQuery(document).rtFunction();
}</code></pre>

**Example: **Say if you are using jQuery tabs plugin&#8230;****

<pre><code class="no-highlight">if( jQuery.isFunction(jQuery.fn.tabs) ){
	// function exists, so we can now call it
	jQuery('#tabs').tabs();
}</code></pre>

These two functions turned out to be life saver for me.

Thanks <a href="http://thingsilearn.wordpress.com/2007/03/20/javascript-checking-if-a-function-exists/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://thingsilearn.wordpress.com/2007/03/20/javascript-checking-if-a-function-exists/', 'Paul']);" >Paul</a> for javascript codes and <a href="http://forum.jquery.com/user/besh.jquery" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://forum.jquery.com/user/besh.jquery', 'besh.jquery']);" >besh.jquery</a> for <a href="http://forum.jquery.com/topic/jquery-checking-whether-a-jquery-function-exists" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://forum.jquery.com/topic/jquery-checking-whether-a-jquery-function-exists', 'jQuery codes']);" >jQuery codes</a>.

I have found many more ways to optimize wordpress themes while working on this theme. I will surely post them starting next week, once we launch this new theme! 😉
