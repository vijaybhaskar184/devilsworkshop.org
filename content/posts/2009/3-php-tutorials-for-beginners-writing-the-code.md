---
title: '#3: PHP Tutorials For Beginners – Writing The Code'
author: gautam
date: 2009-03-28
url: /3-php-tutorials-for-beginners-writing-the-code/
views:
  - 930
dsq_thread_id:
  - 2947096592
categories:
  - Tutorial
tags:
  - Developers
  - PHP
  - Tutorial
---
<img class="alignleft size-medium wp-image-5206" src="http://cdn.devilsworkshop.org/files/2009/03/code-small-300x224.jpg" alt="Coding" width="184" height="137" />Welcome Back! Today we will start with the basics on &#8211; &#8220;Writing the Code&#8221;. We will talk about how the PHP code is written, simple basic code like echoing Hello World, adding comments in the PHP file etc. We will also talk about the official site of PHP and how it can help you discover new things. I hope that you have installed the [recommended programs][1] of which I had written a couple of days back.

<!--more-->

## PHP.net &#8211; Official Website of PHP

<a href="http://www.php.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/', 'PHP.net']);" title="PHP: HyperText Preprocessor"><img class="alignright" src="http://in.php.net/images/php.gif" alt="" width="125" height="70" />PHP.net</a> &#8211; The official site of PHP: HyperText Preprocessor helps you to do anything in PHP. You can view the <a href="http://www.php.net/quickref.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/quickref.php', 'funtion list']);" title="PHP: Manual Quick Reference">funtion list</a> there with examples and usage, or even the <a href="http://www.php.net/docs.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/docs.php', 'documentation']);" title="PHP: Documentation">documentation</a> or <a href="http://www.php.net/FAQ.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/FAQ.php', 'FAQ']);" title="PHP: FAQ - Manual">FAQ</a>. They also have &#8220;<a href="http://in.php.net/manual/en/internals2.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/internals2.php', 'A Hacker&#8217;s Guide to the Zend Engine']);" title="PHP at the Core: A Hacker's Guide to the Zend Engine">A Hacker&#8217;s Guide to the Zend Engine</a>&#8220;. You can read user submitted notes or can understand anything which you aren&#8217;t able to catch up with. But yeah, we are also here to help you! 😉 Do not hesitate to ask anything in the comments section!

## PHP Open & Close Tags

PHP Code is wrapped between:

`<?php<br />
?>`

This code lets the server know where the PHP starts and where it ends. Note that the server processes PHP only when the file ends with .php extension. As PHP can be embedded with HTML, this is the code that makes it happen. The server accesses the web page, it knows to be ready for PHP as we have the .php extension. But it still needs some indication of where PHP starts and ends. We do that by writing . I will refer to these tags with open PHP Tag & close PHP tag respectively. You will be used to these and these will be very common for you. There are also variations of these tags of which you should be aware of. I request you not to use these variations. I have just mentioned these here so that if you come across such open and close tags, you shouldn&#8217;t be confused. You have the option of telling your web server whether to allow these tags or not in php.ini. The following is the code which was very common in PHP 3 and may still work for you:

`<?<br />
?><br />
<?=<br />
?>`

There is also another type of code which is used in ASP. For these tags, you have to specially edit php.ini file and tell your server to accept these tags. But you shouldn&#8217;t use these as if you give somebody your code, and that person uploads it and the server doesn&#8217;t accept these tags, then the code won&#8217;t work for the person whom you gave the code to!

`<%<br />
%><br />
<%=<br />
%>`

***Note: ***If you enter any PHP code but that file doesn&#8217;t end with .php extension, then the code won&#8217;t work for you. If you have put a PHP code in a file, then you also need to end the file&#8217;s name with .php extension or else you can also configure apache/IIS to serve other extensions with php parser. For more information, you can go <a href="http://httpd.apache.org/docs/1.3/mod/mod_mime.html#addhandler" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://httpd.apache.org/docs/1.3/mod/mod_mime.html#addhandler', 'here']);" >here</a> or <a href="http://www.lgr.ca/blog/2007/02/process-html-as-php.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.lgr.ca/blog/2007/02/process-html-as-php.html', 'here']);" >here</a>.

