---
title: Compiling ghostscript 8.71 from sources
author: rahul286
date: 2012-08-24
excerpt: 'Compiling ghostscript 8.71 from sources on ubuntu. Including workaround for error " warning: implicit declaration of function ‘gettimeofday’ [-Wimplicit-function-declaration]"'
url: /compiling-ghostscript-871-sources/
dsq_thread_id:
  - 2947125754
categories:
  - Tutorial
tags:
  - compliation
  - Developers
  - ghostscript
  - Linux
  - old version
  - ubuntu
---
<img class="alignright size-full wp-image-61135" title="Ghostscript" src="http://cdn.devilsworkshop.org/files/2012/08/Ghostscript.png" alt="" width="200" height="201" />In a recent project, where we are working on converting PDF based newspapers to interactive image slideshows, we came across an issue with ghostscript version 9.05. This version was breaking rendering of some Marathi fonts present in PDF.

When tested on ghostscript version 8.71, conversion was working properly. So we decided to downgrade ghostscript from version 9.05 to 8.71 on our server running Ubuntu 12.04 LS. Below are steps we followed.

### Compiling ghostscript 8.71 from sources

Download sources from <a href="http://downloads.ghostscript.com/public/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://downloads.ghostscript.com/public/', 'http://downloads.ghostscript.com/public/']);" >http://downloads.ghostscript.com/public/</a>

<pre><code class="no-highlight">wget http://downloads.ghostscript.com/public/ghostscript-8.71.tar.gz</code></pre>

Uncompress downloaded source code & change to directory.

<pre><code class="no-highlight">tar xvf ghostscript-8.71.tar.gz</code></pre>

<pre><code class="no-highlight">cd ghostscript-8.71</code></pre>

Configure it (I used all defaults)

<pre><code class="no-highlight">./configure</code></pre>

Start compilation with

<pre><code class="no-highlight">make</code></pre>

If you encounter following error:

<pre><code class="error">./base/gp_unix.c:148:2: warning: implicit declaration of function ‘gettimeofday’ [-Wimplicit-function-declaration]
make: *** [obj/gp_unix.o] Error 1</code></pre>

Compile using

<pre><code class="no-highlight">make XCFLAGS=-DHAVE_SYS_TIME_H=1</code></pre>

Finally install compiled binaries using

<pre><code class="no-highlight">make install</code></pre>

At this point you will ghostscript will be installed at `/usr/local/bin/gs`

There are other methods to install old versions also, but compilation is safer alternative IMHO.

### About the project:

<a href="http://rtcamp.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/', 'rtCamp']);" >rtCamp</a> is working on an exciting project to connect WordPress with conventional newspaper publishing. The project is in early stages and a sample can be seen at <a href="http://anandnagri.com/e-paper/22-aug-2012-3/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://anandnagri.com/e-paper/22-aug-2012-3/', 'http://anandnagri.com/e-paper/22-aug-2012-3/']);" >http://anandnagri.com/e-paper/22-aug-2012-3/</a> *(Note: you may see some text in images broken if you visit this on Aug 24 or Aug 25 as all images are recreated using ghostscript 8.71 right now)*

&nbsp;
