---
title: Using grep to removing comments, newlines/whitespace from config files
author: rahul286
date: 2012-07-29
url: /removing-whitespace-comments-newlines-file-grep/
dsq_thread_id:
  - 2949450260
categories:
  - Tutorial
tags:
  - Commands
  - configuration files
  - debugging
  - Grep
  - Linux
  - Troubleshooting
---
As configuration files are often full with comments and blank lines reading them inside shell become tedious! Sometimes you just want to quickly recap active configuration option only.

Mostly, comments starts with &#8220;**#**&#8220;(hash) or &#8220;**;**&#8221; (semicolon).

Below is a command I often use while debugging various configuration files.

**For files having comment starting with &#8220;;&#8221; **e.g. php.ini

<pre><code class="no-highlight">egrep -v "^([[:space:]]?$|;)" /path/to/file</code></pre>

**For files having comment starting with &#8220;#&#8221; **e.g. my.cnf

<pre><code class="no-highlight">egrep -v "^([[:space:]]?$|#)" /path/to/file</code></pre>

**For lazy bumps&#8230; ****Following can take care of both of above! **

<pre><code class="no-highlight">egrep -v "^([[:space:]]?$|;|#)" /path/to/file</code></pre>

You may create a local alias for above command! 😉

Just in case you want to save output in a file&#8230; just add `" > newfilename"` to above commands. Passing original filename may not work (and it will be risky too!)
