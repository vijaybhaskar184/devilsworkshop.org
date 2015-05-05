---
title: Find Faulty Driver/Software Crashing Windows Using BlueScreenView
author: vibin
date: 2011-10-11
excerpt: It has been many months since I saw a BSOD (Blue screen of death) on my Windows 7, but I have seen it a numerous times on my old Windows XP PC. This is one of the reason people feel Windows is not so reliable and usually go for Linux. If you’re going mad due to BSODs, check out BlueScreenView.
url: /know-faulty-driver-software-crashing-windows-using-bluescreenview/
dsq_thread_id:
  - 3605177107
categories:
  - Tips
tags:
  - Software
  - Windows
---
It has been many months since I saw a BSOD (Blue screen of death) on my Windows 7, but I have seen it a numerous times on my old Windows XP PC. This is one of the reason people feel Windows is not so reliable and usually go for Linux.

If you’re going mad due to this BSODs, here’s a handy app just for you. **Blue Screen View** points out the softwares/files/drivers which are making your PC experience miserable and then you can do something about it.

[<img class="alignnone wp-image-50612" style="padding-left: 0px;padding-right: 0px;margin-left: auto;margin-right: auto;padding-top: 0px;border-style: initial;border-color: initial;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2011/10/blue-screen-view_thumb.png" alt="blue-screen-view" width="664" height="330" border="0" />][1]

Blue Screen View basically reads the Minidump files which your PC saves when Windows crash. For this you should configure your PC to save Minidump files during BSOD crashes.

To configure, head on to Control Panel > System and Security > System > Advanced System Settings (in the left side bar) and select ‘Small Memory Dump’ under ‘Write Debugging Information’.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px" src="http://cdn.devilsworkshop.org/files/2011/10/Image-005_thumb.png" alt="minidump-windows-crash" width="334" height="389" border="0" />][2]

Blue Screen View shows the time/date of crash, BSOD image (which is almost similar to the original one), drivers or files which are possible for the crash. It also shows the version, description of the drivers which may be responsible for the crash.

After you have found the culprit, you can try reinstalling it. Another use of this app is, you don’t need to note the BSOD code using pen & paper, it stores all the error codes, and you can Google it for extra help.

It’s portable (no need to install) and works with all versions of Windows, starting from XP.

**Link:** <a href="http://www.nirsoft.net/utils/blue_screen_view.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.nirsoft.net/utils/blue_screen_view.html', 'Blue Screen View']);" target="_blank">Blue Screen View</a>

 [1]: http://cdn.devilsworkshop.org/files/2011/10/blue-screen-view.png
 [2]: http://cdn.devilsworkshop.org/files/2011/10/Image-005.png
