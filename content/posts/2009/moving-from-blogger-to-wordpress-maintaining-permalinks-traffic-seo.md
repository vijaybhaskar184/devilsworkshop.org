---
title: 'Moving From Blogger To WordPress – Maintaining Permalinks, Traffic & SEO'
author: rahul286
date: 2009-01-22
excerpt: |
  Most bloggers who start on blogger.com realize that they should have started on wordpress first. They decide to make a move but worried about losing all traffic, pagerank, SEO, etc.
  Follow steps listed in this guide and you will never loose any traffic, pagerank, permalink &amp; SEO while moving from Blogger to Wordpress!
url: /moving-from-blogger-to-wordpress-maintaining-permalinks-traffic-seo/
views:
  - 7882
robotsmeta:
  - index,follow
dsq_thread_id:
  - 2947094792
categories:
  - Tutorial
tags:
  - Blogger(BlogSpot)
  - Blogging
  - Featured
  - Traffic
  - Wordpress
---
## UPDATE:

#### Please use newer version of <a href="http://bloggertowp.org/migrate-from-blogger-to-wordpress-best-tutorial/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://bloggertowp.org/migrate-from-blogger-to-wordpress-best-tutorial/', 'Blogger To WordPress Migration guide here']);" >Blogger To WordPress Migration guide here</a>.

Support for following tutorial will not be provided anymore.

* * *Most bloggers who start on blogger.com realize that they should have started on wordpress first. Of course this applies to growing blogs whose potential gets limited by Blogger.com platform. Finally they decide to make a move but then comes worry of losing all traffic, pagerank, SEO, etc.</p> 

When I moved to wordpress myself more than a year ago, my lack of knowledge & experience made me lose most of the traffic & SEO juice. But few months back, when my friend Gaurav Dua decided to move his high traffic blog, <a href="http://www.orkutplus.net/2008/07/we-are-on-wordpress-nothing-left-behind.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutplus.net/2008/07/we-are-on-wordpress-nothing-left-behind.html', 'OrkutPlus']);" >OrkutPlus</a>, we did it with 100% success. Since then this post was pending.

Actually I was looking for another real case where I can test procedure outlined below because notes I made while migrating Gaurav’s blog were lost when my dear Macbook got stolen! <img src="http://devilsworkshop.org/wp-includes/images/smilies/frownie.png" alt=":-(" class="wp-smiley" style="height: 1em; max-height: 1em;" />

Anyway thanks to Sri, while moving <a href="http://symposiumz.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://symposiumz.net/', 'symposiumz']);" >symposiumz</a> from blogger to wordpress, we did it again in following steps!

### Notes & Assumption!

The guide is for moving from Blogger.com to self-hosted wordpress. There is no real benefit in moving from blogger.com to wordpress.com.

If you find self-hosting with paid registered domain name is costly affair, you better stick to blogger.com. Also, all screenshots in this post are taken with wordpress 2.7.

## Step 0: Add your custom domain name to blogger

Blogger gives you a subdomain like *something.blogspot.com* by default. They also give you option to <a href="http://help.blogger.com/bin/answer.py?answer=55373" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://help.blogger.com/bin/answer.py?answer=55373', 'use your own custom domain name']);" >use your own custom domain name</a>. If you are using your own domain name on blogger then jump to next step!

<img class="alignnone size-large wp-image-3744" style="border: 1px solid black;" src="http://cdn.devilsworkshop.org/files/2009/01/blogger_-custom-domain-settings-settings-600x282.png" alt="blogger_-custom-domain-settings-settings" width="597" height="282" />

Now if you are not in hurry to move to wordpress, you better register custom domain right now on Blogger. Blogger will automatically transfer all permalinks and SEO to your custom domain. It may take around 2-3 months for major search engines to update your blogs&#8217; permalinks in their index.

You can google for ***site:something.blogspot.com*** and ***site:mydomain.com*** where ***something*** is subdomain given by you blogger and ***mydomain*** is domain registered by you. When all links get updated you will see zero result for subdomain query while many results for custom domain query. Do not forget to use **site:** operator as it is in your query.* ([more about Google search operators][1])*

I know this step is very time-consuming, but this is **the only way** not to lose your pagerank, most of the traffic and SEO juice. Rest we can [move all traffic and maintain permalinks using wordpress plugin/hack][2] I have posted around a year ago!

