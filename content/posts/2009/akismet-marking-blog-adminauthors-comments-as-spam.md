---
title: Akismet Marked Blog Admin/Authors Comments as Spam
author: rahul286
date: 2009-04-01
url: /akismet-marking-blog-adminauthors-comments-as-spam/
views:
  - 19
dsq_thread_id:
  - 2947096703
categories:
  - Tips
tags:
  - Anti-Spam
  - Blogging
  - Wordpress
---
Yesterday, I noticed weird behavior form <a href="http://akismet.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://akismet.com/', 'Akismet']);" >Akismet</a>, spam protection plugin for WordPress, developed by <a href="http://automattic.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://automattic.com/', 'Automattic']);" >Automattic</a>, the company behind WordPress!

Have a look at the following screenshot and you can see my comments filtered as spam.

&nbsp;&nbsp;<img class="wp-image-51379" src="http://cdn.devilsworkshop.org/files/2009/04/akismet-marking-blog-admin-comment-spam.png" width="580" height="430" alt="Akismet Marking Blog Admin Comment Spam.png" />

Just for info, while commenting, I was logged in as Admin. Also comment content had no links or any bad word. In fact, I never used any bad word while commenting anywhere on Internet!

I was shocked to see this behavior by Akismet. It wasted my lots of time. I was wondering what was happening to my comments and I initially though some plugin/script might be creating problem. I spend more than one hour checking server-side error log and access log. In fact, I rebooted this server too. Then accidentally I clicked on spam comment tab and there were my comments!

I am still surprised. I think comments made by registered users/authors should not be sent for spam-check in the first place. Why a post author will spam his own post? Or why an admin who has installed Akismet to fight against comments spam, will think of spamming his own blog!

I am still clueless about Akismet&#8217;s behavior. It marked few more comments as spam yesterday. But its working fine now.

Did anyone else face same problem in past?
