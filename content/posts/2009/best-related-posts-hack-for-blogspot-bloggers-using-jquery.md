---
title: Best Related Posts Hack for BlogSpot Bloggers Using jQuery
author: swashata
date: 2009-07-23
excerpt: "It's been some time I  have been searching for best way to put related posts on my blogger blog! I know that there are actually many hacks for this! But truly speaking, I could not find any hack to be that much efficient as that of Wordpress. Even the hack by Jackbook looks good but not professional (as it shows the label tags and does not orders them according to priority). Also the hack posted at Devils Workshop does not seem to work now (may be because blogger APIs have changed over time)… So today, I am going to share the best way I have found to show Related Posts in your Blogger blog just in the WordPress style! It loads fast and completely based on jQuery."
url: /best-related-posts-hack-for-blogspot-bloggers-using-jquery/
views:
  - 639
dsq_thread_id:
  - 2947100443
categories:
  - Tutorial
tags:
  - Blogger
  - Developers
  - Mobile
  - Related Posts
  - Search Tool
---
<p align="justify">
  <img class="aligncenter size-full wp-image-12528" src="http://cdn.devilsworkshop.org/files/2009/07/Andacoolrelatedposthackforyourblog.png" alt="Andacoolrelatedposthackforyourblog.png" width="502" height="268" />It&#8217;s been some time I  have been searching for best way to put related posts on my blogger blog! I know that there are actually many hacks for this! But truly speaking, I could not find any hack to be that much efficient as that of WordPress. Even the hack by <a href="http://www.jackbook.com/blogger-hack-blogspot-hack-blogger-templates-customizing/related-posts-entries-on-blogger-blogspot" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.jackbook.com/blogger-hack-blogspot-hack-blogger-templates-customizing/related-posts-entries-on-blogger-blogspot', 'Jackbook']);" >Jackbook</a> looks good but not professional (as it shows the label tags and does not orders them according to priority). Also the hack posted at <a href="http://devilsworkshop.org/related-post-solution-for-blogspot-blogger/">Devils Workshop</a> does not seem to work now (may be because blogger APIs have changed over time)… So today, I am going to share the best way I have found to show <em>Related Posts in your Blogger blog just in the WordPress style</em>! It loads fast and completely based on <a href="http://jquery.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://jquery.com', 'jQuery']);" target="_blank">jQuery</a>. Let&#8217;s first take a quick look at the features:
</p>

  * No need to modify the template. Just insert it as a** HTML/JavaScript** Widget and you are done! But we shall be working with the template XML not as Widget to host the JS codes directly on Blogger!
  * Lists top posts (you can choose the number) sorted by the number of common tags (or labels)
  * Displays loading text or icon until widget loads the related posts (Ajax style)

Before starting the Tutorial, I would like to give the **full credit to the author of the JavaScript of this Hack, **<a href="http://www.moretechtips.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.moretechtips.net/', 'MoreTechTips']);" ><strong>MoreTechTips</strong></a>. You can visit directly <a href="http://www.moretechtips.net/2009/04/jquery-gdata-api-smarter-related-posts.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.moretechtips.net/2009/04/jquery-gdata-api-smarter-related-posts.html', 'this post']);" >this post</a> on his blog and implement the hack without much problem! But below I have illustrated a better way, where you will be able to make your blogger.com blog host the necessary JS files (*including jQuery*) and also will give you a ready made CSS to decorate your Related Posts.

## Step 1: Preparing necessary files and implementing to Template XML:

Well you don’t need to do much at this step! Just some copy paste on your Blogger Template

  * Although Google hosts jQuery files very well, but it is always recommended to host them at your own! For this I have previously written a post on <a href="http://www.intechgrity.com/2009/07/attaching-jquery-framework-directly-on.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.intechgrity.com/2009/07/attaching-jquery-framework-directly-on.html', 'how to copy jQuery framework directly on Blogger']);" >how to copy jQuery framework directly on Blogger</a>. Go through the posts and when done move to the next step…
  * Now open up your Blogger Template once again by navigating to <a href="http://www.blogger.com/home" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.blogger.com/home', 'Blogger Dashboard']);" target="_blank"><strong>Blogger Dashboard</strong></a>** > Layout > Edit HTML**.
  * Before the closing **</head>** tag of your template, paste exactly the code on below: 
    <pre><code style="overflow: auto">&lt;script type='text/javascript'&gt;