## Step 1. Setup a dummy wordpress blog

You need to setup a dummy wordpress blog. You can set it on localhost or wordpress.com or anywhere else on internet. WordPress.com is not recommended. First, if you have multiple authors/contributors on your blogger.com, you may be interested in creating different users for each of them on wordpress. WordPress.com doesn&#8217;t allow this.

Also in step 5 below, you will need FTP access to your wordpress blog which is again not possible. Technically you can perform step 5, after setting up final wordpress blog on your webhost but it may create problems, so not recommended. Drop wordpress.com from options list.

There are <a href="http://www.tamba2.org.uk/wordpress/xampp/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.tamba2.org.uk/wordpress/xampp/', 'many']);" title="Install WordPress Locally on Windows XP with XAMPP (easy)">many</a> <a href="http://blogbuildingu.com/wordpress/install-wordpress-wlmp" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blogbuildingu.com/wordpress/install-wordpress-wlmp', 'guides']);" title="# # Install WordPress Locally on Windows Vista and XP with WEMP (nginx, MySQL and PHP) ">guides</a> <a href="http://wojciechbednarski.com/articles/installing-wordpress-locally-on-gentoo-linux" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wojciechbednarski.com/articles/installing-wordpress-locally-on-gentoo-linux', 'for']);" title="Install WordPress Locally on Gentoo Linux (easy)">for</a> <a href="http://sharealike.org/index.php/2007/04/07/multiple-wordpress-blogs-on-a-debian-server/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://sharealike.org/index.php/2007/04/07/multiple-wordpress-blogs-on-a-debian-server/', 'installing']);" title="Install WordPress Locally on Debian Etch using .deb (easiest)">installing</a> <a href="http://techiecat.catsgarden.net/article/install-wordpress-locally-on-fedora.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://techiecat.catsgarden.net/article/install-wordpress-locally-on-fedora.html', 'wordpress']);" title="Install WordPress Locally on Fedora Linux (easy)">wordpress</a> <a href="http://www.supriyadisw.net/2006/12/wordpress-installation-on-ubuntu-with-lamp" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.supriyadisw.net/2006/12/wordpress-installation-on-ubuntu-with-lamp', 'locally']);" title="Install WordPress Locally on Ubuntu Linux with LAMP (easy)">locally</a> (<a href="http://codex.wordpress.org/Installing_WordPress#Installing_Multiple_Blogs" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Installing_WordPress#Installing_Multiple_Blogs', 'official link']);" >official link</a>). For Mac users, there is an <a href="http://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP', 'official guide']);" >official guide</a> as well. You can <a href="http://video.google.com/videosearch?q=install+wordpress+on+localhost" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://video.google.com/videosearch?q=install+wordpress+on+localhost', 'checkout video tutorials as well']);" >checkout video tutorials as well</a>!

## Step 2: Configure permalinks on locally installed wordpress

From wordpress dashboard, go to ***Settings >> Permalinks*** and select ***Custom Structure*** option. Paste following value next to it and save changes.

`/%year%/%monthnum%/%postname%.html`

<img class="alignnone size-large wp-image-3736" style="border: 1px solid black;" src="http://cdn.devilsworkshop.org/files/2009/01/1-permalink-settings-e28094-wordpress-600x352.png" alt="1-permalink-settings-e28094-wordpress" width="597" height="352" />

This will make your wordpress blogs permalink structure looks like blogger.com blog. Do not use any other permalink structure at this time. You can change your permalinks structure safely using <a href="http://www.deanlee.cn/wordpress/permalinks-migration-plugin/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.deanlee.cn/wordpress/permalinks-migration-plugin/', 'permalink migration plugin']);" >permalink migration plugin</a> in future. Note the power of wordpress! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

## Step 3: Import Blogger.com blog to local wordpress

Now its time to import your Blogger.com blog to local WordPress. Log into WordPress dashboard, go to ***Tools >> Import*** and select Blogger from importing options you will see.

Now you must be on **&#8220;Import Blogger&#8221;** page with a button named **&#8220;Authorize&#8221;**. Click on it and you will be taken to a page on Blogger.com *(actually Google.com)* where you will be prompted to **Grant access **to your Blogger account. You may be prompted to log into your Google account if you are not already logged in.

