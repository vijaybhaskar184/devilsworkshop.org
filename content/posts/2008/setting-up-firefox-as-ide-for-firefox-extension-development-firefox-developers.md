---
title: 'Setting Up Firefox as IDE for Firefox Extension Development! [Firefox Developers]'
author: rahul286
date: 2008-02-18
url: /setting-up-firefox-as-ide-for-firefox-extension-development-firefox-developers/
views:
  - 2815
dsq_thread_id:
  - 2946463609
categories:
  - Tutorial
tags:
  - Developers
  - Firefox
  - Javascript
  - plugin
  - Software
  - Windows
---
This article is intended for all geeks who are working on firefox extension development! If you are new to this then you may want to start with [shortest tutorial for firefox extension development][1]!

This is small but important tutorial for those who seriously want to develop firefox extensions. As there is no good IDE for developing firefox extension you have to change your firefox itself so that it can act like IDE! With proper settings and few extensions you can really reduce extension development time and get a nice debugging environment.

Following points have been covered in this article:

  * Setup a different profile for extension development 
  * Development Preferences 
  * Development Extensions 
  * Live Extension Development 
  * Things to skip 

&#160;

**#Setup a different profile for extension development**

This is first thing to do. Creating separate profiles for extension development saves you from personal data loss which may result from accidental crashes. Also points explained below will make your firefox slow and bulky which is not desirable for day-2-day browsing specially when you use sites based on AJAX like Gmail!

If you know how to use [multiple profiles in firefox][2] then create a new profile right now for extension development. If you are new then you can [read our earlier article][2] to do this. Also as always there is an <a href="http://kb.mozillazine.org/Profile_Manager" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://kb.mozillazine.org/Profile_Manager', 'official doc']);" >official doc</a> which explains this topic.

If you are interested in my extension development profile then you can <a href="http://pub.rtcamp.com/firefox/Dev.zip" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pub.rtcamp.com/firefox/Dev.zip', 'download']);" >download</a> it from <a href="http://pub.rtcamp.com/firefox/Dev.zip" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pub.rtcamp.com/firefox/Dev.zip', 'here']);" >here</a>! *(Size: ~4.0 MB)*

&#160;

****

**#Development Preferences**

These are basically settings which you can change by visiting *about:config* page. Just type *about:config* in address bar and hit enter. You will see lots of settings there. Now use search feature to find following settings and change their values if needed. If a search returns no result right click in windows to create a new setting. If you need help regarding this, please refer official Mozilla doc &#8211; <a href="http://www.mozilla.org/support/firefox/edit" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mozilla.org/support/firefox/edit', 'Editing Configuration Files']);" >Editing Configuration Files</a>.

Following is list of **setting = value **pair. If you are new, just do it without bothering too much.

  * **javascript.options.showInConsole = true**. Logs errors in chrome files to the Error Console. 
  * **nglayout.debug.disable\_xul\_cache = true**. Disables the XUL cache so that changes to windows and dialogs do not require a restart. 
  * **browser.dom.window.dump.enabled = true**. Enables the use of the dump() statement to print to the standard console. See <a href="http://developer.mozilla.org/en/docs/DOM:window.dump" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://developer.mozilla.org/en/docs/DOM:window.dump', 'window.dump']);" >window.dump</a> for more info. 
  * **javascript.options.strict = true**. Enables strict JavaScript warnings in the Error Console. 
  * **browser.cache.memory.enable = false**. Disables caching in main memory i.e. RAM. 
  * **browser.cache.disk.enable = false**. Disables caching on secondary storage i.e. hard-drive in most cases. 

Last two are not present in official doc. They reduce performance but better to do them for live extension development as explained later. Also the performance hit can be and must be offset by creating a new profile for extension development as explained above.

&#160;

****

**#Development Extensions**

There are lots of extensions which can make extension development process pretty easy! Complied below is list from official docs and my experience over the time!

**>> From official doc**

  * DOM Inspector, an option of a custom installation. 
  * <a href="https://addons.mozilla.org/en-US/firefox/addon/216" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/216', 'Venkman']);" >Venkman</a>, a JavaScript Debugger. 
  * <a href="http://ted.mielczarek.org/code/mozilla/extensiondev/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ted.mielczarek.org/code/mozilla/extensiondev/', 'Extension Developer&#8217;s Extension']);" >Extension Developer&#8217;s Extension</a> 
  * <a href="https://addons.mozilla.org/en-US/firefox/addon/1815" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/1815', 'Console2']);" >Console<sup>2</sup></a> 
  * <a href="https://addons.mozilla.org/firefox/4453" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/firefox/4453', 'Chrome List']);" >Chrome List</a> 
  * <a href="https://addons.mozilla.org/en-US/firefox/addon/1843" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/1843', 'Firebug']);" >Firebug</a> 
  * <a href="https://addons.mozilla.org/de/firefox/addon/1729" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/de/firefox/addon/1729', 'Execute JS']);" >Execute JS</a> 
  * <a href="http://xpcomviewer.mozdev.org" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://xpcomviewer.mozdev.org', 'XPCOMViewer']);" >XPCOMViewer</a>, an XPCOM inspector 

