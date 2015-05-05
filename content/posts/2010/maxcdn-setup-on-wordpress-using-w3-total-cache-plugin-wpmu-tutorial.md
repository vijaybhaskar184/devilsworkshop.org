---
title: 'How to Setup MaxCDN on WordPress using W3 Total Cache Plugin [WPMU Tutorial]'
author: rahul286
date: 2010-05-07
url: /maxcdn-setup-on-wordpress-using-w3-total-cache-plugin-wpmu-tutorial/
views:
  - 334
dsq_thread_id:
  - 2947110151
categories:
  - Tutorial
tags:
  - CDN
  - MaxCDN
  - Mirroring
  - Optimizing Wordpress
  - Tutorial
  - w3 Total Cahce
  - Wordpress
  - Wordpress Tutorials
---
<figure id="attachment_263" style="width: 150px;" class="wp-caption alignright">[<img class="size-thumbnail  wp-image-51408" src="http://cdn.devilsworkshop.org/files/2010/05/wp-150x150.jpg" alt="Wordpress Logo" height="150" width="150" />][1]<figcaption class="wp-caption-text">Wordpress CDN</figcaption></figure> 

CDN or Content distribution network is a set up of various system around the globe containing the same content and when any client request a webpage, it is delivered from the nearest possible location. This helps user to get the data fast and put less load on main server. If you have a blog which got good traffic, you should try CDN on your blog/Websites. Specially when Google officially made the announcement that<a href="http://www.shoutmeloud.com/google-started-ranking-websites-based-on-load-time-and-speed.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.shoutmeloud.com/google-started-ranking-websites-based-on-load-time-and-speed.html', ' website speed will be one of the major factor in search engine ranking']);" > website speed will be one of the major factor in search engine ranking</a>, CDN is the need of time. Many major blog/Services like mashable, Buysellads are using CDN to optimize their site speed and to keep your site up with high traffic volume.

In this guide we will be setting up <a href="http://wpveda.com/go/MaxCDN/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/go/MaxCDN/', 'maxCDN']);" >maxCDN</a> in our WordPress MU and will be using W3 Total cache plugin.

