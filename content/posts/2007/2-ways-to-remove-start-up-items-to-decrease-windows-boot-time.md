---
title: 2 ways to remove start-up items to decrease Windows boot time!
author: vihave
date: 2007-08-13
url: /2-ways-to-remove-start-up-items-to-decrease-windows-boot-time/
blogger_permalink:
  - http://paras9.blogspot.com/2007/08/remove-start-up-items.html
views:
  - 150
dsq_thread_id:
  - 3187188856
categories:
  - Tips
tags:
  - Windows
---
*[Note: This is reformatted version of <a href="http://paras9.blogspot.com/2007/08/remove-start-up-items.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://paras9.blogspot.com/2007/08/remove-start-up-items.html', 'Paras Munots&#8217; work']);" target="_blank">Paras Munots&#8217; work</a>]*

Having programs run when windows boots slows down the boot process!

There are two ways to disable programs that may be in your startup (like icq messanger, nokia PC suite, etc)

**A. msconfig Way [easy way]**

The easiest is to do the following:

  1. Go to ***start >> run >> msconfig***
  2. Click on the ***&#8220;startup&#8221;*** tab (check following screenshot)
  3. **Uncheck** any items you don&#8217;t want to load when windows starts.

<a title="Msconfig Wizard -By Devils Workshop" href="http://cdn.devilsworkshop.org/files/2007/08/msconfig-devils-workshop.JPG" target="_blank"><img class="wp-image-53150" src="http://cdn.devilsworkshop.org/files/2007/08/msconfig-devils-workshop.JPG" alt="Msconfig Wizard -By Devils Workshop" width="420" /></a>****

**B. Registry editing Way**

***Note:** Deleting keys from the registry will not allow you to set them to startup again if you change your mind.*

The second is by deleting registry entrys, this can be done the following way:

  1. Go to **Start >> run, **Type **regedit** and hit enter.
  2. Navigate to : **HKEY\_LOCAL\_MACHINESOFTWAREMicrosoftWindowsCurrentVersionRun***** ***and **HKEY\_CURRENT\_USERSOFTWAREMicrosoftWindowsCurrentVersionRun**
  3. **Delete** any entry&#8217;s that you don&#8217;t want to load up at boot time!

**#Which way is better???  
**

**msconfig way** just disables entry as oppose to deleting them as **registry editing way **does.

So use **msconfig way** when you want to temporarily disable any startup entry!

You can go for **registry editing way** if you are sure you wont be needing that entry again!

Still confuse??? Ask us! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
