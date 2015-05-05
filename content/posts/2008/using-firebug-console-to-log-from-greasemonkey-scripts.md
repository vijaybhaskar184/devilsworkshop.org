---
title: Using Firebug Console to log from GreaseMonkey Scripts
author: rahul286
date: 2008-09-17
url: /using-firebug-console-to-log-from-greasemonkey-scripts/
views:
  - 3521
dsq_thread_id:
  - 2947091969
categories:
  - Tips
tags:
  - Chrome Extensions
  - Developers
  - Firefox
  - Javascript
  - Software
  - Windows
---
<img class="linked-to-original wp-image-50783" src="http://cdn.devilsworkshop.org/files/2008/09/greasemonkey.jpg" alt="" width="151" height="134" align="right" />This is for all Greasemonkey developers who also use Firebug. Firebug is one of the best Firefox extension for developers.

To start with, almost every Greasemonkey developer uses built-in API method &#8220;GM_log()&#8221; to log debugging messages to Firefox&#8217;s javascript console.

While normal javascript developers use Firebug&#8217;s API method &#8220;console.log()&#8221; to log debugging messages to Firebug console.

Now problem is, if you try calling &#8220;console.log()&#8221; directly from Greasemonkey scripts, it will not work. As Firebug&#8217;s console object reside outside Greasemonkey scripts scope.

There are few workarounds to use Firebug console to log Greasemonkey debugging messages. But one which always work for me is detailed below.

**Simplest way is to use&#8230;**

<pre><code class="no-highlight">unsafeWindow.console.log()</code></pre>

You can use other firebug logging functions similarly by prefixing unsafeWindow to them. Complete information about <a href="http://getfirebug.com/console.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://getfirebug.com/console.html', 'Firebug console']);" >Firebug console</a> can be found <a href="http://getfirebug.com/console.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://getfirebug.com/console.html', 'here']);" >here</a>.

Next what if you are editing your older Greasemonkey script! A simple way to use text-editors search-and-replace feature and replace all occurrences of &#8220;GM_log&#8221; with &#8220;unsafeWindow.console.log&#8221;.

Well it may be nice for some but geeks way is different! I will recommend adding following lines of code at the beginning of your Greasemonkey scripts.

<pre><code class="no-highlight">if(unsafeWindow.console){
   var GM_log = unsafeWindow.console.log;
}</code></pre>

The beauty of above codes is, it will first check if Firebug console is available. If yes, then all output from GM_log will be sent to Firebug console. And when Firebug is not available, it will simply use Firefox&#8217;s built-in javascript console without any error!

Next if you want to switch back to Firefox&#8217;s built-in javascript console, you can do that by just removing or commenting above code.

**Disable logging for all GM_log calls&#8230;**

While developing Greasemonkey scripts, we use GM\_log a lot to speed-up coding. But once we are done, ideally we should remove all unnecessary GM\_log calls from script as keep Firefox or Firebug console busy.

But this may not sound good idea for some guys who code scritps for sites which changes so often. So better approach is to disable logging via GM_log by adding one line of code, as below, in the beginning of script.

<pre><code class="no-highlight">var GM_log = function (){};</code></pre>

This will basically assign an empty function to GM_log. Even smarter approach is to use code like below&#8230;

<pre><code class="no-highlight">var GM_Debug = 0;

if(!GM_Debug) {
   var GM_log = function(){};
}</code></pre>

Now all you have to change one character to enable/disable logging.

If you have noticed you are basically assigning a different function to GM_log to override it. Those who are new to javascript may find it little strange, but its perfectly valid!