<img class="size-large wp-image-3739 alignnone" style="border: 1px solid black;" src="http://cdn.devilsworkshop.org/files/2009/01/4-grant-access-blogger-google-account-1-600x322.png" alt="4-grant-access-blogger-google-account-1" width="597" height="322" />

Once you grant access, you will be taken back to Blogger importer on local wordpress installation. If you have more that one blog on your Blogger account, you will see all listed there. Just click on **&#8220;import&#8221;** button next to it.

<img class="alignnone size-large wp-image-3740" style="border: 1px solid black;" src="http://cdn.devilsworkshop.org/files/2009/01/5-blogger-blogs-listing-e28094-wordpress-1-600x222.png" alt="5-blogger-blogs-listing-e28094-wordpress-1" width="597" height="222" />

Once you click **import**, all posts and comments from Blogger.com blog starts importing into wordpress. Importer may stop in between. In that case text on button will change from **&#8220;import&#8221;** to **&#8220;continue&#8221;**. Keep clicking on it, till button-text doesn&#8217;t change to **&#8220;Set Authors&#8221;**, which indicates all posts and comments are successfully imported.

Next if you have more than one author, you may need to add users on your wordpress blog. Or you can optionally merge all posts for one author. Either way go ahead and hit **Save Changes**!

<img class="alignnone size-large wp-image-3742" style="border: 1px solid black;" src="http://cdn.devilsworkshop.org/files/2009/01/7-import-author-mapping-e28094-wordpress-600x172.png" alt="7-import-author-mapping-e28094-wordpress" width="597" height="172" />

At this point, your Blogger.com blog is completely imported. But wait, your images hosted on Bloggers&#8217; server are still there so don&#8217;t delete your Blogger.com blog. I will tell you what to do with Blogger.com blog soon!

## Step 4: Changing DNS settings for your domain name

This step can be delayed as we are not done with local wordpress yet. But changes in DNS settings propagates slowly across Internet. So to avoid waiting at step 7, better we initiate DNS settings change right now.

How to access and change DNS settings vary from registrar to registrar. Consult your registrars help pages or contact them if you stuck. As far I know, you should only need to change **nameservers** part. For [Dreamhost][3], nameserver values are NS1.DREAMHOST.COM, NS2.DREAMHOST.COM & NS3.DREAMHOST.COM.

Also you need to flush your computers DNS cache periodically till you don&#8217;t see your Blogger.com blog is gone from your custom domain! Please use Google to know how to flush DNS cache for your operating system.

## Step 5: Fixing permalinks for imported post

In **step 2,** we configured permalink structure which makes permalinks look similar to Blooger.com permalinks. But we need to make them **identical** to retain all our traffic & SEO!

Look at below wordpress post link:

`http://localhost/wp3<strong>/2009/01/national-conference-on-advanced-computer-systems-ncacs-09-hindustan-college-of-engineering.html</strong>`

And following blogger.com post link for same post:

`http://www.symposiumz.net<strong>/2009/01/national-conference-on-advanced.html</strong>`

Ignore domain-name for the time being. We need to make wordpress links look like:

`http://localhost/wp3<strong>/2009/01/</strong><strong>national-conference-on-advanced.html</strong>`

At this point you can use following php script. Just copy-paste following codes into a file with name like fix.php and save/upload it to wordpress folder. Then just open its URL from browser. URL will be like: **http://localhost/wp3/fix.php**

<pre><code class="brush:php">&lt;?php
require_once('wp-load.php');

$res = $wpdb-&gt;get_results("SELECT post_id, meta_value FROM $wpdb-&gt;postmeta WHERE meta_key = 'blogger_permalink'");
$wpdb-&gt;print_error();

foreach ($res as $row){
$slug = explode("/",$row-&gt;meta_value);
$slug = explode(".",$slug[3]);

$wpdb-&gt;query("UPDATE $wpdb-&gt;posts SET post_name ='" . $slug[0] . "' WHERE ID = $row-&gt;post_id");
$wpdb-&gt;print_error();
}

echo "DONE";
?&gt;</code></pre>

On executing this script, only output you must see is &#8220;DONE&#8221;. If you see any error, please contact us, of course using comment form below.

At this point, check permalinks (post links) on your local wordpress installation. Their path part must be identical now to blogger.com permalinks.

## Step 6: Exporting local wordpress blog**  
**