Starting today, we have configured one of our high traffic blog [Devils&#8217; Workshop][2] to serve &#8220;static content&#8221; using MaxCDN, a CDN service. Soon all of our blogs will be using CDN for faster loading of site.

There are few more reasons for our use of CDN and we also find it economical. More about these points can be discussed on some other day.&nbsp; At the moment, I would like to share steps I have gone through to get CDN working for us.

So here we go&#8230;

### 1. Get an &#8220;Origin Pull&#8221; CDN account

There are many ways in which CDN can be configured. Most easy, simple-to-use and highly transparent is &#8220;Origin Pull&#8221; CDN mode. It is also called &#8220;mirror&#8221; CDN. Again, why I am stressing on &#8220;Origin Pull&#8221; CDN in this article will be discussed some other day.

The &#8220;Origin Pull&#8221; is very easy to use and just in case you want to say bye-bye to CDN in future for some reason, all you need to do is deactivate CDN support from <a href="http://wordpress.org/extend/plugins/w3-total-cache/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/w3-total-cache/', 'w3 Total Cache plugin']);" >w3 Total Cache plugin</a>.

Shockingly, <a href="http://www.rackspacecloud.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rackspacecloud.com/', 'rackspacecloud']);" >rackspacecloud</a> or <a href="http://aws.amazon.com/cloudfront/#functionality" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://aws.amazon.com/cloudfront/#functionality', 'amazon cloudfront']);" >amazon cloudfront</a> do not offer desired kind of CDN setup.

We choose <a href="http://wpveda.com/go/MaxCDN/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/go/MaxCDN/', 'MaxCDN']);" >MaxCDN</a> as they offers &#8220;Origin Pull&#8221; CDN.

### 2. Create &#8220;Origin Pull&#8221; zone with MaxCDN

  1. <span style="font-weight: normal;font-size: 13px">First, login to you MaxCDN account.</span>
  2. <span style="font-weight: normal;font-size: 13px"> From MaxCDN dashboard menu, jump to <strong>&#8220;Manage Zones&#8221;</strong> option. Then click on <strong>&#8220;Create Pull Zone&#8221;</strong> option. <em>(see screenshot)</em></span>

<p style="text-align: center">
  <em><a href="http://cdn.devilsworkshop.org/files/2010/05/1.-Create-Pull-Zone-MaxCDN.png"><img class="aligncenter size-large wp-image-248" src="http://cdn.devilsworkshop.org/files/2010/05/1.-Create-Pull-Zone-MaxCDN-590x382.png" alt="" height="382" width="590" /></a></em>
</p>

3. On next screen enter few things needed to create a pull zone.

  * **Pull Zone Name:** This can be anything. It just needs to unique, without spaces, 3 char long. Much like **username** field.
  * **Origin Server URL:** Exact link to homepage of your wordpress blog. Include &#8220;http://&#8221; as well as trailing slash(/).
  * **Custom CDN Domain:** Optional. Recommended for branding. Use any unused subdomain like cdn.example.com
  * **Label: **Optional. Can be anything describing this zone. MaxCDN allows you to create many *(maybe unlimited)* pull zones.**  
    **
  * **Compression: **Enable this as this will save usage if bandwidth on your account.

Below is a screenshot showing values we have used for <http://devilsworkshop.org/>

[<img class="aligncenter size-large wp-image-249" src="http://cdn.devilsworkshop.org/files/2010/05/2.-Pull-Zone-MaxCDN-590x409.png" alt="" height="409" width="590" />][3]

4. Once you click &#8220;create&#8221;, if all goes well you will see a success message like below.

### [<img class="aligncenter size-large wp-image-250" src="http://cdn.devilsworkshop.org/files/2010/05/3.-Pull-Zone-MaxCDN-590x189.png" alt="" height="189" width="590" />][4]3. Creating a CNAME record

When you see &#8220;success&#8221; message, technically your CDN is ready for use. But if you care about branding part and wanted to use a subdomain of your own, you must create a CNAME record and also verify that this newly created CNAME record is being reflected worldwide.

While steps to create a CNAME record varies for different domain registrar you can use a service like <a href="http://just-ping.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://just-ping.com/', 'just-ping.com']);" >just-ping.com</a> ([review][5]) to verify if your CNAME record is created successfully.

Once you become sure that your CNAME record is successfully created, jump to next step.

### 4. Configuring w3 Total Cache with CDN

There may be many <a href="http://wpveda.com/my-comments-manager-wordpress-plugin/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/my-comments-manager-wordpress-plugin/', 'wordpress plugins']);" title="wordpress plugins">wordpress plugins</a> for CDN but <a href="http://wordpress.org/extend/plugins/w3-total-cache/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/w3-total-cache/', 'w3 Total cache']);" >w3 Total cache</a> is very simple to use. You can use w3 Total Cache for CDN only, just in case you are using other caching plugin as well. We use <a href="http://wordpress.org/extend/plugins/wp-super-cache/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/wp-super-cache/', 'Wp Super Cache']);" >Wp Super Cache</a> for page caching and now w3 Total Cache for CDN and minifying scripts.

To configure your wordpress to use CDN you have created in above steps, first install w3 Total Cache if its not already installed.

Next, go to **&#8220;Settings >> w3 Total Cache&#8221;** options page. You will land on **&#8220;General Settings&#8221;** page.

Just scroll down to **&#8220;Content Delivery Network&#8221;** settings menu. *(see screenshot below)*

[<img class="aligncenter size-large wp-image-251" src="http://cdn.devilsworkshop.org/files/2010/05/4.-W3-Total-Cache-General-Settings-CDN-590x214.png" alt="" height="214" width="590" />][6]

Enable CDN and select **&#8220;Mirror&#8221;** as CDN Type. Click **&#8220;Save Changes&#8221;** button.

You will be next prompted to configure **&#8220;Replace default hostname with&#8221;** field under **&#8220;CDN Settings&#8221;**. *(see screenshot below)*

[<img class="aligncenter size-large wp-image-254" src="http://cdn.devilsworkshop.org/files/2010/05/5.-W3-Total-Cache-CDN-Settings-1-590x285.png" alt="" height="285" width="590" />][7]

Click on **&#8220;CDN Settings&#8221;** and you will see a new set of options.

Jump to **&#8220;Replace default hostname with&#8221;** field and enter subdomain value you have created CNAME for in above step. *(see screenshot below)*

[<img class="aligncenter size-large wp-image-255" src="http://cdn.devilsworkshop.org/files/2010/05/6-W3-Total-Cache-CDN-setup-590x410.png" alt="" height="410" width="590" />][8]Click on **&#8220;Save Changes&#8221;**. At this point, your CDN has been setup.

### Verify if CDN setup is working

First, clean all caches you may have on your wordpress from w3 Total Cache or Wp super cache or any other caching plugin.

Next, visit your blog from front-end and check image URLs. Image URLs must being with CDN subdomain rather than actual domain of your blog.

**For example:**

<pre><code class="no-highlight">http://cdn.devilsworkshop.org/files/2010/05/just-ping-service-2-600x236.png</code></pre>

will become

<pre><code class="no-highlight">http://cdn.devilsworkshop.org/files/2010/05/just-ping-service-2-600x236.png</code></pre>

Feel free to use comment form below, in case you get stuck! 😉

**Links: **<a href="http://wpveda.com/go/MaxCDN/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/go/MaxCDN/', 'Signup for MaxCDN']);" >Signup for MaxCDN</a> | <a href="http://wordpress.org/extend/plugins/w3-total-cache/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/w3-total-cache/', 'w3 Total Cache']);" >w3 Total Cache</a> | <a href="http://just-ping.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://just-ping.com/', 'Just-Ping.com']);" >Just-Ping.com</a>

 [1]: http://cdn.devilsworkshop.org/files/2010/05/wp.jpg
 [2]: http://devilsworkshop.org/ "Technology blog"
 [3]: http://cdn.devilsworkshop.org/files/2010/05/2.-Pull-Zone-MaxCDN.png
 [4]: http://cdn.devilsworkshop.org/files/2010/05/3.-Pull-Zone-MaxCDN.png
 [5]: http://devilsworkshop.org/just-ping-com-free-wordwide-ping-online-service/ "Read more about just-ping service"
 [6]: http://cdn.devilsworkshop.org/files/2010/05/4.-W3-Total-Cache-General-Settings-CDN.png
 [7]: http://cdn.devilsworkshop.org/files/2010/05/5.-W3-Total-Cache-CDN-Settings-1.png
 [8]: http://cdn.devilsworkshop.org/files/2010/05/6-W3-Total-Cache-CDN-setup.png
