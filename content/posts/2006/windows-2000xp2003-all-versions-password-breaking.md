---
title: Breaking Windows 2000/2003/XP/Vista Administrator Password
author: rahul286
date: 2006-06-13
url: /windows-2000xp2003-all-versions-password-breaking/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/06/windows-2000xp2003-all-versions.html
views:
  - 6184
dsq_thread_id:
  - 2946417919
categories:
  - Tips
tags:
  - Internet Explorer
  - Security
  - 'Tips &amp; Hacks'
  - Windows
---
Going by my word posting here about a simple tool which will break Windows 2000/XP/2003&#8217;s Administrator account&#8217;s password.

Before starting, for newbies&#8230;

> Windows NT 5.0 = Windows 2000 (all edition)  
> Windows NT 5.1 = Windows XP (all edition)  
> Windows NT 5.2 = Windows 2003 (all edition)

So throughout this post I will refer our target as Windows NT 5.x (as following content are equally applicable to all Windows NT 5.x OS family).

So lets start the fun&#8230;  
You will be surprised to know that you can break into any Windows NT 5.x system without any software tool 80% of the time! For rest you need a software like below!

**First lets get to 80% of the vulnerable system&#8230;.**

In Windows NT 5.x, you can create any no. of user with different names, privileges and optionally password.  
One such account with highest privilege level, with user name &#8220;Administrator&#8221; is setup by default.

At the time of installation Windows NT 5.x prompts for password but many systems are setup by vendors and other person. The end-user of this system is different than one who installed it. These lazy people are always in hurry and often left this password as blank.

The irony comes next. In final step of installation you create an account with mostly your first name. Lock it with password(optionally) and start using the system. Now on welcome screen you see account(s) with different name. But have you never see this default &#8220;administrator&#8221; account unless you boot in &#8220;safe mode&#8221;.

Now if you can&#8217;t see &#8220;administrator&#8221; account on screen (as with Windows XP login default screen), just press  <span style="font-weight: bold">&#8220;CTRL+ALT+DEL&#8221;</span> and it will change login &#8220;screen&#8221; to login &#8220;box&#8221; where you can type &#8220;administrator&#8221; as user name! This is what works 80% of the time.

**Now for rest of the 20% system&#8230;. **  
There are literally more than 100&#8217;s of tool available on Internet and the tool I use is a small Live-CD named <a href="http://home.eunet.no/pnordahl/ntpasswd/bootdisk.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://home.eunet.no/pnordahl/ntpasswd/bootdisk.html', 'ntpasswd']);" >ntpasswd</a> created by <a href="http://home.eunet.no/pnordahl/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://home.eunet.no/pnordahl/', 'pnordahl']);" >pnordahl</a>. I got it from my hacker friend <a href="http://www.suruninfocoresystems.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.suruninfocoresystems.com/', 'Surun']);" >Surun</a>.  
Burn this ISO on a CD. Its bootable image of approx 2.7 MB.

It has Linux OS with text-mode only. No Linux Knowledge Require here to use this disk. 😉

After booting from CD. A menu driven program will start with options and their description at each level.  
READ EVERYTHING BEFORE GOING AHEAD as one mistake may make the target machine unusable.

One mistake may crash the system to the reinstallation phase! So test it first on systems from college, office, etc! 😉

**It worked 100% of the time&#8230;.**  
As its 3.03 MB (after extracting) you can burn it on a mini-CD and keep it in your wallet all the time, so can roam around having master key to all systems having Windows NT 5.x family OS!

**Link:** <a href="http://home.eunet.no/pnordahl/ntpasswd/bootdisk.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://home.eunet.no/pnordahl/ntpasswd/bootdisk.html', 'ntpasswd']);" >ntpasswd</a> by <a href="http://home.eunet.no/pnordahl/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://home.eunet.no/pnordahl/', 'pnordahl']);" >pnordahl</a>

<p class="info">
  <strong>New comments are closed on this post! Try out our <a title="Support Forums" href="http://devilsworkshop.org/support/">Support Forums</a>.</strong>
</p>
