---
title: Typing ‘File:///’ crashes apps in OS X Mountain Lion
author: vibin
date: 2013-02-03
excerpt: A silly bug makes almost every app crash in OS X Mountain Lion. Apple is yet to release a fix.
url: /typing-file-crashes-apps-os-mountain-lion/
dsq_thread_id:
  - 2947126645
categories:
  - News
tags:
  - Mountain Lion OS X
---
What if I say typing a string of 8 characters can actually crash almost every application on your Mac? The string is &#8216;File:///&#8217; (without quotes, and it&#8217;s case-sensitive). Sounds weird, right? Give it a try now.

While Mountain Lion has been released long time ago, a bug submission to <a href="http://openradar.appspot.com/13128709" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://openradar.appspot.com/13128709', 'Open Radar']);" >Open Radar</a> has got attention from a lot of OS X users. Apparently, this bug makes apps crash whenever the user types &#8216;File:///&#8217; into a text field of any app &#8211; that even includes Spotlight.[<img class="aligncenter size-medium wp-image-71077" alt="file-bug-mountain-lion" src="http://cdn.devilsworkshop.org/files/2013/02/Screen-Shot-2013-02-03-at-7.36.11-PM-600x358.gif" width="600" height="358" />][1]

So what is triggering this? It&#8217;s the OS X&#8217;s built-in spell checker (if you type continuously without stopping, it won&#8217;t crash as OS X will only do a spell check when you stop typing).

Now, this isn&#8217;t a big problem at all, as no one&#8217;s going to actually type that string unknowingly. Though, if you want to get rid of the bug, just disable spell checking and text replacement from the System preferences app.

It&#8217;ll be interesting to see how fast Apple&#8217;s going to release a patch for this.

 [1]: http://cdn.devilsworkshop.org/files/2013/02/Screen-Shot-2013-02-03-at-7.36.11-PM.gif