/*     Author : Mike @ moretechtips.net
    Blog : http://www.moretechtips.net
    Project: http://code.google.com/p/blogger-related-posts
    Copyright 2009 [Mike@moretechtips.net]
    Licensed under the Apache License, Version 2.0
    (the &quot;License&quot;); you may not use this file except in compliance with the License.
    You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
    Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an &quot;AS IS&quot; BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
*/
function relatedPostsWidget(userOp){
    var self = this;
    var op = {
        'blogURL':''
        ,'maxPosts':5
        ,'maxTags':5
        ,'maxPostsPerTag':5
        ,'containerSelector':''
        ,'tags':null
        ,'loadingText':''
        ,'loadingClass':''
        ,'relevantTip':''
        ,'relatedTitle':'Related Posts'
        ,'recentTitle':'Recent Posts'
        ,'postScoreClass':''
        ,'onLoad':false
    };
    op = $.extend({}, op, userOp);
    var tagsLoaded = 0,div= null,ul=null;
    // If no contianer selected , will create div in place of script call
    if (!op.containerSelector) {
        document.write('&lt;div id=&quot;related-posts&quot; /&gt;');
        op.containerSelector = '#related-posts';
    }
    // Tag json posts are loaded
    var tagLoaded = function(json,status){
        tagsLoaded++;
        if(json.feed.entry) {
            for (var i=0; i&lt;json.feed.entry.length; i++) {
                var entry = json.feed.entry[i];
                var url='';
                for (var k=0; k&lt;entry.link.length; k++) {
                    if(entry.link[k].rel=='alternate') {
                        url = entry.link[k].href;
                        break;
                    }
                }
                var title = entry.title.$t;
                //Ignore current url
                if(location.href.toLowerCase()!= url.toLowerCase()) addPost(url,title);
            }
        }
        // Loading posts of all tags is done
        if(tagsLoaded&gt;=op.tags.length) {
             ul.attr('class','');
             $('#related-posts-loadingtext',div).remove();
             // Hide extra posts if maxPosts &gt;0
             if(op.maxPosts&gt;0) $('li:gt('+ (op.maxPosts-1) +')',ul).remove();
        }
    }
    // Add post and re-order
    var addPost = function(url,title) {
        //current LI items inside of UL
        var list = $('li',ul);
        for(var i=0; i&lt;list.length; i++) {
            //get score
            var a= $('a', list.eq(i) );
            var sc = getScore(a);
            //Post exists ?
            if(a.attr('href')==url) {
                //Yes : Then increment score
                setScore(a,++sc);
                //Re-order : compare with prevoius li items
                for(var j=i-1; j&gt;=0; j--){
                    // find the item with higher score than current
                    var jA= $('a', list.eq(j) );
                    if (getScore(jA)&gt;sc) {
                        // re-order if only there are items in the middle to appear before
                        if(i-j&gt;1) list.eq(j).after(list.eq(i));
                        return;
                    }
                };
                // If no higher item then this one should go first
                if(i&gt;0) list.eq(0).before(list.eq(i));
                return;
            }
        }
        //Add new post
        ul.append('&lt;li&gt;&lt;a href=&quot;'+url+'&quot; title=&quot;'+(op.relevantTip? op.relevantTip.replace('\d',1):'')+'&quot;&gt;'+title+'&lt;/a&gt;&lt;/li&gt;');
    }
    // parse score from attribute
    var getScore = function(a){
        var score = parseInt(a.attr('score'));
        return score&gt;0? score : 1;
    }
    // set score from attribute
    var setScore = function(a,sc) {
        a.attr('score',sc);
        if(op.relevantTip) a.attr('title',op.relevantTip.replace('\d',sc));
        if(op.postScoreClass) a.attr('class',op.postScoreClass+sc);
    }
    // init
    var initRelatedPosts = function() {
        // append my div to user selected container
        if(op.containerSelector != '#related-posts'){
            var container = $(op.containerSelector);
            // check contianer is there and only one for pages like home
            if (container.length!=1) return;
            div = $('&lt;div id=&quot;related-posts&quot;/&gt;').appendTo(container);
        }
        else div = $(op.containerSelector); // div which I wrote on document
        // get tags if wasn't preset
        if (!op.tags) {
            op.tags = [];
            $('a[rel=&quot;tag&quot;]:lt('+op.maxTags+')').each(function () {
                var tag= $.trim($(this).text().replace(/\n/g,''));
                if($.inArray(tag,op.tags)==-1) op.tags[op.tags.length]=tag;
            });
        }
        // should make recent posts but no recent title :exit
        if(op.tags.length==0 &amp;&amp; !op.recentTitle) return;
        //add recent posts title
        if(op.tags.length==0) $('&lt;h2&gt;'+op.recentTitle+'&lt;/h2&gt;').appendTo(div);
        //add related posts title if any
        else if(op.relatedTitle) $('&lt;h2&gt;'+op.relatedTitle+'&lt;/h2&gt;').appendTo(div);
        //Add loading text if any
        if(op.loadingText) $('&lt;div id=&quot;related-posts-loadingtext&quot;&gt;'+op.loadingText+'&lt;/div&gt;').appendTo(div);
        // Appending UL with loading class if selected
        ul= $('&lt;ul '+(op.loadingClass? 'class=&quot;'+ op.loadingClass+'&quot;':'')+'/&gt;').appendTo(div);
        //recent posts
        if(op.tags.length==0){
            $.ajax({url:op.blogURL+'/feeds/posts/summary/'
                    ,data:{'max-results':op.maxPostsPerTag,'alt':'json-in-script'}
                    ,success:tagLoaded
                    ,dataType:'jsonp'
                    ,cache:true });
        // Tags found , do related posts widget
        }else{
            // Requesting json feeds for each tag
            for(var t=0; t&lt;op.tags.length;t++)
                $.ajax({url:op.blogURL+'/feeds/posts/summary/'
                        ,data:{'category':op.tags[t],'max-results':op.maxPostsPerTag,'alt':'json-in-script'}
                        ,success:tagLoaded
                        ,dataType:'jsonp'
                        ,cache:true });
        }
    }
    // Call init on document ready
    if(op.onLoad) $(window).load(initRelatedPosts);
    else $(document).ready(initRelatedPosts);
}
&lt;/script&gt;
&lt;b:if cond='data:blog.pageType == &quot;item&quot;'&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
relatedPostsWidget({
   'loadingText':'&lt;img src=&quot;http://i29.tinypic.com/11addex.gif&quot; style=&quot;margin-bottom:-5px;&quot;/&gt; loading...',
   'relevantTip':'\d relevant tags!',
   'containerSelector':'div.post-body',
   'relatedTitle':'Related Posts',
   'maxPostsPerTag':10,
   'maxPosts':10
});
&lt;/script&gt;
&lt;/b:if&gt;</code></pre>
    
    <p style="text-align: left">
      You may also download it in form of a <a href="http://www.box.net/shared/5krnzecnjm" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.box.net/shared/5krnzecnjm', 'text file from here']);" >text file from here</a> if you are having problem copying the code! <img class="aligncenter" style="border: 0pt none" src="http://cdn.devilsworkshop.org/files/2009/07/Pastethecodeproperly.png" border="0" alt="Paste the code properly" width="473" height="320" />
    </p>

  * Save the Template and view your blog! If your template is a default one or not modified much, then you should be able to see** related posts below every posts on their individual pages **

