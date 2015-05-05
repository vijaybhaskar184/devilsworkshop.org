---
title: Can Email Timestamp be forged or its just a bug in Gmail?
author: rahul286
date: 2009-03-20
excerpt: I have heard about scheduling emails although never used it. I also think timestamps an email carry are automatically generated when it is sent/received by concerned user. But check following Gmail screenshot and have a look at arrows.
url: /can-email-timestamp-be-forged-or-its-just-a-bug-in-gmail/
views:
  - 1941
dsq_thread_id:
  - 2947096347
categories:
  - News
tags:
  - Bug
  - Email
  - Gmail
  - Google
---
I have heard about scheduling emails although never used it. I also think timestamps an email carry are automatically generated when it is sent/received by concerned user. But check following Gmail screenshot and have a look at arrows.

[<img class="size-large wp-image-4949 alignnone" title="gmail-loosing-track-of-time-1" src="http://cdn.devilsworkshop.org/files/2009/03/gmail-loosing-track-of-time-1-580x362.png" alt="gmail-loosing-track-of-time-1" width="580" height="362" />][1]

*(**Click on above link to enlarge it.** That way you will be able to see time and date of my system as well as timestamp on email properly.)*

Now if you have observed that mail says it was sent on **Mar 19, 2009 at 12:39 PM**, but I received it around **Mar 19, 2009 at 12:o8 AM**.

Even-though date is same and time looks same there is a difference of around 12 hours because of AM/PM. It might have gone unnoticed hadn&#8217;t Gmail showed something like **-751 minutes ago**, a **negative** value!

Next question is whether its a Gmail bug or&#8230;.

## Can date (timestamp) in Email be forged?

Some people claims that they can change date & time of their system clocks and then emails sent will carry timestamp of their system time. Might have worked in past, but now as far as I know SMTP serves involves in forwarding mails assigns timestamp on them. I may be inaccurate to some extents but timestamps cannot be controlled in most cases.

In some cases, like in private network or so, you may hack into system to alter

Still forging &#8220;From&#8221; email address works because SMTP servers do not care about it. Whether to authenticate &#8220;From:&#8221; address filed is responsibility assigned to applications. You can authorize your application to send emails from another email ids. Procedure to do so [for Gmail is here][2] and [for Yahoo its here][3].

### Gmail Custom Time Hoaxe

Last year, <a href="http://en.wikipedia.org/wiki/Google%27s_hoaxes#Gmail_Custom_Time" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Google%27s_hoaxes#Gmail_Custom_Time', 'Gmail played an April fool&#8217;s prank']);" >Gmail played an April fool&#8217;s prank</a> by announcing Custom Time feature which supposedly allows sending past-dated email. <a href="http://en.wikipedia.org/wiki/Google%27s_hoaxes#Gmail_Custom_Time" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Google%27s_hoaxes#Gmail_Custom_Time', 'Wikipedia']);" >Wikipedia</a> has an explaination about it. If you really go on searching you may land up ont his <a href="http://mail.google.com/mail/help/customtime/index.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://mail.google.com/mail/help/customtime/index.html', 'page discribing that feature']);" title="Gmail's custome time hoaxe">page discribing that feature</a>.

So it isn&#8217;t feature in Gmail but seems some coder from Gmail team took their prank seriously and decided to play with it!

Jokes apart, this bug can create confusion. What if I had remained offline from 12:05 AM to say 1PM on March 19. Then at the time of checking mails I might have thought that I just recived this mail and can reply it later. At the other end, the person who might be awaiting a reply needs to wait more!

 [1]: http://cdn.devilsworkshop.org/files/2009/03/gmail-loosing-track-of-time-1.png
 [2]: http://devilsworkshop.org/gmail-send-mails-from-multiple-addresses-using-only-one-account/
 [3]: http://devilsworkshop.org/integrate-multiple-yahoo-mail-accounts-into-a-single-account/
