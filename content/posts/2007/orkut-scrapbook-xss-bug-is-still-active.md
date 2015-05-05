---
title: Orkut Scrapbook XSS Bug is Still Active!
author: rahul286
date: 2007-12-21
url: /orkut-scrapbook-xss-bug-is-still-active/
views:
  - 116
dsq_thread_id:
  - 2946462619
categories:
  - Tips
tags:
  - Bing
  - Internet Explorer
  - Javascript
  - Security
---
After two days [we posted about scrapbook bug][1] and demonstration of its destructiveness&#160; by <a href="http://64.233.179.104/translate_c?hl=en&langpair=pt%7Cen&u=http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://64.233.179.104/translate_c?hl=en&langpair=pt%7Cen&u=http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html', 'Rodrigo Lacerda']);" >Rodrigo Lacerda</a> (<a href="http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html', 'Portuguese link']);" >Portuguese link</a>) and <a href="http://www.orkutplus.net/2007/12/of-latest-orkut-worm-rodrigo-lacerda.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutplus.net/2007/12/of-latest-orkut-worm-rodrigo-lacerda.html', 'Gaurav']);" >Gaurav</a>, it looks like orkut team haven&#8217;t got enough of it!

So on request of some of the members and also to force orkut to take this more seriously we are partially revealing the bug&#8230;

The bug is in **embed** tag&#8217;s **src** attribute! Orkut doesn&#8217;t validate if **src** is pointing to valid flash media file URL and thus any URL submitted as value of **src** attribute just get executed when user **opens **scrapbook! This is different than most infection where user have to generate some event like clicking on a particular region, link,&#160; etc.

**Proof of Concept 1:**

Here is harmless but highly annoying code which you can put in your friends orkut scrapbook. This is the reason why some [people were getting logged out of orkut just by visiting their scrapbook][1]!

**Code:**

<textarea onclick="this.select()" rows="3" cols="40"><embed src="http://www.orkut.com/GLogin.aspx?cmd=logout" width="1" height="1"/></textarea></p> 

&#160;

**Proof of Concept 2:**

More serious but harmless exploitation is a worm created by <a href="http://64.233.179.104/translate_c?hl=en&langpair=pt%7Cen&u=http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://64.233.179.104/translate_c?hl=en&langpair=pt%7Cen&u=http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html', 'Rodrigo Lacerda']);" >Rodrigo Lacerda</a> (<a href="http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html', 'Portuguese link']);" >Portuguese link</a>) which is performing following routine.

  * You read the scrap with code (infact just open the scrapbook with code)
  * Code injects javascript in your browser
  * Javascript code makes you join the community
  * Then code collect your list of friends
  * Send the scrap with the code for them!

The community which is being joined is **<a href="http://www.orkut.com/Community.aspx?cmm=44001818" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/Community.aspx?cmm=44001818', 'Infectados pelo V&#237;rus do Orkut']);" >Infectados pelo V&#237;rus do Orkut</a>! **Just check out the community page and reload it. Look how fast the number of members increases. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

&#160;

**Solution:** 

Solution is in the form of [flash block extension][1] we talked about in earlier posts!

&#160;

**What should orkut do:**

  * They should first activate CAPTCHA (i.e. image verification) for all URLs including their own. That way worm will stop spreading itself!
  * For future they should validate user input properly. XSS is most of the time result of improper validation of input. Like here they haven&#8217;t checked URL for filetype!

&#160;

**Update: ** <a href="http://en.blog.orkut.com/2007/12/security-reminder.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.blog.orkut.com/2007/12/security-reminder.html', 'Orkut in a official blog post']);" >Orkut in a official blog post</a> claim to fix the bug! But this embed tag&#8217;s bug is still open! They might have fixed other bug which Rodrigo used! 

**Link: **Post by <a href="http://64.233.179.104/translate_c?hl=en&langpair=pt%7Cen&u=http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://64.233.179.104/translate_c?hl=en&langpair=pt%7Cen&u=http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html', 'Rodrigo Lacerda']);" >Rodrigo Lacerda</a> (in <a href="http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ctrl-copy.blogspot.com/2007/12/como-baguncei-o-orkut-em-um-dia.html', 'Portuguese ']);" >Portuguese </a>) | [Flash Block Solution][1] | <a href="http://www.orkutplus.net/2007/12/of-latest-orkut-worm-rodrigo-lacerda.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutplus.net/2007/12/of-latest-orkut-worm-rodrigo-lacerda.html', 'Gaurav post']);" >Gaurav post</a> | <a href="http://en.blog.orkut.com/2007/12/security-reminder.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.blog.orkut.com/2007/12/security-reminder.html', 'Orkut&#8217;s official blog post']);" >Orkut&#8217;s official blog post</a>

 [1]: http://devilsworkshop.org/2007/12/19/new-attack-on-orkut-user-gets-logged-out-by-just-opening-scrapbook/