### Understanding the code:

While pasting the code on Blogger, you may change the following values and to get the subsequent results. Note that all the codes are written in escaped character and you need to maintain the format in order to avoid any Template XML parsing error!

#### 1. Loading String code:

`'loadingText':'&lt;img src=&quot;http://i29.tinypic.com/11addex.gif&quot; style=&quot;margin-bottom:-5px;&quot;/&gt; loading...'`

You may change the **loading…** to any string you want! Also I have included a jQuery style animated gif image! You can change the **src=&quot;<span style="text-decoration: underline">http://i29.tinypic.com/11addex.gif</span>&quot;** to **src=&quot;<span style="text-decoration: underline">YOUR_IMAGE_URL</span>&quot;** to put your own image

#### 2. Tooltip Code:

`'relevantTip':'\d relevant tags!'`

Shows a tooltip like [this][1]. Change the **relevant tags** string to anything you want! Keep the **/d** as it is to show the number of tags

#### 3. Container Selector:

`'containerSelector':'div.post-body'`

Use this to append the Related Post after the selector you have specified. The default one will make them appear below posts. If you have edited your template, then get the Id (or add it) of the div below which you want to append the Related Post widget (say the id is ‘mydiv’) and change **div.post-body** to **div#mydiv**. You can also get the class of the div and put it like **div.myclass**.

