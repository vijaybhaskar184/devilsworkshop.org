---
title: Fix File Permission on Linux/Mac Server
author: rahul286
date: 2012-07-28
url: /fix-file-permission-linuxmac-server/
dsq_thread_id:
  - 3221966534
categories:
  - Tips
tags:
  - Commands
  - Linux
  - Mac
  - Permissions
  - Security
  - Server
  - Wordpress
---
Over the time, file permissions get messy on a linux/mac server. It really annoys (me) to see static files like images have 0755 i.e. executable permission set for them.

**You can use following commands to fix permissions:**

<pre><code class="no-highlight">find . -type d -print0 | xargs -0 chmod 0775
find . -type f -print0 | xargs -0 chmod 0664</code></pre>

I found many scripts and tools to do this job. IMHO, above command does what we really need!

**For WordPress**

Ideally, on a wordpress site, no files under &#8220;wp-content/uploads&#8221; directory should be executable. In case of WordPress multisite, it will be &#8220;wp-content/blogs.dir&#8221; directory.

Its better to fix file-permissions periodically on your WordPress setup.
