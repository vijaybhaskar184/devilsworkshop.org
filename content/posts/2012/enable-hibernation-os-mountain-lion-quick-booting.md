---
title: Enable hibernation in OS X Mountain Lion for quick booting
author: vibin
date: 2012-10-10
url: /enable-hibernation-os-mountain-lion-quick-booting/
dsq_thread_id:
  - 2955716851
categories:
  - Tips
tags:
  - Mac OS X
---
I&#8217;ve said this previously, <a href="http://devilsworkshop.org/analysis/showdown-windows-8-os-x-mountain-lion/61566/#speed" target="_blank">Lion used to be <em>very </em>quick</a> in booting, much better than that of Mountain Lion. Lately, I&#8217;ve been cutting down on startup items, but even that doesn&#8217;t make much difference in booting time.

[<img class="aligncenter size-full wp-image-66965" title="Bash-1" src="http://cdn.devilsworkshop.org/files/2012/10/Bash-1.jpg" alt="" width="692" height="464" />][1]

Previously, when I had a Windows laptop, I always used to hibernate rather than shut it down. But when I used OS X, it looked like there&#8217;s no hibernate feature in it. As it turns out, you *can* enable hibernation in OS X, here&#8217;s how you do it.

  1. Open the Terminal app, either from Spotlight or Utilities folder in Applications.
  2. Enter the following code and hit enter. 
    <pre><code class="prettyprint lang-sh">sudo pmset -a hibernatemode 1</code></pre>

  3. Now as this is a *sudo* command, which needs root access to your system, you got to enter your system password.
  4. That&#8217;s all, now hibernation is enabled on your Mac.

To hibernate your Mac, you hit the Apple icon in menu bar, hit Sleep. Wait for 5-10 seconds and it&#8217;ll hibernate.

Internally, what happens during hibernation is, all the cache stored in your RAM is transferred to your hard disk, and when you boot your Mac, all that cache is again transferred to RAM &#8211; so you can continue where you left off.

 [1]: http://cdn.devilsworkshop.org/files/2012/10/Bash-1.jpg