#### 4. Related Widget Title:

`'relatedTitle':'Related Posts'`

Change the **Related Posts** to any text string you want to appear as title.

#### 5. Maximum Number of posts to show:

`'maxPosts':10`

Change the value 10 to any number you wish to show! Note that the JS will automatically cut off the most irrelevant posts! Also if you wish to show all posts then set the value to 0.

If you want to learn more of the codes then visit original article <a href="http://www.moretechtips.net/2009/04/jquery-gdata-api-smarter-related-posts.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.moretechtips.net/2009/04/jquery-gdata-api-smarter-related-posts.html', 'here']);" >here</a>. Also Mike (author) has explained it in detail <a href="http://www.moretechtips.net/2009/04/code-behind-smarter-related-posts.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.moretechtips.net/2009/04/code-behind-smarter-related-posts.html', 'here']);" >here</a>! (Very useful for newbie programmer)

## Step 2: Styling this up Using CSS:

Now this is my favorite! Quite easy though… Just go to the Blogger Template XML again (**Blogger Dashboard > Layout > Edit HTML**) and before the closing **]]></b:skin>**

<pre><code class="no-highlight">/* Related Post CSS by Swashata via Devilsworkshop
Color palette used http://www.colourlovers.com/palette/901244/Ice_Cave_Ceiling
Visit colourlovers.com for more
Icons downloaded from http://www.iconspedia.com/
 */
#related-posts{
 width: 98%;
 margin: 15px auto;
}
/* Widget H2 heading */
#related-posts h2{
 font-size: 16px;
 font-family: Georgia;
 background: #D9E1FA url(http://i26.tinypic.com/6fqi5z.png) no-repeat scroll 3px center;
 padding: 10px 0 10px 40px;
 margin: 0 0 5px 0;
 border: 1px solid #6F82BF;
}
/* Widget UL list */
#related-posts ul{
 list-style: none;
 font-size: 12px;
 letter-spacing: 0;
}

#related-posts ul li {
 background: transparent url(http://i28.tinypic.com/ev762w.jpg) no-repeat scroll 0 5px;
 line-height: 140%;
 margin: 0;
 padding: 0 0 0.8em 20px;
}
/* Widget loading text */
#related-posts-loadingtext{
 color:green;
}</code></pre>

