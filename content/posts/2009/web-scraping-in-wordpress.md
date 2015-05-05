---
title: Web Scraping in WordPress
author: akshayraje
date: 2009-11-04
excerpt: WP Web Scraper is an easy to implement professional web scraper for WordPress. It can be used to display realtime data from any websites directly into your posts, pages or sidebar. This plugin can be used to include realtime stock quotes, cricket or soccer scores or any other generic content.
url: /web-scraping-in-wordpress/
views:
  - 73
dsq_thread_id:
  - 2947103843
categories:
  - Tips
tags:
  - curl
  - Plugins
  - webscraping
  - Wordpress
  - Wordpress MU
  - wp-web-scraper
---
I had been waiting for WpVeda to be launched since my first chat with Rahul some months back. Its always great to see conscious efforts from team rtCamp to give it back to the community. Congrats Rahul, and thanks for my mention in your <a href="http://www.wpveda.com/welcome-to-wpveda/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.wpveda.com/welcome-to-wpveda/', 'first post']);" >first post</a>.

<img class="size-full  alignright wp-image-52471" src="http://www.wpveda.com/files/2009/11/wordpress_icon.png" alt="wordpress_icon" width="135" height="135" />

I too strongly advocate open source and community contributions in general and I myself have also published <a href="http://wordpress.org/extend/plugins/profile/akshay_raje" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/profile/akshay_raje', 'some plugins']);" target="_blank">some plugins</a>.

Today I am writing about one of my plugins which caters to a very specific niche but surely has a good user base from the audience it caters to. The niche task which this plugin performs is web scraping.

## What is Web Scraping?

Web scraping (or Web harvesting, Web data extraction) is a computer software technique of extracting information from websites. Web scraping focuses more on the transformation of unstructured Web content, typically in HTML format, into structured data that can be formatted and displayed or stored and analyzed. Web scraping is also related to Web automation, which simulates human Web browsing using computer software. Exemplary uses of Web scraping include online price comparison, weather data monitoring, market data tracking, web content mashup and web data integration.

## WP Web Scraper

<a href="http://wordpress.org/extend/plugins/wp-web-scrapper/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/wp-web-scrapper/', 'WP Web Scraper']);" target="_blank">WP Web Scraper</a> is an easy to implement professional web scraper for WordPress. It can be used to display real-time data from any websites directly into your posts, pages or sidebar. This plugin can be used to include real-time stock quotes, cricket or soccer scores or any other generic content. The scraper is built using time tested cURL library for scraping and phpQuery for parsing and outputting HTML.  
It also has some advanced configuration features such as:

  1. Configurable caching of scraped data. Cache timeout in minutes can be defined in minutes for every scrap.
  2. Custom Useragent header for your scraper can be set for every scrap.
  3. Scrap output can be displayed through custom template tag, shortcode in page, post and sidebar (text widget).
  4. Error handling &#8211; Silent fail, standard error, custom error message or display expired cache.
  5. Option to clear or replace a certain regex pattern from the scrap before output.
  6. Option to strip off a single or multiple HTML tags from the output.
  7. Supports html charset conversion between various charsets.

Am sure, this all sounds a bit geekish to someone who has not explored web scraping before.

For a better perspective, what could be a better example of displaying the download count of my plugin from wordpress.org. To do this, all I need to do (assuming that the plugin is installed) is to insert the following shortcode in my page, post or the text widget of sidebar:  
**[wpws url = &#8220;http://wordpress.org/extend/plugins/wp-web-scrapper/stats/&#8221; selector=&#8221;.last-child td&#8221; cache=&#8221;60&#8243; timeout=&#8221;3&#8243; error=&#8221;cache&#8221;]**

## Using Shortcode

Now lets decrypt the shortcode. The first parameter &#8211; url, specifies the url from which you intend to scrap data. The second (and perhaps the most important) parameter &#8211; selector, specifies the exact location in that url where your data is located. The syntax used is of good old CSS. If you have worked with CSS or jQuery before, it should be very easy for you to write a CSS selector.

In brief, the selector mentioned above refers to the first td element which is a child of the first element with the class &#8216;last-child&#8217;. You can easily build such selectors by viewing the source code of your url. Rest of the parameters are optional. Cache specifies the time in minutes it will cache data instead of fetching data on each request, timeout is the maximum time in seconds the scraper will spend on the task and error denotes what happens in case the scraper fails (if cache is the value for error, it will display expired cache data in case of an error).

I hope this gets you interested enough to start exploring its limit less possibilities. <a href="http://wordpress.org/extend/plugins/wp-web-scrapper/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/wp-web-scrapper/', 'Download your copy']);" target="_blank">Download your copy</a>, install it and get started. You can find more info on this plugin in the <a href="http://wordpress.org/extend/plugins/wp-web-scrapper/faq/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/wp-web-scrapper/faq/', 'FAQ']);" target="_blank">FAQ</a> section or its <a href="http://webdlabs.com/projects/wp-web-scraper/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://webdlabs.com/projects/wp-web-scraper/', 'official page']);" target="_blank">official page</a>.

Please note that the content you scraping might be copyright protected. Its best to at least attribute the content owner by a linkback or better take a written permission. Apart from rights, cURLing in general is a very resource intensive task. It will exhaust the bandwidth of your host as well as the host of of the content owner. Best is not to overdo it.