**>> Recommendations**

  * <a href="https://addons.mozilla.org/en-US/firefox/addon/1027" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/1027', 'All-in-One Sidebar']);" >All-in-One Sidebar</a> 
  * <a href="https://addons.mozilla.org/en-US/firefox/addon/748" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/748', 'GreaseMonkey']);" >GreaseMonkey</a> 
  * <a href="https://addons.mozilla.org/en-US/firefox/addon/697" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/697', 'View Formatted Source']);" >View Formatted Source</a> 
  * <a href="https://addons.mozilla.org/en-US/firefox/addon/655" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/655', 'View Source Chart']);" >View Source Chart</a> 
  * <a href="https://addons.mozilla.org/en-US/firefox/addon/1192" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/1192', 'XPather']);" >XPather</a> 
  * <a href="http://addons.mozilla.org/firefox/addon/3829" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://addons.mozilla.org/firefox/addon/3829', 'Live HTTP Headers']);" >Live HTTP Headers</a> 

This is by no mean a complete list. You may find some of these useless at this point but what you really need is mainly depend on goals of your extensions. You may like to bookmark <a href="https://addons.mozilla.org/en-US/firefox/browse/type:1/cat:4" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/browse/type:1/cat:4', 'official developers extension listing']);" >official developers extension listing</a>. Alternately you can [add it to your search toolbar][3].

&#160;

**#Live Extension Development**

Do you follow following sequence?

  1. Edit Extension. 
  2. Package it into XPI. 
  3. Install edited extension. 
  4. Restart Firefox. 

If yes, then you can&#8217;t go far! 

At this point you **must **switch to live extension development. This way you can skip packaging/installation steps always and restarting step most of the time!

To do this, first navigate to folder named ***extensions*** where all installed extensions are stored. ***extensions*** folder can be found in path like <profiles\_folder>/<profile\_name>/**extensions. **(<a href="http://kb.mozillazine.org/Profile_folder" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://kb.mozillazine.org/Profile_folder', 'Help on finding profile folder']);" >Help on finding profile folder</a>)

Once in ***extensions*** folder, you will find many subfolders. Each of these corresponds to one extension and folder names indicate extensions **g*uid***. Now if your extension is already installed then you will see a folder with its ***guid*** name. Jump in it. Or just create a new folder with its name equal to ***<u>guid</u>*** under ***extensions*** folder for new extension and start developing right in that folder. 

Now important point is, changes made to files under extension folders are reflected instantly without packaging or installation. Still you may need to restart firefox depending on change you have made! A slightly <a href="http://www.borngeek.com/firefox/toolbar-tutorial/ch_4.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.borngeek.com/firefox/toolbar-tutorial/ch_4.html', 'different approach']);" >different approach</a> is taken by Jonah Bishop at borngeek.

&#160;

**#Things to skip**

This is little unrelated to this topic but nevertheless important as a beginner. Many articles including official talks about deploying extensions into JAR files. I personally against it as JAR files complicates the process of development as well as maintenance with no considerable benefit. 

Also there is a complicated process called signing XPI which is really not essential at beginners level!

While surfing, you will come across many topics which can be skipped without any problem to save your time as well as confusion.

&#160;

Finally there is no as such hardware requirement but consider having atleast 1 GB RAM as extensions like Venkman are memory hungry. 

That&#8217;s it! If you have any query regarding this or any other problem feel free to use comments form below. Please avoid contacting via email/chat for generic problem as open discussion here can help others too.

&#160;

****

***Credits:** Mozilla&#8217;s official article &#8211; *<a href="http://developer.mozilla.org/en/docs/Setting_up_extension_development_environment" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://developer.mozilla.org/en/docs/Setting_up_extension_development_environment', 'Setting up extension development environment']);" ><em>Setting up extension development environment</em></a>* & many other docs are used while writing this.*

 [1]: http://devilsworkshop.org/2007/09/28/shortest-tutorial-for-firefox-extensiontoolbar-development/
 [2]: http://devilsworkshop.org/2007/05/04/multiple-firefox-profiles-at-the-same-time-firefox-command-line-arguments-trick/
 [3]: http://devilsworkshop.org/2008/02/06/searching-search-plugin-from-search-bar-firefox-trick/
