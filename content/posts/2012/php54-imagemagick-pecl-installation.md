---
title: 'PHP5.4, Imagemagick & Pecl Installation [Ubuntu]'
author: rahul286
date: 2012-08-30
url: /php54-imagemagick-pecl-installation/
dsq_thread_id:
  - 2946730535
categories:
  - Tutorial
tags:
  - Imagemagick
  - Installation
  - Pecl
  - PHP
---
After upgrading to PHP 5.4.x, by using source compilation method, I realised our PHP was missing imagemagick extension.

ImageMagick is replacement for php&#8217;s default GD library which WordPress uses for creating thumbnails on the fly. Using <a href="http://wordpress.org/extend/plugins/imagemagick-engine/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/imagemagick-engine/', 'ImageMagick WordPress plugin']);" >ImageMagick WordPress plugin</a>, you can tell WordPress to use ImageMagick rather than PHP&#8217;s default GD library. But for this to work your PHP must have ImageMagick extension enabled.

### Installing & Enabling ImageMagick using Pecl

You need install ImageMagick package first

<pre><code class="no-highlight">apt-get install imagemagick libmagick9-dev php5-imagick</code></pre>

If you get error:

<p class="alert">
  Package &#8216;libmagick9-dev&#8217; has no installation candidate
</p>

Try:

<pre><code class="no-highlight">apt-get install imagemagick libmagickwand-dev php5-imagick</code></pre>

Installation is just 1-command job (usually)

<pre><code class="no-highlight">pecl install imagick</code></pre>

But at the time of writing this post, when running above command against php5.4.x, installation will fail with following error:

<pre><code class="error">/tmp/pear/temp/imagick/imagick_class.c:9534:2: error: 'struct _php_core_globals' has no member named 'safe_mode'</code></pre>

By default, pecl attempt to install stable build of imagick which as of today is not ready for PHP5.4. But they already have RC build here &#8211; <a href="http://pecl.php.net/package/imagick/3.1.0RC1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pecl.php.net/package/imagick/3.1.0RC1', 'http://pecl.php.net/package/imagick/3.1.0RC1']);" >http://pecl.php.net/package/imagick/3.1.0RC1</a>

**To force, pecl to install RC build, run following command:**

<pre><code class="no-highlight">pear config-set preferred_state beta</code></pre>

Now you can attempt installation again:

<pre><code class="no-highlight">pecl install imagick</code></pre>

This time it should work! You will see output like below:

<pre><code class="no-highlight"> Build process completed successfully
 Installing '/opt/php5/lib/php/extensions/no-debug-non-zts-20100525/imagick.so'
 Installing '/opt/php5/include/php/ext/imagick/php_imagick.h'
 Installing '/opt/php5/include/php/ext/imagick/php_imagick_shared.h'
 Installing '/opt/php5/include/php/ext/imagick/php_imagick_defs.h'
 install ok: channel://pecl.php.net/imagick-3.1.0RC2
 configuration option "php_ini" is not set to php.ini location
 You should add "extension=imagick.so" to php.ini</code></pre>

As suggested by last line, do not forget to add following line in php.ini

<pre><code class="no-highlight">extension=imagick.so</code></pre>

You may need to restart PHP-FPM or your web server.

<pre><code class="no-highlight">service php5-fpm restart</code></pre>

####
