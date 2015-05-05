---
title: 'Solution: "Registry editing has been disabled by your administrator"'
author: rahul286
date: 2007-02-12
url: /solution-registry-editing-has-been-disabled-by-your-administrator/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/02/solution-registry-editing-disabled-by.html
views:
  - 805
dsq_thread_id:
  - 2946413403
categories:
  - Tips
tags:
  - Internet Explorer
  - Security
  - Windows
---
If you ever encountered above error, i.e. &#8220;**Registry editing has been disabled by your administrator**&#8221; on Windows XP or any other Windows NT Operating system, this may help you!

I have encountered the above error while patching registry. Even ***regedit* command** was not working!

**Here is a simple solution which worked for me!**

  * Click **&#8220;Start >> Run&#8221;** or press **&#8220;[window key + R ]&#8221;** and type or paste following command exactly as given below. An hit ENTER.

<textarea cols="40" rows="3" readonly="readonly" onclick="this.focus(); this.select();"> REG add HKCU\Software\Microsoft\Windows\CurrentVersion\Policies\System /v DisableRegistryTools /t REG_DWORD /d 0 /f </textarea>

**#Screenshot:**  
[![][1]][2]

 [1]: http://www.devilsworkshop.org/files/2007/10/run-command-on-windows-by-devils-workshop.jpg
 [2]: http://www.devilsworkshop.org/files/2007/10/run-command-on-windows-by-devils-workshop.jpg ""
