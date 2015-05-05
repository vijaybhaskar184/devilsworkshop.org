---
title: Details of Google’s Latest Security Hole which resulted into session hijacking!
author: rahul286
date: 2007-01-25
url: /details-of-googles-latest-security-hole-which-resulted-into-session-hijacking/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/01/details-of-googles-latest-security-hole.html
views:
  - 149
categories:
  - Tips
tags:
  - Google
  - Internet Explorer
  - Security
  - 'Tips &amp; Hacks'
---
Tony Ruscoe exposed another google security bug! This was used for session hijacking!

As <span class="authorname">Philipp Lenssen Says,</span>

<blockquote style="font-style: italic">
  <p>
    Tony&#8217;s not a malicious hacker of course (in fact, the first thing he did was inform Google Security!), but he found a loophole in a new feature Google rolled out recently. Using a proof of concept script targeting this loophole “ which I can detail once it&#8217;s fixed “, all Tony needed to do was make a user who&#8217;s logged into their Google Account visit a page of his, which happened to be on a trustworthy google.com sub-domain. I visited Tony&#8217;s page, which sent my Google cookies to Tony
  </p>
</blockquote>

Well what could Tony did with these cookies??? Here is a (incomplete) list&#8230;

  * Get into my Google Docs & Spreadsheets application and read and modify documents I saved there
  * Read subjects from my Gmail inbox, as well as the first few words of these emails, by adding a Gmail module to the Google Personalized Homepage
  * View my Google Accounts page
  * Enter my Google Reader
  * Read my private Google Notebook
  * View my complete Google search history (for as long as I had the search history feature enabled in Google)

Tony phrased it on his proof of concept page, <span style="font-style: italic">Think yourself lucky that I wasn&#8217;t that evil!</span>

<span style="font-weight: bold">For details&#8230;<br /> </span>

  * <span class="authorname"><a href="http://blog.outer-court.com/archive/2007-01-12-n73.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.outer-court.com/archive/2007-01-12-n73.html', 'Philipp Lenssens&#8217; post about potentials of this bug ']);" >Philipp Lenssens&#8217; post about potentials of this bug </a></span>
  * <span class="authorname"><a href="http://blog.outer-court.com/archive/2007-01-14-n21.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.outer-court.com/archive/2007-01-14-n21.html', 'Tony Ruscoes&#8217; proof of concept page with all details!']);" >Tony Ruscoes&#8217; proof of concept page with all details!</a></span>

Well Tony was not evil n thats for sure. The bug is also fixed now without causing any damage!

Thanks <a href="http://ruscoe.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ruscoe.net/', 'Tony']);" >Tony</a>!

<span style="font-style: italic">Related posts:</span>

  * [List of Google Subdomains &#8211; Treat for Google Lovers!][1]

 [1]: http://devilsworkshop.org/2007/01/15/list-of-google-subdomains-treat-for-google-lovers/
