---
title: Using IF ELSE in Blogger Blog
author: arpitnext
date: 2008-09-22
url: /blogger-template-tricks/
views:
  - 1452
dsq_thread_id:
  - 2947092036
categories:
  - Tips
tags:
  - Blogger
  - Blogging
  - Windows
  - Wordpress
---
There is no doubt that WordPress is a better blogging platform than Blogger, but this is equally true that Blogger is an *Ideal Start for newbies*. It is a common trend that one starts with Blogger, Gains some maturity and then switches to WordPress. There are several problems with Blogger and most of the Blogger users are those who don&#8217;t have any Technical Background  For them, here is an explanation of using ***If Else*** type coding in the Blogger Template. This will enable bloggers to optimize their blog in different ways.

If Else type Conditional programing can be done by using **<b:if cond=&#8217; &#8216;>&#8230;..</b:if>** tag. To Try this just log-in to your blogger account and move *DashBoard > Layout > Edit HTML* and check the &#8220;*Expand Widget Templates*&#8221; Option.

Now, take an objective: Lets say, we want to use different <a href="http://en.wikipedia.org/wiki/Meta_tag" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Meta_tag', 'Meta tags']);" title="Meta tag"  target="_blank">Meta tags</a> for different pages (i.e. posts), which is not possible by any other method . Just enter the following  code at the proper place:

<pre><code class="no-highlight">&lt;b:if cond='data:blog.url == "http://yourblog.com/2008/06/yourpost.html"'&gt;
&lt;meta content='xyz,pqr' name='keywords'/&gt;
&lt;meta content='Your Description' name='description'/&gt;
...............
&lt;/b:if&gt;</code></pre>

Please Replace *http://yourblog.com/2008/06/yourpost.html* with the actual URL of that post. You will notice that the condition is made for the variable **data:blog.url **and equality operator **== **is used. You can use some other variables and operators. The **!= **operator is used for ***Not Equal to*** cases .

I am sure that now you can guess the meaning of above source code. It simply says that** if **the URL of the page is equal to *http://yourblog.com/2008/06/yourpost.html *then apply the following meta tag. If you want to assign a meta tag set for the Home page of your blog then instead of using the URL of your homepage you can use **data:blog.homepageUrl **and your code will become like:

<pre><code class="no-highlight">&lt;b:if cond='data:blog.url&lt;strong> &lt;/strong>== data:blog.homepageUrl'&gt;
......
&lt;/b:if&gt;</code></pre>

If you want to assign a meta tag set for all the post-pages (i.e., the pages other than your homepage) use this code:

<pre><code class="no-highlight">&lt;b:if cond=&lt;strong>'&lt;/strong>data:blog.pageType == "index"&lt;em>&lt;strong>'&lt;/strong>&gt;
&lt;/em>.........
&lt;/b:if&gt;</code></pre>

The variable **data:blog.pageType **looks for the type of page. Post pages are identified by item and homepage of your blog is identified by index. Hence, for homepage you can use both,  **data:blog.url **== **data:blog.homepageUrl **and **data:blog.pageType == &#8220;index&#8221; **.

You can use the above conditional coding in various ways to optimize your blog. I have several suggestions for you, but you can discover more ways as per your need.

  * Your home page will only feature the actual title of your blog, whereas post pages will feature your blog title, plus the title of your blog post. To Optimize your blog for Search Engines you need to modify it so that the past pages have titles of your blog post only. To get this done look for <title><data:blog.pageTitle/></title> and replace it with the following code 
    <pre><code class="no-highlight">&lt;b:if cond='data:blog.pageType == "index"'&gt;
&lt;title&gt;&lt;data:blog.title/&gt;&lt;/title&gt;
&lt;b:else/&gt;
&lt;title&gt;&lt;data:blog.pageName/&gt;&lt;/title&gt;
&lt;/b:if&gt;</code></pre>

  * Similarly , sometimes you want to display some page-elements on homepage and not on post pages ( or , vice-versa ) . You can use this conditional coding again for this objective . Just Go to **Page Element** section and select the required page element to edit . The editor will open in a new window .[<img class="size-medium wp-image-1974 alignright" src="http://cdn.devilsworkshop.org/files/2008/09/blogger-hack-1-300x58.png" alt="" width="300" height="58" />][1]Just focus on the URL of this window. At the end you can find the **widgetId=HTML#** . This is the widget ID of this page element . Now , switch back to the **EDIT HTML** section and locate that widget ( may use Find option of your browser ). You will notice a layout tag <data:content/> inside this widget code . This tag displays the contents of that page element on any page. You can do your conditional programing around this. For example you want to hide it from homepage, just do this: 
    <pre><code class="no-highlight">&lt;b:if cond='data:blog.pageType == "item"'&gt;&lt;data:content/&gt;&lt;/b:if&gt;</code></pre>
    
    This trick can be used for many purposes, like displaying Ads, Featured Posts, Special Messages for visitors.</li> </ul> 
    
    I hope that this article will help you in optimizing your Blogger blog. If you need any help, feel free to contact us. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
    
    * * *
    
    *[**Editor Note**: This post is by guest blogger <a href="http://blog.arpitnext.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.arpitnext.com/', 'Arpit Kumar']);" >Arpit Kumar</a>. He blogs at <a href="http://blog.arpitnext.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://blog.arpitnext.com/', 'TechRaga']);" >TechRaga</a> on Internet & technology. He is very active twitter user, in case if you like to <a href="http://twitter.com/arpitnext" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://twitter.com/arpitnext', 'follow him on twitter']);" >follow him on twitter</a>.*
    
    *If you like to [write][2] for Devils Workshop, please [check this][2]. Details about our [revenue sharing programs][2] are [here][2].]*

 [1]: http://cdn.devilsworkshop.org/files/2008/09/blogger-hack-1.png
 [2]: http://devilsworkshop.org/join-dw/
