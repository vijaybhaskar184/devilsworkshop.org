---
title: Ever wondered about “autorun.inf” file in CDs/Pen Drives!
author: prateeks
date: 2009-01-19
url: /what-is-autoruninf/
views:
  - 249
dsq_thread_id:
  - 2947094642
categories:
  - Tips
tags:
  - Anti-Virus
  - Auto
  - Developers
  - Internet Explorer
  - Security
  - 'Tips &amp; Hacks'
  - Windows
---
While opening some optical drives (CDs) or pen drives you might have noticed that they contain **autorun.inf** file in it. Some people assume that it is some **Virus/Malware** which might infect their computer. But actually autorun.inf is just a script for invoking any event when some CD or Pen Drive is Inserted in PC. This feature is actually a part of **shell32.dll**.

You can <a href="http://gohi-tech.blogspot.com/2008/08/make-your-photo-to-be-displayed-when.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://gohi-tech.blogspot.com/2008/08/make-your-photo-to-be-displayed-when.html', 'set your own custom icon']);" title="Get your photo displayed as Thumbnail Icon">set your own custom icon</a> and your own custom file to start when media is inserted in computer. If you are a geek, then you can accomplish much more and impress your friends with some smart autorun scripts while burning CDs for them!

A sample of **autorun.inf** file looks like as shown below:  
`[autorun]<br />
open=autorun.exe<br />
icon=autorun.ico<br />
label= My Thumb Drive(98XXXXXXXX)<br />
`  
Taking above examples I&#8217;ll explain functions of commands here-

  * **Open** &#8211; Specifies which file to start when media is Inserted.
  * **Icon** &#8211; Specifies the Icon to appear in Windows explorer
  * **Label** &#8211; The Volume of Drive to Appear in Window Explorer

If you are lazy at writing this codes you can try a free tool, <a href="http://www.ashzfall.com/products/autorun/autorunm.zip" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ashzfall.com/products/autorun/autorunm.zip', 'Autorun.inf Maker']);" >Autorun.inf Maker</a>.

<p style="text-align: center;">
  <a rel="attachment wp-att-3647" href="http://devilsworkshop.org/what-is-autoruninf/autorun/"><img class="size-full wp-image-3647 aligncenter" src="http://cdn.devilsworkshop.org/files/2009/01/autorun.png" alt="Autorun Maker" width="493" height="288" /></a>
</p>

You can bypass events written in autorun.inf by pressing shift key while inserting Pen Drive or CD. This is useful when you are unsure about what Pen Drive or CD might contain. However, I recommend you to use some good antivirus like AVG or Avast which takes less load on system and detects any unwanted threats. There is also an antivirus Program which is made for this purpose only which is mentioned [here][1].

**Link** : <a href="http://www.ashzfall.com/products/autorun/autorunm.zip" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ashzfall.com/products/autorun/autorunm.zip', 'Download Autorun Maker']);" title="Download AutorunM">Download Autorun Maker</a>  
**Also Read** : [Special Virus Scanner for USB][2]

 [1]: http://devilsworkshop.org/special-virus-scanner-for-usb-devices/ "Special Virus Scanner for USB"
 [2]: http://devilsworkshop.org/special-virus-scanner-for-usb-devices/ "Virus Scanner for USB"
