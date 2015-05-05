---
title: 'Networking : Windows 95/98/ME n Window 2000/XP LAN IPC$ problem'
author: rahul286
date: 2006-07-08
url: /networking-windows-9598me-n-window-2000xp-lan-ipc-problem/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/07/networking-windows-9598me-n-window.html
views:
  - 332
dsq_thread_id:
  - 2946412612
categories:
  - Tips
tags:
  - Google
  - OS
  - Social Media
  - Windows
---
This is for all the pals who got **IPC$ Password Prompt** while connecting a windows 95/98/ME machine to another windows 2000/XP/2003 machine in LAN, i.e. networking between NT & non-NT machine.

I tried making LAN between Windows 98 n Windows XP. Connection was successful and I accessed 98-files from XP machine without any problem but when it came to doin other way, got this IPC$ password prompt.

Posting here is the SIMPLEST way to solve this

<span style="font-weight: bold">Just do this on XP-machine</span>

  1. Go to the control panel > user account and **enable (turn-on) the guest account**.
  2. Then go again to control panel. Open Administrative Tools, then **Local Security Settings.**

<div style="text-align: center">
  OR
</div>

  1. You can just click ***Start >> Run >> secpol.msc***

In Left pane, go to *security settings>> Local Polices >> User Rights Assignments*<span style="font-weight: bold">.</span>

You will get list of policies on right side. Just modify following two policies.

<span style="font-weight: bold;color: #990000">1.</span> **Access this computer from network**

  * This is first policy. Double-click on it to open its properties.
  * You will get a list of user and groups and two buttons viz *add user or group* and *remove.*
  * Click on *add user or group* button.
  * A window with title *Select user or group* will appear.
  * In lower-left corner of this window there is *<span style="font-weight: bold">advance</span>* button. Click on it.
  * Another window with same title *Select user or group* will appear.
  * Click on *<span style="font-weight: bold">find now</span>* button on right-side of this window. A list will appear.
  * Just double-click on **Guest.**

<span style="font-style: italic">(If Guest does not appear then check</span> *Find in Location* <span style="font-style: italic">of this window. It must be server or your computer name itself.)</span>

*<span style="font-weight: bold;color: #000000">In short you have to add Guest to the list of user n groups who can access XP-computer from network.</span>*  
<span style="font-weight: bold;color: #990000">2.</span> **<span style="color: #990000">Deny access to this computer from network</span>**This is quite simple. Just open properties and check if <span style="font-weight: bold">Guest</span> name is in the list. If this is present, select it and press <span style="font-weight: bold">remove.</span>

*In short you have to remove Guest from the list of user n groups who denied XP-computer from network.*

<span style="font-weight: bold">Thats It!!!</span>

Refresh your 98 machine and see if <span style="font-weight: bold">IPC$ password</span> comes again. At the most you need to restart your both machine. But it will work for sure as I tested this on LAN of 25 PCs successfully <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

Post through comments if you still have problem or want me 2 add screenshot to this post!

<!-- google_ad_section_end -->
