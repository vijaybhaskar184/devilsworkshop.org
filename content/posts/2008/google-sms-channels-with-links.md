---
title: Google SMS Channels with Links
author: rahul286
date: 2008-10-02
url: /google-sms-channels-with-links/
views:
  - 3522
dsq_thread_id:
  - 2947092399
categories:
  - News
tags:
  - Blogging
  - Google
  - Internet
  - short url
  - SMS Tips and Tools
---
Without a doubt, Google SMS Channels is really a good service. Many bloggers are creating SMS channels dedicated for their blog, so that their readers can follow their blog from mobile.

I have created <a href="http://labs.google.co.in/smschannels/subscribe/DevilsWorkshop" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://labs.google.co.in/smschannels/subscribe/DevilsWorkshop', 'Devils Workshop SMS channel']);" >Devils Workshop SMS channel</a> last night and started receiving SMS for each post as it was getting published. But I was disappointed to see that there was no link to article in SMS I received. Links could help people having GPRS/wi-fi enabled cellphones browse articles from their handset.

I tried finding such option first, but I failed. So I created a small script which accept your original feed URL and give you link to a new feed which:

  1. First shorten links to your article using famous service TinyUrl. This takes care of 160 character limit of SMS.
  2. Next it append such shortened link to your feeds title.

Now when Google SMS channel will fetch such converted link, they will send short urls to articles in SMS updates.

**Below is screenshot which highlights this difference:**

[<img class="alignnone size-full wp-image-2160" title="google-sms-channels-with-tinyurl" src="http://cdn.devilsworkshop.org/files/2008/10/google-sms-channels-with-tinyurl.jpg" alt="" width="432" height="225" />][1]  
<a name="HOWTO"></a>

### How to use:

**1. Getting a converted link**

  * You can either get converted link using web interface provided at Google SMS Channels with TinyUrl
  * OR simply prefix http://gsmslinks.rtcamp.com/ to your feed URL.

**Example: **<http://feeds.devilsworkshop.org/rb286> will become http://gsmslinks.rtcamp.com/http://feeds.devilsworkshop.org/rb286

**2. Modifying Existing Channel**

  * Go to <a href="http://labs.google.co.in/smschannels/browse" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://labs.google.co.in/smschannels/browse', 'Google SMS Channels']);" >Google SMS Channels</a>. Switch to **Manage Channels** section.

[<img class="alignnone size-full wp-image-2162" style="border: 1px solid black;" title="google-sms-channels" src="http://cdn.devilsworkshop.org/files/2008/10/google-sms-channels.jpg" alt="" width="492" height="338" />][2]

  * Just edit **RSS/Atom feed** URL. If you are creating a new channel, enter converted feed link here otherwise replace old link with converted link. Please DO NOT forget to remove prefix **http://** from links as it is added by Google by default.

[<img class="alignnone size-full wp-image-2161" style="border: 1px solid black;" title="google-sms-channels-with-links" src="http://cdn.devilsworkshop.org/files/2008/10/google-sms-channels-with-links.jpg" alt="" width="500" height="105" />][3]

  * Next better click on Preview button to check if desired results are coming in mobile emulator screen on page. If yes, click **Update Channel** button below.

If you have any question, please ask via comments only. If there exist option to do this, please let me know. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Link:** <a href="http://gsmslinks.rtcamp.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://gsmslinks.rtcamp.com/', 'Google SMS Channels with TinyUrl Links']);" >Google SMS Channels with TinyUrl Links</a>

 [1]: http://cdn.devilsworkshop.org/files/2008/10/google-sms-channels-with-tinyurl.jpg
 [2]: http://cdn.devilsworkshop.org/files/2008/10/google-sms-channels.jpg
 [3]: http://cdn.devilsworkshop.org/files/2008/10/google-sms-channels-with-links.jpg
