---
title: Using Dynamic URL for .htc File in WordPress Theme
author: huzaifadarbar
date: 2010-12-20
excerpt: 'As we all know Mozilla, Chrome or most of the browsers started supporting CSS3 standards, but how those  CSS properties can be used in Internet Explorer. A smart way is to use pie.htc or ie-css3.htc file that supports some new styles available in CSS3 standards...'
url: /dynamic-url-htc-file-wordpress-theme/
views:
  - 162
dsq_thread_id:
  - 2947116392
categories:
  - Tutorial
tags:
  - CSS
  - Developers
  - pie.htc
  - Wordpress
---
As we all know in Mozilla, Chrome or most of the browsers we can use CSS3 properties, but how those  CSS properties can be used in Internet Explorer. A smart way is to use pie.htc or ie-css3.htc file that supports some new styles available in CSS3 standards. While I work on WordPress project I use pie.htc files, so that I can implement some of the CSS3 property for Internet Explorer here is an example how to use it.

## Absolute path for .htc file

An absolute path is applied to htc file in the stylesheet for CSS3 support to IE.

<pre><code class="no-highlight">.example {
border-radius : 5px;
-moz-border-radius : 5px;
-webkit-border-radius : 5px;
behavior : url(http://demosite.info/wp-content/themes/twentyten/pie.htc); /*   absolute path  */
}</code></pre>

The above syntax works well, as we have set an absolute path for .htc file in the stylesheet but it becomes inconvenient to move styelsheet from one domain to another.

## Relative path will not work in case of .htc file

Indeed Internet Explorer does not interpret the path relative to the CSS file, but it interprets the URL for the *behavior property *relative to the source HTML document. This causes the PIE *behavior* inconvenient because the path has to be absolute from the domain root this makes the CSS not easily movable to different directory. (**Note :** Here pie.htc is in **js** directory)

<pre><code class="no-highlight">.example {
border-radius : 5px;
-moz-border-radius : 5px;
-webkit-border-radius : 5px;
behavior : url(js/pie.htc); /*  relative path, pie.htc is in &lt;strong>js&lt;/strong> folder  */
}</code></pre>

## We can make use of Dynamic URL for accessing .htc file

We can use WordPress function &#8220;bloginfo(‘template_directory’)&#8221; in header.php file to generate the path dynamically. Put the classes into tag within the section. Now you can use the htc file by adding classes to it separated by commas.

**header.php**

<pre><code class="no-highlight">
&lt;pre class="no-highlight">&lt;style type="text/css" &gt;
        .Class1, .Class2 { behavior : url(&lt;?php bloginfo('template_directory'); ?&gt;/path/to/PIE.htc; }
 &lt;/style&gt;</code></pre>

**style.css** ** **

<pre><code class="no-highlight">.Class1 {
border-radius : 5px;
-moz-border-radius : 5px;
-webkit-border-radius : 5px;
}

.Class2 {
-moz-box-shadow : 0px 0px 4px #ffffff;
-webkit-box-shadow : 0px 0px 4px #ffffff;
box-shadow : 0px 0px 4px #ffffff;
}</code></pre>

For my WordPress project I tried to access .htc file keeping it at different domain but could not access it, because the IE *behavior* property does not allow .htc file to access cross domain. You can also <a href="http://css3pie.com/forum/viewtopic.php?f=3&t=108" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://css3pie.com/forum/viewtopic.php?f=3&t=108', 'visit this link for reference']);" >visit this link for reference</a>. If you have any updates or idea about this you can share it though your comments.
