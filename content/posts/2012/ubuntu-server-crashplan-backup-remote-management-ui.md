---
title: Ubuntu Server + CrashPlan + Backup + Remote Management using Mac
author: rahul286
date: 2012-07-27
url: /ubuntu-server-crashplan-backup-remote-management-ui/
dsq_thread_id:
  - 2950130173
categories:
  - Tutorial
tags:
  - Backup
  - Crashplan
  - Headless
  - Linux
  - Mac
  - Software
  - ubuntu
  - Ubuntu Server
---
We already use rsanpshot for backups. But its always feel safe to have more than one kind of backup.

For other type of backup, we use Crashplan. They support all major platforms, provides many options and have their service decently priced. It will take a separate post to list down all things I like about Crashplan so lets get back to work here!

### What I wanted to do:

  1. Run Crashplan on Ubuntu Headless Server.
  2. Manage it using Crashplan desktop software on my Mac.

<div>
  I guess you can start remote X session or something like that on a Ubuntu server but that will be overkill for server. Specially when you can achieve above tasks in just 2 minutes using following commands.
</div>

### Preparation

Crashplan on Ubuntu will need Java Runtime (JRE). Crashplan can install it itself but I prefer to have more control over which JRE I end up putting on our server. They have almost <a href="https://help.ubuntu.com/community/Java" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://help.ubuntu.com/community/Java', '5 version of JAVA for Ubuntu']);" >5 version of JAVA for Ubuntu</a>!

Anyway, just run following command as root user or with sudo access:

<pre><code class="no-highlight">apt-get install openjdk-7-jre-headless</code></pre>

### Install Crashplan

Next, we will install Crashplan directly.

Go to <a href="http://www.crashplan.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.crashplan.com/', 'Crashplan site']);" >Crashplan site</a>, select Linux version and copy-download link to grab latest Crashplan version. Crashplan 3.2.1 is latest as of July 2012.

Run following commands to download, uncompress and install **CrashPlan** or **CrashPlan+**&#8230;

<pre><code class="no-highlight">wget http://download.crashplan.com/installs/linux/install/CrashPlan/CrashPlan_3.2.1_Linux.tgz
tar -zxvf CrashPlan_3.2.1_Linux.tgz
cd CrashPlan-install
./install.sh</code></pre>

If you are using **CrashPlan PRO**, use following&#8230;

<pre><code class="no-highlight">wget http://download.crashplan.com/installs/linux/install/CrashPlanPRO/CrashPlanPRO_3.5.3_Linux.tgz
tar -zxvf CrashPlanPRO_3.5.3_Linux.tgz
cd CrashPlanPRO-install
./install.sh</code></pre>

Installer will ask you for many questions. Just keep hitting enter keys. Defaults options are all good to go ahead!

At this point Crashplan is running on your Ubuntu Server but it&#8217;s not backing anything yet! We will use Crashplan&#8217;s Desktop edition for Mac to start backup.

#### Troubleshooting

If your installation ends with warning:

Your Linux system is currently configured to watch 8192 files in real time.  
We recommend using a larger value; see the CrashPlan support site for details

Then you need to tweak sysctl file:

<pre><code class="no-highlight">/etc/sysctl.d/custom.conf</code></pre>

Add&#8230;

<pre><code class="no-highlight">fs.inotify.max_user_watches=1048576</code></pre>

Save changes&#8230;

<pre><code class="no-highlight">sysctl -p</code></pre>

### Remote Management UI (using Mac)

Go to Crashplan&#8217;s site. This time download Crashplan for Mac & Install it.

If you have started Crashplan after installation, quit it.

Open terminal to edit Crashplan config file&#8230;

<pre><code class="no-highlight">vim /Applications/CrashPlan.app/Contents/Resources/Java/conf/ui.properties</code></pre>

You can use any text-editor in case you don&#8217;e like Vim.

Find a line like below:

<pre><code class="no-highlight">#servicePort=4243</code></pre>

Change it to:

<pre><code class="no-highlight">servicePort=4200</code></pre>

Note that we have changed port number from 4243 to 4200 (in case you thought we just uncomment it!).

Save file. Exit vim.

Create SSH Tunnel from your mac to remote Ubuntu server using a command-like below:

<pre><code class="no-highlight">ssh -L 4200:localhost:4243 username@hostname</code></pre>

Replace ***username ***and** *****hostname*** with your a real username on your hostname. You can put your server IP address also.

After you run above command, you will be logged into a shell on your server. Keep it running as its connecting your desktop crashplan to your server crashplan!

Finally, you can start your Crashplan on Mac and configure backup for your Ubuntu Server!

In case you are already using Crashplan to manage your Mac&#8217;s local backup:

  * You will need to exit from shell (to break connection)
  * comment-out &#8220;servicePort&#8221; line in Crashplan config
  * Restrat Crashplan so it will work with Mac&#8217;s local config

There is no easy-way to switch between local & remote machines. (Atleast at the time of writing this&#8230;)
