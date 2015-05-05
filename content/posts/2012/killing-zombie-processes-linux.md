---
title: Killing Zombie Processes on Linux
author: rahul286
date: 2012-09-08
url: /killing-zombie-processes-linux/
dsq_thread_id:
  - 2947125877
categories:
  - Tips
tags:
  - Kill
  - Linux
  - Process
  - Zombie
---
You can&#8217;t kill zombie processes by sending them &#8220;kill -9&#8243; directly. Because zombies are already dead!

So its better to kill their &#8220;parent&#8221; process, unless inits ***init*** process.

**Run following command&#8230;**

<pre><code class="prettyprint lang-sh">ps -el | grep Z</code></pre>

**Look for PPID**

<pre><code class="no-highlight">F S   UID   PID  PPID  C PRI  NI ADDR SZ WCHAN  TTY          TIME CMD
5 Z     0  2756  &lt;strong>2755&lt;/strong>  0  80   0 -     0 exit   ?        00:00:00 php-fpm &lt;defunct&gt;</code></pre>

If PPID is not 1 then you are lucky.

You can kill parent process by running following command:

<pre><code class="prettyprint lang-sh">kill -9 2755</code></pre>

Thats it!

&nbsp;

&nbsp;
