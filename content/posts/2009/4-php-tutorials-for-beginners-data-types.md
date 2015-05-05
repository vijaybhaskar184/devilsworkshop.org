---
title: '#4: PHP Tutorials for Beginners – Data Types'
author: gautam
date: 2009-03-31
url: /4-php-tutorials-for-beginners-data-types/
views:
  - 242
dsq_thread_id:
  - 2947096662
categories:
  - Tutorial
tags:
  - Developers
  - PHP
  - Tutorial
---
<img class="alignleft" src="http://www.itbench.co.in/images/php.jpg" alt="" width="180" height="116" />As we have already learnt about using XAMPP and other tools, PHP open and close tags, phpinfo function, printing text on screen, adding comments in PHP files and some conversation on what does the server do, it&#8217;s now time for learning the various types of data. In this post, we will talk about variables, strings and numbers.

## Variables

Simple definition of a variable is that it is a symbolic representation of a value. But as its name says, it can change or vary. In PHP, variables are going to

  * Start with a $ (dollar) sign.
  * They can be then followed by a letter or underscore.
  * They can contain letters, underscores, numbers and dashes.
  * There can NOT be any spaces in them.
  * They are case-sensitive.

You can see the following examples of variables. Also see the comments with them for the explanation.

`$devil<br />
$Devil //see the capital D<br />
$devilsWorkshop //can contain capital letters in-between<br />
$devils_workshop //can contain underscores<br />
$devils-workshop //can contain dashes, but I recommend not to use these<br />
$D3v1ls_W0rk-sh0p //can contain numbers, capital letters, underscores, dashes<br />
$_devil //can contain underscore in the beginning, not recommended as PHP already uses single underscore itself to define a certain type of variable<br />
$__devil //can contain as many underscores, not recommended as it is difficult to make out just by seeing that how many underscores are there`

Now, as we have learnt about the types of variables we can have, we must do some experiment. Here is one!

`<?php<br />
$devil = 1; //assigning a number to a variable, numbers don't need to be wrapped with quotes<br />
echo $devil."<br />"; //note that we can put a period and merge two strings<br />
$devilvar = "Hello World"; //settings a variable<br />
$devilVar = "Hello World!!"; //note here that the "V" is capital and the variables are case-sensitive, so $devilvar is different from $devilVar<br />
echo $devilVar."<br />"; //it will echo back "Hello World!!", not "Hello World" as the variables are case sensitive<br />
$devil = 2; //we can reset a variable<br />
echo $devil; //the new value which is "2" will be echoed.<br />
?>`

Here is an online <a href="http://www.rtcamp.com/~gautam/variables.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/variables.php', 'demo']);" >demo</a>.You can view the highlighted source <a href="http://rtcamp.com/~gautam/variables.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/variables.phps', 'here']);" >here</a>.

We will do the same thing which we did before, go to htdocs and create a new file named &#8220;variables.php&#8221;. Paste this code there. And access it on <a href="http://localhost/variables.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://localhost/variables.php', 'http://localhost/variables.php']);" >http://localhost/variables.php</a>.  
You will understand everything by reading the comments which are written in the code.

## Strings

We have been using strings everywhere without even knowing about that. For example, &#8220;Hello World&#8221; is a string. Let us learn more about them! Here is a code, read the comments in the code too (actually that&#8217;s the explanation).

`<?php<br />
echo "Hello World<br />"; //we can wrap strings within double quotes and also put HTML code in them<br />
echo 'Hello World<br />'; //we can also wrap them with single quotes<br />
$devil = "Welcome in the World"; //we can assign strings to variables<br />
echo $devil."<br />"; //we can echo variables, while we also merge HTML with them<br />
echo "$devil of Devils!<br />"; //we can put the variable within the double quotes - not recommended as if you put $devilof, it will try to search for a variable called $devilof<br />
echo "{$devil} of DevilsWorkshop!<br />"; //We can wrap the variable with curly brackets and put it in within double quotes - Recommended<br />
echo '$devil of Devils!<br />'; //this technique doesn't works with single quotes, it will echo "$devil of Devils!" as it doesn't try to parse any variables within single quotes<br />
?>`

Here is an online <a href="http://rtcamp.com/~gautam/strings.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/strings.php', 'demo']);" >demo</a>.You can view the highlighted source <a href="http://rtcamp.com/~gautam/strings.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/strings.phps', 'here']);" >here</a>.

So, we came to a conclusion that we should wrap all variables with curly braces and always use double quotes (Well, it all depends on you, it is not necessary. We can still use periods to put variables in single quote strings).

## String Functions

