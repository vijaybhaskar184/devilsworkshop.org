---
title: 'Asepsis: Get rid of .DS_Store files on OS X'
author: vibin
date: 2013-10-02
excerpt: This tutorial lets you remove .DS_Store files on Mac safely, which are all over the place and mess with your project folders.
url: /asepsis-rid-dsstore-files-os/
dsq_thread_id:
  - 2967815139
categories:
  - Tutorial
tags:
  - Mac OS X
  - Terminal
---
If you&#8217;ve been using Mac since a long time, you must have encountered &#8216;.DS_Store&#8217; files sometime. These are hidden files which get created in Finder automatically, and you can find them in almost every folder on your Mac!

A &#8216;.DS_Store&#8217; file contains preferences related to the folder and contains information like position of icons, view settings and etc. meta data. All this sounds fine, but if you&#8217;re a developer, you&#8217;ll surely hate this as these files get into your project folder.

Here&#8217;s how you can get rid of these hidden files.

[<img class="aligncenter size-full wp-image-77920" alt="No .DS_Store files found" src="http://cdn.devilsworkshop.org/files/2013/10/Screen-Shot-2013-10-02-at-4.39.26-PM.png" width="533" height="222" />][1]

There&#8217;s a tool called Asepsis, which does this. Asepsis creates a wrapper around Apple&#8217;s framework `DesktopServicesPriv` which is responsible for creation of .DS\_Store files. This wrapper will redirect all the .DS\_Store files into a single folder. The exact path of this folder is `/usr/local/.dscage`.

Asepsis is available as a .mpkg file, so you&#8217;ve to install it manually. You&#8217;ve to restart your Mac to complete installation and Asepsis will start to run in background. So the next time a .DS_Store file gets created, it goes into the `.dscage` folder (which is where all .DS_Store files reside).

But Asepsis itself won&#8217;t migrate the existing .DS_Store files. For that, you have to fire up terminal and run its command line utility.

Running `asepsisctl migratein` will migrate all the .DS_Store files from your home directory to `.dscage` folder. But that&#8217;s not all! If you have websites in your /Applications, like me, you have to run `asepsisctl --root /Applications migratein`. This is because I have my WordPress site under MAMP which is in /Applications/ (and I obviously don&#8217;t want .DS_Store files in my site folder).

After you&#8217;ve done all this, you can check if .DS_Store files exist in a folder, by running &#8211;  
`find . -iname .ds_store`.

One important thing to note is, Asepsis won&#8217;t work on Mavericks and you might even run into booting issues if you try to install it.

Thanks to <a href="https://twitter.com/r_thakker" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/r_thakker', 'Rakshit Thakker']);" >Rakshit Thakker</a> for the geeky tip!

**Link**: <a href="http://asepsis.binaryage.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://asepsis.binaryage.com/', 'Asepsis']);" >Asepsis</a>

 [1]: http://cdn.devilsworkshop.org/files/2013/10/Screen-Shot-2013-10-02-at-4.39.26-PM.png
