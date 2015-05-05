---
title: Play Music files in Terminal in OS X
author: vibin
date: 2013-09-18
excerpt: "OS X's built in afplay CLI utility lets you play music in background without leaving the shell."
url: /play-music-files-terminal-osx/
dsq_thread_id:
  - 2947127676
categories:
  - Tutorial
tags:
  - Mac OS X
  - Terminal
---
If you&#8217;re a developer and use a Unix-like OS, you must be spending a good amount of time inside the shell. Here&#8217;s a nice, little tip on how to play Music with in the command line interface, in OS X.

[<img class="aligncenter size-full wp-image-77706" alt="afplay" src="http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-18-at-11.57.57-AM.png" width="587" height="190" />][1]

OS X ships with a CLI utility called afplay. There&#8217;s not much documentation available, even the man page doesn&#8217;t show its options. But it&#8217;s there and more importantly, it works.

To use it, pass a Music file&#8217;s path in the command, like this:

`afplay ~/Music/song.mp3`

I guess it works for all Music files, regardless of the type (I tried it with .m4a and it worked fine). To stop the play, you can of course hit Ctrl + C and the shell will terminate it.  
You can also play Music in background by appending an ampersand to the command, like this:

`afplay ~/Music/song.mp3 &`

This will allow you to use the shell while the Music is playing in background. To stop it, you can do `killall afplay`.

You can also use Quicklook&#8217;s CLI to play Music files. The utility is named `qlmanage`. It basically throws a Quicklook pop up of any file you pass as an argument. So it works fine for Music files too.

[<img class="aligncenter size-full wp-image-77707" alt="qlmanage" src="http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-18-at-12.00.55-PM.png" width="560" height="448" />][2]

If you like this, you might want to take a look at some [useful Quicklook plugins][3]. Also, thanks to <a href="https://twitter.com/r_thakker" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/r_thakker', 'Rakshit Thakker']);" >Rakshit Thakker</a> for the tip!

 [1]: http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-18-at-11.57.57-AM.png
 [2]: http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-18-at-12.00.55-PM.png
 [3]: http://devilsworkshop.org/tutorial/5-plugins-power-quick-mac-browsing-code/77571/
