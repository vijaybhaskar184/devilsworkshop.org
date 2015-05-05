---
title: 'Solution: “Task Manager has been disabled by your administrator” [Windows Error]'
author: rahul286
date: 2008-04-12
url: /solution-task-manager-has-been-disabled-by-your-administrator-windows-error/
views:
  - 5427
dsq_thread_id:
  - 2947088558
categories:
  - Tips
tags:
  - OS
  - Social Media
  - Windows
---
</p> 

If you are getting error, *"Task Manager has been disabled by your administrator" , *when trying to launch task manger on Windows XP machine then here is a simple solution for you. 

**Solution: **Click **&#8220;Start >> Run&#8221;** and type following command exactly as given below and click OK.

`REG add HKCUSoftwareMicrosoftWindowsCurrentVersionPoliciesSystem /v DisableTaskMgr /t REG_DWORD /d 0 /f` 

****

**Screenshot:**   
[<img class="wp-image-52637" alt="" src="http://cdn.devilsworkshop.org/files/2007/10/run-command-on-windows-by-devils-workshop.jpg" />][1]

Yep. This problem is solved now! In case you any other problem feel free to ask. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Related: **[Solution for *"Registry editing has been disabled by your administrator"* error!][2]

 [1]: http://cdn.devilsworkshop.org/files/2007/10/run-command-on-windows-by-devils-workshop.jpg
 [2]: http://devilsworkshop.org/2007/02/12/solution-registry-editing-has-been-disabled-by-your-administrator/
