---
title: Is your computer really spyware free?
author: prasadr
date: 2010-02-25
url: /is-your-computer-really-spyware-free/
views:
  - 25
categories:
  - Tips
tags:
  - Windows
  - Windows XP
---
This article highlights a security vulnerability that has been detected in Microsoft windows NT-based operating systems. The security vulnerability was first discussed on December 27,2005 and attacks followed 24 hours later. Let us take you through about how to safeguard your computer against a potential spy-ware attack.

The vulnerability is found in your system32 folder, and the file concerned is gdi32.dll. The gdi32.dll is a dynamic link library for the windows GDI(Graphical device interface) containing pre-defined functions to render 2-D images. Now, the vulnerability arises in the way your operating system handles Windows Metafile (WMF) vector images and allows random code to be executed on a remote machine.

This security vulnerability allows malware to get downloaded through drive-by downloads. Now, although  windows metafile is extensively supported by all windows systems, systems from windows XP onwards have been found to be particularly vulnerable as they provide a handler and reader for the metafile in their default installation.

Machines running Macintosh, Linux etc are not directly infected. But there is a possible risk of infection if they execute a third party application which has the capability to render Windows Metafiles in non-windows platform. You can get your computer checked for this vulnerability by clicking <a href="https://www.grc.com/files/MouseTrap.exe" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://www.grc.com/files/MouseTrap.exe', 'here.']);" target="_blank">here.</a>

Typically, after installing anti-virus and anti-spyware, we think our job is done and that the computer is secure. But this just goes to show that, new vulnerabilities keep popping up. Although i have a robust system, on running a scan to detect if my computer is susceptible to this vulnerability, i found that i have a failed defense! Check this out :

[<img class="wp-image-52726" style="border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/02/image_thumb6.png" border="0" alt="image" width="244" height="192" />][1]

  * Your only defense against this metafile vulnerability, is to ensure that you keep your automatic updates on, by default.
  * Microsoft since then has released a patch. You can manually download the patch by clicking <a href="http://www.microsoft.com/downloads/en/confirmation.aspx?familyId=0c1b4c96-57ae-499e-b89b-215b7bb4d8e9&displayLang=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.microsoft.com/downloads/en/confirmation.aspx?familyId=0c1b4c96-57ae-499e-b89b-215b7bb4d8e9&displayLang=en', 'here.']);" target="_blank">here.</a>
  * If you run the same scan once again, you will find that the vulnerability has been taken care of and there are probably no back doors in your computer!

[<img style="border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/02/image_thumb7.png" border="0" alt="image" width="244" height="190" />][2]

So go ahead guys, patch your computer against this. Do let us know if you have any questions or comments to share.

 [1]: http://cdn.devilsworkshop.org/files/2010/02/image5.png
 [2]: http://cdn.devilsworkshop.org/files/2010/02/image6.png
