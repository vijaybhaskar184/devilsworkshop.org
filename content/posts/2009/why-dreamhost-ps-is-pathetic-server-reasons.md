---
title: Why Dreamhost PS is a Pathetic Server – 5 Reasons
author: rahul286
date: 2009-03-17
url: /why-dreamhost-ps-is-pathetic-server-reasons/
views:
  - 1566
dsq_thread_id:
  - 2946701760
categories:
  - Analysis
tags:
  - Dreamhost
  - Internet
  - Web Hosting
---
[<img class="wp-image-50751" src="http://cdn.devilsworkshop.org/files/2009/03/dreamhost-sucks-1.png" alt="dreamhost-sucks-1" width="275" align="right" />][1]More than a month ago, I received a warning from Dreamhost about high CPU usage for our service <a href="http://www.orkutfeeds.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutfeeds.com/', 'OrkutFeeds']);" >OrkutFeeds</a>. That complain had a suggestion about moving to Dreamhost PS(Private Server).

We <a href="http://blog.orkutfeeds.com/2009/02/01/orkutfeeds-will-be-down-for-a-week/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.orkutfeeds.com/2009/02/01/orkutfeeds-will-be-down-for-a-week/', 'pulled down Orkutfeeds for more than a week']);" >pulled down Orkutfeeds for more than a week</a> and brought it back <a href="http://blog.orkutfeeds.com/2009/02/13/caching-support-added/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.orkutfeeds.com/2009/02/13/caching-support-added/', 'with caching support']);" >with caching support</a> which reduced load by more than 80%.

Still, as we were planning to move to VPS hosting anyways, we decided to give a try to Dreamhost PS. I was very sure since a  long time that <a href="http://www.mediatemple.net/go/order/?refdom=rtcamp.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mediatemple.net/go/order/?refdom=rtcamp.com', 'Mediatemple']);" >Mediatemple</a> would be the best choice for VPS, but I decided to try Dreamhost PS keeping in mind 2 years of happy hosting experience with them. And that’s where I made a big mistake.

I still like and recommend Dreamhost’s shared hosting plan and will continue to use it for some of our sites. But just don&#8217;t ever think of going for Dreamhost PS.

## Why Dreamhost PS is Pathetic Server

### 1. Why no **root **access?

<a href="http://www.dreamhost.com/hosting-vps.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.dreamhost.com/hosting-vps.html', 'They say']);" >They say</a>, *“no root access means no breaking of things”*. But with root access, there are many tasks which an experienced webmaster can do on his own, saving his time as well as the time of support staff of the webhosting company.

I seriously think a customer must have an option to enable root access. Who gave them right to make a choice for us?

### 2. Why separate PS servers for Apache and mysql?

I honestly doubt if Dreamhost is truly offering a VPS i.e. virtual private server. They want you to buy separate servers to run apache (web server) and mysql (database server).

In an ideal VPS environment, you will be allocated a virtual dedicated server, where you run apache, mysql and everything on same server. Why can’t Apache, mysql and other program share same memory? They are running together on Mediatemple and on almost every other VPS hosting available out there.

### 3. Too many technical problems. FTP was always down.

This might have happened specifically to us. FTP was down for almost all the time since we moved to Dreamhost. Surprisingly, SSH/SFTP are working for same user names and passwords. I know FTP and SFTP uses different ports but why kill FTP only, all the time!

Personally, I use SCP/SFTP commands to transfer files form my machine to/from server so I could live with it. But it was quite embarrassing to have friends/clients calling me all over the week complaining about FTP downtime. It really hurts to face wrath of your clients specially when its not your fault at all. By the way, FTP is still down for us.

### 4. WordPress Super Caching plugins doesn’t work

On Dreamhost PS, even time to load your site significantly improves, it is good idea to use caching plugins <a href="http://ocaoimh.ie/wp-super-cache/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ocaoimh.ie/wp-super-cache/', 'wp-super cache']);" >wp-super cache</a>. This plugin can help your blog survive traffic spikes caused by Digg, slashdot, etc. upto some extent.

But if you enable such plugin, your blog&#8217;s load time will go from few seconds to a minutes or two! Surprisingly this fact is documented in <a href="http://wiki.dreamhost.com/Wordpress_performance#Cache" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wiki.dreamhost.com/Wordpress_performance#Cache', 'Dreamhost wiki']);" >Dreamhost wiki</a> as well. A very bad news for WordPress bloggers.

