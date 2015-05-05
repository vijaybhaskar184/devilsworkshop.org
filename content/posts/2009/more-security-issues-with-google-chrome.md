---
title: More security issues with Google Chrome
author: swati
date: 2009-05-07
excerpt: Very recently, I had written about Security Problems with Google Chrome and how a FIX had been released to resolve the issue. But it appears that within a span of two weeks, Google Chrome has been updated with two more security patches, to fix a pair of vulnerabilities, one being critical and the other high risk.
url: /more-security-issues-with-google-chrome/
views:
  - 349
dsq_thread_id:
  - 2947097703
categories:
  - News
tags:
  - Chrome
  - Google
  - Internet
  - Internet Explorer
  - Security
  - 'Tips &amp; Hacks'
  - vulnerability
---
<img class="wp-image-52575" style="margin-left: 0px;margin-right: 0px" src="http://cdn.devilsworkshop.org/files/2009/05/clip-image00218.jpg" border="0" alt="clip_image002" hspace="12" width="198" height="228" align="right" />Very recently, I had written about [Security Problems with Google Chrome][1] and how a <a href="http://googlechromereleases.blogspot.com/2009/04/stable-update-security-fix.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googlechromereleases.blogspot.com/2009/04/stable-update-security-fix.html', 'FIX']);" >FIX</a> had been released to resolve the issue. But it appears that within a span of two weeks, Google Chrome has been updated with two more security patches, to fix a pair of vulnerabilities, one being critical and the other high risk.

### Vulnerabilities

  * **Critical:** An attacker might be able to run code with the privileges of the logged on user.
  * **High:** An attacker might be able to run arbitrary code within the Google Chrome sandbox.

### Silent Updates

Google Chrome is released as a silent update, meaning that the browser patches itself without the user’s knowledge.

### Google Chrome Security Fixes

> #### **CVE-2009-1441: Input validation error in the browser process**
> 
> ****
> 
> *A failure to properly validate input from a renderer (tab) process could allow an attacker to crash the browser and possibly run arbitrary code with the privileges of the logged on user. To exploit this vulnerability, an attacker would need to be able to run arbitrary code inside the renderer process.***
> 
> **Mitigation**: An attacker would need to be able to run arbitrary code in the renderer process.
> 
> #### CVE-2009-1442: Integer overflow in Skia 2D graphics
> 
> ****
> 
> *A failure to check the result of integer multiplication when computing image sizes could allow a specially-crafted image or canvas to cause a tab to crash and it might be possible for an attacker to execute arbitrary code inside the (sandboxed) renderer process.***
> 
> **Mitigation**:
> 
>   * A victim would need to visit a page under an attacker&#8217;s control.
>   * Any code that an attacker might be able to run inside the renderer process would be inside the sandbox

*(Source: <a href="http://googlechromereleases.blogspot.com/2009/05/stable-update-security-fix.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googlechromereleases.blogspot.com/2009/05/stable-update-security-fix.html', 'GoogleChromeReleases']);" >GoogleChromeReleases</a>)*

 [1]: http://devilsworkshop.org/security-problems-with-google-chrome/
