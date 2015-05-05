---
title: Security Problems with Google Chrome?
author: swati
date: 2009-04-29
excerpt: |
  There was a security threat with Google’s web browser - Google Chrome. According to the Google Chrome Team, there was an error in handling URLs with a chromehtml: protocol. This allowed the attacker to run scripts of his choice on any page or enumerate files on the local disk under certain conditions.
  
  Because of this problem, the attacker could endanger any user who browsed a malicious site using Internet Explorer and had Google Chrome installed.
url: /security-problems-with-google-chrome/
views:
  - 52
categories:
  - News
tags:
  - Browsers
  - Chrome
  - Google
  - Internet
  - Internet Explorer
  - News
  - Security
  - 'Tips &amp; Hacks'
---
<img class="alignright wp-image-52567" style="border: 0pt none;margin-left: 0px;margin-right: 0px" src="http://cdn.devilsworkshop.org/files/2009/04/clip-image003-thumb.jpg" border="0" alt="clip_image003" width="198" height="228" align="right" />There was a security threat with Google’s web browser &#8211; Google Chrome. According to the Google Chrome Team, there was *an error in handling URLs with a chromehtml: protocol. This allowed the attacker to run scripts of his choice on any page or enumerate files on the local disk under certain conditions.*

Because of this problem, the attacker could endanger any user who browsed a malicious site using Internet Explorer and had Google Chrome installed.

As per <a href="http://blog.watchfire.com/wfblog/2009/04/google-chrome-universal-xss-vulnerability-.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.watchfire.com/wfblog/2009/04/google-chrome-universal-xss-vulnerability-.html', 'IBM Rational Application Security Insider']);" >IBM Rational Application Security Insider</a>, this allowed a *dangerous combination of new security vulnerabilities letting a malicious attacker to bypass the Same Origin Policy restrictions for any site using the victim&#8217;s Google Chrome.*

****

### **The dangerous impact:**

  1. Cross-Site Scripting attack where the attacker could steal cookies, save form filler data, modify user-browsing experience and facilitate phishing attacks.
  2. Leaking of information: from the victim&#8217;s files and directories on the local file-system.

But, the good news is that a <a href="http://googlechromereleases.blogspot.com/2009/04/stable-update-security-fix.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googlechromereleases.blogspot.com/2009/04/stable-update-security-fix.html', 'FIX has been released: Version 1.0.154.59 of Chrome']);" >FIX has been released: Version 1.0.154.59 of Chrome</a> and hopefully, all the security issues revolving around Google Chrome are under control now.

**Link: **<a href="http://googlechromereleases.blogspot.com/2009/04/stable-update-security-fix.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googlechromereleases.blogspot.com/2009/04/stable-update-security-fix.html', 'Fix for Chrome']);" >Fix for Chrome</a>****

*(Source: <a href="http://googlechromereleases.blogspot.com/2009/04/stable-update-security-fix.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googlechromereleases.blogspot.com/2009/04/stable-update-security-fix.html', 'GoogleChromeReleases']);" >GoogleChromeReleases</a> | <a href="http://blog.watchfire.com/wfblog/2009/04/google-chrome-universal-xss-vulnerability-.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.watchfire.com/wfblog/2009/04/google-chrome-universal-xss-vulnerability-.html', 'IBM watchfire']);" >IBM watchfire</a>)*
