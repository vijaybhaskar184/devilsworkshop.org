---
title: 3 Tricks to Schedule Tweets in Google Reader
author: vibin
date: 2011-06-05
url: /3-tricks-schedule-tweets-google-reader/
dsq_thread_id:
  - 2947121092
categories:
  - Tips
tags:
  - Google Reader
  - 'Tips &amp; Hacks'
  - Twitter
  - twitter tools
---
[<img class="alignright size-full wp-image-19051" title="Google_reader" src="http://cdn.devilsworkshop.org/files/2010/01/Google_reader.png" alt="" width="222" height="155" />][1]I have heaps of interesting stories in my Google Reader and I want to tweet them all! If I start tweeting those links one after the other, my followers will be annoyed, so the best solution is to schedule those tweets. Actually, there’s no inbuilt feature in Google Reader to schedule tweets, but a small hack can make this possible.

## #1. Google Reader + BufferApp

[<img style="display: inline; border-width: 0px;" title="tweet reader" src="http://cdn.devilsworkshop.org/files/2011/06/tweetreader_thumb.png" border="0" alt="tweet reader" width="424" height="257" />][2]

[][2]It’s a well-known app for scheduling tweets and perhaps you don’t know it can schedule tweets even from Google Reader! You just need set the time when you want to tweet, add a couple of tweets to your buffer and it tweets at the right time for you automatically.

It also has <a href="http://bufferapp.com/goodies/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://bufferapp.com/goodies/', 'browser extensions and a nifty bookmarklet']);" target="_blank">browser extensions and a nifty bookmarklet</a> to tweet instantly. To tweet a Google Reader story, just click the extension and the app retrieves the original URL of the article you’re viewing. Even if you aren’t so fond of extensions or bookmarklets, you can schedule tweets using this hack &#8211;

  * Go to <a href="http://www.google.com/reader/settings" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/reader/settings', 'Google Reader settings page']);" target="_blank">Google Reader settings page</a>
  * Navigate to *send to* link
  * Click on *create a custom link* (located at the bottom)
  * Put the name as *Buffer* , URL as *http://bufferapp.com/add?url=${url}&text=${title}*, leave *Icon URL* section as it is.

Now when you want to tweet or schedule an article, do look up the *send to* link which is present at the bottom of each story. Under *send to* drop down menu you’ll be able to see Buffer, click that to tweet the story you’re viewing.

## #2. Google Reader + Hootsuite

[<img style="display: inline; border-width: 0px;" title="tweet reader 1" src="http://cdn.devilsworkshop.org/files/2011/06/tweetreader1_thumb.png" border="0" alt="tweet reader 1" width="522" height="280" />][3]

  * For Hootsuite also you can use a similar hack i.e.  creating a *send to* link.
  * The only difference here is under URL section enter the URL as *http://hootsuite.com/hootlet/load?address=${url}&title=${title}. *
  * Like Buffer, Hootsuite also supports scheduling tweets.

## #3. Google Reader + Timely

[<img style="display: inline; border-width: 0px;" title="tweet reader 2" src="http://cdn.devilsworkshop.org/files/2011/06/tweetreader2_thumb.png" border="0" alt="tweet reader 2" width="504" height="218" />][4]

  * Timely was my favourite since I joined Twitter because it itself tells you the best time to tweet for maximum reach.
  * Just make sure you add *http://timely.is/bookmarklet?s=${title}-${url}#/ *in the URL section and it will appear in the *send to* menu. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

### How does this work? (The Geeky part)

  * Actually the *send to *method works with almost any tweeting platform, what changes is just the URL of it*. *So, how did I find URL of Hootsuite and Timely? here’s the method.
  * Let&#8217;s take Hootsuite as example, when I click Hootlet (Hootsuite Bookmarklet), the URL that shows up in the address bar is something like this &#8211; *http://hootsuite.com/hootlet/load?address=URL OF THE WEBPAGE&title=TEXT.*
  * Now you need replace *URL OF WEBPAGE* with *${url}* and *TEXT* with *${title}* so that Google Reader can retrieve the actual URL and title of the article you’re viewing.
  * After the modification, the URL looks like this &#8211; http://hootsuite.com/hootlet/load?address=${url}&title=${title}. That’s it, you’ve got the URL that needs to be placed in the URL section when creating a *send to* entry.
  * As most of the twitter platforms provide bookmarklets, this must work seamlessly.

* *

So next times while looking up great posts on Google Reader, make sure you schedule them if you want to space out your tweets so you avoid spamming your follower&#8217;s timeline. Do drop in your comments.

 [1]: http://cdn.devilsworkshop.org/files/2010/01/Google_reader.png
 [2]: http://cdn.devilsworkshop.org/files/2011/06/tweetreader.png
 [3]: http://cdn.devilsworkshop.org/files/2011/06/tweetreader1.png
 [4]: http://cdn.devilsworkshop.org/files/2011/06/tweetreader2.png
