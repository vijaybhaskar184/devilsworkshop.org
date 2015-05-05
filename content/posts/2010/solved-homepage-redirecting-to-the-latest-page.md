---
title: '[Solved] Homepage Redirecting to The Latest Page Issue'
author: rahul286
date: 2010-07-22
url: /solved-homepage-redirecting-to-the-latest-page/
views:
  - 22
dsq_thread_id:
  - 2947112501
categories:
  - Tips
tags:
  - Homepage Redirection
  - plugin
  - Plugins
  - Redirection
  - Troubleshooting
  - Wordpress
  - Wordpress Plugin
---
There is an issue with Redirection plugin for wordpress. Redirection plugin is used to create redirect rules without any technical knowledge.

### About the issue&#8230;

Whenever you create a latest page inside wordpress, all visitors to your homepage get redirected to the newly created page. This used to happen before also, but seems like the issue has become severe after wordpress 3.0 release.

There may be some bug in the plugin, which results in a rule being added to its (plugin) database as you can see in screenshot below. You can see following screen by going to *&#8220;WordPress Dashboard >> Tools >> Redirection&#8221;* menu and then clicking on **&#8220;Modified posts&#8221;** group.

<img class="alignnone size-large  wp-image-51433" src="http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-for-WordPress-520x237.png" alt="" width="520" height="237" />

As you might have noticed, there is rule with URL &#8216;/&#8217; (slash) being added under **&#8220;Modified posts&#8221;** module in Redirection Plugin. This rule is responsible for homepage redirection.

### Temporary Solution

  1. Just select all rules made for &#8216;/&#8217; (slash) as highlighted in below screenshot. Yes, there can be more than 1 rule for &#8216;/&#8217; (slash) i.e. homepage redirection.
  2. Click on **&#8220;Delete&#8221;** option. You will be asked for confirmation. Just click**&#8220;Yes&#8221;** and you are done!

[<img class="alignnone size-large wp-image-582" src="http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-for-WordPress-1-520x239.png" alt="" width="520" height="239" />][1]

Now, this will solve problem only temporarily. Next time you create a new page, chances are this issue will surface again. So if you edit/create pages quite frequently, you may like to go for permanent solution listed below.

## Permanent Solution

  1. On Redirection Plugins&#8217; Settings page, click on &#8220;Modules&#8221; links.[<img class="alignnone size-large wp-image-583" src="http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-WordPress-Module-520x272.png" alt="" width="520" height="272" />][2]
  2. You will see **3** modules as shown in above screenshot. Click on **&#8220;WordPress&#8221;** module.
  3. On next screen you will see 2 groups &#8211; **&#8220;Redirection&#8221;** and **&#8220;Modified Posts&#8221;**. Click on **&#8220;edit group&#8221;** link, next to the **&#8220;Modified Posts&#8221;** group. *(see screenshot)*[<img class="alignnone size-large wp-image-584" src="http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-Modified-Posts-Module-520x226.png" alt="" width="520" height="226" />][3]
  4. When you will click on **&#8220;edit group&#8221;** link, you will see few more options. Uncheck option saying, *&#8220;Disabling a group will disable all items contained within it&#8221; (see screenshot)[<img class="alignnone size-large wp-image-585" src="http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-Disable-Modified-Posts-520x257.png" alt="" width="520" height="257" />][4]*
  5. Just click **Save** button and you will no longer face this issue again.

This solution actually disables a feature of Redirection Plugin, which is being used by many of us unknowingly.

Every-time we manually edit slug of a published wordpress post or page, Redirection plugin create necessary rules inside &#8220;Modified Posts&#8221; group.

### Summary

<a href="http://urbangiraffe.com/tracker/issues/show/874" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://urbangiraffe.com/tracker/issues/show/874', 'This issue']);" >This issue</a> is already open as a bug in Redirection plugin&#8217;s bug-tracker. Hopefully, this will be solved in near future.

By the way, those weird redirections rules don&#8217;t get added all the time. But if they do, you can use solutions mentioned above. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-for-WordPress-1.png
 [2]: http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-WordPress-Module.png
 [3]: http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-Modified-Posts-Module.png
 [4]: http://cdn.devilsworkshop.org/files/2010/07/Redirection-Plugin-Disable-Modified-Posts.png
