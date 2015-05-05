---
title: Multiple Firefox Profiles at the same time – Firefox Command-line arguments trick!
author: rahul286
date: 2007-05-04
url: /multiple-firefox-profiles-at-the-same-time-firefox-command-line-arguments-trick/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/05/multiple-firefox-profiles-command-line.html
views:
  - 2060
dsq_thread_id:
  - 2946414522
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Internet Explorer
  - Security
  - Windows
---
How often do you wish to run multiple firefox profiles at the same time?  
In slightly non-technical words do you ever need to check two different accounts of same service, at the same time?  
As an example, consider the scenario (which is 100% real-life and was encountered by my friend Deva) &#8211; you are checking mails of your Gmail account and at the same time you want to check another gmail account. What you normally do is open up another Gmail account in another browser. Another similar situation often encountered by many orkuttians who have multiple orkut profiles!

Now from firefox 2.0+ onwards this is solved and you can run firefox with as many accounts as you want! Look at the following screenshots in which I am checking two Gmail accounts at the same time! <span style="font-style: italic">(Click on image to enlarge it)</span>

[<img class="wp-image-52218" src="http://cdn.devilsworkshop.org/files/2007/10/firefox_multiple_profile_2.jpg" alt="Multiple Firefox Profiles - Multiple Gmail Accounts" />][1]

Here comes one of the most awaited trick!

<span style="font-weight: bold">#1. Creating a Profile.<br /> </span><span>By default firefox runs in <span style="font-weight: bold;font-style: italic">default</span> profile. To run another instance of firefox with different profile you need to create first a different profile. To do this </span>run firefox with command line parameter <span style="font-style: italic;font-weight: bold">CreateProfile</span> followed by <span style="font-style: italic;font-weight: bold">profile name</span>.

Window user, can click on <span style="font-style: italic;font-weight: bold">&#8220;Start -> Run&#8221;</span> and execute firefox with followed by the command line arguments. For example,

`"C:Program FilesMozilla Firefoxfirefox.exe" -CreateProfile <span style="font-weight: bold">Rahul</span>`

where <span style="font-weight: bold">Rahul</span> is name of the profile. You can use any name.

(Note that the path <span style="font-style: italic;font-weight: bold">C:Program FilesMozilla Firefox</span> may change as per your <a href="http://kb.mozillazine.org/Installation_directory" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://kb.mozillazine.org/Installation_directory', 'installation directory']);" >installation directory</a>.)

On similar lines Linux and Mac OS user can create a new profile.

<span style="font-weight: bold">#2. Running firefox with new profile.<br /> </span>First start firefox the way you start. (This is to assure you that we are going in right direction).  
Now Windows users can again click on <span style="font-style: italic;font-weight: bold">&#8220;Start -> Run&#8221; </span>and execute firefox with followed by the command line arguments,

`"C:Program FilesMozilla Firefoxfirefox.exe" -no-remote -P <span style="font-weight: bold">Rahul</span>`

where <span style="font-weight: bold">Rahul</span> need to be replaced by the name of the profile you have used in step 1 while creating a new profile.

When you hit ENTER the profile will start in new context!  
The key here is <span style="font-weight: bold">-no-remote</span> command-line argument!

<span style="font-weight: bold">Extra Tricks:</span>  
You will probably use two or more profiles frequently. In that case the step 2 to run firefox with a new profile will need to be tweaked!

  * In simplest way Windows user can right-click on existing firefox shortcut and select <span style="font-weight: bold">copy</span> option from right-click menu.
  * Then paste it at your favorite place (probably desktop)
  * <span style="font-weight: bold">[optional]</span> It may appear with name like <span style="font-style: italic">Copy of Mozilla Firefox, </span>change it to some convenient name like <span style="font-style: italic">Rahuls Firefox</span> or <span style="font-style: italic">New Firefox</span> or anything you like.
  * Now again right-click on new shortcut and click on <span style="font-weight: bold">properties</span> option in right-click menu.
  * Switch to <span style="font-weight: bold">shortcut</span> tab in <span style="font-weight: bold">properties</span> window.
  * In <span style="font-weight: bold">target</span> you may find &#8211; <span style="font-weight: bold"> <span style="font-style: italic">&#8220;C:Program FilesMozilla Firefoxfirefox.exe&#8221;</span> </span>change it to something like<span style="font-weight: bold"> <span style="font-style: italic">&#8220;C:Program FilesMozilla Firefoxfirefox.exe&#8221; -no-remote -P Rahul</span>. <span><span>(see screenshot below for more help)</span></span><br /> </span>
  * Now click <span style="font-weight: bold">OK.</span>

[![Firefox Shortcut Properties][2]][3]

Thats it. Another firefox is at your bay!<span style="font-style: italic;font-weight: bold"></span><span style="font-weight: bold"></span>

 [1]: http://cdn.devilsworkshop.org/files/2007/10/firefox_multiple_profile_2.jpg "Multiple Firefox Profiles - Multiple Gmail Accounts"
 [2]: http://cdn.devilsworkshop.org/files/2007/10/firefox_shortcut_properties.jpg
 [3]: http://cdn.devilsworkshop.org/files/2007/10/firefox_shortcut_properties.jpg "Firefox Shortcut Properties"
