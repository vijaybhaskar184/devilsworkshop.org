---
title: Enabling CURL on Windows+PHP+Apache Machine!
author: rahul286
date: 2008-02-25
url: /enabling-curl-on-windowsphpapache-machine/
views:
  - 3219
dsq_thread_id:
  - 2946465048
categories:
  - Tutorial
tags:
  - Bing
  - Developers
  - Windows
---
<img class="wp-image-53191" style="border: 0px none;margin: 0px 0px 0px 10px" src="http://cdn.devilsworkshop.org/files/2008/02/image19.png" border="0" alt="PHP Logo" width="150" height="78" align="right" /> This is for all php programmers using Windows.

If you are planning to use CURL library on PHP then you may encounter an error like below.

`Fatal error: Call to undefined function curl_init() in F:projorkutfeedstrunkindex.php on line 15`

I encountered above while developing <a href="http://www.orkutfeeds.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutfeeds.com/', 'orkutfeeds']);" >orkutfeeds</a>.

Curl is by default not enabled on PHP on Windows although it is there. So to enable this go through following steps&#8230;

  1. Locate **php.ini **file. Its under directory where you installed PHP. On my machine its path is: **<span style="font-family: Courier">C:wampbinphpphp5.2.5php.ini </span>**
  2. Once you find that file search for **<span style="font-family: cou">extension=php_curl.dll</span>** line
  3. There you will find a **semicolon **(**;**) before above line. Just remove it and save the change. That&#8217;s it!

If you have started webserver already then, you need to restart it again so that CURL extension gets loaded.

I found this while reading notes on <a href="http://in.php.net/curl" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/curl', 'PHPs&#8217; official CURL page']);" >PHPs&#8217; official CURL page</a>. This was posted by <a href="http://www.contrees-du-reve.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.contrees-du-reve.com/', 'Lancelot du Lac']);" >Lancelot du Lac</a>.

In case your search for **<span style="font-family: cou">extension=php_curl.dll</span>** fails you may go through the steps mentioned by <a href="http://www.tonyspencer.com/2003/10/22/curl-with-php-and-apache-on-windows/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.tonyspencer.com/2003/10/22/curl-with-php-and-apache-on-windows/', 'Tony Spencer']);" >Tony Spencer</a>.
