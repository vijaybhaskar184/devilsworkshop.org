---
title: 'Firefox: 4 Ways to Make Old Extensions Compatible with Firefox 2.0'
author: rahul286
date: 2006-11-26
url: /firefox-4-ways-to-make-old-extensions-compatible-with-firefox-20/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/11/firefox-4-ways-to-make-old-extensions.html
views:
  - 29
categories:
  - Tips
tags:
  - contest
  - Developers
  - Events
  - Firefox
  - Internet Explorer
  - Polls
  - Security
---
With Firefox 2.0, many of old extensions facing compatibility problem!

Gleb Reys posted <a href="http://www.perfectblogger.com/2006/09/make-extensions-compatible-with-firefox2/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.perfectblogger.com/2006/09/make-extensions-compatible-with-firefox2/', '3-ways to make old firefox extensions compatible with firefox 2.0!']);" >3-ways to make old firefox extensions compatible with firefox 2.0!</a> The three way covers up so many details that u will end up either making ur old extensions compatible with firefox or removing them for sure!

The 4-th way I&#8217;m presenting here based on 3rd way! This is for all firefox extensions developers! Just follow the steps below&#8230;

<span style="font-weight: bold">1.</span> Open the directory of your extensions source code n locate <span style="font-weight: bold">&#8220;install.rdf&#8221;</span>.  
<span style="font-weight: bold">2.</span> Look for following fields&#8230;

> <span style="font-weight: bold"> em:minVersion=&#8221;1.5&#8243;</span>  
> <span style="font-weight: bold"> em:maxVersion=&#8221;1.5.0.*&#8221;</span>

<span style="font-weight: bold">3.</span> em:maxVersion field specifies the maximum firefox version with which your extension is compatible.  
<span style="font-weight: bold">4.</span> Just replace <span style="font-weight: bold">&#8220;1.5.0.*&#8221; </span>with <span style="font-weight: bold">&#8220;2.0.*&#8221;.<br /> 5.</span> Save <span style="font-weight: bold">&#8220;install.rdf&#8221; </span>n rebuild your extension! Thats it!

<span style="font-weight: bold">A word of caution!<br /> </span>Don t forget to test your extension before releasing although this will work most of the times!

<span style="font-weight: bold">Related Link:</span>  
<a href="http://www.spreadfirefox.com/node&#038;id=199011&#038;t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Click here']);" style="font-weight: bold">Click here</a><span style="font-weight: bold"> </span>to download<span style="font-weight: bold"> </span><a href="http://www.spreadfirefox.com/node&#038;id=199011&#038;t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Firefox']);" style="font-weight: bold">Firefox</a><a href="http://www.spreadfirefox.com/node&#038;id=199011&#038;t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', ' 2.0+']);" style="font-weight: bold"> 2.0+</a>!
