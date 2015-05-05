---
title: ALERT! indiatimes.com is insecure!
author: rahul286
date: 2008-06-10
url: /alert-indiatimescom-is-highly-insecure/
views:
  - 298
categories:
  - Tips
tags:
  - Bing
  - Google
  - Hacking
  - 'Tips &amp; Hacks'
---
<img class="wp-image-51252" src="http://cdn.devilsworkshop.org/files/2008/06/200806101812.jpg" width="203" height="35" alt="200806101812.jpg" style="float:right" /><a href="http://indiatimes.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://indiatimes.com/', 'indiatimes.com']);" >indiatimes.com</a>, one of the top portal in India is turned out to be highly insecure in a small security test I have conducted. Indiatimes have traffic rank #17 in India with global rank of #255 as per <a href="http://www.alexa.com/data/details/traffic_details/indiatimes.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.alexa.com/data/details/traffic_details/indiatimes.com', 'alexa']);" >alexa</a>. This makes things more serious!

All of us are familiar with forget password wizard on many top sites. If you have ever noticed it, after verifying your personal details in forget password wizard you normally get a new password. Actually any good *(read secure)* login-based service never stores your password in plain-text and thus cannot return your original password. I [wrote][1] about this in much detail long time back [here][1].

Now coming back to the Indiatimes, I just got curious about this top Indian site. Actually I had seen them returning original password around 6 years back, but just to make everything sure I created a new account there and went through forget password wizard. Shocking&#8230; I got original password back!

First disadvantage of returning original password is that if someone can answer your security question, he can get access to your account without your knowledge. Resetting password prevents this as if your password get reset, your original password will not work when you will try to login next time. But in case of indiatimes, one can monitor your all activity as long as he wants because even if you change your password he can simply get it *again* using forget password wizard!

Moreover the forget password wizard is vulnerable to brute-force attack. They have no <a href="http://en.wikipedia.org/wiki/Captcha" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Captcha', 'CAPTCHA']);" >CAPTCHA</a> or restriction on number of tries. Also they have smallest forget possword wizard with just one question. They don&#8217;t verify your birthdate or pin/zip code.

So if you are an Indiatimes user you should first change your security question to something really hard and then its answer to at-least 10 characters. This will ensure your personal safety till Indiatimes fix things up from their side.

**Related:** [How To Get Back Your Hacked Gmail/Orkut/Google Account][2]

*[****Disclaimer:*** *This post is to alert indiatimes users about their online safety. Any misuse of information presented here may subject you to legal actions. Read our [terms of service][3]&#8230;]*

 [1]: http://devilsworkshop.org/2006/09/19/hacking-yahoo-hotmail-gmail-etc-the-facts/
 [2]: http://devilsworkshop.org/2008/03/14/gmail-orkut-google-account-hacked-forget-password-fails/
 [3]: http://devilsworkshop.org/tos/
