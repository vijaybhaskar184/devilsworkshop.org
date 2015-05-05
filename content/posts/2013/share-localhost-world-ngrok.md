---
title: Share your localhost with the world using ngrok
author: vibin
date: 2013-09-02
excerpt: ngrok is a small command line utility which lets people on different network to access your localhost. It does this by creating a tunnel from one of its subdomain (xyz.ngrok.com) to your localhost.
url: /share-localhost-world-ngrok/
dsq_thread_id:
  - 2947127601
categories:
  - Tutorial
tags:
  - Developers
  - localhost
---
Working locally has huge advantages as compared to working on a remote server. You won&#8217;t have to go through the cycle of fetching files, editing them, and deploying.

But what if you want to share your localhost with people on a different network, without deploying it? That&#8217;s where ngrok comes in.

[<img class="aligncenter size-full wp-image-77434" alt="ngrok" src="http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-02-at-9.21.01-PM.png" width="542" height="501" />][1]

ngrok is a small command line utility which lets people on different network to access your localhost. It does this by creating a tunnel from one of its subdomain (xyz.ngrok.com) to your localhost.

To get started, <a href="https://ngrok.com/download" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://ngrok.com/download', 'head on to the site and download it']);" >head on to the site and download it</a>. You&#8217;ll be getting a executable shell script which is the utility itself. (That&#8217;s on OS X/Linux, I&#8217;m not really sure about Windows.)

You&#8217;ll probably want to symlink it to `/usr/local/bin/ngrok` or a place where you generally keep shell scripts.

Now execute the script. The most basic usage is to just do `ngrok 80` &#8211; which makes your localhost on port 80 available on ngrok&#8217;s subdomain.

There are quite a few options for the script, `ngrok -subdomain mynewrockingapp 80` , for example, will create a tunnel to subdomain of your choice.

Creating a free account unlocks lot of cool features, like choosing a default subdomain, username/password for authentication and so on. You can also choose your own subdomain (xyz.devilsworkshop.org), instead of ngrok&#8217;s.

ngrok also lets you debug HTTP requests and responses, and inspect traffic. You can access the interface at `localhost:4040`.

**Link:** <a href="https://ngrok.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://ngrok.com/', 'ngrok']);" >ngrok</a>

 [1]: http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-02-at-9.21.01-PM.png
