---
title: Remove “eval(base64_decode” using linux commands from all php files across multiple WordPress
author: rahul286
date: 2012-03-09
excerpt: Linux command to fix "eval(base64_decode" code-injection on multiple WordPress installations and remove vulnerable plugins like WP-PhpMyAdmin
url: /remove-evalbase64decode-malicious-code-grep-sed-commands-files-linux-server/
dsq_thread_id:
  - 2947124696
categories:
  - Tutorial
tags:
  - Cleanup
  - Commands
  - Find
  - Grep
  - Linux
  - Security
  - Sed
  - 'Tips &amp; Hacks'
  - Wordpress
  - WP-PhpMyAdmin
  - Xargs
---
Yesterday, almost all installations on our test server had been infected by infamous &#8220;<?php eval(base64_decode(&#8230;)) ?>&#8221; code injection.

We have more than 600 demo sites on our test server and cleaning them using any WordPress plugin out there was simply out of the question! Can you imagine logging into each WordPress, installing plugin, then scanning/cleaning up WordPress&#8230; for 600+ WordPress sites?

Below is combination of Linux commands we used.  Assuming you have logged into a Linux Shell and already have BACKUP of all files (including infected files) lets move ahead!

### Command to list all infected files:

`grep -lr --include=*.php "eval(base64_decode" /path/to/webroot`

This is not necessary but its better to check some files manually to confirm if they have malicious code we are looking for. Also we can use this command after running cleanup command to crosscheck if cleanup is really successful.

### Command to remove malicious code:

If above command gives you correct output, execute following command to perform actual cleaning:

`grep -lr --include=*.php "eval(base64_decode" /path/to/webroot | xargs sed -i.bak 's/<?php eval(base64_decode[^;]*;/<?php\n/g'`

Executing above will remove eval(*) codes.  Above command will also generate a backup version of files it will modify. For example, if it removes code from *index.php*, you will find a new file *index.php.bak* in same directory with original content of *index.php*

Now after running above command, you still find some more infected files, then you need to adjust search and replace parameters in for &#8220;sed&#8221; part.    You may also use following command for a &#8220;liberal&#8221; cleaning at the risk of breaking something. *(in case you really break something, like I did, you can jump to &#8220;Troubleshooting&#8221; section below!)*

`grep -lr --include=*.php "eval(base64_decode" /path/to/webroot | xargs sed -i.bak '/eval(base64_decode*/d'`

### Trying to avoid re-appearance of this code injection

Its really though to cover every possible way to protect yourself from such attach in this post.

If you remember, WordPress community faced this kind of issue because of WP-PhpMyAdmin plugin sometime back. In our case, we found some old WordPress demo sites were having that plugin installed.

**To remove WP-PhpMyAdmin plugin** form all WordPress sites on your server, execute following command:

`find /path/to/webroot -name "wp-phpmyadmin" -type d | xargs rm -rf`

Above is all we did to get rid of eval(base64_decode(*)) codes from all files on our test server. If this happens again on our server, I will update this post with added info.

### Troubleshooting:

Just in case you end up in a mess, below are some useful commands.

**Missing <?php tag in the beginning:**

To add &#8220;<?php: tag in the beginning of index.php files, in case if you remove it accidentally use following command:

`find /var/www/ -name "index.php" | grep "/htdocs/index.php" | xargs grep -L "<?php" | xargs sed -i "1s/^/<?php \n/"`

Don&#8217;t worry. If you already have a &#8220;<?php &#8221; tag in the beginning, it won&#8217;t be added again.  
****

**Extra Newlines at the top!**

If you find after cleanup, extra newlines at the top of your code, then use following command to remove trailing newlines. Extra newlines creates problem for blog feeds.

`find . -name '*.php' -exec sed -i -e :a -e '/^\n*$/{$d;N;ba' -e '}' '{}' \;`

I hope you will find this stuff useful.
