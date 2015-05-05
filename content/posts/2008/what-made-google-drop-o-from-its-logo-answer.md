---
title: 'What Made Google Drop ‘O’ From Its Logo! [Answer]'
author: rahul286
date: 2008-09-10
url: /what-made-google-drop-o-from-its-logo-answer/
views:
  - 120
dsq_thread_id:
  - 2947091901
categories:
  - Analysis
tags:
  - Bing
  - Google
  - Google Search
---
Form last few days a post by <span style="line-height: normal"><a href="http://www.identitydevelopments.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.identitydevelopments.com/', 'Brian Brown']);" >Brian Brown</a> <span style="line-height: 19px">on <a href="http://www.seomoz.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.seomoz.org/', 'SEOMoz']);" >SEOMoz</a> about <a href="http://www.seomoz.org/blog/oh-oh-made-google-drop-an-o" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.seomoz.org/blog/oh-oh-made-google-drop-an-o', 'Dropping ‘O’ from Google logo on search result page']);" >Dropping ‘O’ from Google logo on search result page</a> is <a href="http://www.labnol.org/internet/break-google-search-results-page/4454/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.labnol.org/internet/break-google-search-results-page/4454/', 'creating']);" >creating</a> <a href="http://www.quickonlinetips.com/archives/2008/09/dropping-google-o/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.quickonlinetips.com/archives/2008/09/dropping-google-o/', 'buzz']);" >buzz</a>. After investigating entire issue in detail, here I am posting my reasoning.</span></span>

First and most important, if you have missed it, appending <span style="line-height: normal"><strong><em>&num=100&start=990</em></strong> to any search URL forces Google to drop second ‘o’ from logo they display on search result page.</span>

<span style="line-height: normal">To make difference clear, I am posting original and modified query around with relevant portion of Google search result pages…</span>

**Original Query:** <span style="line-height: normal"><a href="http://www.google.com/search?q=Rahul" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/search?q=Rahul', 'http://www.google.com/search?q=Rahul']);" >http://www.google.com/search?q=Rahul</a></span>

<span style="line-height: normal"><img class="wp-image-53594" src="http://cdn.devilsworkshop.org/files/2008/09/rahul-google-search-1.jpg" alt="Rahul - Google Search-1.jpg" width="495" height="153" /></span>

<span style="line-height: normal"><span style="line-height: 19px"><strong>Modified Query:</strong> <a href="http://www.google.com/search?q=Rahul&num=100&start=990" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/search?q=Rahul&num=100&start=990', 'http://www.google.com/search?q=Rahul&num=100&start=990']);" >http://www.google.com/search?q=Rahul&num=100&start=990</a><br /> <img src="http://cdn.devilsworkshop.org/files/2008/09/rahul-modified-google-search.jpg" alt="rahul - Modified Google Search .jpg" width="495" height="317" /></span></span>

As you have might have noticed there is no yellow colored ‘o’ in modified search result page.

You can also obtain same modified search result page from appending <span style="line-height: normal"><strong><em>&start=991</em></strong> to original query. In fact any number equal to or greater than 991 after ‘start’ will force yellow ‘o’ to be dropped. <a href="http://www.google.com/search?q=rahul&start=991" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/search?q=rahul&start=991', 'Try This']);" >Try This</a>.</span>

### Lets move to reason part now…

**Google is fooling us… 😉**

If you have noticed, on modified query page, just below search box Google says, *“*<span style="line-height: normal"><span style="line-height: 19px"><em>Sorry, Google does not serve more than 1000 results for any query.</em></span><span style="line-height: 19px"><em>”</em></span></span>

<span style="line-height: normal"><span style="line-height: 19px">First conclusion &#8211; Google is fooling us by saying it has few million results for popular search term like <a href="http://www.google.com/search?q=paris+hilton" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/search?q=paris+hilton', 'paris hilton']);" >paris hilton</a>. In fact they never had more than 1000 results for any search term! May be they had it in past, but today, even for <a href="http://www.google.com/search?q=sex&start=991" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/search?q=sex&start=991', 'sex']);" >sex</a>, they says <em>sorry…</em> like above.</span></span>

**Mysterious yellow ‘o’…**

On Google search result pages, Google logo we see is made of separate images. Yellow and red ‘o’ are rendered from different images. If there is only one search result page *(*<a href="http://www.google.com/search?q=%22rahul+bansal%22+coep" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/search?q=%22rahul+bansal%22+coep', 'check this']);" ><em>check this</em></a>*)*, the Google logo at bottom of search result pages highlighted in below screenshots never shows up. For each extra search result page (upto 10, on each side), a yelllow ‘o’ image is inserted which link to relevant search result pages.

Check following logo captured from this query page…

<img src="http://cdn.devilsworkshop.org/files/2008/09/rahul-google-search-yello-o.jpg" alt="rahul - Google Search yello _o_ .jpg" width="474" height="154" />

or <a href="http://www.google.com/search?q=%22rahul+bansal%22+blogger+pune" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/search?q=%22rahul+bansal%22+blogger+pune', 'check this']);" >check this</a>…

<img src="http://cdn.devilsworkshop.org/files/2008/09/rahul-bansal-blogger-pune-google-search.jpg" alt="_rahul bansal_ blogger pune - Google Search.jpg" width="205" height="68" />

As you can see number of yellow ‘o’ changes for different query.

Conclusion &#8211; How many number of yellow ‘o’ will show up depends on number of search result pages. For ‘no result’ and ‘only one result page’ conditions, no Google logo showed at all.

**Connecting the ‘o’s…**

Its apparent that Google handled two exception conditions but forget to add a condition like, *‘if user request results beyond first 1000, do not show logo’ at all.*

*<span style="font-style: normal">Google is smart enough to prevent user going to error page from navigation links. Check <a href="http://www.google.com/search?hl=en&q=sex&start=980&filter=0" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/search?hl=en&q=sex&start=980&filter=0', 'this query']);" >this query</a>. This is last one, so do not loose your patience! 😉</span>*

<img src="http://cdn.devilsworkshop.org/files/2008/09/google-search-mystery.jpg" alt="Google Search Mystery.jpg" width="388" height="125" />

The above one shows results #981-992, just before hitting limit of 1000. Above one does not have next link!

Google in fact, partially anticipated query modification via URL change and put error message *“Sorry…”* on search result pages beyond 1000. They just forgot to remove bottom logo generation logic from such pages.

As logo logic is there without any linkable result page, Google logo renders without any yellow ‘o’. NO result page means NO yellow ‘o’… !

Red ‘o’ in logo always stand for current page and is not hyperlinked. But depending on search query upto 9 yellow ‘o’ inserted.

<span style="font-size: 14px;font-weight: bold;line-height: normal">In the end…</span>

<span style="line-height: normal"><strong>R</strong></span>**evelation** &#8211; You come to know how Google fooled us by showing some pseudo-count of millions of search results for popular queries. 😀

Apart form this, there is nothing else except fun! If you think you owe me something for the revelation (or fun), you can instantly clear your debts by donating some bucks for my baby <a href="http://www.orkutfeeds.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutfeeds.com/', 'Orkutfeed']);" >Orkutfeed</a>! 😛
