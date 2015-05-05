---
title: How to add a Featured Post section to your WordPress Blog?
author: arjunskumar47
date: 2009-06-08
excerpt: "In this post I'll be giving a small but efficient tutorial to add a Featured Post to your WordPress Blog. There are a lot of posts available over different sites and here I'll explain how to do it with ease."
url: /how-to-add-a-featured-post-section-to-your-wordpress-blog/
views:
  - 788
dsq_thread_id:
  - 2947099099
categories:
  - Tips
tags:
  - Blogging
---
In this post I&#8217;ll be giving a small but efficient tutorial to add a Featured Post to your WordPress Blog. There are a lot of posts available over different sites and here I&#8217;ll explain how to do it with ease..!!

<p style="text-align: center">
  <img class="aligncenter wp-image-51940" src="http://cdn.devilsworkshop.org/files/2009/06/featured-post-at-dw.png" alt="Image of featured post section at Devils Workshop" width="609" height="206" />
</p>

Now, you have to edit 3 files of your currently used theme to set this up:

  * Functions.php
  * Style.css (stylesheet)
  * Home.php (home page template)

## 1. Editing Functions.php

Open the functions.php file of your template and just add the code given in following file to it and save it.

> **<a href="http://www.orkutbuddy.com/functions.txt" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutbuddy.com/functions.txt', 'CLICK HERE TO GET THE CODE']);" target="_blank">CLICK HERE TO GET THE CODE</a>**

NB: You may add this at the first line or last line if you dont know where to add.

## 2.Editing Style.css

Open the stylesheet file in the themes folder and add the following codes to it.  
`<br />
#featured {<br />
float:left;<br />
background:#f1f1f1;<br />
margin:5px 10px;<br />
}<br />
#featured_title {<br />
float: left;<br />
width: 125px;<br />
font-size: 120%;<br />
font-weight: bold;<br />
padding: 15px 10px;<br />
}<br />
#featured_content {<br />
float:left;<br />
width: 445px;<br />
padding: 0px 10px 10px 10px;<br />
text-align: justify;<br />
}<br />
`

Now, the next task is to add a code to the home page such that it shows your featured post.  
Your theme may sometimes have a seperate home page(home.php) file or some times an index(index.php) file which is used to show the individual post as well as the home page.  
If your theme donot have any home.php file you have to create it. Just copy paste the entire content in **index.php** and save this as **home.php**.

Now refer to the following screenshot and add the code just where it is in screenshot.  
This is the code that you need to add.  
![code to be added to home.php][1]

### **Screenshot**

![Screenshot][2]

The basic things are done.

## How does it work?

Once you are done with this, add a category called FEATURED. Be sure that the spelling is the same as it works on this.  
Now head to add-post section and write an article that has to be posted. If it is a featured post mark the category as FEATURED and publish it.

Now, this is done. If you have queries do ask in the comment section here. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

* * *

*[**Editor&#8217;s Note**: This post is submitted by our guest *blogger** *******Arjun S Kumar********.*******<a id="KonaLink5" class="kLink" href="http://devilsworkshop.org/page-navigation-hack-for-blogger/#" target="undefined"></a>***** ***</p> 

*If you, too would like to [write][3] for Devils Workshop, please [check this][3]. Details about our [revenue sharing programs][3] are [here][3].]*

 [1]: http://cdn.devilsworkshop.org/files/2009/06/featured-post-code.png
 [2]: http://cdn.devilsworkshop.org/files/2009/06/featured-post.png
 [3]: http://devilsworkshop.org/join-dw/
