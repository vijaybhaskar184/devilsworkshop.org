---
title: 'Solution: Accessing Linux files (partitions) from Windows!'
author: rahul286
date: 2007-03-18
url: /solution-accessing-linux-files-partitions-from-windows/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/03/solution-accessing-linux-files.html
views:
  - 168
dsq_thread_id:
  - 3129612754
categories:
  - Tips
tags:
  - Software
  - Windows
---
While mounting windows partition in linux is a common thing, vice-versa is not easy as Microsoft does not provide support for other operating systems&#8217; filesystem! But poor guy (Bill) can&#8217;t stop us from getting what we want!

So here comes solution in the form of an Installable FileSystem Driver! Hey guys don&#8217;t fade-up listing word driver! Its simplest program to install (simpler than installing winamp!)

<span style="font-weight: bold">Key Feature:<br /> </span>

  * Provide support for both ext2 & ext3 filesystem.
  * Provides read as well as write support.
  * Windows page-file too can be transferred on Linux partition.

<span style="font-weight: bold"><br /> </span><span style="font-weight: bold">Procedure:<br /> </span>

  1. <a href="http://www.fs-driver.org/download.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fs-driver.org/download.html', 'Click here']);" >Click here</a> to download latest version of the driver. (size ~ 460 KB)
  2. An <span style="font-weight: bold">exe</span> file will be loaded to ur hard-drive.
  3. Start installation (it will take just 2-3 clicks).
  4. It will show a wizard like follows! Just assign some drive letter(s) to Linux partition(s).

[<img class="wp-image-53146" src="http://cdn.devilsworkshop.org/files/2007/10/linux-filesystem-driver-installation-on-windows-assiginig-drive-letter.jpg" alt="linux filesystem driver installation on windows - Assiginig drive letter" />][1]

<span style="font-weight: bold">Tip:</span> Assign drive letters like X:, Y:, Z: to avoid confusion between windows partitions and Linux partitions!

<span style="font-weight: bold">Links: </span><a href="http://www.fs-driver.org/index.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fs-driver.org/index.html', 'Home']);" >Home</a> | <a href="http://www.fs-driver.org/download.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fs-driver.org/download.html', 'Download']);" >Download</a> | <a href="http://www.fs-driver.org/screenshots.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fs-driver.org/screenshots.html', 'ScreenShots']);" >ScreenShots</a> | <a href="http://www.fs-driver.org/faq.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fs-driver.org/faq.html', 'FAQ']);" >FAQ</a>

<span style="font-weight: bold">Credits:</span> The Ext2 Installable File System software has been designed and implemented by <a href="http://www.fs-driver.org/author.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fs-driver.org/author.html', 'Stephan Schreiber']);" >Stephan Schreiber</a>.

<span style="font-weight: bold">Note: </span>This is a freeware and not open-source!  
<span style="font-weight: bold"></span>

 [1]: http://cdn.devilsworkshop.org/files/2007/10/linux-filesystem-driver-installation-on-windows-assiginig-drive-letter.jpg "linux filesystem driver installation on windows - Assiginig drive letter"
