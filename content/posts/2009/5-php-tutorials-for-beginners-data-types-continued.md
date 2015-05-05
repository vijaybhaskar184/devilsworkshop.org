---
title: '#5: PHP Tutorials for Beginners – Data Types (Continued)'
author: gautam
date: 2009-04-05
url: /5-php-tutorials-for-beginners-data-types-continued/
views:
  - 61
categories:
  - Tutorial
tags:
  - Developers
  - PHP
  - Tutorials
---
<img class="alignleft size-medium wp-image-5454" src="http://cdn.devilsworkshop.org/files/2009/04/diving-into-php-large-300x225.jpg" alt="Diving into PHP" width="128" height="96" />In the previous post, we talked about some data types &#8211; variables, strings, string functions and numbers. In this post we will talk about more data types which are floats, arrays, array functions, booleans and constants. We will also talk about type casting. So, without wasting time, let us start!<!--more-->

## Floating Point Numbers

As we have already talked about numbers, we will now talk about floating point numbers (also known as floats, doubles and real numbers). An example of float is 2.1 or 10.3145 etc. Of course I can&#8217;t give the whole list of functions for floats, but I will discuss some of them. You can even look for more at PHP.net. You can view the highlighted source <a href="http://rtcamp.com/~gautam/floats.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/floats.phps', 'here']);" >here</a> or the online demo <a href="http://rtcamp.com/~gautam/floats.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/floats.php', 'here']);" >here</a>. <a href="http://in.php.net/manual/en/ref.math.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/ref.math.php', 'Here']);" title="Math Functions in PHP">Here</a> is a list of all math functions.

## Arrays

<a href="http://in.php.net/manual/en/language.types.array.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/language.types.array.php', 'Array']);" title="PHP: Arrays - Manual">Array</a> is a very useful data type when writing codes in PHP. You can think of an array as a series of variables that we can assign values to or as a lot of variables put together in another variable. There is no limit of values you can enter in it. They can contain anything which a variable can contain like strings, numbers, or even another array. It&#8217;s a very important concept so please understand it carefully. You can refer an array value by its position number called index. Index of the values in the array starts at 0 (0, 1, 2, 3&#8230;). So the index of the 1st value is 0, of the 2nd value it is 1 and so on. <a href="http://www.rtcamp.com/~gautam/arrays.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/arrays.phps', 'Here']);" >Here</a> is a code explaining you how you can use arrays. You can also view the online demo <a href="http://www.rtcamp.com/~gautam/arrays.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/arrays.php', 'here']);" >here</a>.

## Array Functions

We can also apply some functions on Arrays. Please check <a href="http://in.php.net/manual/en/ref.array.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/ref.array.php', 'PHP.net']);" title="PHP: Array Functions - Manual">PHP.net</a> for the full list of functions. You can view a sample code of some functions <a href="http://www.rtcamp.com/~gautam/arrayfunctions.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/arrayfunctions.phps', 'here']);" >here</a> and the online demo of that code <a href="http://www.rtcamp.com/~gautam/arrayfunctions.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/arrayfunctions.php', 'here']);" >here</a>.

## Booleans

<a href="http://in.php.net/manual/en/language.types.boolean.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/language.types.boolean.php', 'Booleans']);" title="PHP: Booleans - Manual">Booleans</a> are used for the concept of true or false. True is also displayed as &#8220;1&#8221; (one) and false is displayed as &#8220;0&#8221; or &#8220;&#8221; (zero or null). They are mainly used in logical expressions (if statements) which we will study later. Also note that there is a difference between the booleans true and false and the strings &#8220;true&#8221; and &#8220;false&#8221;. Booleans aren&#8217;t wrapped with quotes. You can view a sample code of booleans <a href="http://www.rtcamp.com/~gautam/booleans.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/booleans.phps', 'here']);" >here</a> and the online demo of that code <a href="http://www.rtcamp.com/~gautam/booleans.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/booleans.php', 'here']);" >here</a>.

## Constants

<a href="http://in.php.net/constants" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/constants', 'Constants']);" title="PHP: Constants - Manual">Constants</a> are just like variables just:

  * Their values can&#8217;t be changed after being defined.
  * Constant names use all capital letters.
  * They do not contain a dollar sign (&#8220;$&#8221;) in the beginning of their names.

You can view a sample code of constants <a href="http://rtcamp.com/~gautam/constants.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/constants.phps', 'here']);" >here</a> and the online demo of that code <a href="http://rtcamp.com/~gautam/constants.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/~gautam/constants.php', 'here']);" >here</a>.

## Type Casting

PHP tries its best to convert between types (strings, number, arrays, etc.). Sometimes, it makes guesses for what you want to do. <a href="http://in.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting', 'Type casting']);" title="PHP: Type Casting - Manual">Type casting</a> in PHP works much as it does in C. You can view a sample code of Type Casting <a href="http://www.rtcamp.com/~gautam/typecasting.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/typecasting.phps', 'here']);" >here</a> and the online demo of that code <a href="http://www.rtcamp.com/~gautam/typecasting.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/typecasting.php', 'here']);" >here</a>. You can view more information on this <a href="http://in.php.net/manual/en/language.types.type-juggling.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/language.types.type-juggling.php', 'here']);" title="PHP: Type Juggling - Manual">here</a>.

So, we are all finished with data types! In the next post we will talk about logical expressions (if statements).

*Image Credits: <a href="http://net.tutsplus.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://net.tutsplus.com/', 'NetTuts+']);" title="NetTuts+">NetTuts+</a>*
