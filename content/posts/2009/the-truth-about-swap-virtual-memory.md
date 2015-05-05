---
title: The truth about Virtual or Swap Memory
author: vaibhavkanwal
date: 2009-03-22
url: /the-truth-about-swap-virtual-memory/
views:
  - 100
dsq_thread_id:
  - 2947096418
categories:
  - Analysis
tags:
  - Developers
  - Windows
---
A lot has been said about how virtual memory increases system performance. After RAM, people often suggest the second best way to get a speed boost is to increase the size of **pagefile.sys**. Its time for debunking some myths about virtual memory.

**Here are a few false beliefs about virtual memory**

  1. More is better.
  2. Setting a static swap file size will make virtual memory more effective.
  3. Emptying the Pagefile will increase system performance.

All of these are false!!!!

**What is virtual memory?**

Without turning this into a lecture on Operating Systems, I&#8217;ll explain what Virtual memory is all about and keep it brief.<img class="alignleft size-medium wp-image-4912" src="http://cdn.devilsworkshop.org/files/2009/03/hdd-300x300.jpg" alt="hdd" width="300" height="300" /> **Virtual memory** is a technique which gives an application program the impression that it has contiguous working memory, while in fact it may be physically fragmented and may even overflow on to disk storage.

Now, lets say I have 512MB RAM and running Adobe Photoshop and Firefox simultaneously. On wndows XP, assuming 200MB is already allocated to the kernal, the user applications i.e Photoshop and Firefox are left with 300 MB of space. Firefox will run smoothly while you&#8217;ll notice lag while working with photoshop.

This is due to pagefaults which occur when the required amount of RAM is insufficient and data needs to be fetched from the hard disk. Firefox can accomodate itself well within 300MB of RAM but for photoshop it isnt a sweet deal. Thats where virtual memory kicks in, the OS reserves some portion of the hard disk as memory, hence the name virtual. As HDD space is higher than RAM, programs  use virtual address ranges which in total exceed the amount of real memory.

**Problem with virtual memory**

As the memory available for the system increases, you&#8217;d expect the performance to increase. To a certain extent it does help but as read/write speeds of electromagnetic HDD are very slow compared to the semiconductor based RAM, it doesnt help even page file increases twice the size of your main memory. Simply put, having over 1.5 GB of pagefile for 512 MB RAM is not benefitial.

Now adays, RAM has become very inexpensive and 4GB RAM in dual channel is very common. I prefer to disable page file as it saves me unnecessary read writes cycles on the HDD while also conserving my laptop battery. 4GB of memory is enough for most people and disabling the page file has given be better results. It even has long term benefits as it prevents undue HDD activity and increases its life.

**Best way to enable virtual memory**

  * If you do not plan to upgrade to 4GB memory, then you can still make the best of your page file, by keeping it in a separate Hard drive altogether, the read write headers are spared of the extra overhead as pagefaults are dealt with in the other hard drive.
  * Never, keep the pagefile in a different partition than that of Windows in the same HDD. Meaning, if you have only one hard disk then you should keep the pagefile in the same partition as that of Windows and not a different partition of the same hard drive as many people believe. As, doing so results in the read/write heads requiring to travel large distances spanning partitions back and forth!

I hope this mini guide on virtual memory help the readers. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

* * *

*[**Editor Note**: This post is by guest blogger Vaibhav Kanwal. He blogs at <a href="http://www.callingallgeeks.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.callingallgeeks.org/', 'Calling All Geeks']);" >Calling All Geeks</a> about technology.*</p> 

*If you too like to [write][1] for Devils Workshop, please [check this][1]. Details about our [revenue sharing programs][1] are [here][1].]*

 [1]: http://devilsworkshop.org/join-dw/