## phpinfo

<a href="http://www.php.net/manual/en/function.phpinfo.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/manual/en/function.phpinfo.php', 'phpinfo']);" title="phpinfo function in PHP">phpinfo</a> is the very basic function in PHP. It looks like this:

`<br />
<php<br />
phpinfo();<br />
?>`

Go and try out this code! As you may not know how to try it on XAMPP, you can see the following tutorial.

<div class="mceTemp mceIEcenter" style="text-align: center;">
  <dl>
    <dt>
      <a href="http://cdn.devilsworkshop.org/files/2009/03/xampp14.jpg"><img class="size-full wp-image-5134" src="http://cdn.devilsworkshop.org/files/2009/03/xampp14.jpg" alt="See if the XAMPP Control Panel Options matches these" width="453" height="361" /></a>
    </dt>
    
    <dd>
      Check if the XAMPP Control Panel is on and the Options match these.
    </dd>
  </dl>
</div>

<div class="mceTemp mceIEcenter" style="text-align: center;">
  <dl>
    <dt>
      <a href="http://cdn.devilsworkshop.org/files/2009/03/xamppdir.jpg"><img class="size-full wp-image-5215" src="http://cdn.devilsworkshop.org/files/2009/03/xamppdir.jpg" alt="XAMPP Directory" width="319" height="26" /></a>
    </dt>
    
    <dd>
      Navigate to the directory where you installed XAMPP and then open htdocs folder. In my case, the directory is C:\xampp\htdocs (As I use Windows Vista)
    </dd>
  </dl>
</div>

