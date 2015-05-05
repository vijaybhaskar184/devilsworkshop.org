---
title: How to Optimize your Blogger Blog for SEO
author: rajeelkp
date: 2009-08-04
url: /how-to-optimize-your-blogger-blog-for-seo/
views:
  - 1996
dsq_thread_id:
  - 2947100674
categories:
  - Tips
tags:
  - Blogger
  - Blogging
---
SEO &#8211; No blogger can sustain without hearing or practicing this.Yes, SEO is very important for every blogger. It&#8217;s the life of a blog. If you are in wordpress, you don&#8217;t even want to worry about SEO. But if in blogger, you have a lot to worry. Anyway, now there are different hacks to optimize SEO for blogger blogs too.

Some of them are very simple, while some are really complicated. I have got mails from many of my readers asking me to help them, in optimizing SEO for their blogs. When Newbies are using multiple hacks, they are having confusion that where to place code, what to replace&#8230;&#8230;&#8230;.etc.

So I have made an ULTIMATE BLOGGER SEO HACK, by combining the best 3 SEO hacks.

This set consist of the most popular blogger hacks, i.e :

  * <a href="http://www.eblogtemplates.com/improve-your-google-rankings-in-one-easy-step/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.eblogtemplates.com/improve-your-google-rankings-in-one-easy-step/', 'Optimize blogger heading for seo']);" >Optimize blogger heading for seo</a>

With this simple hack, you can get ranked higher in search engines.this hack convert your page header to &#8220;post Header|Blog&#8221; from the normal header -&#8220;Blog:Post header&#8221;.This hack is widely used and i have got very very nice experience with it

  * <a href="http://www.labofweb.com/2008/10/all-of-you-are-board-of-same-blogger.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.labofweb.com/2008/10/all-of-you-are-board-of-same-blogger.html', 'Add a fav-icon to your blogger blog']);" title="How to change the blogger favicon"  target="_self">Add a fav-icon to your blogger blog</a>

Don&#8217;t think that Icon didn&#8217;t have any role in providing SEO/traffic to your blog.As per my experience, readers and search engines may won&#8217;t give enough importance to a blog without a clear identity.Remember that they may be checking it with your logo !!

  * <a href="http://www.bloggertricks.com/2007/12/adding-meta-tags-to-bloggerblogspot.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.bloggertricks.com/2007/12/adding-meta-tags-to-bloggerblogspot.html', 'Add meta tags to blogger']);" title="meta tag hack">Add meta tags to blogger</a>

This is the most important of all hacks.This hack will help you to add meta tags to your blog, and thus make it more friendly and easy to search engines.

<p style="text-align: center;">
  <!&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;!>
</p>

I have integrated all these hacks into a simple step, which you can easily add and customize for your blog.To add this hack, first, you want to search for ;-

> <b:include data=&#8217;blog&#8217; name=&#8217;all-head-content&#8217;/>  
> <title><data:blog.pageTitle/></title>

Now, replace the code with this ;-

> <b:include data=&#8217;blog&#8217; name=&#8217;all-head-content&#8217;/>
> 
> <meta content=&#8217;<span style="color: #ff0000;">YOUR BLOG DESCRIPTION GOES HERE</span>&#8216; name=&#8217;description&#8217;/> <meta content=&#8217;<span style="color: #ff0000;">Keyword1, keyword2, keyword3</span>&#8216; name=&#8217;keywords&#8217;/> <meta content=&#8217;<span style="color: #ff0000;">YOUR NAME&#8217; <span style="color: #000000;">name</span></span>=&#8217;author&#8217;/>
> 
> <b:if cond=&#8217;data:blog.pageType == &#8220;index&#8221;&#8216;>  
> <title><data:blog.pageTitle/></title>  
> <link href=&#8217;<span style="color: #ff0000;">YOUR FAVICON URL</span>&#8216; rel=&#8217;shortcut icon&#8217; type=&#8217;ico&#8217;/>  
> <b:else/>
> 
> <title><data:blog.pageName/> | <data:blog.title/></title>  
> </b:if>

See the screen shots if you have any doubts in the placement of code:

<p style="text-align: center;">
  <img class="aligncenter wp-image-53228" src="http://cdn.devilsworkshop.org/files/2009/08/post-600x250.jpg" alt="Ultimate all-in-one Blogger SEO hack" width="600" height="250" />
</p>

Replace the selected text with our code.After that the theme should look like:-

<img class="aligncenter size-medium wp-image-12857" src="http://cdn.devilsworkshop.org/files/2009/08/POST-1-600x287.jpg" alt="Ultimate all-in-one seo hack.Set your blogger blog for search engines" width="600" height="287" />

## <span style="color: #800000;">Editing the Values</span>

After you have placed the code, don&#8217;t forget to change the values.You can replace these values, given in red ;-

<p style="text-align: left;">
  <span style="color: #ff0000;">YOUR BLOG DESCRIPTION GOES HERE &#8211; </span><span style="color: #ff0000;"><span style="color: #000000;">Give a short description about your blog for the search engines.2-4 lines</span></span>
</p>

<p style="text-align: left;">
  <span style="color: #ff0000;">Keyword1, keyword2, keyword3 &#8211; <span style="color: #000000;">Add the keywords of your blogs here, separated by coma[,].</span><br /> </span>
</p>

<p style="text-align: left;">
  <span style="color: #ff0000;">YOUR NAME &#8211; <span style="color: #000000;">Give the Name of the blog author here</span><br /> </span>
</p>

<p style="text-align: left;">
  <span style="color: #ff0000;">YOUR FAVICON URL &#8211; <span style="color: #000000;">Provide the URL of your favicon here.<a href="http://www.labofweb.com/2009/07/how-to-createfind-best-icon-for-your.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.labofweb.com/2009/07/how-to-createfind-best-icon-for-your.html', 'refer this']);" title="How to find a favicon/icon/logo for your blog"  target="_self">refer this</a> to find a favicon for your blog.</span></span>
</p>

<span style="color: #ff0000;"><span style="color: #000000;">Now Save the template and go to sleep. You may see a shine in your traffic in the morning itself.</span></span>

****
