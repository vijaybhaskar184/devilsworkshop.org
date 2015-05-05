---
title: Create a Shortcut to Shutdown/Restart/Lock/Hibernate your Computer
author: hammad
date: 2010-03-23
url: /create-a-shortcut-to-shutdownrestartlockhibernate-your-computer/
robotsmeta:
  - index,follow
views:
  - 485
dsq_thread_id:
  - 2947108779
categories:
  - Tips
tags:
  - shut down
  - 'Tips &amp; Hacks'
---
Shortcuts are meant to make specific tasks easier for the user. Adding different program shortcuts on your desktop is a really simple thing but we can even create shortcuts to perform many other tasks as well such as creating  shut down or restart you computer with a shortcut.

<!--more-->

Many of you may have an idea on how to create a desktop shortcut to shut down you computer but for those who don’t, just follow the guide:

1. Right click on your desktop and navigate to **New > Shortcut**.

<img class="wp-image-51526" style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/shutdownshortcut1.png" border="0" alt="shutdown-shortcut-1" width="570" height="198" />

2. Create shortcut wizard will start once you click on new shortcut. In the location bar, type “shutdown -s -t 01” and click **Next**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/shutdownshortcut2.png" border="0" alt="shutdown-shortcut-2" width="647" height="485" />

3. You are almost done here, just type the name of the shortcut and click **Finish**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/shutdownshortcut3.png" border="0" alt="shutdown-shortcut-3" width="522" height="392" />

A new shortcut will now appear on the desktop.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/shutdownshortcut4.png" border="0" alt="shutdown-shortcut-4" width="304" height="229" />

4. Now if you want to change the icon of the shortcut, right click on the shortcut and select **Properties**. Click on **Change Icon** button.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/changeicon1.png" border="0" alt="change-icon-1" width="328" height="440" />

5. It will open a list of icon, simply select the icon and click **OK**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/changeicon2.png" border="0" alt="change-icon-2" width="322" height="385" />

6. It will change your desktop shortcut icon. Now all you have to do is double click on the shortcut and it will automatically shut down your computer.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/changeicon3.png" border="0" alt="change-icon-3" width="303" height="205" />

Below is the list of other commands you can use to perform other functions like Restart, Sleep, lock your computer, hibernate etc.

> **Restart **
> 
> Shutdown.exe -r -t 00
> 
> **Hibernate **
> 
> shutdown**.**exe -h
> 
> **Sleep**
> 
> rundll32.exe powrprof.dll,SetSuspendState 0,1,0
> 
> **Lock**
> 
> Rundll32.exe User32.dll,LockWorkStation