<div class="mceTemp mceIEcenter" style="text-align: center;">
  <dl>
    <dt>
      <a href="http://cdn.devilsworkshop.org/files/2009/03/xamppphpinfo.jpg"><img class="size-full wp-image-5216" src="http://cdn.devilsworkshop.org/files/2009/03/xamppphpinfo.jpg" alt="Check if you have made a file" width="453" height="243" /></a>
    </dt>
    
    <dd>
      Make a new file in the htdocs folder named phpinfo.php (You can give it any name but it should end with .php so that the server knows that it is a PHP file. Write the code given above in the file you just made. Note &#8211; Any text editor can be used to make or edit PHP files, but avoid using Word or anything like Word as it may enter some unnecessary text which may cause errors.
    </dd>
  </dl>
</div>

<div class="mceTemp mceIEcenter" style="text-align: center;">
  <dl>
    <dt>
      <a href="http://cdn.devilsworkshop.org/files/2009/03/xamppphpinfoecho.jpg"><img class="size-full wp-image-5217" src="http://cdn.devilsworkshop.org/files/2009/03/xamppphpinfoecho.jpg" alt="phpinfo on Localhost (with XAMPP)" width="453" height="529" /></a>
    </dt>
    
    <dd>
      Navigate to <a href="http://localhost/phpinfo.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://localhost/phpinfo.php', 'http://localhost/phpinfo.php']);" >http://localhost/phpinfo.php</a> (or the file name you entered in the above procedure). If you see something like this, then it means that your localhost server is up fine and PHP is also running.
    </dd>
  </dl>
</div>

This function returns all the configuration of PHP on your server and it can also be used to check if PHP is working on a server or not. This function is used by every single PHP developer to check if the PHP is working on a particular server or not. As this function can give out a lot of information about the web server and PHP, no PHP developer would like to put this on a web server where someone can find it. But, for development purposes, it is very useful.

## Hello World

This is the most basic thing which is taught to everyone in almost every language &#8211; which is printing Hello World on the screen. We print something on a screen with PHP by the <a href="http://www.php.net/manual/en/function.echo.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/manual/en/function.echo.php', 'echo']);" title="Echo function in PHP">echo</a> or <a href="http://www.php.net/manual/en/function.print.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/manual/en/function.print.php', 'print']);" title="Print function in PHP">print</a> function. Here is the example:  
`<br />
<php<br />
echo "Hello World";<br />
?>`  
***Note: ***In PHP, every function is followed by a semi-colon (&#8220;;&#8221;). Also note that function names in PHP are NOT case-sensitive, but the variables are.  
You just have to follow the same tutorial given for phpinfo to upload files. Just make a new file named helloworld.php and put it in htdocs folder. Then you would be able to access it on <a href="http://localhost/helloworld.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://localhost/helloworld.php', 'http://localhost/helloworld.php']);" >http://localhost/helloworld.php</a>

We can also use the print function or do some maths problems or even merge 2 strings. Here is an example here:  
`<br />
<php echo "Hello World"; ?><br />
<php print "Hello World"; ?><br />
<php echo "Hello " . "World"; ?><br />
<php echo 2+3; ?><br />
`  
<img class="aligncenter size-full wp-image-5226" src="http://cdn.devilsworkshop.org/files/2009/03/helloworld1.jpg" alt="Hello World in PHP" width="431" height="286" /> You can view the online demo of the above code <a href="http://rtcamp.com/~gautam/helloworld.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/helloworld.php', 'here']);" title="Hello World Online Demo (PHP)">here</a>.

## Adding Comments

We want to become good programmers.. right? Adding <a href="http://in.php.net/manual/en/language.basic-syntax.comments.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/language.basic-syntax.comments.php', 'comments']);" title="Comments in PHP"  target="_blank">comments</a> in PHP files is a good practise. Like, if someone else sees your code or you see your code after weeks, the comments will help you know what you actually did there. Here is how you can add comments in the files:  
`<br />
<?php echo "Hello World"; //echo function is used here<br />
?><br />
<?php print "Hello World"; //print function is used here<br />
?><br />
<?php echo "Hello " . "World"; #merging 2 strings in echo function<br />
?><br />
<?php echo 2+3;<br />
/*Here is a maths problem in which 2+3 is done<br />
 it should echo back 5<br />
*/<br />
?><br />
<?php<br />
//more comments can come like this<br />
#or like this<br />
/*or multilines like this<br />
 and this<br />
*/<br />
?><br />
`

<p style="text-align: center;">
  <img class="aligncenter size-full wp-image-5231" src="http://cdn.devilsworkshop.org/files/2009/03/comment.jpg" alt="Comments in PHP" width="591" height="310" />
</p>

***Note:*** Please do not put double line comments within double line comments as the PHP looks for /\* and then the next \*/. Anything after that will be processed as PHP which may also give out errors.

## What does the web server do?

I want you to know what actually happens when we enter a PHP URL in the browser:

  * We enter a PHP URL in the browser.
  * The browser looks for the page.
  * The page is located *(which is stored on the server)*.
  * Serer already knows via its config, if a file has .php, execute PHP interpreter which will parse PHP file.
  * There may be Database queries which will also be executed *on the server-side*.
  * PHP interprter process PHP file optioanlly using other modules and send output to sever (example: Apache/IIS)
  * The browser will display the output to us.

PHP can return output in any form like XML, JPG, MP3, FLV, etc. Just any format you can imagine. For more information, you can go <a href="http://en.wikipedia.org/wiki/Internet_media_type" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Internet_media_type', 'here']);" >here</a>.

I hope that you have understood each and every thing. If you have any doubts, then please ask them here in the comments section.

That&#8217;s all for today, I hope that you try these out and come back to read the next tutorial which will be published in next one or two days. My next tutorial will contain Data Types (Strings, Variables, Arrays etc.)

 [1]: http://devilsworkshop.org/php-tutorials-for-beginners-recommended-programs/ "#2: PHP Tutorials for Beginners - Recommended Programs"
