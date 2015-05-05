---
title: 'Adding ‘Save as PDF’ Button on Blogger Blog [How-to]'
author: alokchaudhari
date: 2009-02-05
url: /adding-save-as-pdf-button-on-blogger-blog/
views:
  - 522
dsq_thread_id:
  - 2947095266
categories:
  - Tips
tags:
  - Blogger
  - Blogger(BlogSpot)
  - Blogging
  - PDF Tools
---
<a href="http://www.blogger.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.blogger.com', '']);" target="_blank"><img class="wp-image-51776" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;margin: 5px 0px 0px 10px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2009/02/bloggerlogo.jpg" border="0" alt="blogger logo" width="116" height="116" align="right" /></a> This is my second post on Devils Workshop *([first is here][1])*. In this post I am posting about how to can add a **&#8220;Save as PDF&#8221;** button to your blog so that  your readers can save your article for offline viewing and for sharing with others.

<p align="justify">
  This is very easy to use hack but still <strong>backup your template before doing anything</strong>. Refer my <a href="http://devilsworkshop.org/5-best-blogspot-blogger-hacks/" target="_blank">previous</a> post, for details about backup procedure.
</p>

<p align="justify">
  This hack uses <a href="http://www.freepdfconvert.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.freepdfconvert.com/', 'FreePDFConverter']);" target="_blank">FreePDFConverter</a> service, which is free as suggested by its name.
</p>

### Steps:

  1. <div>
      Now go to your blogger dashboard click <strong>Edit HTML</strong> and then choose <strong>expand widget template option.</strong>
    </div>

  2. <div>
      Then using your browser search feature search for <em><strong><data:post.body></strong></em>.
    </div>

  3. <div>
      Once you have find it, add the following code after the <em><strong><data:post.body></strong></em> tag in your blogger template and hit <strong>Save Template </strong>button.
    </div>

<p align="justify">
  <strong>Codes:</strong>
</p>

`<script type="text/javascript"><br />
</script><br />
<script src="http://web2pdf.freepdfconvert.com/pdfbutton.js" type="text/javascript"><br />
</script>`

<p align="justify">
  <strong>Screenshot:</strong>
</p>

**[<img class="alignnone size-large wp-image-4188" src="http://cdn.devilsworkshop.org/files/2009/02/blogger-template-save-as-pdf-button-600x308.png" alt="blogger-template-save-as-pdf-button" width="580" height="297" />][2]**

<p align="justify">
  <em>(click on image to enlarge it)</em><strong></strong>
</p>

<p align="justify">
  <p align="justify">
    If all goes fine, you will see a button like below after your every post.
  </p>
  
  <p>
    <img class="alignnone" src="http://web2pdf.freepdfconvert.com/images/save_as_pdf.gif" alt="" width="128" height="26" />
  </p>
  
  <p align="justify">
    Enjoy this hack and please feel free to ask your doubts about it.
  </p>
  
  <p align="justify">
    <strong>Related:</strong> <a href="http://devilsworkshop.org/5-best-blogspot-blogger-hacks/http://www.devilsworkshop.org/5-best-blogspot-blogger-hacks/">5 Best Blogspot Blogger Hacks Everyone Should Use</a>
  </p>

 [1]: http://devilsworkshop.org/5-best-blogspot-blogger-hacks/
 [2]: http://cdn.devilsworkshop.org/files/2009/02/blogger-template-save-as-pdf-button.png
