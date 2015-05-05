---
title: Moving a WordPress blog from a subdirectory to subdomain preserving permalinks
author: rahul286
date: 2008-08-08
url: /moving-a-wordpress-blog-from-a-subdirectory-to-subdomain-preserving-permalinks/
views:
  - 3575
dsq_thread_id:
  - 2947091379
categories:
  - Tutorial
tags:
  - Bing
  - Developers
  - plugin
  - Windows
  - Wordpress
---
Many bloggers like to keep their blog in either subdirectory *(ex: something.com/blog)* or subdomain *(ex: blog.something.com). *Generally personal blogs are hosted under subdirectories and blog dedicated to services hosted under subdomains.

Anyway, if one want to move his wordpress blog from a subdirectory to a subdomain or vice-versa, it is possible to do so without loosing permalinks and traffic from search engines.

Listed below are steps with case of moving our orkutfeeds service blog from <a href="http://www.orkutfeeds.com/blog" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutfeeds.com/blog', 'http://www.orkutfeeds.com/blog']);" >http://www.orkutfeeds.com/blog</a> to <a href="http://blog.orkutfeeds.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.orkutfeeds.com/', 'http://blog.orkutfeeds.com/']);" title="http://blog.orkutfeeds.com/">http://blog.orkutfeeds.com/</a>. You should change things accordingly as per your configuration.

**[Note:** Please configure subdomain first, it you are moving to a subdomain. Please create a subdirectory first if you are moving to a subdirectory.**]**

### 1. Configuring wordpress

Login to your wordpress dashboard and go to **General settings tab**. You will see ***WordPress address(URL)*** & ***Blog address(URL)** *settings. Change them to target URL.

In our case it was <a href="http://www.orkutfeeds.com/blog" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutfeeds.com/blog', 'http://www.orkutfeeds.com/blog']);" title="http://www.orkutfeeds.com/blog">http://www.orkutfeeds.com/blog</a> which I changed to <a href="http://blog.orkutfeeds.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.orkutfeeds.com/', 'http://blog.orkutfeeds.com/']);" title="http://blog.orkutfeeds.com/">http://blog.orkutfeeds.com/</a>.

[][1]

Change both URL settings carefully as one character mistake may result in disaster. Don’t worry nothing will be lost, only you will need to find a wordpress expert to fix it.

So after you are sure, press **Save Changes **button. You will see something like URL not found error but don’t get panic. It is expected as we haven’t moved/copied our blog files to **subdomain** yet. If your blog is high traffic blog then you may copy your blog files first as explained in next step.

### 2. Moving/Copying Blog Files

**Moving files:**

Now this step is trickiest one and your smartness will decide how long your blog will remain down.

If you have shell access to your webserver and its Linux/Unix based server then you can use **mv** command to move all blog files at once. It took less than 1 second in orkutfeeds case!

<pre><code class="no-highlight">ex: $mv path_to_domain_dir/blog/* path_to_subdomain_dir/</code></pre>

Note that, here ***path\_to\_domain_dir** *and ***path\_to\_subdomain_dir** *should be replaced by actual paths as per your server configuration.

If your blog is high traffic blog, then you may open shell first and type such command in advance. Please DO NOT hit enter before performing step 1.

Also DO NOT attempt moving files using FTP clients.

**Copying files:**

This is for users who do not have shell access or have Windows server. This is good for high traffic site also.

Copy all files from one location to another location via FTP. Alternatively, you can use shell command to copy files if reason for this approach is high traffic to your site.

How you do this is your choice!

Once all your blog files are available at new location and you done with configuring wordpress as mentioned in step 1, you now either waiting on an error page, wordpress login page or settings page again.

Just refresh no matter what is next to your eyes. You should see now your wordpress blog at new location. If you don’t contact me ASAP, with as much details possible.

### 3. Creating/Updating .htaccess file to preserve permalinks

This part is essential to maintain permalinks and SEO juice. Again this is divided in two ways depending on your goal.

**Moving from a subdirectory to a subdomain:**

Under root directory of your site (this is different than root directory of your blog), create (or update if already exist) a .htaccess file. You need to add only 3 lines to it as shown in following example:

<pre><code class="no-highlight">Options +FollowSymlinks
RewriteEngine on
RewriteRule ^blog/(.*) http://blog.orkutfeeds.com/$1 [R=301,NC]</code></pre>

Please make 2 change to last line:

  * If your blogs’ subdirecotry have different name like wordpress, then replace first occurrence of blog with its name. (Ex: For **wordpress**, change **^blog/** to **^wordpress/**)
  * Replace http://blog.orkutfeeds.com/ with your subdomain URL. DO NOT forget trailing slash (/).

Also delete or rename ‘blog’ subdirectory for .htaccess file to work.

**Moving from a subdomain to a subdirectory:**

Under subdomains root directory, create (or update if already exist) a .htaccess file. You need to add only 3 lines to it as shown in following example:

<pre><code class="no-highlight">Options +FollowSymlinks
RewriteEngine on
RewriteRule (.*) http://www.orkutfeeds.com/blog/$1 [R=301,NC]</code></pre>

Please make 1 change to last line:

  * Replace http://www.orkutfeeds.com/blog with your new blog URL. DO NOT forget trailing slash (/).

Thats All! Now all permalinks, including links indexed by Search Engines should work fine.

Ideally, if you can perform all above steps at the same time, the whole process will go unnoticed without any downtime.

If you have any questions/suggestions please feel free to use comment form below.

If you like this post, please check our ongoing [series on best WordPress Plugins][2].

 [1]: http://cdn.devilsworkshop.org/files/2008/08/wordpressbloggeneralsettingstab.jpg
 [2]: http://devilsworkshop.org/category/series/wordpress-plugins/
