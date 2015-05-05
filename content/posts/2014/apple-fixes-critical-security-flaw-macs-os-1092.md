---
title: Apple fixes Critical Security flaw in Macs with OS X 10.9.2
author: vibin
date: 2014-03-03
excerpt: Apple releases OS X 10.9.2, patching a security flaw in its SSL implementation. Also, brings FaceTime Audio to Mac.
url: /apple-fixes-critical-security-flaw-macs-os-1092/
categories:
  - News
tags:
  - Apple
  - Mavericks
---
Last month, Apple has released a <a href="http://support.apple.com/kb/HT6147" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://support.apple.com/kb/HT6147', 'small update to iOS']);" >small update to iOS</a>, patching a security vulnerability. Just like how Mac and iOS share a lot of things, it turns out they share this vulnerability too.

The bug is now patched in OS X too. Along with the bug fix, 10.9.2 brings FaceTime Audio to Mac and more.

[<img class="aligncenter size-medium wp-image-79896" alt="10.9.2" src="http://cdn.devilsworkshop.org/files/2014/03/Screen-Shot-2014-02-27-at-11.55.45-am-600x226.png" width="600" height="226" />][1]

If you got a Mac running Mavericks, update to 10.9.2 right now. Why is it so serious? Read on.

The bug lies in SSL protocol implementation on iOS and Mac devices. It lets an attacker to track and modify data exchanged in sessions protected by SSL.

So let&#8217;s say you&#8217;re connected to a public Wi-Fi hotspot and are doing a bank transaction (HTTPS) &#8211; an attacker can use a network analyser (like Wireshark) and decode packets of data that are being transmitted. This is a huge flaw.

It seems, the bug is a result of single bad &#8216;goto&#8217; line. Check out <a href="http://www.wired.com/threatlevel/2014/02/gotofail/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.wired.com/threatlevel/2014/02/gotofail/', 'this Wired article']);" >this Wired article</a> for in depth analysis on this silly bug.

Bug fix aside, OS X 10.9.2 finally brings FaceTime Audio for Mac. Ideally, FaceTime Audio should have been included in Mavericks itself, but it didn&#8217;t. iMessage app now has a &#8216;blocked&#8217; list allowing you to block messages from people.

You can check the full list of <a href="http://support.apple.com/kb/DL1725" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://support.apple.com/kb/DL1725', 'change log on Apple&#8217;s website']);" >change log on Apple&#8217;s website</a>.

 [1]: http://cdn.devilsworkshop.org/files/2014/03/Screen-Shot-2014-02-27-at-11.55.45-am.png
