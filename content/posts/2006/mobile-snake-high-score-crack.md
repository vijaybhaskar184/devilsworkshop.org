---
title: (Mobile) – Snake – High Score Crack!!!
author: rahul286
date: 2006-07-06
url: /mobile-snake-high-score-crack/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/07/mobile-snake-high-score-crack.html
views:
  - 488
dsq_thread_id:
  - 2946412526
categories:
  - Reviews
tags:
  - Blogger
  - Internet Explorer
  - Security
---
<div style="text-align: left">
  This is for all Nokia&#8217;s Symbian series SNAKE lovers&#8230;(n cracker too)&#8230;<br /> If you ever cared about high scoring in this game then you are at right place&#8230;The game have a file <span style="font-weight: bold; font-style: italic">&#8220;Snake EX HighScores.dat&#8221;</span> in phone memory under <span style="font-weight: bold; font-style: italic">&#8220;system\data&#8221;</span> directory.<span style="font-weight: bold">Complete Path : &#8220;C:\system\data\Snake EX Highscores.dat&#8221;</span>Open this file in any Hex-editor&#8230;<br /> (I used SelQ i.e. system explorer v. 1.8 which have built-in HEX-editor, ASCII-editor, Unicode-editor.. kool na)</p> 
  
  <p>
    <span style="font-weight: bold">Before editing, lemme tell you how to interpret this file&#8230;</span><br /> <span style="font-weight: bold">(The file will always have 10 records.)</span><br /> <span style="font-weight: bold"></span><span style="font-weight: bold"><br /> For each record- </span><br /> <span style="font-weight: bold"></span><span style="font-weight: bold">1. First field, 4-byte for SCORE.</span><br /> <span style="font-weight: bold"></span><span style="font-weight: bold"></span><span style="font-weight: bold">2. Next 2-byte for length of Player Name.<br /> </span><span style="font-weight: bold">3. Then actual Name in Unicode Format. (this mean u can write your name in any language)</span>
  </p>
  
  <p>
    Now, to change your score you just have to edit first 4-bytes.<br /> The score in signed long int i.e. 31-bit so you can score up-to 2147483648 (2^31).
  </p>
  
  <p>
    while changing the name of player I suggest if your name is shorter than the actual name of player then just pad it up with spaces.
  </p>
  
  <p>
    If your name is longer then you have to edit second field, and also in this case the editor you are using must allow u to insert few more byte in file.
  </p>
  
  <p>
    The best part of all this is that the file is neither encrypted, nor it ends with CRC code so u can be somewhat careless when altering the content.
  </p>
  
  <p>
    <span style="font-style: italic"><span style="font-weight: bold">Of course d rule of thumb &#8211; always make backup while messing up with your data.. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" /></span></span></div>
