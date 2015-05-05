---
title: Google dumps Webkit for its own rendering engine
author: vibin
date: 2013-04-04
excerpt: Google releases its own rendering engine by forking Webkit, calls it Blink and plans to use it for Google Chrome. Opera to follow suit.
url: /google-dumps-webkit-rendering-engine/
dsq_thread_id:
  - 3099019536
categories:
  - News
tags:
  - Chrome
  - WebKit
---
[<img class="alignright size-full wp-image-73029" alt="webkit-logo" src="http://cdn.devilsworkshop.org/files/2013/04/Webkit_Logo.png" width="215" height="174" />][1]Rendering engines are an important part of a web browser. They can be one of the primary reasons why a browser is snappy or dead slow. I find Chrome to be fast and responsive and one of the reasons for it is, it&#8217;s based on Webkit &#8211; an open source rendering engine.

Today, Google announced that it is &#8216;<a href="http://en.wikipedia.org/wiki/Fork_(software_development" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Fork_(software_development', 'forking']);" >forking</a>&#8216; Webkit and building its own rendering engine for Google Chrome.

### Why is Google doing this?

One of the main reasons why Google is releasing a new rendering engine is, Chromium (the open source version of Chrome) handles <a href="http://www.chromium.org/developers/design-documents/multi-process-architecture" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.chromium.org/developers/design-documents/multi-process-architecture', 'multi-process architecture']);" >multi-process architecture</a> differently from other Webkit-based browsers (like Safari).

Another reason seems to be about decreasing the code base as much as possible. As Google puts it &#8211; &#8220;we anticipate that we’ll be able to remove 7 build systems and delete more than 7,000 files—comprising more than 4.5 million lines&#8221;.

With Blink, Google has complete control over the rendering engine they use and that fortunately leads to less bugs and more stability.

### Is Google being evil?

That&#8217;s the classic question, for a company that claims not to be evil. Personally, I think there is nothing wrong with Google releasing a new rendering engine.

Some people think that Blink is Google&#8217;s way of moving away from Apple&#8217;s involvement in its browser (Apple is one of the biggest contributors to Webkit) and that&#8217;s one way to look at it.

### Opera to follow Google

Opera has recently announced its switch to Chromium Webkit from Presto. Now that Google plans for Blink as their rendering engine, <a href="http://www.brucelawson.co.uk/2013/hello-blink/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.brucelawson.co.uk/2013/hello-blink/', 'Opera too agrees with it']);" >Opera too agrees with it</a>.

I&#8217;m more interested about how Blink will effect Chrome on Android, which is really slow and half-baked right now.

**Link:** <a href="http://blog.chromium.org/2013/04/blink-rendering-engine-for-chromium.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.chromium.org/2013/04/blink-rendering-engine-for-chromium.html', 'Chromium Blog']);" >Chromium Blog</a>

 [1]: http://cdn.devilsworkshop.org/files/2013/04/Webkit_Logo.png
