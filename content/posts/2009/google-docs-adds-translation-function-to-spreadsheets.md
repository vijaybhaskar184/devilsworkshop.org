---
title: Google Docs adds translation function to spreadsheets.
author: adityakane
date: 2009-10-03
excerpt: |
  Google Docs has now enabled language translation in spreadsheets. I will explain how you can enable one cell in the spreadsheet to translate what is typed in another cell into a different language.
  
  The result will be that you can enter a sentence in English and after you specify the language code it will show you the translated sentence.
url: /google-docs-adds-translation-function-to-spreadsheets/
robotsmeta:
  - index,follow
views:
  - 94
dsq_thread_id:
  - 2947102820
categories:
  - News
tags:
  - Google
  - google docs
  - Languages
  - Translation
---
Google Docs has now enabled language translation in spreadsheets. I will explain how you can enable one cell in the spreadsheet to translate what is typed in another cell into a different language.

The result will be that you can enter a sentence in English and after you specify the <a href="http://code.google.com/apis/ajaxlanguage/documentation/reference.html#LangNameArray" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/ajaxlanguage/documentation/reference.html#LangNameArray', 'language code']);" >language code</a> it will show you the translated sentence.

<img class="alignnone size-full wp-image-15464" style="border: 1px solid grey" src="http://cdn.devilsworkshop.org/files/2009/10/googledocs_translate1.png" alt="googledocs_translate1" width="500" height="185" />

### How to go about it?

  * There is a new function for translation with Google Docs spreadsheets and that is &#8220;**GoogleTranslate**&#8220;.
  * You need to enter the Translate function into the cell which has to display the translated sentence.
  * The format for entering the Translate function into a cell is  
    **=GoogleTranslate(&#8220;I work at rtBlogs&#8221;,&#8221;en&#8221;,&#8221;Language Code&#8221;**
  * Now replace &#8220;I work at rtBlogs&#8221; with the cell name where the sentence to be translated is typed.
  * Also replace &#8220;Language Code&#8221; with the cell name where the language code is entered. For better illustrations see image below.

<img class="alignnone size-full wp-image-15465" style="border: 1px solid grey" src="http://cdn.devilsworkshop.org/files/2009/10/googledocs_translate2.png" alt="googledocs_translate2" width="550" height="315" />

  * You can change the language into which you want the original sentence to be translated by changing the <a href="http://code.google.com/apis/ajaxlanguage/documentation/reference.html#LangNameArray" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/ajaxlanguage/documentation/reference.html#LangNameArray', 'language code']);" >language code</a>. For Example change &#8220;hi&#8221; to &#8220;fr&#8221; and it will translate the sentence into French instead of Hindi.

**Links: <a href="http://code.google.com/apis/ajaxlanguage/documentation/reference.html#LangNameArray" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/apis/ajaxlanguage/documentation/reference.html#LangNameArray', 'Language Code']);" ><span style="font-weight: normal">Language Code</span></a><span style="font-weight: normal"> | </span>**<a href="http://googledocs.blogspot.com/2009/10/translation-functions-in-spreadsheets.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googledocs.blogspot.com/2009/10/translation-functions-in-spreadsheets.html', 'Google Docs Blog']);" >Google Docs Blog</a>
