---
title: 'AdSense for Feeds – FAQ & Guide'
author: rahul286
date: 2008-08-19
url: /adsense-for-feeds-faq-guide/
views:
  - 64
categories:
  - Tips
tags:
  - Adsense
  - Advertising
  - Blogging
  - Google
  - plugin
  - Wordpress
  - YouTube
---
Few days back, <a href="http://adsense.blogspot.com/2008/08/i-feel-need-need-for-feeds.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://adsense.blogspot.com/2008/08/i-feel-need-need-for-feeds.html', 'AdSense opened their feed advertising program for all publishers']);" >AdSense opened their feed advertising program for all publishers</a>. I put AdSense ads in some of my feeds. The whole process of adding AdSense codes in feeds is not that simple as it may seem. Here I am listing few resources, which can be helpful for all bloggers/publisher who still have questions about AdSense for Feeds.

1. <a href="http://www.youtube.com/watch?v=eUbIrZh_mnU" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.youtube.com/watch?v=eUbIrZh_mnU', 'AdSense for Feeds Video']);" >AdSense for Feeds Video</a> 

Google Product Manager & founder of FeedBurner, Steve Olechowski introduces AdSense for feeds. If you are not familiar with feeds, then this is best way to get started.

&#160;

2. <a href="http://googlesystem.blogspot.com/2008/08/google-tests-adsense-for-feeds.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googlesystem.blogspot.com/2008/08/google-tests-adsense-for-feeds.html', 'AdSense for Feeds Guide']);" >AdSense for Feeds Guide</a> 

<a href="http://googlesystem.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googlesystem.blogspot.com/', 'Ionut']);" >Ionut</a> posted everything in detail with nice screenshots. If you know what feed means, then his post is the only resource you need to get started.

**3. FeedBurner MyBrand Issue**

This is for those who use FeedBurner with their <a href="http://www.feedburner.com/fb/a/publishers/mybrand" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.feedburner.com/fb/a/publishers/mybrand', 'MyBrand service']);" >MyBrand service</a>. If you remember, while configuring your DNS to use MyBrand, you had created a CNAME record for feeds subdomian. Now to use AdSense for existing feeds at FeedBurner you need to update that CNAME record as pointed out by <a href="http://www.labnol.org/internet/blogging/cname-for-feedburner-feeds-hosted-on-google/4132/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.labnol.org/internet/blogging/cname-for-feedburner-feeds-hosted-on-google/4132/', 'Amit Agarwal']);" >Amit Agarwal</a>.

As of now it is like: 

`feeds CNAME feeds.feedburner.com.`

Change it to:

`feeds CNAME ghs.google.com.`

If you forget to update above CNAME record, then your feeds may become unavailable when requested through your domain.

If you know any other guide which covers any missing info, please let us know.

Enjoy AdSense for feeds. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Related:** [8 WordPress Plugins for Feeds][1]

 [1]: http://devilsworkshop.org/8-wordpress-plugins-feed-subscribers/
