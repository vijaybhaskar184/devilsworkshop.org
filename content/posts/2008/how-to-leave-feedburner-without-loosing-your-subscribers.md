---
title: How-To Leave FeedBurner Without Loosing Your Subscribers!
author: rahul286
date: 2008-07-04
url: /how-to-leave-feedburner-without-loosing-your-subscribers/
views:
  - 466
dsq_thread_id:
  - 2947090633
categories:
  - Tips
tags:
  - Google
  - Internet
  - Windows
---
Many bloggers/publishers fear that they will loose control over their feeds by using a third-party feed service like FeedBurner. This post is an attempt to answer their doubts. I hope it will help all FeedBurner users at some point in time.

### About FeedBurner Feed Subscribers…

There are two ways people subscribe to your feeds at FeedBurner,

  1. Via FeedBurner email service
  2. Using some feed reader or aggregator. Choice between online and desktop reader doesn’t matter much.

Subscriber who use third party service like RSS-2-MAIL or RSS-2-SMS will fall under second category as they use your FeedBurner feed URL. So, essentially we need to take care of two types of subscribers.

### First FeedBurner Email service…

FeedBurner allows you to export email addresses of all subscribers in Excel and CSV format. So at the time of leaving FeedBurner, you won’t loose a single FeedBurner email subscriber for your feed.

