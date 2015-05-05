---
title: 'Firefox Tweak : Sharing (Synchronize) Firefox Profiles Bookmarks, Extension, etc between Window XP and Windows Vista!'
author: rahul286
date: 2007-06-08
url: /firefox-tweak-sharing-synchronize-firefox-profiles-bookmarks-extension-etc-between-window-xp-and-windows-vista/
views:
  - 316
dsq_thread_id:
  - 2946416562
categories:
  - Reviews
tags:
  - Firefox
  - Google
  - Internet Explorer
  - Security
  - Windows
---
If you are using a system with Windows XP and Windows Vista and also use Firefox on both installations then you may find it annoying to manually synchronize profile settings like Bookmarks, Extensions, Passwords, History, Cookies, Preferences, etc between two Firefox installations!

It may be the case the you want to synchronize both firefox but left wondering how to do it? Also some may be using Google&#8217;s Browser sync which takes up lots of bandwidth! So here lets do it Geeky way without transferring single byte to or from any third party site!

<u>** #Before Going Ahead**</u>

Lets describe example scenario so that it will be easier to grasp the things.

  1. I have installed Windows XP first.
  2. I am using firefox on XP first.Also I have 2 Firefox profiles on windows XP. ([Why and How I created two profiles?][1])
  3. Say today I have installed Windows Vista and also a new firefox.
  4. I am in Vista currently and my Vista installation drive is C:\ and XP is on D:\ Drive. (This may looks different if you switch between Operating Systems)
  5. My user name is **Devil **on both installations.

<u>**#Lets do it (Before you gets bored 😉**</u>

<u>**A. Copying profile.ini**</u>

1. Open Windows Explorer [Hot-Key: Windows Key + E ].

<a title="STEP_A2" name="STEP_A2"></a>2. Go to Windows XP&#8217;s Firefox Profile Folder. (**Note:-**Replace **D:\** and **Devil** with your XP&#8217;s **installation drive** and **user name** respectively. **Also save your path in text file for later use**)

`<strong> D:</strong>\Documents and Settings\<strong>Devil</strong>\Application Data\Mozilla\Firefox`

3. **<font color="#990000">Copy</font>**<font color="#990000"><strong> </strong></font>**profile.ini **file present in above folder (to clipboard) [Hot-key: Ctrl + C]

4. Now Go to Vista&#8217;s Firefox Profile Folder. (**Note:-** Replace **C:\** and **Devil** with your Vista&#8217;s **installation drive** and **user name** respectively)

`<strong>C:</strong>\Users\<strong>Devil</strong>\AppData\Roaming\Mozilla\Firefox`

Here note that **AppData** folder may be hidden and you may need to to unhide it by changing settings in **Folder Options.** You can alternatively click on Windows Explorers address bar any type the following:

`%AppData%\Mozilla\Firefox`

5. Now you may find a **profile.ini** already existing in above folder. Delete it or rename it if you want to play safe!

6. Now **<font color="#990000">paste</font>** **profile.ini **here which we were copied in step 3.

<u>**B. Modifying profile.ini**</u> :

1. Open **profile.ini.**

2. The content may look like as follows:

`[General]<br />
StartWithLastProfile=1<br />
[Profile0]<br />
Name=default<br />
IsRelative=1<br />
Path=Profiles/fu77kq9n.default<br />
Default=1<br />
[Profile1]<br />
Name=Guest<br />
IsRelative=1<br />
Path=Profiles/Guest`

3. Now modify **IsRelative=0** and **Path=<Full Path>**.

4. You can **INSERT** Path you have saved in above [**Step A.2**][2] between **&#8220;Path=&#8221;** and **&#8220;Profiles&#8221;**. Also change **&#8216;/&#8217;** after Profiles to **&#8216;\&#8217;**.

5. With these changes ***Path=Profiles/Guest*** will become ***Path=D:\Documents and Settings\Yogi\Application Data\Mozilla\Firefox\Profiles\Guest.***

6. Repeat above modifications for all entries.

7. Final content of profile will look like as follows:

`[General]<br />
StartWithLastProfile=1<br />
[Profile0]<br />
Name=default<br />
IsRelative=0<br />
Path=D:\Documents and Settings\Yogi\Application Data\Mozilla\Firefox\Profiles\fu77kq9n.default<br />
Default=1<br />
[Profile1]<br />
Name=Guest<br />
IsRelative=0<br />
Path=D:\Documents and Settings\Yogi\Application Data\Mozilla\Firefox\Profiles\Guest`

Thats it all! Keep Syncin! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://devilsworkshop.org/2007/05/04/multiple-firefox-profiles-at-the-same-time-firefox-command-line-arguments-trick/
 [2]: #STEP_A2 "Click here to go to step A-2"
