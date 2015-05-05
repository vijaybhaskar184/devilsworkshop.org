---
title: Add Pagination to your WordPress Blog without Plugin!
author: arjunskumar47
date: 2009-08-19
url: /add-pagination-to-your-wordpress-blog-without-plugin/
robotsmeta:
  - index,follow
views:
  - 96
dsq_thread_id:
  - 2947100729
categories:
  - Tutorial
tags:
  - Developers
  - Security
  - Wordpress
---
Previously I gave you guys a tutorial about how to add a [featured post][1] section to your WordPress Blog.  
This time I&#8217;ll be giving you yet another tutorial in which you can add a pagination to your WordPress blog without any plugin.  
If you want to see a live demo <a href="http://www.mobilegyaan.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mobilegyaan.com', 'click here']);" ><strong>click here</strong></a>

### Steps

### 1. Configuring functions.php.

Add the following code to the theme file functions.php at the end unless you know where to add the code.

<pre><code class="brush:php">function dw_paginate() {
		global $paged;
		$on_page = intval($paged);
		$no_prev = false;
		$no_next = false;
		if ($on_page == 0) {
			$on_page = 1;
		}
		global $wp_the_query;
		$max_pages = $wp_the_query-&gt;max_num_pages;
		$start_pos = $on_page - 2;
		if ($start_pos &lt;=  0) {
			$amt_from_zero = ($start_pos * $start_pos) + 1;
			$start_pos = 1;
		}
		$end_pos = $on_page + 2;
		if ($end_pos &gt;= $max_pages) {
			$amt_from_end = $end_pos - $max_pages;
			$end_pos = $max_pages;
		}
		if (isset( $amt_from_zero ) && isset( $amt_from_end )) {		}
		elseif(isset( $amt_from_zero )) {
			$end_pos = $end_pos + $amt_from_zero;
			if ($end_pos &gt;= $max_pages) {
				$end_pos = $max_pages;
			}
		}
		elseif(isset( $amt_from_end )) {
			$start_pos = $start_pos - $amt_from_end;
			if ($start_pos &lt;=  0) {
				$start_pos = 1;
			}
		}
		if (($on_page - 1) &lt;= 0) $no_prev = true;
		if (($on_page + 1) &gt; $max_pages) $no_next = true;
		$links_to_print = ($end_pos - $start_pos) + 1;
		echo '
&lt;div id="pagination">' . "n";
		echo 	'
&lt;ul>' . "n";
		echo 		$no_prev ? '
	&lt;li class="inactive">' . '«'  . '&lt;/li>
' : '
	&lt;li>&lt;a href="' . clean_url(get_pagenum_link($on_page - 1)) . '">' . '«' . '&lt;/a>&lt;/li>
';
		for ($i = $start_pos; $i &lt;= $end_pos; $i++) {
			if ($i == $on_page) {
				echo '
	&lt;li class="active">';
			} else {
				echo '&lt;/li>
	&lt;li>';
			}
			echo '&lt;a href="' . clean_url(get_pagenum_link($i)) . '">' . $i . '&lt;/a>&lt;/li>
';
		}
		echo 		$no_next ? '
	&lt;li class="inactive">' . '»'  . '&lt;/li>
' : '
	&lt;li>&lt;a href="' . clean_url(get_pagenum_link($on_page + 1)) . '">' . '»'  . '&lt;/a>&lt;/li>
';
		echo 	'&lt;/ul>
' . "n";
		echo '&lt;/div>
' . "n";
	}</code></pre>

<a href="http://www.textbin.com/show_text.php?id=4y270" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.textbin.com/show_text.php?id=4y270', ' ']);" ><strong> </strong></a>  
Now the code is added. So next up is to design how it looks.

### 2. Styling the output.

The following is the screenshot how it will be looking for the CSS code I&#8217;m going to give you. Basically the colour scheme was made as to suit Deepak&#8217;s blog <a href="http://www.mobilegyaan.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mobilegyaan.com', 'MobileGyaan']);" title="MobileGyaan">MobileGyaan</a> as I designed the current theme for his blog 😀 .  
<img class="size-full wp-image-13039" src="http://cdn.devilsworkshop.org/files/2009/08/pagination-demo.png" alt="Pagination Style" width="244" height="79" />

<pre><code class="brush:css">&lt;code>#pagination{clear:both;padding:15px;text-align:center;font-size:12px;font-weight:bold;color:#999;margin:10px auto 10px auto;}
#pagination li{margin:0 1px 0 1px;display:inline;list-style-type:none;}
#pagination li a{padding:5px 7px 5px 7px;color:#3399CC;border:1px solid #CCC;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
#pagination li a:hover{text-decoration:none;padding:5px 7px 5px 7px;color:#0066cc;border:1px solid #0066CC;background:#Daf2fc;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
#pagination .active a{background:#3399CC;color:#FFF;border:1px solid #0364ae;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
#pagination .extreme a{border:0;color:#3399CC;font-size:14px;}
#pagination .extreme a:hover{border:0;color:#3399CC;font-size:14px;background:#FFF;}
#pagination .active a:hover{background:#3399CC;color:#FFF;border:1px solid #0364ae;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
#pagination .inactive{color:#CCC;padding:5px 7px 5px 7px;border:1px solid #EEE;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}</code>&lt;/code></pre>

`<br />
`

&nbsp;

### 3. Usage

The function that we are going to use to display the page numbers instead of Next or Previous entries is  
![Function][2]  
This can be used in theme files such as

  * home.php (if exists)
  * index.php
  * archives.php
  * category.php (if exists)

Now everything is complete. If you have any queries regarding this trick use the comment form below. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://devilsworkshop.org/how-to-add-a-featured-post-section-to-your-wordpress-blog/
 [2]: http://cdn.devilsworkshop.org/files/2009/08/pagination-function.png