Save Template and preview! (*Having problem*? Download the CSS file from <a href="http://www.box.net/shared/8hnhiy9sev" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.box.net/shared/8hnhiy9sev', 'here']);" >here</a>) What did you see? Surprising isn’t it 😉 . Basically it is done by modifying the default attributes of unordered lists using CSS with proper selectors. Previously I have written a guide on CSS for styling up bullets or unordered lists <a href="http://www.intechgrity.com/2009/06/customize-looks-style-of-bullets.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.intechgrity.com/2009/06/customize-looks-style-of-bullets.html', 'here']);" >here</a> on my blog. You can learn more from it and make your code unique 😉 .

So that was the complete tutorial to integrate Related Posts in your blogger blog with advanced jQuery technique! Of course, as JS is a client side scripting language so you will not be getting SEO with this hack (Unlike WP) but this can expose more of your articles in front of your readers and thereby you can get more page hits!

If you face any problem regarding the hack, then feel free to ask here! **Also do thank the <a href="http://www.moretechtips.net/2009/04/jquery-gdata-api-smarter-related-posts.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.moretechtips.net/2009/04/jquery-gdata-api-smarter-related-posts.html', 'original Author']);" >original Author</a> for this great piece of jQuery plugin**!

* * *

*[**Editor&#8217;s Note**: This post is submitted by our guest blogger **Swashata Ghosh. **Swashata authors the blog <a href="http://www.intechgrity.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.intechgrity.com/', 'InTechgrity']);" >InTechgrity</a>, and is a student at RCCIIT, Kolkata. <a id="KonaLink16" class="kLink" href="http://devilsworkshop.org/setup-a-sub-domain-of-your-blogger-domain-to-any-freepremium-host-using-ns-or-cname/#" target="undefined"><span style="color: #007cab ! important;font-weight: 400;font-size: 12.8px"><span class="kLink" style="color: #007cab ! important;font-family: Verdana,Tahoma;font-weight: 400;font-size: 12.8px">Programming</span></span></a> is his hobby and is interested in CSS/xHTML web-designing.*</p> 

<div id="_mcePaste" style="overflow: hidden;width: 1px;height: 1px">
  <hr />
  
  <em><em>[<strong>Editor&#8217;s Note</strong>:</em> This post is submitted by our guest blogger </em><em><strong>Smartin. </strong>Smartin is a <a id="KonaLink10" class="kLink" href="http://devilsworkshop.org/how-to-install-phpbb-forum-manually-on-000webhost/#" target="undefined"><span style="color: #007cab ! important;font-weight: 400;font-size: 12.8px"><span class="kLink" style="color: #007cab ! important;font-family: Verdana,Tahoma;font-weight: 400;font-size: 12.8px">Blogger</span></span></a>, <a id="KonaLink11" class="kLink" href="http://devilsworkshop.org/how-to-install-phpbb-forum-manually-on-000webhost/#" target="undefined"><span style="color: #007cab ! important;font-weight: 400;font-size: 12.8px"><span class="kLink" style="border-bottom: 1px solid #007cab;color: #007cab ! important;font-family: Verdana,Tahoma;font-weight: 400;font-size: 12.8px;background-color: transparent">web </span><span class="kLink" style="border-bottom: 1px solid #007cab;color: #007cab ! important;font-family: Verdana,Tahoma;font-weight: 400;font-size: 12.8px;background-color: transparent">designer</span></span></a> and SEO enthusiast from Kerala, <a id="KonaLink12" class="kLink" href="http://devilsworkshop.org/how-to-install-phpbb-forum-manually-on-000webhost/#" target="undefined"><span style="color: #007cab ! important;font-weight: 400;font-size: 12.8px"><span class="kLink" style="color: #007cab ! important;font-family: Verdana,Tahoma;font-weight: 400;font-size: 12.8px">India</span></span></a>. You can know more about him at his website <a href="http://www.smartin.in/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.smartin.in/', 'www.smartin.in']);" >www.smartin.in</a> or @smartinjose on Twitter .</em>
</div>

*If you, too would like to [write][2] for Devils Workshop, please [check this][2]. Details about our [revenue sharing programs][2] are [here][2].]*

 [1]: / "2 relevant tags"
 [2]: http://devilsworkshop.org/join-dw/
