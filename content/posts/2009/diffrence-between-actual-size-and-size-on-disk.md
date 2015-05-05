---
title: Diffrence Between Actual “Size” and “Size On Disk”
author: prateeks
date: 2009-04-08
excerpt: 'Many of you might have noticed that while you see the properties of some folder their are two sizes shown over there in properties window. Those sizes are labeled as “Size” & “Size on disk”. You can also notice that size on disk is always greater than actual size. So, here is the explanation of these two terms.'
url: /diffrence-between-actual-size-and-size-on-disk/
views:
  - 445
dsq_thread_id:
  - 2947096733
categories:
  - Analysis
tags:
  - File Management
  - Software
  - Windows
  - Windows XP
---
<a rel="attachment wp-att-5501" href="http://devilsworkshop.org/diffrence-between-actual-size-and-size-on-disk/actualsize/"><img class="size-full wp-image-5501 alignright" title="actualsize" src="http://cdn.devilsworkshop.org/files/2009/04/actualsize.png" alt="actualsize" width="170" height="155" /></a>Many of you might have noticed that while you see the properties of some folder their are two sizes shown over there in properties window. Those sizes are labeled as **“Size”** & **“Size on disk”**. You can also notice that size on disk is always greater than actual size. So, here is the explanation of these two terms.<a rel="attachment wp-att-5500" href="http://devilsworkshop.org/diffrence-between-actual-size-and-size-on-disk/size/"><img class="size-full wp-image-5500 aligncenter" title="size" src="http://cdn.devilsworkshop.org/files/2009/04/size.png" alt="size" width="349" height="380" /></a>

  * **Size** – It is sum of sizes of all containing files and folders in it, in raw form (count of number of bytes).
  * **Size on disk** &#8211; It displays the effective size which they occupy in disk.

It is the file system of hard disk which determines the “Size on Disk”, where as “Size” will remain same, irrespective of file system (like NTFS, Fat32, UDF, etc.).

The disk is further divided into tracks and sectors, file system determines how many tracks or sectors to be included in one cluster. So, if the disk is having a cluster size of 16KB (generally in case of FAT file system). Any file on that disk will have size on disk in multiples of 16KB. So, a file size up to 16KB will occupy 16KB as disk space and file from size 16 to 32KB will occupy 32KB on disk space and so on.

In this way a large volume of disk space gets unused. So, there is a need of file system having smaller cluster size. This is one reason Microsoft came up with a new file system NTFS, after windows millennium.

**Related:** [Accessing Linux partitions from Windows OS][1]

* * *

*[**Editors Note:** This post is by our co-blogger <a href="http://gohi-tech.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://gohi-tech.blogspot.com/', 'Prateek']);" >Prateek</a> from<a href="http://gohi-tech.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://gohi-tech.blogspot.com/', ' Go Hi-Tech']);" > Go Hi-Tech</a> where he writes about Technology. *</p> 

*If you too like to [write][2] for Devils Workshop, please [check this][2]. Details about our [revenue sharing programs][2] are [here][2].]*

 [1]: http://devilsworkshop.org/solution-accessing-linux-files-partitions-from-windows/
 [2]: http://devilsworkshop.org/join-dw/
