---
title: 'Troubleshooting: Mouse pointer moving erratically in Linux!'
author: rahul286
date: 2007-03-18
url: /troubleshooting-mouse-pointer-moving-erratically-in-linux/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/03/troubleshooting-mouse-pointer-moving.html
views:
  - 52
dsq_thread_id:
  - 3039777891
categories:
  - Tips
tags:
  - 'Tips &amp; Hacks'
  - Windows
---
If you are trying new distribution/version of Linux and founds mouse pointer is moving erratically at the time of installation or after installation then I think its time to scream eureka!

I got this problem while installing Fedora Core 4! While I searched exhaustively I ended up with no good and feasible solution! After long time I got same problem while installing OpenSuse 10.2 but this time I got solution there itself!

The key is to use boot option<span style="font-weight: bold"></span>

> <span style="font-family: courier new">psmouse.proto=bare</span>

If you are getting this problem during installation then instead of starting normal installation type above at shell and just hit enter!

If you have already installed Linux and getting this problem, then edit <span style="font-weight: bold; font-style: italic">/boot/grub/menu.lst </span><span style="font-weight: bold"></span>file. It will have alongwith many lines one or more line(s) containing something like follows:<span style="font-weight: bold"><br /> </span>

> <span style="font-weight: bold; font-family: courier new">kernel</span><span style="font-family: courier new"> /boot/vmlinuz-2.6.18.2-34-default</span><span style="font-weight: bold; font-family: courier new"> root=</span><span style="font-family: courier new">/dev/hda11</span>

Note that the non-highlighted text in above line may slightly differ!  
Once u find the line(s) like above add <span style="font-weight: bold; font-family: courier new">psmouse.proto=bare </span>at the end of them! So final line may look like&#8230; <span style="font-weight: bold; font-family: courier new"></span>

> <span style="font-weight: bold; font-family: courier new">kernel</span><span style="font-family: courier new"> /boot/vmlinuz-2.6.18.2-34-default</span><span style="font-weight: bold; font-family: courier new"> root=</span><span style="font-family: courier new">/dev/hda11 </span><span style="font-weight: bold; font-family: courier new">psmouse.proto=bare</span>

Just save the file and reboot Linux!  
If you still have problem lemme know!

<span style="font-weight: bold">Hot Tip:</span> U can also edit <span style="font-weight: bold; font-style: italic">/boot/grub/menu.lst</span> from windows if u have windows on same machine by <a href="http://devilsworkshop.org/2007/03/18/solution-accessing-linux-files-partitions-from-windows/" style="font-weight: bold">accessing Linux files from windows</a>!<span style="font-weight: bold; font-style: italic"><br /> </span>
