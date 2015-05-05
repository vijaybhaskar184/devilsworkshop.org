---
title: Adding Thesis skins in Thesis 1.8 theme
author: pradeep910
date: 2011-02-02
url: /adding-thesis-skins-thesis18-theme/
views:
  - 70
dsq_thread_id:
  - 2947119058
categories:
  - Tutorial
tags:
  - thesis
  - thesis skin manager
  - Wordpress
  - Wordpress Themes
---
Thesis skin is a part of the Thesis theme. It&#8217;s like a child theme. It is a very good tool that Thesis team has developed. To know more about Thesis skins goto you can read more info at the<a href="http://thesisthemes.com/2010/04/27/thesis-skin-manager/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://thesisthemes.com/2010/04/27/thesis-skin-manager/', ' Thesis Skin Manager page']);" > Thesis Skin Manager page</a>.

### **Thesis Skin Manager and skin installation**

Thesis skin does not come with the default Thesis1.8 theme. To install the skin we need the skin manager. <a href="http://thesisthemes.com/getthemes/Skin+Manager" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://thesisthemes.com/getthemes/Skin+Manager', 'Click here to get the skin manager']);" title="Download Thesis Skin Manager"  target="_blank">Click here to get the skin manager</a>. After downloading the skin manager, you can see a **custom/skins** folder and a **custom/custom_functions.php.**

If you have edited** custom_functions.php** for customizing your theme and want to make changes to it, just add the following code at the end of the **custom_functions.php** file to include skin manager.

<pre><code class="no-highlight">// You can copy and paste this code block into your own custom_functions.php if you want
require_once(TEMPLATEPATH . '/custom/skins/skins_admin.php');</code></pre>

Alternatively, you can just replace custom_functions.php if you are not going to customize it yourself. <a href="http://thesisthemes.com/thesis-skins/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://thesisthemes.com/thesis-skins/', 'Click here to get free skins']);" title="Download Thesis Skins"  target="_blank">Click here to get free skins</a>. After downloading a skin, extract the skin into the **custom/skins/** folder. Now that your skin is installed, You just need to activate it and click on Import Options. Import options enables you to change your theme settings such as colors, fonts etc.

Screenshot of the** admin** screen:<figure id="attachment_2125" style="width: 468px;" class="wp-caption alignnone">

[<img class="size-large    wp-image-52149" src="http://cdn.devilsworkshop.org/files/2011/01/skin-admin-520x464.png" alt="" width="468" height="418" />][1]<figcaption class="wp-caption-text">Thesis skin admin</figcaption></figure> 

**  
** Like other themes, you can also add a theme **options** page.

Here is my options page :<figure id="attachment_2163" style="width: 520px;" class="wp-caption alignnone">

[<img class="size-large wp-image-2163" src="http://cdn.devilsworkshop.org/files/2011/02/skin-options-520x217.png" alt="" width="520" height="217" />][2]<figcaption class="wp-caption-text">Skin Options page</figcaption></figure> 

Thus by using skins you can have multiple options page and theme can have multiple skins. You can easily switch to other skins. You can customize theme settings in different skins such as colors, fonts, etc.

**Links:** <a href="http://rt.cx/thesis" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rt.cx/thesis', 'Get Thesis']);" >Get Thesis</a> | <a href="http://rtcamp.com/services/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/services/', 'Hire us for your thesis work']);" >Hire us for your thesis work</a>

 [1]: http://cdn.devilsworkshop.org/files/2011/01/skin-admin.png
 [2]: http://cdn.devilsworkshop.org/files/2011/02/skin-options.png
