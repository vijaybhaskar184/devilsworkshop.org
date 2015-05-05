---
title: 'Increase Your Fan Count On Orkut! [GreaseMonkey script]'
author: rahul286
date: 2008-05-23
url: /increase-your-fan-count-on-orkut-greasemonkey-script/
views:
  - 951
dsq_thread_id:
  - 2947089644
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Javascript
  - Orkut
  - Software
  - Windows
---
More than a year ago, I wrote a [script to increase your fans on orkut][1]. It was exploiting a bug, which over the time got fixed. But thanks to a new GreaseMonkey script, you can surely increase your orkut fan count to some extent, this time fully legally! 😉

This script is based on simple logic: you become fan of everyone on orkut and hopefully some of them will be your fan as well!

The script is for firefox users, and can be downloaded from here. If new are new to GreaseMonkey script, you may like to read this small guide.

**Increasing Fan&#8230;**

After installing this script, go to your friends page. The script will make you fan of all users on that page within a second. Just go on clicking ***next ***link so that you visit all friends pages and become fan of all.

**Automatically&#8230;**

If you have, say 1000 friends, then you will have to go through 50 friend pages atleast as a single page shows at the max 20 friends. This means you need to click atleast 49 times ***next ***link. 

Well do you think I will put you through so much pain? 😉

Just copy-paste following javascript into firefox&#8217;s navigation bar and hot enter. It will take you through all 50 pages automatically in a single tab. It also takes a small break in between so that you won&#8217;t get noticed by Orkut team. Of-course, you have to install above script, before using following codes&#8230; 

`javascript: var l = 1 ; var s = "http://www.orkut.com/Friends.aspx?show=all&pno=" myWindow = window.open(s+ l , "_blank"); function rb() {l++; myWindow.location = s + l;}; void setInterval(rb, 2000);` 

Thats it! Once you done with this script & codes, hope to see rise in number of fans. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

***(Credit:** By F? via <a href="http://www.orkutplus.net/2008/05/mass-fan-friends-become-fan-of-all-your.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutplus.net/2008/05/mass-fan-friends-become-fan-of-all-your.html', 'OrkutPlus']);" >OrkutPlus</a>)*

**Related:** [Clean all pending friend requests automatically][2]

 [1]: http://devilsworkshop.org/2006/10/12/orkut-latest-fan-flooder/
 [2]: http://devilsworkshop.org/2007/06/15/orkut-pending-friend-requests-deleter-script/
