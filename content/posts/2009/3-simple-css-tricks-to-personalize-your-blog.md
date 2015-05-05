---
title: 3 Simple CSS Tricks To Personalize your Blog
author: richiesajan
date: 2009-09-03
excerpt: "Getting ready-made free templates for blogger and wordpress is very easy. However the one big disadvantage of using a free template is that your blog won't be unique, meaning that thousands of other blogs might be using the same template. The trick is to make minor modifications to your template, to make it stand out in the digital world! Follow these simple tricks."
url: /3-simple-css-tricks-to-personalize-your-blog/
robotsmeta:
  - index,follow
views:
  - 442
dsq_thread_id:
  - 2947101302
categories:
  - Tips
tags:
  - Birthday
  - Blogger
  - Blogger(BlogSpot)
  - Blogging
  - Wordpress
---
<img class="alignleft size-full wp-image-13733" src="http://cdn.devilsworkshop.org/files/2009/09/css-logo-w3corg-758750.gif" alt="css-logo-w3corg-758750" width="138" height="140" />Getting ready-made free templates for blogger and wordpress is very easy. However the one big disadvantage of using a free template is that your blog won&#8217;t be unique, meaning that thousands of other blogs might be using the same template. The trick is to make minor modifications to your template, to make it stand out in the digital world! Follow these simple tricks.

<!--more-->

**Important Note:**This tutorial has been written, keeping in mind sites using simple HTML. To edit your blog&#8217;s template, follow the instructions:

Please make an appropriate back-up of your template, before implementing any of the tricks below.

To make these customizations, you will need to edit your blog&#8217;s template.

**For Blogger (BlogSpot) users:** In blogger, from the dashboard, select your blog&#8217;s *Layout* option, then click on *Edit HTML, *and then check on the *Expand Widget Templates.* Now search for *]]></b:skin>*. When you have to insert any of the codes below, just insert the codes above *]]></b:skin>* check-box.

**For WordPress users:** In the *Appearance* menu, select *Editor* and then select the appropriate style-sheet file from the options at the right [it will most probably be *Stylesheet (style.css)*]

Okay. All prepared? Here are some of the simplest CSS tricks that you can implement to personalize your template:

  1. ## Change the Selected Text Color

There are many instances when we might need to copy some contents from a website. What is the easiest method to do it? Of course, highlight the required text with the mouse and press Ctrl+C.

<img class="alignright size-full wp-image-13725" src="http://cdn.devilsworkshop.org/files/2009/09/high.PNG" border="1" alt="high" width="175" height="47" />What do you see when you highlight the text? There is a grey background color. These is where our trick kicks in. Changing the backgrond color of the highlighted text can give a magic touch to your website!

**Just insert the following code in your style sheet:**  
`::selection{background:#c3effd;color:#000}<br />
::-moz-selection{background:#c3effd;color:#000}`

This will give a cool effect, like the one shown in the image. To change the background color, edit the hex code after *background* and to change the font color change the hex code after *color*.

  2. ## Highlight the Input-box, when it is active

<img class="alignright size-full wp-image-13732" src="http://cdn.devilsworkshop.org/files/2009/09/pgnum.PNG" alt="pgnum" width="180" height="69" />You might be familiar with this trick if you have been using Google Chrome. There is a orangish border on the input-box that is active. To implement this hack, **just implement the following in your style-sheet:**  
`input[type="text"]:focus {border: 1px solid #f00;}<br />
input.focus {border: 1px solid #f00;}`

Like the above trick, you can edit the hex code to change the colors. Unfortunately I could not find a method to implement it on Google CSE. <img src="http://devilsworkshop.org/wp-includes/images/smilies/frownie.png" alt=":(" class="wp-smiley" style="height: 1em; max-height: 1em;" />

  3. ## Align Ads as if they were part of the Post

Here&#8217;s a tip that makes your blog look better and give you additional income as well. Wrapping the text around your post content, makes your ad appear, as if it was part of the content. This tremendously increases the revenue, that you may get from your blog.

**To implement this hack, find your ad code and insert the code below before it:**  
`<div style='float:left'><div style='padding-right:5px'>`

and the below code after it:  
`</div></div>`

The final code would be like this:  
`<div style='float:left'><div style='padding-right:5px'><br />
<!-- Your ad code here --><br />
</div></div>`

For a demo you can visit my blog @<a href="http://myfreehouse.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://myfreehouse.blogspot.com/', 'My Free House']);" target="_blank">My Free House</a></ol> 

Enjoyed these tricks? Having difficulty in implementing them? Please comment on.
