---
title: 'Windows Software: Copy Handler to replace windows worst built-in file copy/paste feature!'
author: rahul286
date: 2007-04-23
url: /windows-software-copy-handler-to-replace-windows-worst-built-in-file-copypaste-feature/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/04/windows-software-copy-handler-to.html
views:
  - 1026
dsq_thread_id:
  - 2946414084
categories:
  - Reviews
tags:
  - Software
  - Windows
---
How many time you wished you could have nice file copying feature in your windows! Following is short list of problems I feel windows built-in copy feature suffers from:

  * Multiple copy starts same time, resulting in higher defragmentation (or you have to wait till first completes, before starting next)
  * No priority control so no matter how important is copy operation to you, other programs will suffer performance loss
  * In case source and destination folder have same name windows return error no matter the folders have different content
  * No special provision for bulk data transfer (No auto shutdown after batch-copying, etc)
  * If window restarts between copy operation, all the progress just get lost without any recovery!
  * No logging at all so chances are more after some time you may loose track of what have you copied , where you have copied and so on!
  * No buffer management which can result in performance variations for devices with different speed
  * No pause/resume of a copy operation
  * N0 disk space check. (Ideally a copy operation should check it before hand whether destination have enough disk space to continue with copying)
  * Gush&#8230; The list is endless&#8230; I am tired now <img src="http://devilsworkshop.org/wp-includes/images/smilies/frownie.png" alt=":-(" class="wp-smiley" style="height: 1em; max-height: 1em;" />

But as someone said if there is a wish, there is a way and like most of the windows problem this one have third-party but open-source solution!

Eureka, its <a href="http://www.copyhandler.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.copyhandler.com/', 'copy-handler']);" >copy-handler</a>! Its <a href="http://www.copyhandler.com/en/downloads/index.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.copyhandler.com/en/downloads/index.php', 'freely available for download']);" >freely available for download</a> with <a href="http://www.copyhandler.com/en/manual/index.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.copyhandler.com/en/manual/index.php', 'manuals']);" >manuals</a>, <a href="http://www.copyhandler.com/en/faq/index.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.copyhandler.com/en/faq/index.php', 'FAQs']);" >FAQs</a>, <a href="http://www.copyhandler.com/en/manual/installation-uninstallation.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.copyhandler.com/en/manual/installation-uninstallation.html', 'installtion guide']);" >installtion guide</a>, <a href="http://www.copyhandler.com/en/screenshots/index.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.copyhandler.com/en/screenshots/index.php', 'screenshots']);" >screenshots</a>, etc! I tested it for more than a year now and I just cant think of using windiows without it! It solves all problem listed above with additional features like&#8230;

  * Auto-start with windows (optional)
  * Overriding default windows copy-operation (optional)
  * Changing target after copy operation is started
  * Allocate custom buffer size for different devices
  * Can shutdown when copy finishes
  * Ask to resume/restart remaining operation after accidental reboots!
  * Can provide default actions for things like delete source file if already exist and so on..
  * There are more&#8230;

[<img class="wp-image-50398" width="420" src="http://cdn.devilsworkshop.org/files/2007/10/copyhandler.png" alt="Copy Handler" />][1]

For developers, <a href="http://www.copyhandler.com/en/development/index.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.copyhandler.com/en/development/index.php', 'development manuals is here']);" >development manuals is here</a> ! You can <a href="http://www.copyhandler.com/en/downloads/3.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.copyhandler.com/en/downloads/3.html', 'download source code from this page']);" >download source code from this page</a>!

I am using tons of third-party software on my windows machine! Starting from today I will write about those I liked and tested over the years! Hope you will enjoy this and find it useful <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://cdn.devilsworkshop.org/files/2007/10/copyhandler.png "Copy Handler"