Well, I can&#8217;t cover all the string functions, but I will cover the basic ones. You can see the exhaustive list of functions on <a href="http://www.php.net/quickref.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.php.net/quickref.php', 'PHP.net']);" title="Function List for PHP">PHP.net</a> and can take more reference from there. Here is a code by which you can understand it better!

`<?php<br />
$devil = "Devils"; //assigning a string to a variable<br />
$workshop = " Workshop"; //notice the space in the beginning<br />
$tut = "php tutorials"; //assigning another string to a variable<br />
$dw = $devil; //the value of $devil is now also the value of $dw<br />
$dw .= $workshop; //we can also merge 2 strings like this, notice the period with equals to sign (".=")<br />
echo $dw."<br />"; //echoing the merged string with HTML<br />
// Below are some functions which we can apply, refer to PHP.net for more functions<br />
echo strtolower($dw)."<br />"; //this will make all the letters of the string to lowercase and echo the string. Note that a function can be used with another function.<br />
echo strtoupper($dw)."<br />"; //this will make all the letters of the string to uppercase and echo the string.<br />
echo ucfirst($tut)."<br />"; //this will make the first letter of the string capital. Note - we are using $tut here, not $dw<br />
echo ucwords($tut)."<br />"; //this will make the first letter of each word in the string to a capital letter. Note - we are using $tut here, not $dw<br />
echo strlen($dw)."<br />"; //this will count the number of letters in the string and echo it<br />
echo $trimmed = $devil.trim($workshop)."<br />"; //See here, that I have made a new variable and also echoed it. The new variable contains $devil as it is and trim function is applied to $workshop which will remove all the whitespaces (spaces, tabs etc.) from the beginning and ending.<br />
echo strstr($dw, "W")."<br />"; //this function is string in a string. It finds a string in a string and returns the string which is after the string we are trying to find with the string we are trying to find. So, here $dw is the string and "W" is the string which we are finding. It should echo "Workshop" as the echo function is also there.<br />
echo str_replace("Workshop", "Head", $dw)."<br />"; //this function will replace the word Workshop with Head in the string $dw. So, it should echo back "Devils Head"<br />
echo str_repeat($dw." ", 3)."<br />"; //it will repeat the string 3 times (see the last value entered in the function. Also note that I added a space after $dw within the function.<br />
echo substr($dw, 7, 4)."<br />"; //it will echo 4 characters which are after 6 letters in the string (see the 3rd and 2nd value of the function)<br />
echo strpos($dw, "W")."<br />"; //it will echo the position of the letter "W"<br />
?>`

Here is an online <a href="http://rtcamp.com/~gautam/stringfunctions.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/stringfunctions.php', 'demo']);" >demo</a>. You can view the highlighted source <a href="http://rtcamp.com/~gautam/stringfunctions.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/stringfunctions.phps', 'here']);" >here</a>. Hope you understood this long code. If you have any doubts, then please ask in the comments section.

## Numbers

As we have already talked about variables, strings and strings functions, we will now talk about numbers. You know what are numbers.. don&#8217;t you? No?

So let us try PHP doing some maths for us. Here is an example!

`<?php<br />
$d = 1; //note that the numbers don't need to be wrapped with quotes<br />
$w = 2; //another number<br />
echo (10 - ($d + $w)) / (($w * $w) + ($d + $w)); //this is some basic maths, guessed the answer? The answer is 1.<br />
echo "<br />"; //echoing html (for a line break)<br />
$dw = $d += 4; echo $dw; //this will add 4 to $d and it will echo it. Note that we do not need to make separate lines for each bit of code, the semi-colon (";") tells PHP that a command is over<br />
echo "<br />";<br />
echo $dw -= 3; //it will subtract 3 from $dw (newly made string) and will also echo it<br />
echo "<br />";<br />
echo $w *= 4; //it will multiply $w with 4. Note - here we have used $w, not $dw<br />
echo "<br />";<br />
echo $w /= 2; //it will divide $w with 2<br />
echo "<br />";<br />
$d++; echo $d; //it will increase the value of $d by 1 and echo it<br />
echo "<br />
";<br />
$d--; echo $d; //it will decrease the value of $d by 1 and echo it<br />
?>`

Here is an online <a href="http://rtcamp.com/~gautam/numbers.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/numbers.php', 'demo']);" >demo</a>. You can view the highlighted source <a href="http://rtcamp.com/~gautam/numbers.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/numbers.phps', 'here']);" >here</a>. That&#8217;s all with number! 😉

Hope you enjoyed the post and had loads of fun learning data types today! My next post will contain about the other types of data types which are floats, arrays, booleans and constants. We will also talk about typecasting.

*Image Credits: <a href="http://www.itbench.co.in/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.itbench.co.in/', 'IT Bench']);" title="IT Bench">IT Bench</a>*
