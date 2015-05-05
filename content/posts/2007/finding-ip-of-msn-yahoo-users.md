---
title: Finding IP of MSN, Yahoo users!
author: rahul286
date: 2007-03-15
url: /finding-ip-of-msn-yahoo-users/
blogger_blog:
  - rb286.blogspot.com
views:
  - 416
dsq_thread_id:
  - 2946416211
categories:
  - Tips
tags:
  - Bing
  - Blogging
  - Internet Explorer
  - Security
  - 'Tips &amp; Hacks'
---
MSN is routes the connection through a microsoft server while you are chatting. However, when a file is sent, a DCC (direct connection) is created. This was purposely done because otherwise microsoft would waste alot of bandwidth so a direct connection is made. This is your chance.

Start a file transfer between u and ur target (preferably send large file), open up your command prompt (run &#8220;cmd&#8221; in NT/XP or &#8220;command&#8221; in 9X to get into prompt) and run <span style="font-weight: bold; font-style: italic">netstat</span>.  
Usually the MSN targets IP would be above port 2000!

If u recieve some crap like rb286.primsn.com as the target, do a reverse DNS lookup on it. However, this occurs very rarely, mostly u will recieve a clear IP!

You can use similar trick to find IP address of Yahoo users!

Now to protect yourself against this, you can use a [<span style="font-weight: bold">proxy server</span>][1].

[Click here][2] to get more info on proxies!

 [1]: http://devilsworkshop.org/2006/12/17/updated-working-proxyies-for-orkut-myspace-etc/
 [2]: http://devilsworkshop.org/2006/12/17/updated-working-proxyies-for-orkut-myspace-etc/l
