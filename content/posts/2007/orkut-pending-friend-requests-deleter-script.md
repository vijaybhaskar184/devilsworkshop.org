---
title: Orkut Pending Friend Requests Deleter Script!
author: rahul286
date: 2007-06-15
url: /orkut-pending-friend-requests-deleter-script/
views:
  - 978
dsq_thread_id:
  - 2946414438
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Orkut
  - Software
  - Windows
---
After long time I got some time for orkutting yesterday and noticed that there were 250+ friend requests pending when I checked my <a href="http://www.orkut.com/Friends.aspx" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/Friends.aspx', 'friends']);" target="_blank">friends</a> page!

Actually they are pending from more than a month and I really want to clean-out! Then I proceeded manually and soon realized steps through which I was going&#8230;

  1. Selecting **&#8216;EDIT&#8217;** link;
  2. Clicking on **&#8216;DELETE&#8217;** button;
  3. Again Hitting **&#8216;YES&#8217;** button when confirmation dialog box pops out!

So I decided to create a GreaseMonkey Script and after few hours of works its ready for you! The good thing about this one is its preconfigured to delete only pending friend request although it is technically capable of deleting all friends!

**Installation: **

  1. Install <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Firefox']);" >Firefox</a> if you don&#8217;t have it! (yes it only works with Firefox)
  2. <a href="https://addons.mozilla.org/en-US/firefox/addon/748" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/748', 'Install Greasemonkey']);" target="_blank">Install Greasemonkey</a> extension. (<a href="http://www.spreadfirefox.com/node&id=199011&t=1greasemonkey/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1greasemonkey/', 'Need help']);" >Need help</a>)
  3. Finally <a href="http://userscripts.org/scripts/source/9881.user.js" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userscripts.org/scripts/source/9881.user.js', 'Click here to install Orkut Pending Friend Request Deleter Script']);" >Click here to install Orkut Pending Friend Request Deleter Script</a>!

**Note:** If meanwhile you want script to stop from executing, first thing to do is close that tab/window!

**Update:** One of DW reader ***Pari*** needs some help so she can delete multiple friends from her friend list other than pending friend requests list&#8230;

Technically you can delete all your friends in one go irrespective of their status! Also you can delete all friends from a particular **level** or **group!**

**Lets do it for All Friends first!**[<img class="wp-image-50833" src="http://cdn.devilsworkshop.org/files/2007/06/greasemonkey-select-manage-user-scripts-option-by-devilsworkshoporg.thumbnail.JPG" alt="Select Manage User Script Option" align="right" />][1]

  1. Right-Click on GreaseMonkey Icon in bottom-right corner of your firefox window.
  2. Select ***Manage User Scripts*** option. (screenshot =>> )
  3. A window will open listing all the scripts! (See following screenshot)
  4. Select (by clicking) ***Orkut Pending Friend Request Deleter script*** by clicking on it!
  5. Click ***edit*** button on right side. A box will pop-up!
  6. Type (copy/paste) this address*** http://www.orkut.com/Friends.aspx*** in that!
  7. Hit OK!

<a href="http://cdn.devilsworkshop.org/files/2007/06/greasemonkey-modify-pages-option-for-script-by-devilsworkshoporg.JPG" target="_blank" title="Editing Options for a particular script"></a>

<div style="text-align: center">
  <a href="http://cdn.devilsworkshop.org/files/2007/06/greasemonkey-modify-pages-option-for-script-by-devilsworkshoporg.JPG" target="_blank" title="Editing Options for a particular script"><img src="http://cdn.devilsworkshop.org/files/2007/06/greasemonkey-modify-pages-option-for-script-by-devilsworkshoporg.JPG" alt="Editing Options for a particular script" width="410" /></a>
</div>

<p align="center">
  <em>(Click on image to enlarge it) </em>
</p>

**Now for a particular friend Level/Group!**

  1. First Right-click on a friends Level/Group link which you want to clean!
  2. From context menu, select ***Copy Link Location. ***
  3. The link is on your clipboard. You have to use this link instead of address we have used in above step 6.

Need more help?? Ask me&#8230; preferably via comments 😉

 [1]: http://cdn.devilsworkshop.org/files/2007/06/greasemonkey-select-manage-user-scripts-option-by-devilsworkshoporg.JPG "Select Manage User Script Option"
