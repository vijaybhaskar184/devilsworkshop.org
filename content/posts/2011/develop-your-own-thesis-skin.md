---
title: '[How To] Develop your Own Thesis Skin'
author: pradeep910
date: 2011-02-21
excerpt: Thesis theme provides Thesis Skin manager which allows you to switch to another skin whenever you want. If you want to build your own Thesis Skin, follow the steps given in this post.
url: /develop-your-own-thesis-skin/
views:
  - 87
dsq_thread_id:
  - 2947119565
categories:
  - Tutorial
tags:
  - thesis skin manager
  - thesis theme
  - Wordpress
  - Wordpress Themes
---
There are many free Thesis skins available for download but for the one who wants develop or build his/her own **Thesis** skin should know some of the theme building basics. The** Naked Thesis Skin** is almost a blank skin and is made for the sake of skin customization.<figure id="attachment_2285" style="width: 240px;" class="wp-caption alignnone">

[<img class="size-full    wp-image-52113" src="http://cdn.devilsworkshop.org/files/2011/02/screenshot.png" alt="" width="240" height="234" />][1]<figcaption class="wp-caption-text">Naked Thesis Skin For Customization</figcaption></figure> 

Thesis theme provides** <a href="http://wpveda.com/adding-thesis-skins-thesis18-theme/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/adding-thesis-skins-thesis18-theme/', 'Thesis Skin manager']);" target="_blank">Thesis Skin manager</a>** which allows you to switch to another skin whenever you want. If you want to build your own Thesis Skin, follow the steps below:

  1. Create a directory and put it in the &#8220;**custom/skins**&#8221; folder.
  2. Create **function.php** for writing your custom functions on thesis hooks.
  3. Create **base.css** for applying custom styling to your skin.
  4. You may need some images, create a folder for skin images and **thesis-all-options.dat** file for importing all options that you have set.

Here is an example of my **Naked-Thesis-Skin** folder,

[<img class="alignnone size-full wp-image-2282" src="http://cdn.devilsworkshop.org/files/2011/02/skins-structure51.png" alt="" width="269" height="330" />][2]

### **Customizing base.css :**

First of all we need to specify the name, version, author, etc like we do in the normal themes.

So following lines goes at the very first in **base.css**

<pre><code class="no-highlight">/*
Skin Name: Naked Thesis Theme
Skin URI: http://example.com
Description: This is a free blank thesis skin for customization.
Version: 1.0
Author: rtCamp
Author URI: http://example.com
*/</code></pre>

### **Customizing functions.php :  
**

We are adding our own CSS file in the theme so we need to include it.

Here is how you can include **base.css**

<pre><code class="no-highlight">add_action('wp_head', 'rt_base_css');
function rt_base_css() { ?&gt;
    SKINURL; ?&gt;base.css" rel="stylesheet" /&gt;
<!--?php -->&lt;a href="http://cdn.devilsworkshop.org/files/2011/02/Naked-Thesis-Skin.zip">&lt;/a>}</code></pre>

And now that you are done with** base.css** and **functions.php**, you can now do your customizations. Look for the available list of hooks that thesis provides for customizations.

I have created a thesis blank skin for customization. Download **Naked Thesis Skin** and customize it in your own way.

**Link: [Download Naked Thesis Skin][3]**

 [1]: http://cdn.devilsworkshop.org/files/2011/02/screenshot.png
 [2]: http://cdn.devilsworkshop.org/files/2011/02/skins-structure51.png
 [3]: http://cdn.devilsworkshop.org/files/2011/02/Naked-Thesis-Skin.zip
