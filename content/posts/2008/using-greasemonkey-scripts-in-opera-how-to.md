---
title: 'Using GreaseMonkey Scripts in Opera! [How-To]'
author: rahul286
date: 2008-01-29
url: /using-greasemonkey-scripts-in-opera-how-to/
views:
  - 1670
dsq_thread_id:
  - 2946466053
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Javascript
  - Opera
  - Software
  - 'Tips &amp; Hacks'
  - Windows
---
Our reader Moses wanted to use GreaseMonkey scripts in Opera! If you are also interested in using GreaseMonkey scripts on opera here comes the two-step procedure&#8230;

&#160;

**\# Step 1: Configuring folder to store GreaseMonkey Script ***(Need to do this once only)*

  * Create a directory to store greasemonkey scripts. *(e.g. C:GM_opera)*
  * Go to ***Tools >> Preferences, ***it will open a window like below.&#160; 

<img class="wp-image-50847" style="border-right: 0px;border-top: 0px;margin: 0px 0px 0px 30px;border-left: 0px;border-bottom: 0px" height="343" alt="Opera_Preferences" src="http://cdn.devilsworkshop.org/files/2008/01/opera-preferences.jpg" width="394" border="0" />

  * Navigate to ***Advanced Tab, ***then click on ***Content option ***in left menu.
  * Click on ***JavaScript Options***. It will open another window like below&#8230;

<img style="border-right: 0px;border-top: 0px;margin: 0px 0px 0px 40px;border-left: 0px;border-bottom: 0px" height="424" alt="Opera_greasemonkey_scripts" src="http://cdn.devilsworkshop.org/files/2008/01/opera-greasemonkey-scripts.jpg" width="344" border="0" /> 

  * Click on ***Choose ***button to create a folder or select a folder to store GreaseMonkey scripts!

****

&#160;

**\# Step 2: Adding GreaseMonkey scripts&#8230; *(for every script&#8230;)***

  * Click on any GreaseMonkey script link. *(URLs ending with **.user.js** extension)*
  * You will see a plaintext file getting opened in browser without any install pop-up as you usually see in firefox!
  * Go to ***File >> Save as***&#160; opera menu option. When prompted location to save script, navigate to the folder you selected in **Step-1**!
  * Thats it! Just by saving GreaseMonkey scripts to preconfigured folder you can use them in opera!

&#160;

**#Few Notes&#8230;**

  * **To Uninstall: **Just delete the script from folder or move script file to some other location!
  * **To enable/disable:** You can&#8217;t. Only Install/Uninstall options are available. Or you can move files to different folder.
  * **To change sites script works on:** Open script in any text-editor and change *@include* and *@exclude* directive manually in script file.

&#160;

**#Compatibility Issues&#8230;**

Most GreaseMonkey scripts will work without any modification as they do not make use of GreaseMonkey APIs.&#160; But for those who make use of API you can install <a href="http://userjs.org/scripts/download/browser/enhancements/aa-gm-functions.js" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userjs.org/scripts/download/browser/enhancements/aa-gm-functions.js', 'Emulate GreaseMonkey functions']);" >Emulate GreaseMonkey functions</a> opera userscript. Installation method is same as mentioned in step-2.

It may not works always but its really worth trying. So installing above script is **highly recommended**. 

As an example our [Facebooks Ignore ALL button script][1] just works fine but [Block ALL script][2] is not working as it makes use of ***GM_xmlhttpRequest*** call which even above emulator script failed to implement! This may be bad news for orkut users as all scrap all scripts makes use of ***GM_xmlhttpRequest*** call.

****

**#Resources**

  * <a href="http://www.opera.com/support/tutorials/userjs/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opera.com/support/tutorials/userjs/', 'Official Article from Opera']);" >Official Article from Opera</a>
  * <a href="http://userjs.org/scripts/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userjs.org/scripts/', 'Script Directory for Opera Scripts']);" >Script Directory for Opera Scripts</a>

 [1]: http://devilsworkshop.org/2007/11/30/ignoreall-button-to-avoid-facebook-invitation-spam/
 [2]: http://devilsworkshop.org/2008/01/14/block-all-application-requests-with-one-click-facebook/
