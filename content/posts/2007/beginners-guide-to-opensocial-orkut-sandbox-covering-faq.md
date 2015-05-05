---
title: 'Beginners Guide To OpenSocial & Orkut Sandbox! [covering FAQ]'
author: rahul286
date: 2007-12-19
url: /beginners-guide-to-opensocial-orkut-sandbox-covering-faq/
views:
  - 2024
dsq_thread_id:
  - 2946463124
categories:
  - Tips
tags:
  - Bing
  - Blogging
  - Developers
  - Google
  - Javascript
  - Open Social
  - OpenSocial
---
In this post, I will try to clear your doubts on orkut sandbox and opensocial API. In the end I will be listing resources that you can use and bookmark!

****

**#What is OpenSocial?**

From <a href="http://en.wikipedia.org/wiki/Open_Social" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Open_Social', 'wikipedia']);" >wikipedia</a>,

> OpenSocial is a set of common application programming interfaces (APIs) for web-based social network applications, developed by Google, and released November 1, 2007. Applications implementing the OpenSocial APIs will be interoperable with any social network system that supports them, including features on sites such as MySpace and Friendster.

Except facebook almost all social networking sites are using OpenSocial. Means you can safely assume if you write application for orkut using OpenSocial API it will work on other sites (like MySpace, LinkedIn, etc) almost without change! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**#What is orkut sandbox?**

First lets get relevant definition of <a href="http://en.wikipedia.org/wiki/Sandbox_%28software_development%29" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Sandbox_%28software_development%29', 'sandbox']);" >sandbox</a> from <a href="http://en.wikipedia.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/', 'wikipedia']);" >wikipedia</a>&#8230;

> "The term sandbox is commonly used in the development of Web services to refer to a mirrored production environment for use by external developers. Typically, a third-party developer will develop an create an application that will use a web service from the sandbox, which is used to allow third-party team to validate their code before migrating it to the production environment"

So think of Orkut Sandbox as orkut mirror where you can write application using <a href="http://code.google.com/apis/opensocial/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/opensocial/', 'Open Social API']);" >Open Social API</a>. Its like creating a fake orkut account to test new orkut hack. Think of sandbox as a fake profile with some features added/removed and created by orkut itself for you to test applications!

****

**#Cool&#8230; How to signup for orkut sandbox?**

By default sandbox access is disabled for a orkut account. You can request access to sandbox using <a href="http://code.google.com/support/opensocialsignup/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/support/opensocialsignup/', 'orkut sandbox sign up form']);" >orkut sandbox sign up form</a>. The sandbox access is **completely free** and will require you to have orkut account beforehand.

After submitting sign-up form you get mail from Google (normally in 2-3 days) indicating status of your request.

****

**#How to access sandbox? Where it is?**

Sandbox is extension to your existing orkut account! After receiving confirmation mail from google you can just log on to <a href="http://sandbox.orkut.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://sandbox.orkut.com', 'http://sandbox.orkut.com']);" >http://sandbox.orkut.com</a> to enter into sandbox. Also you can modify any orkut pages&#8217; URL to get its view from sandbox.

Example:

`http://<b>www</b>.orkut.com/scrapbook.aspx?uid=[some_num]`

will become..

`http://<b>sandbox</b>.orkut.com/scrapbook.aspx?uid=[some_num]`

This small URL change once resulted in [scrapbook hack which enabled people to read locked scrapbook via sandbox][1]!

&#160;

**#Sandbox Limitation**

OpenSocial API Calls will operate on sandbox whitelisted friends only. This means to test your applications you need either your friends to gain sandbox access or add people who have access to sandbox as friends. There is an <a href="http://www.orkut.com/Community.aspx?cmm=41271206" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/Community.aspx?cmm=41271206', 'orkut sandbox community']);" >orkut sandbox community</a> where you can find people with sandbox access and add them.

