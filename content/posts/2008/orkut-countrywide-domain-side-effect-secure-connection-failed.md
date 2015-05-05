---
title: '[Fixed] Orkut countrywide domain side-effect – Secure Connection Failed!'
author: rahul286
date: 2008-07-06
url: /orkut-countrywide-domain-side-effect-secure-connection-failed/
views:
  - 188
dsq_thread_id:
  - 2947090662
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Google
  - Social Media
  - 'Tips &amp; Hacks'
---
**Update: **Issue is fixed by Orkut.Looks like Orkut team is reading DW! 😉

And those who think **orkut.co.in** does not exist, check [this post][1] for screenshot.

* * *Yesterday, I came across one more side-effect of 

[orkuts countywide domains][2]. I was using [Friend Finder][3] on Orkut, when I lost secure connection with Orkut server. I stumbled on following error, **&#8220;Secure Connection Failed&#8221;&#8230;**</p> 

<img class="wp-image-53359" src="http://cdn.devilsworkshop.org/files/2008/07/orkut-ssl-certificate-error-1.jpg" alt="Orkut SSL Certificate Error-1.jpg" width="480" height="250" />

As solution, there is not much a user can do apart from adding orkuts country specific domain, in my case **orkut.co.in**, into firefox exception list.

Just click on ***&#8216;Or you can add an exception&#8230;&#8217;*** option as highlighted in above screenshot. Firefox will warn you about exception, but if you want to use Friend Finder and may be few more feature on Orkut, you have to go ahead.

<img src="http://cdn.devilsworkshop.org/files/2008/07/orkut-ssl-error-add-exception-in-firefox-1.jpg" alt="Orkut - ssl error - add exception in firefox-1.jpg" width="480" height="321" />

Orkut team registered many country domains but they just forgot to buy SSL certificate for each domain. SSL certificates are domain/IP address specific.

When you access orkut from India, Brazil and few other countries, all orkut.com requests are automatically redirected to orkuts county level domains for whom digital certificates are missing. I am not sure how this will affect your security but the way Firefox 3 alert users, many users may feel scared.

Well, one should not blame firefox for there scary alerts as they are just doing their job, the best possible way. Misconfiguration in secure area just proves how serious Google is about orkut users security, again!

**Wikipedia Link:** <a href="http://en.wikipedia.org/wiki/Digital_certificate#Certificates_and_web_site_security" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Digital_certificate#Certificates_and_web_site_security', 'Certificates and web site security']);" >Certificates and web site security</a>

 [1]: http://devilsworkshop.org/2008/05/29/check-indian-version-of-orkut/
 [2]: http://devilsworkshop.org/2008/06/01/list-of-orkuts-country-specific-sites/
 [3]: http://devilsworkshop.org/2008/02/10/orkuts-new-friends-finder-find-friends-from-any-email-account/
