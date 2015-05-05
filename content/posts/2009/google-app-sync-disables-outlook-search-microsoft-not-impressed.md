---
title: Google App Sync disables Outlook Search; Microsoft not impressed!
author: swati
date: 2009-06-18
url: /google-app-sync-disables-outlook-search-microsoft-not-impressed/
views:
  - 56
categories:
  - News
tags:
  - Bug
  - Disable
  - Google
  - Microsoft
---
<img class="wp-image-50871" style="margin-left: 0px;margin-right: 0px" src="http://cdn.devilsworkshop.org/files/2009/06/untitled1.jpg" border="0" alt="Untitled-1" width="240" height="102" align="right" /> Google and Microsoft are locking horns over Google’s App Sync software that disables Outlook Search. When the user installs Google Apps Sync plugin, it disables Outlook’s ability to search any and all of your Outlook data. I am not sure how many Outlook users are unhappy with this, but Microsoft for sure is not impressed.

Google Apps Sync for Microsoft Outlook is a plug-in for Outlook 2003 or 2007 that allows users keep using their familiar Outlook interface after switching from Microsoft Exchange Server to Google Apps.

> **Outlook Product Manager &#8211; Dev Balasubramanian says, **
> 
> “The plugin modifies a registry key which disables Windows Desktop Search from indexing and providing search functionality for all Outlook data, not just the Outlook data being synchronized from GMail. Because Outlook search relies upon the indexing performed by Windows Desktop Search, Outlook search functions are broken as a result.”

Google apparently admits to this flaw. Google says that because of a compatibility issue, Google Apps Sync disables Windows Desktop Search for all Microsoft Outlook files. If someone needs to use Windows Desktop Search to search your Outlook data, Google recommends them to uninstall Google Apps Sync through the Add or Remove Programs panel in the Control Panel in Windows.

However, Miscrosoft says that **uninstalling the plugin may not fix the issue**.

In a <a href="http://blogs.msdn.com/outlook/archive/2009/06/17/google-apps-sync-disables-outlook-search.aspx" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blogs.msdn.com/outlook/archive/2009/06/17/google-apps-sync-disables-outlook-search.aspx', 'blog post']);" >blog post</a>, Balasubramanian suggests a few steps to address the issue:

The only remedy is to change <a href="http://technet.microsoft.com/en-us/library/cc732491%28WS.10%29.aspx#BKMK_Preventindexingmicrosoftofficeoutlook" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://technet.microsoft.com/en-us/library/cc732491%28WS.10%29.aspx#BKMK_Preventindexingmicrosoftofficeoutlook', 'the registry key that was modified']);" >the registry key that was modified</a> by the plugin:

  * Press the Windows Key + R on your keyboard, and type “REGEDIT”. This will open the Windows Registry Editor.
  * Browse to the following: &#8220;HKEY\_LOCAL\_MACHINESOFTWAREPoliciesMicrosoftWindowsWindows Search&#8221;
  * You will manually have to reset the value of “PreventIndexingOutlook” to “0” (without the quotes). To do this, right click on the “PreventIndexingOutlook” key, select “Modify…”, then change the value data to “0”.
  * Close the registry editor.

It has also been observed that App Sync disrupts Hotmail, Adobe Acrobat PDF Maker, and Outlook Change Notifier.

Share your comments on what you think.

*(Source: <a href="http://mail.google.com/support/bin/answer.py?answer=147751" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://mail.google.com/support/bin/answer.py?answer=147751', 'App sync']);" >App sync</a> | <a href="http://blogs.msdn.com/outlook/archive/2009/06/17/google-apps-sync-disables-outlook-search.aspx" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blogs.msdn.com/outlook/archive/2009/06/17/google-apps-sync-disables-outlook-search.aspx', 'Outlook blog']);" >Outlook blog</a>)*
