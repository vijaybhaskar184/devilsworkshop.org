---
title: Change Ubuntu Server Timezone
author: rahul286
date: 2012-08-18
excerpt: One simple command to change Ubuntu servers timezone to your local timezone
url: /change-ubuntu-server-timezone/
dsq_thread_id:
  - 2954631855
categories:
  - Tutorial
tags:
  - Server
  - Timezone
  - Tutorials
  - ubuntu
---
If you are using a Ubuntu VPS or dedicated server, then you may have noticed emails coming from server doesn&#8217;t match your local timezone.

Below are 2 methods to quickly fix this issue&#8230;

### Method#1 &#8211; Interactive Mode

Just run following command&#8230;

<pre><code class="no-highlight">dpkg-reconfigure tzdata</code></pre>

and it will show a list of timezone from where you can select your timezone

<a href="http://devilsworkshop.org/change-ubuntu-server-timezone-ist-indian-standard-time/ubuntu-timezone-change/" rel="attachment wp-att-59533"><img class="alignnone size-full wp-image-59533" title="ubuntu timezone change" src="http://cdn.devilsworkshop.org/files/2012/07/ubuntu-timezone-change.png" alt="" width="651" height="441" /></a>

### Method#2 &#8211; Non-Interactive mode

In this method you need to provide value of timezone manually.You can find<a href="http://manpages.ubuntu.com/manpages/DateTime::TimeZone::Catalog.3pm.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://manpages.ubuntu.com/manpages/DateTime::TimeZone::Catalog.3pm.html', ' timezone values here']);" title="See list of timezone values"> timezone values here</a>.

<pre><code class="no-highlight">sudo echo "Asia/Calcutta" &gt; /etc/timezone
sudo dpkg-reconfigure --frontend noninteractive tzdata</code></pre>

After running above command I got following output:

<pre><code class="no-highlight">Current default time zone: 'Asia/Kolkata'
Local time is now: Thu Jul 12 18:56:32 IST 2012.
Universal Time is now: Thu Jul 12 13:26:32 UTC 2012.</code></pre>

#### Why 2 methods?

Non-interactive way comes handy if you want to change timezone programatically. 😉
