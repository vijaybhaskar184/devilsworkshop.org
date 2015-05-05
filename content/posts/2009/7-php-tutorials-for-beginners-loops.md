---
title: '#7: PHP Tutorials for Beginners – Loops'
author: gautam
date: 2009-04-21
url: /7-php-tutorials-for-beginners-loops/
views:
  - 141
dsq_thread_id:
  - 3165189307
categories:
  - Tutorial
tags:
  - Developers
  - PHP
  - Tutorials
---
<img class="alignleft size-medium wp-image-5664" src="http://cdn.devilsworkshop.org/files/2009/04/coding-234x300.gif" alt="Coding" width="120" height="156" />In the [last post][1], we learnt about the first kind of control structures which are, if statements which allowed us to run a block of code if a condition is true or not. But what about writing a code which would run a block of code again and again? That&#8217;s where we will need loops for. Loops allow us to execute a block of code again and again if a condition is true.

In this post, we will talk about different kinds of loops like &#8211; While Loop, Do-while Loop, For Loop and For-each Loop. We will also talk about &#8211; Continue, Break and Pointers.<!--more-->

## While Loop

<a href="http://in.php.net/manual/en/control-structures.while.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/control-structures.while.php', 'While loops']);" title="PHP: while - Manual">While loops</a> are used to execute a block of code till a specified condition is true. The format of a while loop is:

`while (expression)<br />
statement;`

The format of While Loop is much like the if statements. You may see a sample code <a href="http://www.rtcamp.com/~gautam/whileloops.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/whileloops.phps', 'here']);" >here</a> and its online demo <a href="http://www.rtcamp.com/~gautam/whileloops.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/whileloops.php', 'here']);" >here</a>.

## Do-while Loop

<a href="http://in.php.net/manual/en/control-structures.do.while.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/control-structures.do.while.php', 'Do-while loops']);" title="PHP: do-while - Manual">Do-while loops</a> are much like the while loops. This loop executes the block of code atleast once and then executes it again only if the specified condition is true. The format of the do-while loop is:

`do {<br />
statement;<br />
} while (expression);`

You may see a sample code <a href="http://www.rtcamp.com/~gautam/dowhileloops.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/dowhileloops.phps', 'here']);" >here</a> and its online demo <a href="http://www.rtcamp.com/~gautam/dowhileloops.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/dowhileloops.php', 'here']);" >here</a>.

## For loop

<a href="http://in.php.net/manual/en/control-structures.for.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/control-structures.for.php', 'For loops']);" title="PHP: for - Manual">For loops</a> execute a block of code a specified number of times. They loop through the same way like the While Loops where the code is run when a condition is true but the syntax is a little different. Some may find this easy who have programming experience with other languages like C. The format of for loop is:

`for (expression1, expression2, expression3) {<br />
statement;`

<p class="simpara">
  The first expression is evaluated at the very beginning of the loop for the very first time through the loop only. It&#8217;s like an initializing statement which happens only once. The second expression is an evaluated expression that happens at the beginning of every loop. That is what we had in the while loop before. The third one is what happens at the end of each and every loop.
</p>

<p class="simpara">
  You may read the 3 expressions as initial (this is, the initial value we are giving, we are initializing something), test (it is the test which we perform each time and as long it is true, it will continue the loop) and each (each is the action we perform at the end of every loop before looping back to the top and doing the test again).
</p>

<p class="simpara">
  You may see a sample code <a href="http://www.rtcamp.com/~gautam/forloops.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/forloops.phps', 'here']);" >here</a> and its online demo <a href="http://www.rtcamp.com/~gautam/forloops.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/forloops.php', 'here']);" >here</a>.
</p>

## Foreach Loop

<a href="http://in.php.net/manual/en/control-structures.foreach.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/control-structures.foreach.php', 'Foreach loops']);" title="PHP: foreach - Manual">Foreach loops</a> are used to execute a block of code for each element in an array. The format of Foreach Loop is:

`foreach ($array as $value)<br />
statement;`

This loop is different from other loops. In other loops, we are always testing a boolean whether it is true or not. Foreach Loops only works on arrays and the boolean test in Foreach Loops is do we have items still left in an array. So Foreach Loop will go through every single element of the array. Each of those elements in the array will become the value and the value can be referenced in the statement.

You may see a sample code <a href="http://www.rtcamp.com/~gautam/foreachloops.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/foreachloops.phps', 'here']);" >here</a> and its online demo <a href="http://www.rtcamp.com/~gautam/foreachloops.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/foreachloops.php', 'here']);" >here</a>.

## Continue

As we have learnt about loops, there are some more options that you should know. One of them is <a href="http://in.php.net/manual/en/control-structures.continue.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/control-structures.continue.php', 'continue']);" title="PHP: continue - Manual">continue</a>. You may see a sample code <a href="http://www.rtcamp.com/~gautam/continue.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/continue.phps', 'here']);" >here</a> for explanation on continue. The online demo for the same is <a href="http://www.rtcamp.com/~gautam/continue.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/continue.php', 'here']);" >here</a>.

## Break

<a href="http://in.php.net/manual/en/control-structures.break.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in.php.net/manual/en/control-structures.break.php', 'Break']);" title="PHP: break - Manual">Break</a> ends the execution of the loop. After which, PHP skips the loop then and there and jumps to the next task it has to do. You may see a sample code <a href="http://www.rtcamp.com/~gautam/break.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/break.phps', 'here']);" >here</a> for more explanation. The online demo for the same is <a href="http://www.rtcamp.com/~gautam/break.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/break.php', 'here']);" >here</a>.

## Pointers

When you have an array in a PHP file, PHP maintains a pointer that points to the current value of an array and by default it&#8217;s only the first value. And, when we start looping through an array, PHP moves that pointer along the array to get each value and to keep a track on which value it has already used in the array. You may see a sample code <a href="http://www.rtcamp.com/~gautam/pointers.phps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/pointers.phps', 'here']);" >here</a> for more explanation. The online demo for the same is <a href="http://www.rtcamp.com/~gautam/pointers.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rtcamp.com/~gautam/pointers.php', 'here']);" >here</a>.

Hope you enjoyed the tutorial! Please spill your comments/suggestions/feedback/queries in the comments section :-). In the next post, we will learn about user defined functions.

(*Image Credits:* <a href="http://www.svmeditrans.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.svmeditrans.com/', 'S.V Meditrans, Inc.']);" title="S.V Meditrans, Inc.">S.V Meditrans, Inc.</a>)

 [1]: http://devilsworkshop.org/6-php-tutorials-for-beginners-logical-expressions/ "#6: PHP Tutorials for Beginners - Logical Expressions"
