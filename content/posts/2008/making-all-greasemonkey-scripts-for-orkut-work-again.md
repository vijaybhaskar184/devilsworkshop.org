---
title: Making All Greasemonkey Scripts for Orkut Work Again!
author: rahul286
date: 2008-06-01
url: /making-all-greasemonkey-scripts-for-orkut-work-again/
views:
  - 730
dsq_thread_id:
  - 2947089718
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Javascript
  - Orkut
  - Software
---
With recent launch of [orkut&#8217;s country specific sites][1], all greasemonkey scripts stopped working. The reason is most greasemonkey scripts are domain specific and at the time of writing them, they were coded for url http://www.orkut.com which is now changing to http://www.orkut.co.in and so on depending on users country.

So all greasemonkey scripts for orkut needs to be changed now to reflect this domain change. Listed below are steps need to be followed by users and developers to make your favorite greasemonkey scripts work again on orkut&#8230;

### For GreaseMonkey Script Users&#8230;

Just go through following steps for each greasemonkey scripts you want to modify&#8230;

1. Open **Manage User Scripts** option from **Tools >> Greasemonkey** menu or right-clicking on small greasemonkey logo in bottom-right corner of your <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'firefox']);" >firefox</a>.

<img class="wp-image-50506" src="http://cdn.devilsworkshop.org/files/2008/06/greasemonkey-manage-user-scripts.jpg" width="308" height="194" alt="Greasemonkey - Manage User Scripts.jpg" />

2. A wizard will open like below. Then&#8230;

  * Click on a script you want to edit from left side menu.
  * Then Click on right-sides included pages list.
  * Then click on **Add** button.

<img src="http://cdn.devilsworkshop.org/files/2008/06/greasemonkey-scipt-managing-2.jpg" width="480" height="402" alt="Greasemonkey Scipt Managing-2.jpg" />

3. Clicking on **Add** button will open a pop-up. Put orkut&#8217;s domain name you have in your country their. Ex: http://www.orkut.co.in/* for Indian orkut users. **<span style="font-style: italic">Note /* at the end of domain name. You must not forget it!</span>**

<span style="font-style: italic;font-weight: bold"><img src="http://cdn.devilsworkshop.org/files/2008/06/add-orkut-domain-to-greasemonkey-scripts.jpg" width="479" height="193" alt="Add Orkut Domain To Greasemonkey Scripts.jpg" /></span>

4. Just click OK and the script will start working. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

For more detailed <a href="http://www.spreadfirefox.com/node&id=199011&t=1greasemonkey/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1greasemonkey/', 'greasemonkey tutorial']);" >greasemonkey tutorial</a> check <a href="http://www.spreadfirefox.com/node&id=199011&t=1greasemonkey/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1greasemonkey/', 'this post']);" >this post</a>!

<span style="font-size: 14px;font-weight: bold;line-height: normal">For GreaseMonkey Script Developers&#8230;</span>

If you are a newbie greasemonkey script developer then you may be wondering about long list of orkut&#8217;s country-level domains.

But with one small change in your scripts you can make them work with all orkut sites. Here are the steps&#8230;

  1. Open your greasemonkey script is editor.
  2. Go to **@include** line in **==UserScript==** header.
  3. Change **http://\*.orkut.com/\*** to **http://\*.orkut.\*/***

This will make script work with all orkut domains plus few more domain like http://www.orkut.pk. But rather than listing all countries and making mistake on the way, this way is full-proof. Its also simple as all you need is to replace **com** in orkut urls with a ***** (asterisk).

You can do try-catch type nesting around your domain sensitive codes so that they will not clutter javascript error console in firefox. But this part is optional so don&#8217;t bother much if I sound like alien&#8230; 😉

I guess this answers all questions on the this issue. Sorry for delay in response as [I was away from this workshop][2].

About our <a href="http://" onclick="_gaq.push(['_trackEvent','download','http://']);" >greasemonkey scripts</a> go, you can just update them by installing again from respective locations. I have updated all of them and you can find them at one place, thats <a href="http://userscripts.org/users/5398/scripts" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://userscripts.org/users/5398/scripts', 'here']);" >here</a>! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Related:** <a href="http://www.spreadfirefox.com/node&id=199011&t=1greasemonkey/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1greasemonkey/', 'Shortest Greasemonkey Tutorial']);" >Shortest Greasemonkey Tutorial</a>

 [1]: http://devilsworkshop.org/2008/06/01/list-of-orkuts-country-specific-sites/
 [2]: http://devilsworkshop.org/2008/05/27/away-from-devils-workshop-editorial/
