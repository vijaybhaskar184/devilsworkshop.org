---
title: Reading the website headers
author: rishabhagarwal
date: 2009-11-24
url: /reading-the-website-headers/
views:
  - 25
categories:
  - Tips
tags:
  - Internet
  - Wordpress
---
Websites are the life and soul of the internet. Like living souls are made of cells, internet is made of websites. Ever since, you have been introduced to the internet, you have been writing that [http] and [www] on the url bar and then going on the desired web page. Today, we will have a look on what that stuff really means and exploring some fantastic secrets too!

Whenever you enter a website url, your web browser sends a request to the web server. Behind the scene, the <a href="http://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol', 'HTTP protocol']);" >HTTP protocol</a> is doing the trick. It is nothing, but a set of rules or language in which the web server and the web browser communicate. Now, every website has headers. They are not visible in normal browsing, and you need special tools/add ons to view them. But they contain a wealth of information about a website. And often, this is a place where real geek webmaster hide some info or just casual easter egg jokes!

Well, to view website headers, you&#8217;ll need <a href="https://addons.mozilla.org/en-US/firefox/addon/3829" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/3829', 'Live HTTP Headers']);" >Live HTTP Headers</a> add-on for Firefox. Other way is, to <a href="http://curl.haxx.se/download.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://curl.haxx.se/download.html', 'downloading an additional utility']);" >downloading an additional utility</a> The curl utility is available on Linux, Mac OS X, and even Windows.

To view the web headers, simply start the Firefox addd on and type the web address. It will automatically catch the headers. Other method, just go to command line and type:

> curl -I webaddress.com

Now comes the interesing part! You will be amazed to know, what is hidden behind the website headers of many popular websites. Let me make you see some of them.

  * If you type in curl –I slashdot.org, you’ll see that they embed random quotes from Futurama into the headers:

<img class="size-full wp-image-17109 alignnone" src="http://cdn.devilsworkshop.org/files/2009/11/curl1.jpeg" alt="curl1" width="407" height="171" />

  * The blogging platform <a href="http://wordpress.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.com/', 'WordPress']);" >WordPress</a> uses the header for a useful purpose—**they recommend contacting them about a job if you’ve been able to locate the headers**:

<img class="size-medium wp-image-17110 alignnone" src="http://cdn.devilsworkshop.org/files/2009/11/curl2-600x224.jpg" alt="curl2" width="499" height="186" />

If you happen to get a job at WordPress because of this, do let us know 😛

* * *

*[****Editor&#8217;s Note****: This is a post written by our Guest Blogger **Rishabh Agarwal**. He is an engineer by profession and web designer by choice along with being a Linux enthusiast. He writes on technology at **<a href="http://www.techylabs.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.techylabs.com', 'Techylabs']);" >Techylabs</a>**.  
*</p> 

**If you too like to write for **Devils Workshop****, please [check this][1]. Details about our revenue sharing programs are [here][1].]**

 [1]: http://devilsworkshop.org/join-dw/
