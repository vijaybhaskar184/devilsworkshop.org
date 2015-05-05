---
title: Parsing INI Files Using PHP
author: mujtaba91
date: 2009-08-06
excerpt: Many times during development involving php, one would want to store some variables as settings. The most common way developers do this is by defining those variables at the beginning of the script. For example, while writing a contact form script, I would like to define a few handy variables first, including admin email, contact log file name/path and etc... The most common way to do this would be to write something similar in your php script.
url: /parsing-ini-files-using-php/
views:
  - 2593
dsq_thread_id:
  - 2947100785
categories:
  - Tutorial
tags:
  - Developers
  - PHP
---
<p style="text-align: center">
  <img class="aligncenter wp-image-51597" src="http://cdn.devilsworkshop.org/files/2009/08/tut_screenshot.png" alt="Parsing ini configuration files using php" width="300" height="250" />
</p>

### Introduction

Many times during development involving php, one would want to store some variables as settings. The most common way developers do this is by defining those variables at the beginning of the script. For example, while writing a contact form script, I would like to define a few handy variables first, including admin email, contact log file name/path and etc&#8230; The most common way to do this would be to write something similar in your php script.  
`<br />
/******* S E T T I N G S *********/<br />
$admin_email="you@yourdomain.com";<br />
$file="logs/contact.log";<br />
$success_msg="Thanks! your submission was recieved, we will get back to you soon!";<br />
/****** E N D  ****************/<br />
`  
While this method is pretty clean and simple, it can lead to a mess in situations such as when the script is to be configured by un-experienced or non-techy users. Consider the situation when non-techy &#8220;Joe&#8221; updates this script. He changes the **$success_msg** variable value to something like : *Whoa! i recieved your message ! Thanks for contactin me.. &#8211;&#8220;Joe&#8221; * . Notice the un-escaped &#8220;&#8221; ? That would lead to a parse error and the script will cease to work. (and poor Joe will be left scratching his head) .  
This is where ini files can come in real handy . Lets first see what are **ini files** . Wikipedia defines ini files as :

> The INI file format is a de facto standard for configuration files. INI files are simple text files with a basic structure. &#8230; The name &#8220;INI file&#8221; comes from the filename extension usually used, &#8220;.INI&#8221;, that stands for &#8220;initialization&#8221;. Sometimes, files using the INI file format will use a different extension, such as &#8220;.CFG&#8221;, &#8220;.conf&#8221;, or &#8220;.TXT&#8221;

### Basic structure of an ini file

The basic format of an **ini file** is :  
`<br />
; Some comment, notice that semi-colons are used for comments<br />
;The basic element contained in an INI file is the parameter.<br />
;Every parameter has a name and a value, delimited by an equals sign (=).<br />
; The name appears to the left of the equals sign.<br />
name=value<br />
; Parameters can be grouped into arbitrarily-named sections.<br />
; The section name appears on a line by itself, in square brackets ([ and ]).<br />
; All parameters after the section declaration are associated with that section.<br />
;here is an example section<br />
[database-info]<br />
host=localhost<br />
username=joe-dahn<br />
password=123123123<br />
`

### Parsing ini file using php

php has a very nice function named **parse\_ini\_file($file_name,$process-sections-boolean)** to parse ini files.  
The function accepts two arguments .  
***file_name***  
The name of the ini file to be parsed, including its path.  
***$process-sections-boolean***  
Boolean (true/false) for parsing different sections of ini file into a multi-dimensional array. Default is *false*

### Example Code

Consider an ini file called &#8220;configurations.ini&#8221; with the following content :  
`<br />
;Updated by John Doe<br />
[general]<br />
admin_email=mujtaba_91@yahoo.com<br />
log_file=contact.log<br />
[misc]<br />
admin_url=www.example.com<br />
admin_name=mujtaba<br />
`

Now we will write a php script to read and parse the contents of this file using the &#8220;parse\_ini\_file()&#8221; function.  
Most of the lines are commented so you can know what is happening.

`<br />
// The name and path of our configuration file<br />
$file="configuration.ini" ;<br />
// Lets check if the file exists and is readable by our script<br />
if (file_exists($file) && is_readable($file))<br />
{<br />
//yay... the file is readable and exists<br />
//lets parse it into an array<br />
$settings=parse_ini_file($file);<br />
//At this point, all the data from the ini file is<br />
//stored in the $settings array... just for the sake of<br />
//convenience you can print it out using<br />
//print_r($settings);<br />
//assign different values from the file to different variables<br />
$email=$settings["admin_email"];<br />
$log_file=$settings["log_file"];<br />
$url=$settings["admin_url"];<br />
$name=$settings["admin_name"];<br />
//echo it! or use it in any other way you wish<br />
echo "Yay... Email ID of $name is $email , his url is $url and the log file path is $log_file ";<br />
}<br />
else<br />
{<br />
// If the configuration file does not exist or is not readable, DIE php DIE!<br />
die("Sorry, the $file file doesnt seem to exist or is not readable!");<br />
}<br />
`

### Conclusion

As you see, this method is lot more convenient than the common way of defining variables in the top in your php script. While this can be used in real life situations, it will always be best to chose a complex name for your configuration file that cannot be guessed.. or better still consider setting up .htaccess rules to prevent the ini file from direct viewing by visitors, but that is out of the scope of this tutorial :).  
Hope you have enjoyed reading this as much as i did writing it.

[Download source code files][1]

**Further reading** :

Wikipedia article on INI files :  
<a href="http://en.wikipedia.org/wiki/INI_file" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/INI_file', 'http://en.wikipedia.org/wiki/INI_file']);" >http://en.wikipedia.org/wiki/INI_file</a>

parse\_ini\_file() manual on php.net :  
<a href="http://us.php.net/manual/en/function.parse-ini-file.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://us.php.net/manual/en/function.parse-ini-file.php', 'http://us.php.net/manual/en/function.parse-ini-file.php']);" >http://us.php.net/manual/en/function.parse-ini-file.php</a>

* * *

*[**Editor&#8217;s Note**: This post is submitted by our guest blogger <a href="http://www.dynamicguru.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.dynamicguru.com', 'Mujtaba Ahmed']);" ><strong>Mujtaba Ahmed</strong></a>, an avid web designer, developer and a WordPress and jquery enthusiast.*</p> 

<div style="overflow: hidden;width: 1px;height: 1px">
  [Editor&#8217;s Note: This post is submitted by our guest blogger Mujtaba Ahmed, an avid web designer, developer and a wordpress and jquery enthusiast.
</div>

*If you, too would like to [write][2] for Devils Workshop, please [check this][2]. Details about our [revenue sharing programs][2] are [here][2].]*

 [1]: http://cdn.devilsworkshop.org/files/2009/08/parsing_ini_files_tutorial_files.zip "Download this tutorial source files"
 [2]: http://devilsworkshop.org/join-dw/
