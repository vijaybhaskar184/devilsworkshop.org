---
title: New Orkut Bug Let Spammer Send Any Link Without Image Verification! (Orkut Loves SPAM)
author: rahul286
date: 2008-02-03
url: /new-orkut-bug-let-spammer-send-any-link-without-image-verification-orkut-loves-spam/
views:
  - 243
dsq_thread_id:
  - 2946466066
categories:
  - Tips
tags:
  - Bing
  - Google
  - Internet Explorer
  - Security
---
<img class="wp-image-52699" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;margin: 0px 0px 0px 10px;border-right-width: 0px" height="88" alt="Orkut_Loves_Spam" src="http://cdn.devilsworkshop.org/files/2008/02/image8.png" width="420" border="0" /> 

Not so long back bugs in [orkuts privacy features][1] made their users [scrapbook][2] & [album][3] content accessible to everyone no matter what privacy settings they choose. Orkut team fixed those bug but unfortunately they have to cancel their holiday plan if any as a new bug in Orkut discovered which let spammer send any links without filling up captcha (image verification). All this means more [sCrap all][4] spam on orkut!

&#160;

**#proof of concept:**

Paste following code in any scrapbook&#8230;

<textarea rows="rows" cols="cols">http://www.orkut.com/ClickTracker.aspx?url=//////www.devilsworkshop.org</textarea> 

A link will be send which on clicking will take you to this blogs homepage!

Well you may link looks confusing so end user may not click on it&#8230;

Ok.. What about following code&#8230;

<textarea rows="rows" cols="cols"><a href="http://www.orkut.com/ClickTracker.aspx?url=//////www.devilsworkshop.org">Devils workshop</a></textarea>

How many of you looks at browser status bar when clicking link? 😉

****

**#How to **(ab)**use!**

To send links all you need to do is copy following code and append any URL without **http://** to it. *(Do not remove any slashes&#8230;)*

**http://www.orkut.com/ClickTracker.aspx?url=//////**&#160;

&#160;

**#How this bug can be abused?**

  * **Scrap All Script: **Spammers most favorite & most powerful tool against orkut is Scrap All script! 
  * **To spread Trojan, viruses, spywares, worms, etc: ****w**ww.devilsworkshop.org can be replace by link to malicious contents 

Old orkut user may remember in past spreading of worm via scrapbook was one of the reason orkut came up with captcha (image verification)while sending third-party links! What the use of captcha, if it can be bypassed! 

&#160;

**#Bug Details**

  * Bug is in **ClickTracker.aspx **(URL: http://www.orkut.com/ClickTracker.aspx ). 

&#160;

**#A simple fix Orkut can do..**

Put a if-else block at the beginning of **ClickTracker.aspx **which checks **url** parameter for third party domains (i.e. anything else than orkut.com or google.com). If third party domain is found, call captcha routine or just abort the execution.

&#160;

That&#8217;s it! Thanks <a href="http://www.orkutplus.net/2008/02/happy-spammers-day-send-links-without.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutplus.net/2008/02/happy-spammers-day-send-links-without.html', 'Gaurav']);" >Gaurav</a> for the bug and <a href="http://groups.google.com/group/orkut-help-suggestions/browse_thread/thread/f2a93a9b0579fd73#045ae9b299de2082" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://groups.google.com/group/orkut-help-suggestions/browse_thread/thread/f2a93a9b0579fd73#045ae9b299de2082', 'reporting']);" >reporting</a> this in orkut google-group! If you are a google-group user please post reply in <a href="http://groups.google.com/group/orkut-help-suggestions/browse_thread/thread/f2a93a9b0579fd73#045ae9b299de2082" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://groups.google.com/group/orkut-help-suggestions/browse_thread/thread/f2a93a9b0579fd73#045ae9b299de2082', 'this thread']);" >this thread</a> so that it gets noticed by orkut team earlier!

 [1]: http://devilsworkshop.org/2007/09/13/orkut-added-scrapbook-privacy-feature-safeguard-your-scrapbook-from-strangers/
 [2]: http://devilsworkshop.org/2007/12/16/3-ways-to-read-locked-scrapbook-on-orkut/
 [3]: http://devilsworkshop.org/2008/01/09/view-locked-orkut-album-in-orkut-style/
 [4]: http://devilsworkshop.org/2007/09/26/new-orkut-scripts-scrap-all-friends-with-single-click-send-images-flash-audio-video-more/
