---
title: Nginx Rewrite Rules for W3 Total Cache Plugin
author: rahul286
date: 2010-06-21
excerpt: "This article contains Nginx rewrite rules for w3 Total Cache plugin, converted from apache's (.htaccess) rewrite rules. Nginx configuration given in this post is tested and found to be working."
url: /nginx-rewrite-rules-for-w3-total-cache-plugin/
views:
  - 258
dsq_thread_id:
  - 2947111466
categories:
  - Tutorial
tags:
  - Nginx
  - Plugins
  - rewrite
  - w3 Total Cahce
  - Wordpress
  - Wordpress Plugins
---
[<img class="size-medium  alignright wp-image-51396" src="http://cdn.devilsworkshop.org/files/2010/06/Nginx-Logo-300x83.png" alt="" width="300" height="83" />][1]We have been using nginx from long time to run our WPMU + domain mapping configuration for rtBlogs network.

Recently when we decided to switch from Wp Super Cache to W3 Total Cache plugin, we were stuck while translating apache&#8217;s (.htaccess) rewrite rules to nginx configuration.

Now, after some efforts we managed to get nginx working with W3 Total Cache plugin with following rewrite rules.

<pre><code class="no-highlight"># if the requested file exists, return it immediately
if (-f $request_filename) {
	break;
}

## W3 Total CACHE BEGIN
set $totalcache_file '';
set $totalcache_uri $request_uri;

if ($request_method = POST) {
  set $totalcache_uri '';
}

# Using pretty permalinks, so bypass the cache for any query string
if ($query_string) {
  set $totalcache_uri '';
}

if ($http_cookie ~* "comment_author_|wordpress|wp-postpass_" ) {
  set $totalcache_uri '';
}

# if we haven't bypassed the cache, specify our totalcache file
if ($totalcache_uri ~ ^(.+)$) {
  set $totalcache_file /wp-content/w3tc-$http_host/pgcache/$1/_default_.html;
}

# only rewrite to the totalcache file if it actually exists
if (-f $document_root$totalcache_file) {
  rewrite ^(.*)$ $totalcache_file break;
}                 

##W3 Total CACHE END

# all other requests go to WordPress
if (!-e $request_filename) {
	rewrite . /index.php last;
}</code></pre>

Above codes will sit inside **server{ location{ } } ** block.

Our original configuration file is too big and contains many unwanted things so I am not publishing it here.

Anyway, if you stuck somewhere, feel free to use comment form below. 😉

***Update:**** For those who are faceing issues with **gzip** (compression)&#8230;*

I have a code block at the beginning of  location /{} block in our nginx configuration file as below:

<pre><code class="no-highlight">          location / {
               gzip  on;
               gzip_http_version 1.0;
               gzip_vary on;
               gzip_comp_level 3;
               gzip_proxied any;
               gzip_types text/plain text/html text/css application/json application/x-javascript text/xml application/xml application/xml+rss text/javascript;
               gzip_buffers 16 8k;
               .....
        }</code></pre>

Above code-block basically &#8220;asks&#8221; nginx to turn on compression when files with listed mime types (see line gzip_types) being served

When above lines are present in your configuration, you can altogether disable compression settings from w3 Total Cache as nginx webserver will automatically handle compression for those requests. *Not tested though.*

 [1]: http://cdn.devilsworkshop.org/files/2010/06/Nginx-Logo.png