**To Export FeedBurner Email Address List:**

  1. Log into FeedBurner account and select feed of your interest.
  2. Click on **Publicize **Tab. Select **Email Subscriptions **option from left side. [<img class="wp-image-53172" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/07/image-thumb5.png" border="0" alt="Export FeedBurner Email Address List" width="442" height="290" />][1]
  3. Scroll down **Email Subscriptions **page, you will see **View Subscribers Details** option. Click on it. [<img style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/07/image-thumb6.png" border="0" alt="Export FeedBurner Email Address List" width="452" height="184" />][2]
  4. Page will expand and you will see small **Export links. **Click on desired file format. A file with subscribers list will be downloaded to your PC.[<img style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/07/image-thumb7.png" border="0" alt="Export FeedBurner Email Address List" width="343" height="148" />][3]

Now you can use this subscribers file with other feed-to-email delivery service like <a href="http://www.feedblitz.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.feedblitz.com/', 'FeedBlitz']);" >FeedBlitz</a>. There are many ways to use it so will post best of them in future.

At this point you have secured all your email subscribers. If you are still in doubt about this part, check official <a href="http://www.feedburner.com/fb/a/publishers/fbemail" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.feedburner.com/fb/a/publishers/fbemail', 'FeedBurner Email help page']);" >FeedBurner Email help page</a>.

### Now subscribers using Feed Readers

**In Feed Readers world, your feeds only identity is its URL. **So control over feed URL decides your fate.

Technically if you can keep your feed URL same while moving from one service to another, you will not loose any subscriber.

Thankfully, FeedBurner runs a service named **MyBrand **which gives you ultimate control over your Feed URL. It was paid service till Google acquired FeedBurner and also it requires knowledge of editing DNS record at your domain host, so many people never used it or are completely unaware about it.

I will come to **MyBrand** later. Lets first handle more obvious situation where our feed URL contains feedburner.com in its address, **ex: http://feeds.feedburner.com/rb286**

### FeedBurner redirect option

[<img style="border-right: 0px;border-top: 0px;border-left: 0px;border-bottom: 0px" src="http://cdn.devilsworkshop.org/files/2008/07/image-thumb8.png" border="0" alt="FeedBurner redirect option" width="492" height="169" />][4]

When you delete your FeedBurner feed, you can use an option to redirect your feed. The redirection service will be given for a month for free. One month is again divided in two phases on timeline as below:

**Day 1-15: HTTP 301 &#8220;Permanent Redirect&#8221;**

Any requests for the FeedBurner feed are sent an HTTP 301 &#8220;Permanent Redirect&#8221; response back to your **source feed**. This will cause **most** feed readers to forget the FeedBurner URL and use the new URL from that point on. Your subscribers will not notice anything.

**Day 16-30: Manual Redirect**

At this point FeedBurner return a valid feed that contains a single item that says *&#8220;This feed is no longer active. A new feed is located at (source feed URL here)&#8221;*. Subscriber can manually click on URL and change their subscription.

**After 30 days: &#8220;Feed Not Found&#8221; response.**

Your feed is permanently removed and any requests will receive a *&#8220;Feed Not Found&#8221;* response.

This means subscribers who are using non-standard Feed readers or services like RSS-2-Email, etc will be lost. Also in rare case, if somebody uses desktop reader and for some reason fails to check updates in above 30-days windows will also loose track.

Now about non-standard feed readers, they represent very small section. As in following graph, only **6% **of my readers use **other readers. **Please note that other does not mean non-standard readers. It may contain many standard feed-reader with small proportion of subscribers.

[<img style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/07/image-thumb9.png" border="0" alt="FeedBurner Subscribers Graph" width="472" height="250" />][5]

**So in the end we can safely assume, our ~ 98% readers will migrate in the worst case.** Of course, number will slightly vary depending on your feed readers distributions graph.

Only problem with this redirect option is that you can not redirect FeedBurner feed to a new third-party feed service. It only redirects to your source feed. But following sequence solves this problem too.

  1. First use original source feed address to create a **new **feed service URL.
  2. Then go to FeedBurner and select **Edit Feed Details **option. Now in **Original Feed** field put new feed URL you created in **step 1**.
  3. Save changes and delete FeedBurner feed, with redirect option enabled.

This will redirect FeedBurner feed to new feed URL! I tested entire scenario and redirect starts immediately. So your feed will have no down-time while using this type of hack.

### MyBrand Service…

Cool, you are still reading. Its ok, everyone want 100% results! 😉

MyBrand service allows you to use your domain alias for feedburner feed. Using this service, I have created a domain alias [http://feeds.devilsworkshop.org/rb286][6] for my feed <a href="http://feeds.feedburner.com/rb286" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://feeds.feedburner.com/rb286', 'http://feeds.feedburner.com/rb286']);" title="http://feeds.feedburner.com/rb286">http://feeds.feedburner.com/rb286</a>.

Now if all of my subscriber uses [http://feeds.devilsworkshop.org/rb286][6] then while leaving feedburner, I can configure this URL to redirect to my source feed or new feed at any address.

In my case, when I started MyBrand was paid service so as of now my subscribers are divided. But if you are starting new then you can use this for complete control over feed.

**To Use MyBrand Service:**

As I mentioned earlier, even if this service is free now, in order to use it, you need rights and knowledge to edit CNAME record. CNAME records can be found in DNS settings area under admin panel at your domain host.

For more info check official <a href="http://www.google.com/support/feedburner/bin/answer.py?answer=79590&topic=13184" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/support/feedburner/bin/answer.py?answer=79590&topic=13184', 'MyBrand Overview and FAQ']);" >MyBrand Overview and FAQ</a> and <a href="http://www.google.com/support/feedburner/bin/answer.py?answer=79586&topic=13184" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/support/feedburner/bin/answer.py?answer=79586&topic=13184', 'MyBrand Tech Support FAQ']);" >MyBrand Tech Support FAQ</a>. MyBrand FAQ pages provides only GoDaddy CNAME editing example. For other services refer to <a href="http://www.google.com/support/a/bin/answer.py?hl=en-uk&answer=87084" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/support/a/bin/answer.py?hl=en-uk&answer=87084', 'this Google help page']);" >this Google help page</a>.

Thats ALL! If you are still in doubt feel free to ask! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

I guess this post answers your [question][7] <a href="http://www.keywebdata.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.keywebdata.com/', 'Chris']);" >Chris</a>.

**Related: **[Feedburner feeds delayed by one month almost][8]

[**Update: **<a href="http://tech-buzz.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://tech-buzz.net/', 'Thilak']);" >Thilak</a> on special request to FeedBurner team, got redirection option working him for one year. Check this [comment][9].]

 [1]: http://cdn.devilsworkshop.org/files/2008/07/image7.png
 [2]: http://cdn.devilsworkshop.org/files/2008/07/image8.png
 [3]: http://cdn.devilsworkshop.org/files/2008/07/image9.png
 [4]: http://cdn.devilsworkshop.org/files/2008/07/image10.png
 [5]: http://cdn.devilsworkshop.org/files/2008/07/image11.png
 [6]: http://feeds.devilsworkshop.org/rb286 "http://feeds.devilsworkshop.org/rb286"
 [7]: http://devilsworkshop.org/2008/06/27/feedburner-is-running-out-of-fuel-feeds-delayed-by-one-month-almost/#comment-45781
 [8]: http://devilsworkshop.org/2008/06/27/feedburner-is-running-out-of-fuel-feeds-delayed-by-one-month-almost/
 [9]: http://devilsworkshop.org/2008/07/04/how-to-leave-feedburner-without-loosing-your-subscribers/#comment-47122
