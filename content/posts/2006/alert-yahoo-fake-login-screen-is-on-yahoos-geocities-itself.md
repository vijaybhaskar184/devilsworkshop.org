---
title: 'Alert: Yahoo Fake Login Screen is on Yahoo’s Geocities itself!'
author: rahul286
date: 2006-12-23
url: /alert-yahoo-fake-login-screen-is-on-yahoos-geocities-itself/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/12/alert-yahoo-fake-login-screen-is-on.html
views:
  - 296
dsq_thread_id:
  - 2946417891
categories:
  - Tips
tags:
  - 'Tips &amp; Hacks'
  - Yahoo
---
Few days back, I got a mail from one of my friend saying her yahoo account has been hacked! The Chinese attacker accomplished this by creating a fake-login screen! Actually there is more victims to this yahoo fake-login screen. While this type of attack isn&#8217;t new, what makes people vulnerable as this one is uploaded on yahoo&#8217;s geocities itself!

Posting here are ways to protect yourself&#8230;

**1. Trying Wrong Password (Simple)  
**If you suspect the login-screen next to you is fake, then best way is to enter wrong password. While a genuine login screen will return an error such as *&#8220;wrong user name or password&#8221;* the fake one will redirect you to pre-configured page!

**2. Checking source code&#8230; (Advance)  
**You can also inspect source-code of login screen&#8230;  
Look for

tags&#8230; (or you can directly search for &#8220;action&#8221; attribute)

Now original &#8220;action&#8221; value for yahoo photo&#8217;s is,**<span class="attribute-value"><br /> </span>**

> <span class="attribute-value"><strong>&#8220;</strong>https://login<span style="color: #ff0000">.yahoo.com</span>/config/login?</span>**&#8220;**

Its enough to check high-level domain (as shown in red color). Creating a fake-login screen is quite simple so if <strike>hacker</strike> attacker is really naive, then this will works **99.99999%** of the time! There is only one way out for attacker and it depends much more on victims foolishness as well as luck!

A fake login screen will always have different value for action attribute&#8230;  
few ex:**<span class="attribute-value"><br /> </span>**

>   * <span class="attribute-value">https://user<span style="color: #000000">.yahooo.com</span>/config/login? (note extra <strong>O</strong> in yahoo)</span>
>   * http://myserever.com/fakelogin.cgi
>   * etc&#8230;

For those relying on **&#8220;forget password&#8221;** option then there is another bad news&#8230;  
This guy is smart enough to change PIN and COUNTRY information in all his victims yahoo account so they could not get even security question to answer!!!
