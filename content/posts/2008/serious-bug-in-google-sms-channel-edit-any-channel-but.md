---
title: (Serious) Bug in Google SMS Channel – Edit Any Channel But…
author: rahul286
date: 2008-12-28
url: /serious-bug-in-google-sms-channel-edit-any-channel-but/
views:
  - 242
categories:
  - News
tags:
  - Bug
  - Google
  - SMS Tips and Tools
  - 'Tips &amp; Hacks'
---
A serious bug is discovered in Google’s new SMS Channel service. Although the service is in beta (labs), it have huge userbase specially which makes a bug like this serious one.

## First about the bug…

Bug is present in **“manage channel”** option beside each channel. When you click on it, editing page opens with URL structure like below:

`http://labs.google.co.in/smschannels/manage_channel/<strong>xxxxxx</strong>/edit<br />
`  
In above link, **xxxxxx** is user-readable name of the channel.

Ideally you should be allowed to edit your own channels only, but you can put any Google SMS channels name in place of **xxxxxx** and you will get editing screen for it!

**try this:** <a href="http://labs.google.co.in/smschannels/manage_channel/digitalinspiration/edit" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://labs.google.co.in/smschannels/manage_channel/digitalinspiration/edit', 'http://labs.google.co.in/smschannels/manage_channel/digitalinspiration/edit']);" title="http://labs.google.co.in/smschannels/manage_channel/digitalinspiration/edit">http://labs.google.co.in/smschannels/manage_channel/digitalinspiration/edit</a>

You will see a page like below. Yes, below one is Google SMS channel management page for top Indian technology blog – <a href="http://www.labnol.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.labnol.org/', 'Digital Inspiration']);" >Digital Inspiration</a>.

[<img class="wp-image-53315" style="border-right: 0px;border-top: 0px;border-left: 0px;border-bottom: 0px" src="http://cdn.devilsworkshop.org/files/2008/12/image-thumb18.png" border="0" alt="image" width="592" height="474" />][1]

## Don’t Get Panic…

I know above is enough to scare anyone who have large number of subscribers on their Google SMS channels. But although this bug is present, it can not be used to do any harm to anyone (at least as of now).

[<img style="border-right: 0px;border-top: 0px;margin-left: 0px;border-left: 0px;margin-right: 0px;border-bottom: 0px" src="http://cdn.devilsworkshop.org/files/2008/12/image-thumb19.png" border="0" alt="image" width="242" height="124" align="right" />][2]You will get access to edit page and you can change values too, but when you will hit Update Channel button you will get message, ***You have no permission to do this.*** *(see screenshot below)*

[<img style="border-right: 0px;border-top: 0px;margin: 0px 0px 0px 15px;border-left: 0px;border-bottom: 0px" src="http://cdn.devilsworkshop.org/files/2008/12/image-thumb20.png" border="0" alt="image" width="240" height="22" />][3]

Ideally above error should have been displayed whenever we enter forged URL into browser.

**“editing page options”** do not contain any important information which can be misused. Everything there is anyway publicly listed in channel directory except data source. Again data source information for most of the channel is obvious.

So overall this bug is not harmful, but it presence may lead to more harmful bug in near future. Best would be, if Google SMS Channels team fix this in time! Thanks <a href="http://www.orkut.co.in/Main#Profile.aspx?uid=3349344200309242278" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.co.in/Main#Profile.aspx?uid=3349344200309242278', 'Saeed']);" >Saeed</a>. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Related:** [Problems with Google SMS Channels][4]

 [1]: http://cdn.devilsworkshop.org/files/2008/12/image20.png
 [2]: http://cdn.devilsworkshop.org/files/2008/12/image21.png
 [3]: http://cdn.devilsworkshop.org/files/2008/12/image22.png
 [4]: http://devilsworkshop.org/problems-with-google-sms-channels/