This limitation is enforced for security reasons as <a href="http://groups.google.com/group/opensocial-orkut/browse_thread/thread/22b8226f84bd9bee" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://groups.google.com/group/opensocial-orkut/browse_thread/thread/22b8226f84bd9bee', 'explained']);" >explained</a> by <a href="http://groups.google.com/groups/profile?enc_user=Z2HydxUAAAAiPRLQuJuccZNFVUKOY-JjP4_stcVCrpmd5JEayTpuyQ" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://groups.google.com/groups/profile?enc_user=Z2HydxUAAAAiPRLQuJuccZNFVUKOY-JjP4_stcVCrpmd5JEayTpuyQ', 'Arne Roomann-Kurrik']);" >Arne Roomann-Kurrik</a>!

Also private information like email addresses of users can not be accessed! So spammers do not think about sandbox as a way for your evil intentions <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" /> 

**#Resources**

If you are not familiar with words like sandbox, API use following wikipedia links&#8230;

  * <a href="http://en.wikipedia.org/wiki/Sandbox_%28software_development%29" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Sandbox_%28software_development%29', 'Sandbox']);" >Sandbox</a> 
  * <a href="http://en.wikipedia.org/wiki/API" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/API', 'Application programming interface (API)']);" >Application programming interface (API)</a> 
  * <a href="http://groups.google.com/group/opensocial/web/whats-up-with-opensocial" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://groups.google.com/group/opensocial/web/whats-up-with-opensocial', 'Whats up with OpenSocial!']);" >Whats up with OpenSocial!</a>&#160;&#160; 

Best starting point for developers&#8230;

  * <a href="http://code.google.com/apis/opensocial/articles/tutorial.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/opensocial/articles/tutorial.html', 'Gadget Tutorial']);" title="http://code.google.com/apis/opensocial/articles/tutorial.html">Gadget Tutorial</a> (Like Hello World Program) 
  * <a href="http://code.google.com/apis/orkut/articles/anatomy.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/orkut/articles/anatomy.html', 'Anatomy of an Orkut Application']);" >Anatomy of an Orkut Application</a>&#160; 

Worth bookmarking&#8230;.

  * <a href="http://code.google.com/apis/opensocial/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/opensocial/', 'OpenSocial Official Site &#8211; Homepage']);" >OpenSocial Official Site &#8211; Homepage</a> 
  * <a href="http://code.google.com/apis/opensocial/docs/javascript/index.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/opensocial/docs/javascript/index.html', 'OpenSocial API Developer&#8217;s Guide']);" title="http://code.google.com/apis/opensocial/docs/javascript/index.html">OpenSocial API Developer&#8217;s Guide</a> 
  * <a href="http://code.google.com/apis/opensocial/docs/javascript/reference/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/opensocial/docs/javascript/reference/', 'OpenSocial API Reference']);" >OpenSocial API Reference</a> 
  * <a href="http://code.google.com/apis/opensocial/examples.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/opensocial/examples.html', 'Example Applications']);" title="http://code.google.com/apis/opensocial/examples.html">Example Applications</a>&#160; 

Finally if you need to communicate&#8230;<a href="http://opensocialapis.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://opensocialapis.blogspot.com/', '']);" ></a>

  * <a href="http://groups.google.com/group/opensocial" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://groups.google.com/group/opensocial', 'OpenSocial Google Group']);" title="http://groups.google.com/group/opensocial">OpenSocial Google Group</a> 
  * <a href="http://opensocialapis.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://opensocialapis.blogspot.com/', 'OpenSocial API Blog']);" title="http://opensocialapis.blogspot.com/">OpenSocial API Blog</a> 
  * <a href="http://www.orkut.com/Community.aspx?cmm=41096312" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/Community.aspx?cmm=41096312', 'OpenSocial &#8211; Orkut Community']);" >OpenSocial &#8211; Orkut Community</a>&#160; 
  * <a href="http://www.orkut.com/Community.aspx?cmm=41271206" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/Community.aspx?cmm=41271206', 'Orkut Sandbox &#8211; Orkut community']);" >Orkut Sandbox &#8211; Orkut community</a> 
  * [Live Help &#8211; IRC #opensocial][2] (irc://irc.freenode.net/opensocial)

Let me know if I missed anything! Happy coding&#8230; <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://devilsworkshop.org/2007/12/16/3-ways-to-read-locked-scrapbook-on-orkut/
 [2]: irc://irc.freenode.net/opensocial