At this point, we are done with local wordpress installation and ready to move our setup to online wordpress on our webhost.

Again go to wordpress dashboard, then go to ***Tools >> Export*** and click **&#8220;Download Export File&#8221;**.

<img class="alignnone size-large wp-image-3749" style="border: 1px solid black;" src="http://cdn.devilsworkshop.org/files/2009/01/export-wordpress-600x273.png" alt="export-wordpress" width="597" height="273" />

This will create a XML file. Keep it safe as we will need it soon!

Now its time to wait till DNS change mentioned in step 4 gets completed. We need DNS to point to our webhost so that we can install wordpress on our new domain.

Still, if you are using a good webhosting service you can complete step 7 even before DNS settings gets updated over web.

## Step 7: Preparing your Webhost&#8230;

You need to add your blogger.com domain on your webhosting account. DNS shouldn&#8217;t create a problem at this stage.

You can also install *(actually upload)* wordpress without any DNS issue. Also upload themes you are planning to use on your new wordpress blog.

There is no tool which can import bloggers theme on wordpress. You can either choose a wordpress theme which matches your blogger template closely or code a wordpress theme yourself. If you need wordpress theme designer, you can hire me! <a href="http://bloggertowp.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://bloggertowp.org/', 'Contact us for more details']);" >Contact us for more details</a>.

## Step 8: Moving from local wordpress to wordpress @ your domain

Now at this point, I assume, DNS change has been completed. Now you are able to see empty wordpress blog on your custom domain.

Now first, follow step 2 and configure permalink on your new blogs.

Then like in step 3, go to ***Tools >> Import*** but select **WordPress **this time. Upload XML file we saved in step 6 and just follow next few steps.

Thats it! You are on new wordpress now! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

## Step 9: Miscellaneous but important&#8230;

### Testing new wordpress&#8217; permalinks & SEO

Just google for ***site:mydomain.com* **where **mydomian.com** is your domain name. Click on any link from search results and you should land on correct post on your new wordpress blog.

### What to do with Blogger.com blog now?

First, swear that you will never **delete** your *(now)* old Blogger.com blog! 😛

Now you go back to Blogger.com&#8217;s custom domain settings and revert back to your old subdomain there. Next follow [instruction posted here][2].

At the end of [those instructions][2]:

  1. Your Blogger.com blog will become inaccessible. This is must for good SEO!
  2. Your Blogger.com subdomain will be active again but all visitors will be migrated with proper permalink structure.

2nd part is important if you have used your Blogger.com for sometime in the beginning. In that case, you must be having non-search engine links from other blogs all over the web. It will be insane if you to contact each blogger/author and ask them to edit their posts. [Instructions listed there][2] will take care of such human permalinks forever & automatically!

### Moving feed subscribers&#8230;

If you are using Feedburner or any third-party service for subscribers, update source feed URL as it will be changed with migration. If you don&#8217;t use feedburner you can still use .htaccess hack to fix URL of your feed.

Just add following lines at the top of your .htaccess file which can be found in root directory of your wordpress installation.

<pre><code class="brush:plain">RewriteRule atom.xml /feed [L,R=301]
RewriteRule rss.xml /feed [L,R=301]</code></pre>

**Migrating other codes&#8230;**

All other codes you use on blogger like in sidebar widgets, adsense, stats-tracking code need to be migrated manually from blogger.com to wordpress.

### Enjoy wordpress!

WordPress have tons of plugins to make your life easier and richer! You must be new on wordpress so rather than burdening yourself with thousands of plugins, you can start with our [wordpress plugin series][4] which covers some of the best wordpress plugins.

### ====

## UPDATE:

#### Please use newer version of <a href="http://bloggertowp.org/migrate-from-blogger-to-wordpress-best-tutorial/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://bloggertowp.org/migrate-from-blogger-to-wordpress-best-tutorial/', 'Blogger To WordPress Migration guide here']);" >Blogger To WordPress Migration guide here</a>.

 [1]: http://devilsworkshop.org/6-most-frequently-used-google-search-operators-for-better-searching/
 [2]: http://devilsworkshop.org/blogger-to-wordpress-traffic-permalinks-redirection-plugin/
 [3]: http://devilsworkshop.org/dreamhost/
 [4]: http://devilsworkshop.org/category/series/wordpress-plugins/
