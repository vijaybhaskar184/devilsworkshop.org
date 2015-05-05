---
title: GreaseMonkey How-To Guide!
date: 2008-03-13
views:
  - 5064
dsq_thread_id:
  - 2946464440
---
***Note:** This guide is written for beginners and only thing you are expected to know is how to install firefox extension. *

### \# Introduction

Greasemonkey is a Firefox extension for altering the web pages you visit. Greasemonkey performs these alterations using specially written javascript files called **userscripts**.

As a user, you need not worry about writing userscripts. There are plenty of places on internet where you can find millions of userscripts which alters the website you want, in a way you like! A list of such websites is provided at the end of this guide.

Now as a beginner you need to know few basics things first like&#8230;

  * Installing GreaseMonkey Extension
  * Installing GreaseMonkey Userscripts
  * Managing GreaseMonkey Userscripts (e.g. Uninstalling)

### \# Installing GreaseMonkey Extension

**Requirement:** Greasemonkey is firefox extension, so it can run on every platform on which firefox runs *(that includes Windows, Linux, Mac, etc). *So all you need is firefox. There are Greasemonkey alternative for [Internet Explorer][1] and [Opera][2] but they performs very poorly and thus not recommended.

<a href="http://www.spreadfirefox.com/node&id=199011&t=309" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=309', '']);" ><img class="wp-image-51902" src="http://sfx-images.mozilla.org/affiliates/Buttons/firefox3/468x60.png" border="0" alt="Firefox 3" /></a>

Now if you are in firefox then <a href="https://addons.mozilla.org/en-US/firefox/downloads/file/22898/greasemonkey-0.7.20080121.0-fx.xpi" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/downloads/file/22898/greasemonkey-0.7.20080121.0-fx.xpi', 'click here to install Greasemonkey extension']);" >click here to install Greasemonkey extension</a>! *(You can also visit *<a href="https://addons.mozilla.org/en-US/firefox/addon/748" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/748', 'GreaseMonkey Addon Page']);" ><em>GreaseMonkey Addon Page</em></a>*)*

Like other firefox extensions clicking on above should prompt a install now dialog as shown below&#8230;

[<img style="border-width: 0px;margin: 0px 0px 0px 30px" src="http://cdn.devilsworkshop.org/files/2008/03/image-thumb3.png" border="0" alt="Greasemonkey firefox extension - Install dialog" width="341" height="346" />][3]

Click on **Install Now** link. You need to restart you browser for installation to complete!

>> **On successful installation** *(after restart), *you should see Greasemonkey icon in lower-right corner of firefox browser

[<img style="border-width: 0px;margin: 0px 0px 0px 30px" src="http://cdn.devilsworkshop.org/files/2008/03/image-thumb4.png" border="0" alt="Greasemonkey successful installation image" width="367" height="135" />][4]

You must see Greasemonkey icon as shown above before proceeding!

### \# Installing GreaseMonkey Userscripts

Next comes important part of installing userscripts. Without userscripts Greasemonkey can&#8217;t do anything!

There are many place on internet where you can find userscripts. Normally a link to userscript ends with **user.js** extension.

Clicking on any such link will open a dialog like below. Just click **Install **button. Thats it!

[<img style="border-width: 0px;margin: 0px 0px 0px 30px" src="http://cdn.devilsworkshop.org/files/2008/03/image-thumb5.png" border="0" alt="Greasemonkey Userscript Installation Dialog" width="365" height="390" />][5]

You can also <a href="http://diveintogreasemonkey.org/install/userscript.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://diveintogreasemonkey.org/install/userscript.html', 'read this document']);" >read this document</a> describing this part in more detail as well as <a href="http://diveintogreasemonkey.org/videos/install-user-script.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://diveintogreasemonkey.org/videos/install-user-script.html', 'watch a slightly old video tutorial']);" >watch a slightly old video tutorial</a>.

### \# Managing GreaseMonkey Userscripts (e.g. Uninstalling)

In three ways you can mange a userscript from Greasemonkey management console: **disable, uninstall & reconfigure.**

To bring Greasemonkey management console,

  * either right click on Greasemonkey icon in lower-right corner and select **Manage User Scripts **option from context menu.
  * or Go to firefox main menu and select **Tools >> Greasemonkey >> Manage User Scripts **option.

It will look like below&#8230;

[<img style="border-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/03/greasemonkey-manage-user-scripts-thumb.jpg" border="0" alt="greasemonkey manage user scripts" width="494" height="433" />][6]

Now carefully look at above screenshot. From one place you can control everything related to userscripts on your system&#8230;

The left sidebar shows list of all scripts installed. Note some names are faint. That indicated a disabled script.

To perform certain operation on a userscript first select that userscript from left sidebar. Once selected its name get highlighted as shown in above screenshot.

**You can perform following operations on a userscript&#8230;**

  1. **Disable &#8211; **Disabling a userscript will make it inactive. It will remain on your PC but will not alter pages anymore. *(<a href="http://diveintogreasemonkey.org/videos/disable-user-script.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://diveintogreasemonkey.org/videos/disable-user-script.html', 'Video Tutorial']);" >Video Tutorial</a>)*
  2. **Uninstall** &#8211; It will remove userscript completely from system. *(<a href="http://diveintogreasemonkey.org/videos/uninstall-user-script.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://diveintogreasemonkey.org/videos/uninstall-user-script.html', 'Video Tutorial']);" >Video Tutorial</a>)*
  3. **Reconfigure &#8211;** It includes editing list of pages which a userscript supposed to alter. You will rarely need to use to this option. *(<a href="http://diveintogreasemonkey.org/videos/exclude-pages.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://diveintogreasemonkey.org/videos/exclude-pages.html', 'Video Tutorial']);" >Video Tutorial</a>)*

This covers most of the things from user perspective!

### \# Finally Some Greasemonkey Repositories&#8230;

  * <a href="http://userscripts.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userscripts.org/', 'Userscripts.org']);" title="http://userscripts.org/">Userscripts.org</a>
  * Old Greasemonkey script repository
  * <a href="http://userscripts.org/users/5398/scripts" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userscripts.org/users/5398/scripts', 'List of userscripts developed by me']);" >List of userscripts developed by me</a>

**Credits: **Part of this article and all video tutorials are by <a href="http://diveintogreasemonkey.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://diveintogreasemonkey.org/', 'Dive Into Greasemonkey']);" ><em>Dive Into Greasemonkey</em></a>!

 [1]: http://devilsworkshop.org/2008/02/13/ie7pro-the-best-add-on-for-worst-browser/
 [2]: http://devilsworkshop.org/2008/01/29/using-greasemonkey-scripts-in-opera-how-to/
 [3]: http://cdn.devilsworkshop.org/files/2008/03/image11.png
 [4]: http://cdn.devilsworkshop.org/files/2008/03/image12.png
 [5]: http://cdn.devilsworkshop.org/files/2008/03/image13.png
 [6]: http://cdn.devilsworkshop.org/files/2008/03/greasemonkey-manage-user-scripts.jpg
