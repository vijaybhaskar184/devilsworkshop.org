---
title: Delete Files From Recycle Bin For All Users Using Command Prompt
author: vibin
date: 2011-10-12
url: /delete-files-recycle-bin-all-users-once-using-command-prompt/
dsq_thread_id:
  - 3526465104
categories:
  - Tips
tags:
  - 'Tips &amp; Hacks'
  - Tips and Tricks
---
If you’re running out of space on a multi-user Windows computer, the first idea you get is, to empty Recycle Bin, hey, but wait, you need to empty Recycle Bin for all the users and that obviously takes time. Here’s a <a href="http://cybernetnews.com/empty-recycle-bin-for-all-users/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://cybernetnews.com/empty-recycle-bin-for-all-users/', 'tip']);" >tip</a> I came across, which will be handy for multi-user Windows’ users.

[<img class="alignnone wp-image-50703" style="padding-left: 0px;padding-right: 0px;margin-left: auto;margin-right: auto;padding-top: 0px;border-style: initial;border-color: initial;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2011/10/Image-018_thumb.png" alt="emptying-recycle-bin-command " width="548" height="279" border="0" />][1]For Windows 7 and Server 2008 computers &#8211;

  * `<span style="font-family: Arial"><em>rd /s c:$Recycle.Bin</em></span>`

For Windows XP,Vista and Server 2003 editions &#8211;

  * `<span style="font-family: Arial"><em>rd /s c:recycler</em></span>`

Now, launch Command Prompt (Start>run>cmd), paste one of the above command (as per your OS), hit enter. Next, type ‘Y’, hit enter again. There you go, this takes around 5 seconds saving you some time and repetitive work.

 [1]: http://cdn.devilsworkshop.org/files/2011/10/Image-018.png
