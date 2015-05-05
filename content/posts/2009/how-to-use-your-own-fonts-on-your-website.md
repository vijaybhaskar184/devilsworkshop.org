---
title: How to use your own fonts on your Website?
author: everblogger
date: 2009-07-22
url: /how-to-use-your-own-fonts-on-your-website/
views:
  - 220
dsq_thread_id:
  - 2947100202
categories:
  - Tips
tags:
  - Blogging
  - Developers
  - Fonts
  - Webmaster-tips
---
**<span style="font-size: medium">H</span>**ave you ever thought to use your own fonts in your website but you couldn&#8217;t do so because it is a rare font and is installed rarely in all the computers?

<img class="aligncenter size-full wp-image-12093" src="http://cdn.devilsworkshop.org/files/2009/07/fonts-bigicon_blogspot_com.jpg" alt="Different fonts" width="240" height="180" />

So, I have got a quick solution for you and that is called ** Cufon.** It makes possible **fast and easy replacement of text with the font of your wish**. It is **very easy to set up** and supports nearly all major browsers. And also it is **SEO friendly**.

# <p style="text-align: left">
  How to use Cufon
</p>

To use <a href="http://cufon.shoqolate.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://cufon.shoqolate.com', 'Cufon']);" >Cufon</a> is so easy.

First download the JavaScript file <a href="http://cufon.shoqolate.com/js/cufon-yui.js" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://cufon.shoqolate.com/js/cufon-yui.js', '(http://cufon.shoqolate.com/js/cufon-yui.js)']);" >(http://cufon.shoqolate.com/js/cufon-yui.js)</a> and generate your own font&#8217;s unique JavaScript file <a href="http://cufon.shoqolate.com/generate/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://cufon.shoqolate.com/generate/', 'here']);" >here</a> (<a href="http://cufon.shoqolate.com/generate/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://cufon.shoqolate.com/generate/', 'http://cufon.shoqolate.com/generate/']);" >http://cufon.shoqolate.com/generate/</a>).

Once you have the both JavaScript file, upload them to your webhost and include it in the head section of your web page like this :

**  
`<br />
<em> </em><<em> </em>script type="text/javascript" src="path/to/cufon-yui.js" ><<em> </em>/script<em> </em>><br />
<<em> </em>script type="text/javascript" src="<em> </em>path/to/font.js"<em> </em>><<em> </em>/script<em> </em>><br />
`**

Don&#8217;t forget to change to &#8220;path/to&#8221; according to your needs.That means the path to the *cufon-yui.js* and *font.js* file

Now we are all set up to replace your text , to replace the text with cufon , add the following piece of javascript to your page :

`<<em> </em>script type="text/javascript"<em> </em>><br />
Cufon.replace(‘h3');<br />
</script>`

The above lines of code will replace all your h3 elements with images rendered by Cufon with the font given by you.  
You can take a look at a more detailed guide to replace text with cufon <a href="http://wiki.github.com/sorccu/cufon/usage" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wiki.github.com/sorccu/cufon/usage', 'here  (http://wiki.github.com/sorccu/cufon/usage)']);" >here  (http://wiki.github.com/sorccu/cufon/usage)</a>.

# Rendering your text (Styling)

You can also add linear gradients to your text with cufon. Here is a sample code

`<br />
Cufon.replace(‘h2', {<br />
color: ‘-linear-gradient(#000, #777, #777, #000)’<br />
});<br />
`

The above code will cause the text to fade from black (#000) to grey (#777) and then back for h2 (<h2>) tags. For a detailed guide to styling using cufon refer to : <a href="http://wiki.github.com/sorccu/cufon/styling" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wiki.github.com/sorccu/cufon/styling', 'http://wiki.github.com/sorccu/cufon/styling']);" >http://wiki.github.com/sorccu/cufon/styling</a>  
And the most important feature of this is its so simple than sFIR.

# Tips

<img class="aligncenter size-full wp-image-12116" src="http://cdn.devilsworkshop.org/files/2009/07/scr1-fonts.png" alt="Customizing the Security" width="380" height="123" />If you are using some commercial fonts or fonts which you think not to give to your visitor 😀 . use this feature.

**Link: **<a href="http://cufon.shoqolate.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://cufon.shoqolate.com/', 'Cufon']);" >Cufon</a>

<address>
  (Image credits: <a href="http://www.flickr.com/photos/stewf/1069468652/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.flickr.com/photos/stewf/1069468652/', 'Stewf']);" >Stewf</a>)
</address>

<address>
  (Source: <a href="http://www.dynamicguru.com/2009/07/cufon-easy-and-fast-text-image-replacement-solution/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.dynamicguru.com/2009/07/cufon-easy-and-fast-text-image-replacement-solution/', 'Mujtaba']);" >Mujtaba</a>)
</address>

* * *

*[**Editor&#8217;s Note:** This post is submitted by our guest blogger **<a href="http://twitter.com/EverBlogger" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://twitter.com/EverBlogger', 'Kranthi']);" >Kranthi</a>******, alias EverBlogger. ****Kranthi* *blogs on Devils Workshop about blogging and website optimization tips**. You can <a href="http://twitter.com/EverBlogger" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://twitter.com/EverBlogger', 'follow Kranthi on Twitter']);" >follow Kranthi on Twitter</a>.*</p> 

*If you, too would like to [write][1] for Devils Workshop, please [check this][1]. Details about our [revenue sharing programs][1] are [here][1].]*

 [1]: http://devilsworkshop.org/join-dw/
