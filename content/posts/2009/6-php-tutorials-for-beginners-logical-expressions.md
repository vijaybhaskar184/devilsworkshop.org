---
title: '#6: PHP Tutorials for Beginners – Logical Expressions'
author: gautam
date: 2009-04-09
url: /6-php-tutorials-for-beginners-logical-expressions/
views:
  - 48
categories:
  - Tutorial
tags:
  - Developers
  - PHP
  - Tutorials
---
<img class="alignleft size-medium wp-image-5546" src="http://cdn.devilsworkshop.org/files/2009/04/coding2-221x300.jpg" alt="Coding Image" width="110" height="124" />As we have already learnt about data types, we will now study about <a href="http://in.php.net/manual/en/control-structures.if.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/control-structures.if.php', 'logical expressions']);" title="PHP: if - Manual">logical expressions</a> and also about switch. Logical expressions are basically if else statements. You might have given orders to somebody like if jam is available then apply that on bread else if butter is available, then apply that else don&#8217;t apply anything. We can also write such commands in PHP. It is a very important and useful topic. So let us learn about it!<!--more-->

## Explanation of *if* conditionals

The *if* conditional is one of the most important features of many languages, PHP included. It allows you to execute a code when there is a condition. *If* code in PHP is similar to that of C. Here is how it is written:

`if (expression)<br />
statement;`

The above code can be written in many ways. For now, see where there is written the word &#8211; &#8220;expression&#8221;. <a href="http://in.php.net/manual/en/language.expressions.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/language.expressions.php', 'Expressions']);" title="PHP: Expressions - Manual">Expressions</a> are the most important building stones of PHP. In PHP, almost anything you write is an expression. The simplest and the most accurate definition of an expression is &#8211; &#8220;anything that has a value&#8221;. So, by writing an expression as a condition in *if* conditionals, PHP will try to evaluate it. The result of the *if* statements comes as true or false (which are known as <a href="http://in.php.net/manual/en/language.types.boolean.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/language.types.boolean.php', 'booleans']);" title="PHP: Booleans - Manual">booleans</a>). If <span class="replaceable">the expression</span> evaluates to true, PHP will execute the <span class="replaceable">statement</span>s, and if it evaluates to false, it will ignore them. More information about what values evaluate to false can be found <a href="http://in.php.net/manual/en/language.types.boolean.php#language.types.boolean.casting" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/language.types.boolean.php#language.types.boolean.casting', 'here']);" title="PHP: Booleans - Manual">here</a>. Also note that they do not require semicolons (&#8220;;&#8221;) except after the statements.

Please see a sample code <a href="http://www.rtcamp.com/~gautam/ifelse.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/ifelse.phps', 'here']);" >here</a> for more explanation which also highlights some more topics. The online demo for the same is <a href="http://www.rtcamp.com/~gautam/ifelse.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/ifelse.php', 'here']);" >here</a>.

## Switch

The <a href="http://in.php.net/manual/en/control-structures.switch.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/control-structures.switch.php', 'switch']);" title="PHP: switch - Manual">switch</a> statement is similar to a series of *if* statements on the same expression. In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.  Please see a sample code <a href="http://www.rtcamp.com/~gautam/switch.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/switch.phps', 'here']);" >here</a> for more explanation. The online demo for the same is <a href="http://www.rtcamp.com/~gautam/switch.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/switch.php', 'here']);" >here</a>.

I hope that you enjoyed the post <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" /> . Please do ask your query if you have any problems in the comments section. We will discuss about loops in the next post.

*(Image Credits: <a href="http://www.kljfieldservices.com/index.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.kljfieldservices.com/index.html', 'KLJ']);" title="KLG Field Services">KLJ</a>)*
