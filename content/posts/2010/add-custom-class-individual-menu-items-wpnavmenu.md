---
title: Add Custom CSS Classes in WordPress Custom Menu’s Individual Items
author: manishsongirkar
date: 2010-12-28
excerpt: The WordPress function wp_nav_menu() is a great way to give users the ability to control their menu items in WordPress 3.0+. You can easily add/delete/move menu items from WordPress admin panel.
url: /add-custom-class-individual-menu-items-wpnavmenu/
views:
  - 131
dsq_thread_id:
  - 2947116673
categories:
  - Tutorial
tags:
  - Wordpress
  - Wordpress Hack
  - Wordpress Tutorials
  - wp_nav_menu
---
<p style="text-align: center">
  <img class="aligncenter size-full  wp-image-52108" src="http://cdn.devilsworkshop.org/files/2010/12/wp-menu1.jpg" alt="" width="608" height="343" />
</p>

The WordPress function **wp\_nav\_menu()** is a great way to give users the ability to control their menu items in WordPress 3.0+. You can easily add/delete/move menu items from WordPress admin panel. I was recently working on a site where I wanted to add a class to add different colors for each menu item. Fortunately, this can be done very easily by doing the following:

**1.** Click on the **Screen Options** tab at the top right of the admin panel when on the Menu admin page **(Appearance > Menus)**.  
<img class="aligncenter size-full wp-image-1580" src="http://cdn.devilsworkshop.org/files/2010/12/step11.jpg" alt="" width="605" height="227" />  
**2.** Select **CSS Classes** under **Show advanced menu properties**. (You will also see options to add a link target, description, and a link relationship).  
<img class="aligncenter size-full wp-image-1581" src="http://cdn.devilsworkshop.org/files/2010/12/step21.jpg" alt="" width="605" height="95" />  
**3.** Edit your menu items and now notice there is a field to add a class for each individual item.

<img class="aligncenter size-full wp-image-1582" src="http://cdn.devilsworkshop.org/files/2010/12/step31.jpg" alt="" width="452" height="379" />

This is a great way to add a custom class to Navigation menu items.  
Now using “menu-change” class or the class which u applied in above box, you can apply styles the way you want.

**Why not just use the IDs?**  
I specifically did this because I was using multiple menus (same menu class) and instead of using the list item IDs to add custom CSS for multiple IDs – I simplified it by adding different classes that would then cover all my menus.

Here is your Colourful menu Output:

<img class="aligncenter size-full wp-image-1583" src="http://cdn.devilsworkshop.org/files/2010/12/step41.jpg" alt="" width="598" height="86" />

Thus with the help of WordPress 3.0+ you can easily give your navigation menu a new look. Do drop in your opinions and comments below.
