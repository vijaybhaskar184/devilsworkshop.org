---
title: Email Tracking – Get notified when your emails get read!
author: rahul286
date: 2008-03-23
url: /email-tracking-get-notified-when-your-emails-get-read/
views:
  - 1327
dsq_thread_id:
  - 2946461840
categories:
  - Tips
tags:
  - Internet
  - plugin
---
[<img class="wp-image-52181" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;margin: 0px 0px 0px 10px;border-right-width: 0px" height="162" alt="Track Your Email" src="http://cdn.devilsworkshop.org/files/2008/03/image-thumb18.png" width="204" align="right" border="0" />][1]If you ever wondered whether mails you sent ever gets read or just sent to trash, you can use a mail tracking service like MailTracking.com which allows email tracking. 

They send you a email notification whenever the recipient reads your email. Notification includes many details including following&#8230;

  * Date and time opened 
  * Location of recipient (per their ISP city /town) 
  * How long the email was read for 
  * How many times your email was opened 
  * If your email was forwarded, or opened on a different compute 

&#160;

**Now how to use this service in simplest way&#8230;**

  * Create an account with them first. 
  * Then next time, whenever you send mail to ***someone@special.com*** just add ***.mailtracking.com*** to the email address. So&#160; in this case email address will become ***someone@special.com.mailtracking.com*** 
  * Now whenever ***someone@special.com*** read your email, you will receive notification mail from mailtracking.com 

&#160;

**How it works&#8230;** *(Technical Details)*

  * Basically the change in email address will route email through mailtracking.com&#8217; server. 
  * They add a small *(around 3&#215;3 pixel)* white image which is almost invisible to human eyes in email body. The image will be hosted on mailtracking servers and a unique image is kept for each email message. 
  * So when *someone* opens email that image also get downloaded. Now mailtracking server logs the browser request for image *(note that the request goes in background) *and thus can mail you details which mentioned above. 

&#160;

**Known Problem&#8230;**

[<img style="border-right: 0px;border-top: 0px;margin: 0px 0px 0px 20px;border-left: 0px;border-bottom: 0px" height="31" alt="Yahoo Mail - Image Content Warning" src="http://cdn.devilsworkshop.org/files/2008/03/image-thumb19.png" width="413" border="0" />][2] 

During testing I have noticed that top webmail services like Gmail, Yahoo etc doesn&#8217;t allow images to load by default for new email addresses. So if you are sending an email to ***someone@stranger.com,*** chance is that recipient will read your email message but without allowing images to load. In that case you will not get any notification.

&#160;

**Pay service&#8230;**

MailTracking.com is not free. You can start with free account as I did. You get 25 credits *(1 credit = 1 email) *in free account. But if you really wants a service like this then consider using paid version as it they offers more feature and also a downloadable plugin which integrates with your browser. Otherwise there are many services like this you can switch to when you runs out of free credits! 😉

Thats All! Thanks <a href="http://www.ankit-agarwal62.page.tl/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ankit-agarwal62.page.tl/', 'Ankit']);" >Ankit</a> for tip.

**Links:** <a href="http://www.mailtracking.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mailtracking.com/', 'MailTracking.com']);" >MailTracking.com</a> | <a href="http://www.readnotify.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.readnotify.com/', 'ReadNotify.com']);" >ReadNotify.com</a>&#160;*(similar service)*

 [1]: http://cdn.devilsworkshop.org/files/2008/03/image35.png
 [2]: http://cdn.devilsworkshop.org/files/2008/03/image36.png
