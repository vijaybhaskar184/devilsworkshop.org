---
title: Hacking Windows NT 5.x (i.e. Windows 2000/XP/2003)
author: rahul286
date: 2007-02-09
url: /hacking-windows-nt-5x-ie-windows-2000xp2003/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/06/hacking-windows-nt-5x-ie-windows.html
views:
  - 333
dsq_thread_id:
  - 2946417852
categories:
  - Tips
tags:
  - Bing
  - Blogging
  - Google
  - Hacking
  - Internet Explorer
  - Security
  - Windows
---
In this post I&#8217;m writing about some Windows NT 5.x series (i.e. windows 2000/XP/2003) hack which I have gathered from various sources! Well due to lack of time I could not try all of the following hacks; but again whether a particular hack should work or not depends on security of that system! As security measure varies from system to system some of these may not work! Well that is for what comments facility is provided!  
<span style="font-size: 130%"><br /> <span style="font-weight: bold; color: #990000">#1. Opening command or cmd prompt from where it is Banned</span></span><span style="color: #990000"><span style="font-size: 130%">! </span> </span>  
Normally we start command or cmd prompt by executing <span style="font-style: italic">&#8220;Start>Run>Command.com&#8221;</span> or <span style="font-style: italic">&#8220;Start>Run>Command.exe&#8221;</span> respectively!

If this is not working, then u can try&#8230;  
1. Open Notepad (or any text editor).  
2. Type just <span style="font-weight: bold">command.com </span>or <span style="font-weight: bold">cmd.exe </span>(depending on what u want to open!).  
3. Without doing anything else, just save this file with whatever name u like (e.g. devil, rahul, etc) but <span style="font-weight: bold">extension must be &#8220;bat&#8221;. </span>e.g. filename cud be &#8220;devil.bat&#8221;, &#8220;rahul.bat&#8221;  
Then save it as Something.bat.

Now all u need to do is click on this file to start <span style="font-weight: bold">command</span>ing!

<span style="font-size: 130%; color: #990000"><span style="font-weight: bold">#2. Adding/Deleting a user to your network</span></span>  
1. Open command prompt!  
2. To <span style="font-weight: bold">add</span> user, type : <span style="font-style: italic">&#8220;</span><span style="font-weight: bold; font-style: italic">Net user Devil /ADD&#8221;</span>  
2. To <span style="font-weight: bold">delete</span> user, type : &#8220;<span style="font-weight: bold; font-style: italic">Net user Devil /DELETE&#8221;</span>

Well this may fail! Does it said access denied?  
Lets try to make this work by some nasty commands! (otherwise u r free to break into system by <a href="http://devilsworkshop.org/2006/06/13/windows-2000xp2003-all-versions-password-breaking/" style="font-weight: bold">breaking windows password!!!</a>)

so now, type: &#8220;<span style="font-weight: bold; font-style: italic">net localgroup&#8221;</span>

following is the output of this command in my college&#8230;

<blockquote style="font-family: courier new; color: #003300">
  <p>
    Aliases for \\COEP&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /> *Administrators<br /> *Backup Operators<br /> *Guests<br /> *HelpServicesGroup<br /> *Network Configuration Operators<br /> *ORA_DBA<br /> *Power Users<br /> *Remote Desktop Users<br /> *Replicator<br /> *Users<br /> The command completed successfully.
  </p>
</blockquote>

Yep admin is there with name <span style="font-weight: bold">Administrators</span>

so to add, type: &#8220;<span style="font-weight: bold; font-style: italic">net localgroup Administrator Devil /ADD</span>&#8221;  
similarly so to add, type: &#8220;<span style="font-weight: bold; font-style: italic">net localgroup Administrator Devil /DELETE</span>&#8221;  
<span style="font-size: 130%; color: #990000"><span style="font-weight: bold"><br /> #3. Opening blocked sites (orkut, myspace, etc.) with the help of command prompt!</span></span>  
Say orkut, myspace, etc is blocked in ur college/office. Well my college is kool in this regard!  
Lets try it for orkut!

Type (at command prompt): &#8220;<span style="font-weight: bold; font-style: italic">ping orkut.com&#8221;<br /> </span>Here is the output&#8230;

<span style="font-weight: bold; font-style: italic"></span>

<blockquote style="font-family: courier new; color: #006600">
  <p>
    Pinging orkut.com [72.14.209.85] with 32 bytes of data:Request timed out.<br /> Request timed out.<br /> Request timed out.<br /> Request timed out.
  </p>
  
  <p>
    Ping statistics for 72.14.209.85:<br /> Packets: Sent = 4, Received = 0, Lost = 4 (100% loss),
  </p>
</blockquote>

Does it look like failure to u??? All requests gotta time-out! Well as I said earlier my college is quite liberal so this has nothing to do with network admin!

Actually orkut, myspace, google and many well-known site does not allow pinging as it increased load on their servers! So does this mean no donut for u??

Well all we needed was IP address and we got it! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

so open up your browser and type following in address bar/navigation bar/url bar&#8230;

For <span style="font-weight: bold">orkut</span>, <span style="font-weight: bold">http://72.14.209.85</span>  
For <span style="font-weight: bold">myspace</span>, <span style="font-weight: bold">http://216.178.32.52</span>  
For <span style="font-weight: bold">google</span>, (wat??? google is blocked! R u on earth???) wel try <span style="font-weight: bold">http://72.14.207.99<br /> </span>  
Well if u r orkut or myspace addict, then there is another <a href="http://devilsworkshop.org/2006/12/17/updated-working-proxyies-for-orkut-myspace-etc/" style="font-weight: bold">article</a> u may like to read!
