---
title: How to Improve IE8 Self-protection in Windows 7?
author: bobnewman
date: 2009-12-15
excerpt: |
  |
    The IE homepage is changed by Trojan, though I have installed XX antivirus and this is a common problem for Windows users.
    
    For this problem: Is there any thorough solution?
    
    My answer: No.
    
    The only good way to prevent the IE homepage from being changed by Trojan is not to visit the unknown source of websites or read email from unknown source.
url: /how-to-improve-ie8-self-protection-in-windows-7/
views:
  - 27
dsq_thread_id:
  - 3524981684
categories:
  - Tips
tags:
  - Anti-Virus
  - OS
  - Social Media
  - windows 7
---
The IE homepage is changed by Trojan, though I have installed XX antivirus and this is a common problem for Windows users.

For this problem: **Is there any thorough solution?**

My answer: **No**.

The only good way to prevent the IE homepage from being changed by Trojan is not to visit the unknown source of websites or read email from unknown source.  
Like other Windows versions, the self-contained IE8 of Windows 7 can not stop the problem of IE homepage being changed. However, we can fully develop the potential of Windows 7 to improve the self-protection of IE8.

### The steps are as below:

  * Open Registry Editor to locate in *HKEY\_CURRENT\_USERSoftwarePoliciesMicrosoft*
  * Then new build an item named as “**Control Panel**”. The specific operation is: right-click Microsoft to choose “**new build**” “**item**” and then rename the item.
  * Now the location is *HKEY\_CURRENT\_USERSoftwarePoliciesMicrosoftControl Panel*
  * Next, right-click on the blank of the right side pane to create three 32 bit DWORD values and rename them as Settings, Links and SecAddSites. Assign “1” to each of them as shown below:

<img class="alignnone size-full  wp-image-52973" src="http://cdn.devilsworkshop.org/files/2009/12/c1619aba279c81627f9cdf89cc11a87b.jpg" alt="Improve IE8 self protection" width="500" height="333" />

  * At last, click OK to save the settings and exit.

I’d like to remind you that to set the system as the above steps can not guarantee the IE8 will not be changed. The above settings can only protect IE8 in a way. Any third party software including any antivirus is unable to promise the IE homepage will not be changed.

* * *

*[****Editor&#8217;s Note****: This is a post written by our Guest Blogger **Bob Newman**. He writes tech related articles since years and is software developer working with <a href="http://www.registryrid.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.registryrid.com/', 'Registry Cleaner']);" >Registry Cleaner</a>**.*</p> 

**If you too like to [write][1] for **Devils Workshop****, please <a rel="no follow" href="http://devilsworkshop.org/join-dw/">check this</a>. Details about our [revenue sharing programs][1]are [here][1].]**

 [1]: http://devilsworkshop.org/join-dw/
