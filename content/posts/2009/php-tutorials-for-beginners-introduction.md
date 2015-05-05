---
title: '#1: PHP Tutorials for Beginners – Introduction'
author: gautam
date: 2009-03-25
excerpt: 'This is post post in new series started by PHP Tutorials for Beginners by Gautam. This post provides general introduction to PHP and some historical facts about it! As PHP if language top-blogging platform Wordpress uses, it is good to have little understanding of PHP. This will help you for sure in your blogging carrier even if programming is not your prime occupation. '
url: /php-tutorials-for-beginners-introduction/
views:
  - 156
dsq_thread_id:
  - 2947096496
categories:
  - Tutorial
tags:
  - Birthday
  - Developers
  - HTML
  - MySQL
  - PHP
  - Tutorial
---
<img class="alignleft wp-image-52928" src="http://static.php.net/www.php.net/images/php.gif" alt="" width="173" height="89" />

*This is post post in new series started by PHP Tutorials for Beginners by Gautam. This post provides general introduction to PHP and some historical facts about it! As PHP if language top-blogging platform WordPress uses, it is good to have little understanding of PHP. This will help you for sure in your blogging carrier even if programming is not your prime occupation.  (Added by Editor)*<!--more-->

Welcome to <a href="http://www.php.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/', 'PHP']);" title="PHP"  target="_blank">PHP</a> Tutorials for Beginners. I am Gautam. I will be writing PHP Tutorials for <a title="Devils Workshop" href="http://devilsworkshop.org/" target="_blank">DevilsWorkshop</a> readers over the next few days.

PHP allows you to create very simple web pages with dynamic content to full-featured web applications that connect to back-end databases. If you use HTML to develop websites, PHP will be a next good step for you. Basic knowledge of <a href="http://en.wikipedia.org/wiki/HTML" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/HTML', 'HTML']);" title="HTML"  target="_blank">HTML</a> and <a href="http://en.wikipedia.org/wiki/CSS" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/CSS', 'CSS']);" title="CSS"  target="_blank">CSS</a> is recommended but is not necessary.

I will be starting from the very basics of PHP and then cover some important techniques that you can use in PHP. I will be also covering the basics of working with <a href="http://www.mysql.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mysql.com/', 'MySQL']);" title="MySQL"  target="_blank">MySQL</a> database. I recommended you to try the tutorials on your own on any free host or <a href="http://www.apachefriends.org/en/xampp.htm" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.apachefriends.org/en/xampp.htm', 'XAMPP']);" title="XAMPP"  target="_blank">XAMPP</a> (I will talk about it after a while).

Of course, I can&#8217;t cover everything but I will help you to start with it and cover the important things. You may ask any query you have in the comments section. So let&#8217;s start and best wishes to you from my side. 😉

## PHP&#8230; What is it?

Well, the most common definition of PHP is that it is a HTML-embedded scripting language which runs on the server side. Also, PHP doesn&#8217;t need to be compiled like other programming languages like C or Java. Its syntax is much like C, Java and Perl. One can write dynamic pages using PHP.

PHP stands for *PHP: Hypertext Preprocessor*. This confuses many people because the first word of the acronym is the acronym. This type of acronym is called a recursive acronym. For more information, the curious can visit <a href="http://foldoc.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://foldoc.org/', 'Dictionary of Computing']);" class="link external">Dictionary of Computing</a> or the <a href="http://en.wikipedia.org/wiki/Recursive_acronym" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Recursive_acronym', 'Wiki entry on      recursive acronyms']);" class="link external">Wiki entry on recursive acronyms</a>. You can find more information on PHP <a href="http://in.php.net/manual/en/faq.general.php#faq.general.what" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/faq.general.php#faq.general.what', 'here']);" title="PHP: General Information"  target="_blank">here</a>.

## History

History of anything is usually boring but, of PHP, its very interesting!

First Version of PHP was created under the name PHP/FI (Personal Home Page/Form Interpreter) as open source by Rasmus Lerdorf in 1995.

By 1997, PHP/FI 2.0 was released; with approximately 50,000 domains reporting as having it installed (about 1% of the domains on the Internet).

**Here is an example of PHP/FI Code:**

*(**Note:** Following codes no longer works today. Also PHP syntax is different today!*)

`<!--include /text/header.html--><br />
<!--getenv HTTP_USER_AGENT--><br />
<!--ifsubstr $exec_result Mozilla--><br />
  Hey, you are using Netscape!<br />
<!--endif--><br />
<!--sql database select * from table where user='$username'--><br />
<!--ifless $numentries 1--><br />
  Sorry, that record does not exist<br />
<!--endif exit--><br />
  Welcome <!--$user-->!</p>
<p>  You have <!--$index:0--> credits left in your account.</p>
<p><!--include /text/footer.html-->`

PHP 3.0 was the first version that closely resembles PHP as we know it today. It was created by Andi Gutmans and Zeev Suraski in 1997 as a complete rewrite, after they found PHP/FI 2.0 severely underpowered for developing an eCommerce application they were working on for a university project.

The whole new language was released under a new name. It was named plain &#8216;PHP&#8217;, with the meaning being a recursive acronym &#8211; PHP: Hypertext Preprocessor. By the end of 1998, PHP grew to an install base of tens of thousands of users (estimated) and hundreds of thousands of websites reporting it installed. At its peak, PHP 3.0 was installed on approximately 10% of the Web servers on the Internet. By the winter of 1998, shortly after PHP 3.0 was officially released, Andi Gutmans and Zeev Suraski had begun working on a rewrite of PHP&#8217;s core.

The new engine, dubbed &#8216;Zend Engine&#8217; (comprised of their first names, Zeev and Andi), was first introduced in mid 1999. PHP 4.0 was based on this engine and was officially released in May 2000.

PHP 5 was released in July 2004 after long development and several pre-releases. It is mainly driven by its core, the Zend Engine 2.0 with a new object model and dozens of other new features.

**Here is an example of PHP 5.0 Code:**

`<?php<br />
echo "Hello World!";<br />
?><br />
`

You may read the full history of PHP <a href="http://in.php.net/manual/en/history.php.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/history.php.php', 'here']);" title="History of PHP">here</a>.

My next post will contain what programs you need (recommended ones) with their configuration to use PHP.
