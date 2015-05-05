---
title: 'Firefox Tweaks: Address bar as Search BOX – Let Google make you feel Lucky!'
author: rahul286
date: 2007-06-07
url: /firefox-tweaks-address-bar-as-search-box-let-google-make-you-feel-lucky/
views:
  - 11465
dsq_thread_id:
  - 2946415233
categories:
  - Reviews
tags:
  - Firefox
  - Google
  - Google Search
  - Internet Explorer
  - Security
---
If you use **address bar as search box** in Mozilla Firefox then you can skip to advance options!

Yes in Mozilla Firefox you can just **type your search query in address bar and get the search results displyed to you**!

By default, whenever you hit enter after typing anything in address bar (also called navigation bar/ URL bar), Firefox checks if entered string is [valid address][1] or not! If its valid address firefox tries to load corresponding site/page for you! (Note that here if site is down or you have misspelled address, it won&#8217;t get directed to search engine). If entered string is a invalid URL, it will be submitted to Google Search and search results are returned!

If its fine with you then its great but if you want to use [Google Search with I am feeling option][2] or want to use another search engine as default then read following **steps to change defaults search engine or its parameter:**

<a href="http://cdn.devilsworkshop.org/files/2007/06/address-bar-as-serach-box-devilworkshoporg.JPG" title="Click here for fullscreen Image" target="_blank"><img class="wp-image-51511" src="http://cdn.devilsworkshop.org/files/2007/06/address-bar-as-serach-box-devilworkshoporg.thumbnail.JPG" style="float: right" alt="Firefox Tweaks: Address bar as Search BOX" /></a>

  1. Type **about:config** in address bar of Mozilla Firefox. A page with lots of text and 4 columns will get displayed!
  2. Type **keyword.URL** in filter box. The long list will be trimmed down to just one line! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
  3. Right-Click on that line and select **modify** option. A box will be displayed.
  4. Enter any of the following string for corresponding search engine!
  5. Changes will be reflected immediately with out any restart!

**#Search Engine List:**

Default Google Search (In case you want to restore originals)  
`http://www.google.co.in/search?btnG=Google+Search&q=`

Google Search with I&#8217;m Feeling Lucky (what the hell is difference?)  
`http://www.google.co.in/search?btnI=I%27m+Feeling+Lucky&q=`

Yahoo search  
`http://search.yahoo.com/search?p=`

Microsoft&#8217;s Live.com  
`http://search.live.com/results.aspx?q=`

Wikipedia  
`http://en.wikipedia.org/wiki/Special:Search?fulltext=Search&search=`

Wikipedia (GO option &#8211; Feeling Like Lucky)  
`http://en.wikipedia.org/wiki/Special:Search?go=Go&search=`

Technorati  
`http://www.technorati.com/search/`

**Glossary:**

**<a title="VALID_ADDRESS" name="VALID_ADDRESS"></a>#Valid Address:** A valid address is something optionally starts with protocols like HTTP (i.e. http://) and ends with domain name (e.g. .com, .org, .net, etc) and **must not contain any space** in between! So anything that does not this definition is a invalid address. Well firefox does not need to bother about all things and a simple check can be used &#8211; whether user entered address contains space or not!

**<a title="GOOGLE_LUCKY" name="GOOGLE_LUCKY"></a>#Google Search with I&#8217;m Feeling Lucky:** From Google Search Homepage when you enter a query in search box and and instead of hitting Google Search hits I&#8217;m Feeling Lucky button, Google will redirect you to the first search result which is often what we want!

 [1]: #VALID_ADDRESS "What makes an address valid?"
 [2]: #GOOGLE_LUCKY "What is Google Seacrh with I'm Feeling Lucky option?"
