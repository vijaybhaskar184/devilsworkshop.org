---
title: WordPress Themes – Standards and Checklists (beta)
author: rahul286
date: 2009-12-11
url: /wordpress-themes-standards-and-checklists/
views:
  - 47
dsq_thread_id:
  - 2946414067
categories:
  - Tutorial
tags:
  - Birthday
  - Checklists
  - CSS
  - Javascript
  - Standards
  - Wordpress
  - Wordpress Themes
---
This article was originally created (in parts) for rtCampers to guide our trainees and follow the best CSS and design practices. It is by no means complete but hopefully it will evolve over time as we get more mature with WordPress, CSS and web-design in-general.

The goal of this article is to create a master list of standards that we want to follow while designing wordpress themes. Comments & criticism &#8211; awaited!

### #1. Always Start with CSS-Reset

CSS-Reset is a snippet of code that should be always pasted in your &#8220;style.css&#8221;.

CSS-Reset clears (nullify) formatting on all HTML tags. Each browser has its own default formatting for most HTML tags and they vary from browser-to-browser. CSS-Reset brings all browsers to common ground! 😉

There are many variation of CSS-Reset, but one I have always used is pasted below. It is from <a href="http://elliotjaystocks.com/starkers/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://elliotjaystocks.com/starkers/', 'Stakers theme by Elliot Jay']);" >Stakers theme by Elliot Jay</a>, which has been starting point for most of my themes. I will talk about stakers theme in detail some other day!

[css]  
/\* RESET \*/  
/\* &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8211; \*/

/\* Global reset \*/  
/\* Based upon &#8216;reset.css&#8217; in the Yahoo! User Interface Library: http://developer.yahoo.com/yui \*/  
*, html, body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, label, fieldset, input, p, blockquote, th, td { margin:0; padding:0 }  
table { border-collapse:collapse; border-spacing:0 }  
fieldset, img { border:0 }  
address, caption, cite, code, dfn, em, strong, th, var { font-style:normal; font-weight:normal }  
ol, ul, li { list-style:none }  
caption, th { text-align:left }  
h1, h2, h3, h4, h5, h6 { font-size:100%; font-weight:normal }  
q:before, q:after { content:&#8221;}

/\* Global reset-RESET \*/  
/\* The below restores some sensible defaults \*/  
strong { font-weight:bold }  
em { font-style:italic }  
a img { border:none } /\* Gets rid of IE&#8217;s blue borders \*/  
[/css]

<h3 style="font-size: 1.17em">
  #2. Don&#8217;t forget to add CSS for WordPress Generated classes
</h3>

WordPress post-editor adds some classes like .alignleft, .alignright to the content. Also some template tags and standard widgets generates additional CSS classes that may be useful. More details about this can be found <a href="http://codex.wordpress.org/CSS#WordPress_Generated_Classes" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/CSS#WordPress_Generated_Classes', 'here']);" >here</a>.

At bare minimum you should have following CSS added in your theme.

[css]  
.aligncenter,  
div.aligncenter { display: block; margin-left: auto; margin-right: auto;}

.alignleft { float: left;}

.alignright { float: right;}  
[/css]

Also note coding style of above CSS block is different than style given on WordPress codex page.

Its matter of personal choice. You can <a href="http://davematthewsblog.com/wp-content/themes/davematthewsblog/style.css" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://davematthewsblog.com/wp-content/themes/davematthewsblog/style.css', 'see my CSS coding style here']);" >see my CSS coding style here</a>.

### #3. Javascripts in WordPress Theme

These days tabs and sliders are quite common among wordpress themes! Most of this fancy stuff is done using jQuery, its plugins and/or some extra javascript files.

Best way to include javascripts in wordpress theme is:  <a href="http://codex.wordpress.org/Function_Reference/wp_enqueue_script" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Function_Reference/wp_enqueue_script', 'wp_enqueue_script( ) function']);" >wp_enqueue_script( ) function</a>.

Always create your own javascripts files under &#8220;js&#8221; folder in your themes directory.

For javascripts library, before adding/uploading a copy to your theme directory, <a href="http://codex.wordpress.org/Function_Reference/wp_enqueue_script#Default_scripts_included_with_WordPress" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Function_Reference/wp_enqueue_script#Default_scripts_included_with_WordPress', 'check list of javascript libraries that comes with wordpress']);" >check list of javascript libraries that comes with wordpress</a>. All these default libraries can be included in your theme merely by calling <a href="http://codex.wordpress.org/Function_Reference/wp_enqueue_script" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Function_Reference/wp_enqueue_script', 'wp_enqueue_script( ) function']);" >wp_enqueue_script( ) function</a>. There is no need to upload them separately in your theme. 😉

### #4. Use Proper Test Data

To properly test a theme you are developing, you need test-data that covers most commonly used type of contents.

By default, when you install a new wordpress it creates a &#8220;Hello World&#8221; post, a comment on that post, an &#8220;About&#8221; page and few more data which is completely useless if you are developing a theme. Also exporting data from real big blog for testing purpose may not be good idea. We need test-data which must have lots of variations rather than larger number of posts.

For this:

  1. Always test your theme with <a href="http://svn.automattic.com/wpcom-themes/test-data.2008-12-22.xml" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://svn.automattic.com/wpcom-themes/test-data.2008-12-22.xml', 'standard test data given here']);" >standard test data given here</a>.
  2. Above link open (or downloads) a XML file. Save it on your disk.
  3. Then log into wordpress admin side. Go to *&#8220;Tools >> Import >> Wordpess&#8221; *and select XML file.
  4. Its good idea to check &#8220;Download and import file attachments&#8221; checkbox on next screen

Thats all! Now check each link/page on test site in each browser!

Standard test data and CSS-Reset will save your considerable time that goes wasted in support phase.

### #5. Final Testing & Checklist!

The biggest and most extensive <a href="http://codex.wordpress.org/Theme_Development_Checklist" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Theme_Development_Checklist', 'checklist']);" >checklist</a> with plenty of test-cases can be found on wordpress codex.

Any theme we develop must be tested against that checklist.

### #6. Additional Work for Public Themes

In case you want to release your theme for public on official wordpress.org theme repo, then make sure you follow <a href="http://wordpress.org/extend/themes/about/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/themes/about/', 'these guidelines']);" >these guidelines</a>.

For GPL compatibility, you can simply put the following 2 lines in a comment block in top-portion of your *style.css* file.

[css]  
/* The CSS, XHTML and design is released under GPL:  
http://www.opensource.org/licenses/gpl-license.php */  
[/css]

*(to be continued&#8230;)*