### 5. PS for Pathetic Support

One thing I have always loved about Dreamhost since day 1 is their support. Quite contrary to our expectations, PS customer, who pay much more, get pathetic support. My support tickets marked with highest priority went unanswered for more than 24 hours.

Although once my query were answered, replies used to contain relevant and decent amount of information, much like the old days. But it wasn’t good enough to compensate for delay in answering support tickets.

## Leaving Dreamhost PS is another nightmare

I initially signed up for both, apache and mysql PS. As number of problems I was facing continuously rising up, I decided to cancel both of them.

At that point they said my memory usage and CPU usage were too high for apaches server to move it back to shared hosting environment and they can cancel only mysql PS. I said OK and made another mistake.

**Here is what they did…**

  * Goal was to move all databases from private mysql server to shared mysql server.
  * On shared mysql server, they found a database by another user having same name as one of our database. In short there was a conflict.
  * They irresponsibly renamed our database to resolve conflict. They didn’t informed us about this at all.

This smart move by them, brought our entire blog-network down for hours as all blogs in blog-network uses one database which they renamed. We were scratching our heads, crossing-checking database config options on all sites, opening highest priority tickets but all went into vein. Just by luck, I noticed in phpMyAdmin that database name all blogs were trying to connect was changed and fixed it myself. Otherwise with their approach Devils Workshop and few more sites would have remained down for straight 36 hours!

**Here is what they should have done to resolve name-conflict…**

  * First no one can be held responsible for **creating** that conflict.
  * Now if renaming database is the only solution, this must be done by website owner/administrator.
  * They (Dreamhost) should have emailed me asking me to rename database which can avoid breaking my websites.

**This is not all. The worst is yet to come…**

  * On lines of database, they renamed some tables also. Now this seems highly absurd. Because table names can not conflict practically.
  * Also while doing export-import from one of their server to another server, they messed up big time corrupting important mysql tables. I don’t know what exactly they did, but first solution which worked was restoring some tables form old database backup. This used to work for sometime and then needed to repeat again in few hours! This is where we lost few draft posts and comments.

There are many other issues like the way Dreamhost calculates websites memory requirement is suspicious. Our heavy trafic sites hosted on MediaTemple is consuming around 40% of allocated 256MB physical + 400MB swap memory. While on Dreamhost sites demanding 400MB physical memory to server less than 2K pageviews daily. FYI, sites on Mediatemple serves more than 10K pageviews daily.

## So where to go&#8230;

Dreamhost PS is insanely wrong choice but Dreamhost shared hosting still rocks. Few things I can still say for Dreamhost are,

  * They are not after your money. As an example, when they found they could not moved us back from PS to shared hosting, they gave us flat $15/month discount which is minimum charge for Dreamhost PS.
  * They really have intelligent support staff. I think support team is more trained for shard hosting environment. Also, they might have reduced size of support team in tough time of recession. What I expected is a dedicated team for PS customers. They are paying more so they deserve more attention.
  * One thing I miss at MediaTemple and I will always miss is simple and light-weight control panel Dreamhost provides. Most other companies use off the shelf free <a href="http://www.cpanel.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.cpanel.net/', 'cPanel']);" >cPanel</a> or commercial <a href="http://www.parallels.com/products/plesk/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.parallels.com/products/plesk/', 'Plesk']);" >Plesk</a>. Neither of them comes even close to Dreamhost&#8217;s self-developed control panel.

There are many good reasons because of which I still recommend Dreamhost shared hosting. If  you are a new guy, you can safely start with Dreamhost shared hosting and when you site grows you can move to a true VPS solution like Mediatemple.

I will write another guide on moving from Dreamhost to MediaTemple with zero downtime soon. In our case, apart from Dreamhost PS&#8217;s own downtime, migration carried out with practically zero downtime, including DNS updates.

That&#8217;s all for the day. If you any question about web-hosting, please ask via comments.

*(image credit: <a href="http://www.slangabeat.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.slangabeat.com/', 'Slang A Beat']);" >Slang A Beat</a>)*

*[**Disclaimer:** Views expressed in this post are based on my own experience. If you search over Internet, you will see posts talking about good and bad sides of almost every webhosting. So be careful while choosing a webhost. One wrong choice can cost you lots of time & money.]  
*

 [1]: http://cdn.devilsworkshop.org/files/2009/03/dreamhost-sucks.png
