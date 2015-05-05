---
title: Add custom CSS classes to wp_nav_menu’s HTML output using WordPress filters
author: umeshnevase
date: 2011-02-14
url: /add-custom-classes-wpnavmenu-condition/
views:
  - 270
dsq_thread_id:
  - 2947119429
categories:
  - Tutorial
tags:
  - Annoyance
  - classes
  - CSS
  - Developers
  - filter
  - menu
  - Wordpress
  - Wordpress Tutorials
  - wp_nav_menu
---
WordPress has a great feature called ‘filter’ with which we can add our own classes to nav menu items.  Most times you need to add classes in nav menu items on some conditions.

For example, in menu you have ‘sample ‘ category item. You have to add class to this item if your single post is of ‘sample’ category or its categories have parent category as  ‘sample’. You can easily add class by using ‘nav\_menu\_css_class’ filter.

`add_filter(‘nav_menu_css_class’ , ‘rt_nav_special_class’ , 10 , 2);`

‘nav\_menu\_css\_class’ is name of the filter to hook our function  ‘rt\_nav\_special\_class’.

10 is the priority of the function and 2 is the number of arguments the function accepts. Now you may write your condition in ‘rt\_nav\_special_class’ to add class to menu item.

<pre><code class="no-highlight">function rt_nav_special_class($classes, $item){
     if(your condition){ //example: you can check value of $item to decide something...
             $classes[] = “special”;
     }
     return $classes;
}</code></pre>

rt\_nav\_special\_class() accepts two arguments $classes and $item. $classes is an array contains class name already assigned by wp\_nav_menu. We can add our classes in this array. I am added ‘special’ as class name. $item is current nav menu item to which we are adding a class.

If you var_dump this $item you will get all information about the current nav menu item. Using this $item you can any condition you want. Below is screen shot of our ‘special’ class in nav menu item in Firebug.

<a href="http://umesh.rtcamp.info/wp-content/uploads/2010/12/Screenshot-1.1.png" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://umesh.rtcamp.info/wp-content/uploads/2010/12/Screenshot-1.1.png', '']);" ></a><a href="http://wpveda.com/add-custom-classes-wpnavmenu-condition/screenshot-1-2/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/add-custom-classes-wpnavmenu-condition/screenshot-1-2/', '']);" rel="attachment wp-att-2080"><img class="alignnone size-full  wp-image-51072" src="http://cdn.devilsworkshop.org/files/2011/01/Screenshot-1.png" alt="" width="680" height="272" /></a>

I hope you get what I explained to you. If you have any queries or suggestions do write in your comments.
