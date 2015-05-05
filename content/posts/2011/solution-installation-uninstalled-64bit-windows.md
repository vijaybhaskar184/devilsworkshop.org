---
title: Solution for “This installation can only be uninstalled on 64-bit windows”
author: sauravjit
date: 2011-10-23
url: /solution-installation-uninstalled-64bit-windows/
dsq_thread_id:
  - 2946662936
categories:
  - Tips
tags:
  - Social Media
  - Solutions
  - tips and trick
  - Windows
---
If you&#8217;re using a 32-bit Windows then sometimes you might get a Windows error while deleting or uninstalling a software which prohibits the uninstallation. That error is:

*&#8220;This installation can only be uninstalled on 64-bit windows&#8221;*

You get this error when you remove a file directly or even using &#8220;Add or Remove a Program&#8221; in the control panel. If you are thinking that just removing the desktop icon will help you then you&#8217;re definitely wrong. That just deletes the shortcut however every file related to that software will still be there and occupy the same space on your hard disc as before.

### Solution:

Well the solution for the problem is quite simple, just open your program files and find the software&#8217;s folder there. Delete that folder first before uninstalling the software from control panel. You can either open Program file by opening C: drive then click on &#8216;Program Files&#8217; folder if you have installed your windows on C: drive.

Alternatively go to *Start>Run* and paste *  C:\Program Files*   there and hit enter.

<img class="alignnone size-full wp-image-47001" title="uninstallation" src="http://cdn.devilsworkshop.org/files/2011/10/uninstallation.jpg" alt="" width="640" height="428" />

After deleting that folder open control panel and go to &#8216;Programs and Features&#8217; and find the software you want to uninstall from the list. Double click that software to delete it properly without an error. You can delete any software using this method doesn&#8217;t matter what error you are getting. Drop a comment below if you got stuck somewhere.
