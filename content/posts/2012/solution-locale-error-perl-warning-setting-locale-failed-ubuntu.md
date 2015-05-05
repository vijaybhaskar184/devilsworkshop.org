---
title: 'Solution for “Locale Error – perl: warning: Setting locale failed.” [Ubuntu]'
author: rahul286
date: 2012-06-12
url: /solution-locale-error-perl-warning-setting-locale-failed-ubuntu/
dsq_thread_id:
  - 2966072518
categories:
  - Tutorial
---
We are maintaining old version of Ubuntu servers (10.04 LTS to be specific)

Many times we encounter following errors on terminal:

<pre><code class="no-highlight">perl: warning: Setting locale failed.
perl: warning: Please check that your locale settings:
	LANGUAGE = (unset),
	LC_ALL = (unset),
	LC_CTYPE = "UTF-8",
	LANG = "en_GB.UTF-8"
    are supported and installed on your system.
perl: warning: Falling back to the standard locale ("C").</code></pre>

## Client-Side Solution

This is good option if you manage many servers. Rather than changing every server, pass requested environment.

Open `~/.bash_profile`

Add following line:

<pre><code class="no-highlight">export LC_ALL=C</code></pre>

Start a new shell or just reload environment using `source ~/.bash_profile`

## Server-Side Solutions

### Solution #0

This is new but working nicely.

<pre><code class="no-highlight">update-locale LC_ALL=$LANG</code></pre>

### Solution #1

<pre><code class="no-highlight">export LANGUAGE=en_IN.UTF-8
export LANG=en_IN.UTF-8
export LC_ALL=en_IN.UTF-8
locale-gen en_IN.UTF-8</code></pre>

If for some reason, above failed to work and throws following fresh error:

<pre><code class="no-highlight">warning: setlocale: LC_ALL: cannot change locale (en_IN.UTF-8)</code></pre>

Try following alternative solution.

### Solution #2

Edit locale file:

<pre><code class="no-highlight">vim /etc/default/locale</code></pre>

Add following line:

<pre><code class="no-highlight">LC_ALL="en_IN.UTF-8"</code></pre>

Generate locale again:

<pre><code class="no-highlight">locale-gen en_IN.UTF-8</code></pre>

### Solution #3

Open following file

<pre><code class="prettyprint">vim /var/lib/locales/supported.d/local</code></pre>

Make sure it has

<pre><code class="no-highlight">en_IN.UTF-8 UTF-8</code></pre>

Then run&#8230;

<pre><code class="no-highlight">dpkg-reconfigure locales</code></pre>

## Test

Run following command:

<pre><code class="no-highlight">locale</code></pre>

If you see any error, then that means your issue is not fixed!

Try again. There are some more alternate solutions that you can find on Google.

Above seemed to work for me always. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
