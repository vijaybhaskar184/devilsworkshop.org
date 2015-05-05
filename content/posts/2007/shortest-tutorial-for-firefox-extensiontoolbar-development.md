---
title: Shortest Tutorial for Firefox Extension/Toolbar Development!
author: rahul286
date: 2007-09-28
url: /shortest-tutorial-for-firefox-extensiontoolbar-development/
views:
  - 10725
dsq_thread_id:
  - 2946461972
categories:
  - Tips
tags:
  - Firefox
  - Google
  - Javascript
  - Tutorial
  - Windows
---
***About This Tutorial:*** From long time I wanted to write this but was always running out of time as the topic is complicated and too long! I always like to come-up with simple ways of doing geekish things as this Devils Workshop have great variance in its audience. So writing a post for all is always cumbersome but still lets see how it goes.**

***Who Should Read This:*** This is for anyone who is new to firefox extension development. More accurately for the geeks who haven&#8217;t coded any extension for firefox yet! This is just to build foundation, to kick-start yourself!

***About Example Covered:*** The example covered with this tutorial is a toolbar with just one feature: **Google Search**! And lets call it: **GoogBar**! (<a href="http://pub.rtcamp.com/firefox/extensions/googbar.zip" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pub.rtcamp.com/firefox/extensions/googbar.zip', 'You can Download Source here']);" >You can Download Source here</a>)

***Following Points are Covered:*** Firefox extension development can easily swamp many books (with scary volume numbers) we will try to cover following points&#8230;

  * **Section 0:** Prerequisites, Tools & References
  * **Section 1:** Basic File Structure Layout
  * **Section 2:** Creating Metadata &#8211; Dealing with Important files
  * **Section 3:** Creating Graphical User Interface &#8211; GUI
  * **Section 4:** Implementing Backend functions
  * **Section 5:** Packaging Extension for distribution!
  * **Section 6:** Installing & Testing Your Extension!

## <span style="color: maroon">Section 0: Prerequisites, Tools & References!</span>

**Prerequisites:** Little knowledge of <a href="http://www.w3schools.com/html/default.asp" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.w3schools.com/html/default.asp', 'HTML']);" >HTML</a>/<a href="http://www.w3schools.com/xhtml/default.asp" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.w3schools.com/xhtml/default.asp', 'XHTML']);" >XHTML</a>, <a href="http://www.w3schools.com/xml/xml_whatis.asp" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.w3schools.com/xml/xml_whatis.asp', 'XML']);" >XML</a>, <a href="http://www.w3schools.com/js/js_intro.asp" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.w3schools.com/js/js_intro.asp', 'JavaScript']);" >JavaScript</a>, and <span style="text-decoration: underline"><span style="color: blue">CSS</span></span>.

**Tools:** Any text-editor which supports HTML/Javascript/CSS syntax-highlighting will be great. I use vi/gedit (on Linux) and notepad (on Windows)

**References:** I started with tutorial at BornGeeK and still find it useful. In fact its greatness will reflect throughout this post. Still you may find these useful

  * <a href="http://kb.mozillazine.org/Extension_development" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://kb.mozillazine.org/Extension_development', 'MozillaZine Extension development Article']);" >MozillaZine Extension development Article</a>
  * <a href="http://forums.mozillazine.org/viewforum.php?f=19" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://forums.mozillazine.org/viewforum.php?f=19', 'MozillaZine Extension Development Forum']);" >MozillaZine Extension Development Forum</a>
  * <a href="http://xulplanet.com/references/elemref/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://xulplanet.com/references/elemref/', 'XUL Planet Element Reference']);" >XUL Planet Element Reference</a>
  * <a href="http://www.borngeek.com/firefox/toolbar-tutorial/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.borngeek.com/firefox/toolbar-tutorial/', 'Firefox Toolbar Tutorial by Born Geek']);" >Firefox Toolbar Tutorial by Born Geek</a>
  * <a href="http://www.rietta.com/firefox/Tutorial/overview.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.rietta.com/firefox/Tutorial/overview.html', 'Firefox Toolbar Tutorial by Extend Firefox']);" >Firefox Toolbar Tutorial by Extend Firefox</a>

## <span style="color: maroon">Section 1: Basic File Structure Layout</span>

**Lets go other way round &#8211; Outside-In!**

Firefox extensions filename ends with **xpi** extension. For time being assume **xpi = zip.** In fact xpi is just zip archive! So what this archive contains?

It will contain atleast: 2 files &#8211; **install.rdf** & **chrome.manifest** + 1 folder &#8211; usually named **chrome!**

Firefox extensions require a specific internal file structure. To ensure this few files/folders will always have fixed place while optional files/components have little freedom to move around. Lets move ahead with an example extension: GoogBar so as keep track of extension development! Lets start by creating a directory &#8211; **GoogBar** and other files/folder structure under it as shown below&#8230;

<pre><code class="no-highlight">+- GoogBar/
    +- content/
    +- install.rdf
    +- chrome.manifest</code></pre>

**install.rdf** & **chrome.manifest** are just plain-text file so create two empty text files and rename them to **install.rdf** & **chrome.manifest.**

<span style="color: red"><em><strong>Important Note:</strong></em></span> Be careful while renaming files on windows as extension part often remains unchanged. Make sure to rename something like **new.txt** to **install.rdf** and not ***install.rdf.txt***!

## **<span style="color: maroon">Section 2: Creating Metadata &#8211; Dealing with Important files</span>**

Metadata means data about data! All the metadata is stored in **install.rdf** & **chrome.manifest.**

**A. install.rdf file**

This is **XML** file. It contains metadata identifying the addon, providing information about who created it, where more information can be found about it, which versions of what applications it is compatible with, how it should be updated, and so on. We have already created empty install.rdf file. Its time to fill it up!

<pre><code class="no-highlight">+- GoogBar/
    +- content/
    +- &lt;strong>install.rdf&lt;/strong>
    +- chrome.manifest</code></pre>

Given below is sample installer manifest. Copy it to your install.rdf file and edit **highlighted** fields!

<pre><code class="no-highlight">&lt;?xml version="1.0"?&gt;
&lt;RDF xmlns="http://www.w3.org/1999/02/22-rdf-syntax-ns#"     xmlns:em="http://www.mozilla.org/2004/em-rdf#"&gt;
&lt;Description about="urn:mozilla:install-manifest"&gt;
&lt;!-- Required Items --&gt;
&lt;em:id&gt;&lt;strong>extensionname@yourdomain.com&lt;/strong>&lt;/em:id&gt;
&lt;em:name&gt;&lt;strong>Extension's Name&lt;/strong>&lt;/em:name&gt;
&lt;em:version&gt;&lt;strong>1.0&lt;/strong>&lt;/em:version&gt;

&lt;em:targetApplication&gt;
     &lt;Description&gt;
         &lt;em:id&gt;{ec8030f7-c20a-464f-9b0e-13a3a9e97384}&lt;/em:id&gt;
         &lt;em:minVersion&gt;&lt;strong>1.5&lt;/strong>&lt;/em:minVersion&gt;
         &lt;em:maxVersion&gt;&lt;strong>3.0.*&lt;/strong>&lt;/em:maxVersion&gt;
     &lt;/Description&gt;
&lt;/em:targetApplication&gt;

&lt;!-- Optional Items --&gt;
&lt;em:creator&gt;&lt;strong>Your Name&lt;/strong>&lt;/em:creator&gt;
&lt;em:description&gt;&lt;strong>A description of the extension&lt;/strong>&lt;/em:description&gt;
&lt;em:homepageURL&gt;&lt;strong>http://www.yoursite.com/&lt;/strong>&lt;/em:homepageURL&gt;
&lt;/Description&gt;
&lt;/RDF&gt;</code></pre>

**Explanation of Highlighted Fields:**

[**extensionname@yourdomain.com**][1]**:** This must be **unique** as this is id of your extension. So make sure you chose an extension/domain name pair which is not in use by others! ***Ex.*** [***GoogBar@devilsworkshop.org***][2] ***(Note:*** You do not need to purchase a domain to make this unique! Use any domain like yourfullname.com or microsoft.com *(I don&#8217;t think they have sportsman spirit to develop anything for firefox***)**

**Extension&#8217;s Name:** This is name of your extension seen by humans! So use something nice & descriptive!

**version:** The only point I can tell you about version numbers here is they always goes on increasing with updates. So do not bother about this too much at this point.

**targetApplication &#8211;** **minVersion & maxVersion:** These are minimum and maximum versions of firefox you are targeting!

**Optional Items:** I guess all have descriptive name. Also there are more than shown in this example. So keep this tutorial short I am skipping details about this optional items!

<span style="color: red"><strong>Important Note:</strong></span> Do not change value **{ec8030f7-c20a-464f-9b0e-13a3a9e97384}** in above sample! It is GUID of Firefox!

<span style="color: black">So <strong>GoogBar&#8217;s install.rdf</strong> will look like&#8230;</span>

<pre><code class="no-highlight">&lt;?xml version="1.0"?&gt;
&lt;RDF xmlns="http://www.w3.org/1999/02/22-rdf-syntax-ns#"     xmlns:em="http://www.mozilla.org/2004/em-rdf#"&gt;
&lt;Description about="urn:mozilla:install-manifest"&gt;
&lt;!-- Required Items --&gt;
&lt;em:id&gt;&lt;strong>googbar@devilsworkshop.org&lt;/strong>&lt;/em:id&gt;
&lt;em:name&gt;&lt;strong>GoogBar&lt;/strong>&lt;/em:name&gt;
&lt;em:version&gt;&lt;strong>1.0&lt;/strong>&lt;/em:version&gt;

&lt;em:targetApplication&gt;
     &lt;Description&gt;
         &lt;em:id&gt;{ec8030f7-c20a-464f-9b0e-13a3a9e97384}&lt;/em:id&gt;
         &lt;em:minVersion&gt;&lt;strong>1.5&lt;/strong>&lt;/em:minVersion&gt;
         &lt;em:maxVersion&gt;&lt;strong>3.0.*&lt;/strong>&lt;/em:maxVersion&gt;
     &lt;/Description&gt;
&lt;/em:targetApplication&gt;

&lt;!-- Optional Items --&gt;
&lt;em:creator&gt;&lt;strong>Rahul Bansal&lt;/strong>&lt;/em:creator&gt;
&lt;em:description&gt;&lt;strong>A Firefox toolbar with Google Search facility!&lt;/strong>&lt;/em:description&gt;
&lt;em:homepageURL&gt;&lt;strong>http://www.devilsworkshop.org/&lt;/strong>&lt;/em:homepageURL&gt;
&lt;/Description&gt;
&lt;/RDF&gt;</code></pre>

<span style="color: black"><strong>Additional Resources:</strong></span> <a href="http://developer.mozilla.org/en/docs/Install_Manifests" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://developer.mozilla.org/en/docs/Install_Manifests', 'http://developer.mozilla.org/en/docs/Install_Manifests']);" >http://developer.mozilla.org/en/docs/Install_Manifests</a>

**B. chrome.manifest file**

A chrome manifest is how we tell Firefox what packages and overlays our extension provides. In simple words it tells firefox what our extension does! Now its time to fill up chrome.manifest

<pre><code class="no-highlight">+- GoogBar/
    +- content/
    +- install.rdf
    +- &lt;strong>chrome.manifest&lt;/strong></code></pre>

Let us again take a look at a sample file. This sample is particularly taken for this tutorial as chrome.manifest may contains lots of other information too! Replace **highlighted** **extensionname** with your extension name!

<pre><code class="no-highlight">content &lt;strong>extensionname&lt;/strong> content/
overlay chrome://browser/content/browser.xul chrome://&lt;strong>extensionname&lt;/strong>/content/&lt;strong>overlay.xul&lt;/strong></code></pre>

So final Googbar&#8217;s chrome.manifest file will look like

<pre><code class="no-highlight">content &lt;strong>googbar&lt;/strong> content/
overlay chrome://browser/content/browser.xul chrome://&lt;strong>googbar&lt;/strong>/content/&lt;strong>googbar.xul&lt;/strong></code></pre>

Let me give you a little more explanation about above two lines&#8230;

**Line 1 tells:** content *(Read Functions)* by this extension are in **content/** directory! All functions which we will be implementing soon as javascript files will be kept in **content/** directory!

**Line 2 tells:** overlay *(Read User Interface)* information for this extension is in **googbar.xul** file in **content** subdirectory! We will be creating goobar.xul soon! In fact we can create XUL file with any other name!

**Additional Resources:** <a href="http://developer.mozilla.org/en/docs/Chrome_Manifest" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://developer.mozilla.org/en/docs/Chrome_Manifest', 'http://developer.mozilla.org/en/docs/Chrome_Manifest']);" >http://developer.mozilla.org/en/docs/Chrome_Manifest</a>

## **<span style="color: maroon">Section 3: Creating Graphical User Interface &#8211; GUI</span>**

Most Firefox extensions have one goal in common: wanting to add or change some graphical element(s) in Firefox. Fortunately adding and modifying GUIs is quite easy. But this ease comes with a dedicated language developed for firefox GUI called XUL (pronounced &#8220;zool&#8221;). XUL stands for **X**ML **U**ser-Interface **L**anguage, so if you know XML then I bet you can learn XUL in few minutes!

Enough chit-chat, now its time for creating **googbar.xul** under content subdirectory! So our tree will look like&#8230;

<pre><code class="no-highlight">+- GoogBar/
    +- content/
       +- &lt;strong>googbar.xul&lt;/strong>
    +- install.rdf
    +- chrome.manifest</code></pre>

First write (copy) following non-optional XML declaration as it is&#8230;

<pre><code class="no-highlight">&lt;?xml version="1.0"?&gt;
&lt;overlay id="Scrapper-Overlay"
xmlns="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul"&gt;
&lt;/overlay&gt;</code></pre>

Then comes script tag! Let me brief first scripts coming into picture. Note the sequence of event!

  1. In this XUL file we will be adding a toolbar with one text field and a button.
  2. We want some code to be executed when someone press the button.
  3. So pressing button should call the code. Now we can write code in
  4.   * **this XUL file itself**: OK for small code but bad practice!
      * **in separate JS file**

At this point we made decision to create a separate JS file but this XUL file should be aware of it so that it can associate buttons with JS file code. For this we will be using script tag! Just paste following code before **</overlay>** tag.

<pre><code class="no-highlight">&lt;script type="application/x-javascript" src="chrome://&lt;strong>googbar&lt;/strong>/content/&lt;strong>googbar.js&lt;/strong>" /&gt;</code></pre>

Note **googbar.js** filename above. We will be creating it soon.

Now time come to create toolbar using following XUL code!

All toolbars in Firefox should live within a toolbox element which gets placed inside the **overlay** element we created moments ago:

<pre><code class="no-highlight">&lt;toolbox id="navigator-toolbox"&gt;&lt;/toolbox&gt;</code></pre>

We will place toolbar and its component inside the toolbox we just specified. Toolbar is basically row of buttons, text-field & labels. Here comes our toolbar with one label *(to show toolbars name)*, one textbox *(to specify search query)* & one button *(to fire search request)*:

<pre><code class="no-highlight">&lt;toolbar id="GoogBarToolbar" toolbarname="GoogBar Toolbar" &gt;
       &lt;label value="GoogBar Toolbar: "/&gt;
       &lt;textbox id="&lt;strong>GoogBarQuery&lt;/strong>" cols="1" size="50" /&gt;
       &lt;toolbarbutton id="GoogBarButton"
         label="Search" oncommand="&lt;strong>GoogBarSearch(event)&lt;/strong>" /&gt;
&lt;/toolbar&gt;</code></pre>

Some attribute values are important as they might be used from elsewhere. In that regard attribute values to note are:

  * **GoogBarSearch(event)** value in **toolbarbutton** elements **oncommand** attribute
  * **GoogBarQuery** value in **textbox** elements **id** attribute

We will be shortly using these in our next file **googbar.js** as we are done with **googbar.xul** which finally looks like&#8230;

<pre><code class="no-highlight">&lt;?xml version="1.0"?&gt;
&lt;overlay id="Scrapper-Overlay"
xmlns="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul"&gt;&lt;script type="application/x-javascript" src="chrome://&lt;strong>googbar&lt;/strong>/content/&lt;strong>googbar.js&lt;/strong>" /&gt;
&lt;toolbox id="navigator-toolbox"&gt;
   &lt;toolbar id="GoogBarToolbar" toolbarname="GoogBar Toolbar" &gt;
       &lt;label value="GoogBar Toolbar: "/&gt;
       &lt;textbox id="&lt;strong>GoogBarQuery&lt;/strong>" cols="1" size="50" /&gt;
       &lt;toolbarbutton id="GoogBarButton"
         label="Search" oncommand="&lt;strong>GoogBarSearch(event)&lt;/strong>" /&gt;
   &lt;/toolbar&gt;
&lt;/toolbox&gt;
&lt;/overlay&gt;</code></pre>

**<span style="color: red">Important Note:</span>** All **id/name** attribute must be unique as they will be going to global by default! That&#8217;s why everytime we need to name something we prefixed it with **GoogBar**!

**Additional Resources:**

  * <a href="http://xulplanet.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://xulplanet.com', 'http://xulplanet.com']);" >http://xulplanet.com</a>
  * <a href="http://xulplanet.com/references/elemref/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://xulplanet.com/references/elemref/', 'http://xulplanet.com/references/elemref/']);" >http://xulplanet.com/references/elemref/</a>

## **<span style="color: maroon">Section 4: Implementing Backend Functions</span>**

Let&#8217;s now create our JavaScript file &#8211; **googbar.js** in the **content** directory! That will make our structure look like&#8230;

<pre><code class="no-highlight">+- GoogBar/
    +- content/
       +- googbar.xul
       +- &lt;strong>googbar.js&lt;/strong>
    +- install.rdf
    +- chrome.manifest</code></pre>

As we highlighted in previous section we will now **implement GoogBarSearch(event)** function which will make use of **GoogBarQuery** id. This function will perform following steps:

  1. Access user query written in *textbox* using *textbox* id **GoogBarQuery.**
  2. Use that value to shoot Google Search Query!

This can be accomplished with following codes. Also thats all googbar.js will have!

<pre><code class="no-highlight">function &lt;strong>GoogBarSearch(event)&lt;/strong>{
    var query = document.getElementById("&lt;strong>GoogBarQuery&lt;/strong>").value;
    window._content.document.location  = "http://www.google.com/search?q=" + encodeURI(query);
}</code></pre>

## <span style="color: maroon">Section 5: Packaging Extension for distribution!</span>

Yes we are done! So lets pack the things the way firefox like! Your aim is to **create a archive which contains everything inside GoogBar excluding GoogBar itself!** Then to make sure that archive has **xpi** extension!

**Packaging on Linux:**

  * From shell execute **zip** command with format:

<pre><code class="no-highlight">zip &lt;extensionname&gt;.xpi chrome.manifest install.rdf content/* &lt;optional files&gt;</code></pre>

  * In our case command needs to be fired is:

<pre><code class="no-highlight">zip googbar.xpi chrome.manifest install.rdf content/*</code></pre>

**Packaging on Windows:**

  * Use any zip utility to create a zip file which consists everything **inside** top-level extension directory! DO NOT include top-level directory itself! OR just select files and folder(s) using ***control+click*** and then ***right-click*** on selection, select ***Send To >> compressed (zipped) folder***! You will get a zip file with name like **googbar.zip** or **content.zip** or something like that!
  * Just **rename** it to **googbar.xpi** *(i.e. extensionname.xpi).* Also ensure renaming operation as from Windows explorer you may end up renaming file to something like googbar.xpi.zip!

Thats it! Its time to test our work! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

## **<span style="color: maroon">Section 6: Installing & Testing Your Extension!</span>**

Just drag-n-drop googbar.xpi on Firefox. OR Go to Firefox, execute File >> Open (or press ctrl+O) and navigate to location of googbar.xpi and open it up! This will open a pop-up, click **Install Now** to proceed and restart firefox to complete installation!

After restarting you will see **GoogBar** below Navigation Toolbar. Also check **View >> Toolbars** in firefox to confirm it further!

<img class="wp-image-52833" src="http://cdn.devilsworkshop.org/files/2007/09/successfulinstalltion-firefoxextensiondevelopmenttutorialbydevilsworkshop.jpg" alt="Successful Installtion - Firefox Extension Development Tutorial by Devils Workshop" width="369" height="242" />

Type something in text-box and **press search**! DO NOT just type & hit enter as we havent configured text-box to process any keyboard event so you won&#8217;t get any result until you press search button! Well that we can easily do by modifying **googbar.xul and goobar.js!**

<img src="http://cdn.devilsworkshop.org/files/2007/09/examplesearch-firefoxextensiondevelopmenttutorialbydevilsworkshop.jpg" alt="Example Search - - Firefox Extension Development Tutorial by Devils Workshop" width="430" height="442" />

If you are feeling cheated by my words ***Shortest Tutorial*** then go anywhere on the web and try finding a shorter version of this! 😉

As ususal comments, suggestion, question, etc are all welcome! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Next part in series &#8211; **<a title="Permanent link to Setting Up Firefox as IDE for Firefox Extension Development! [Firefox Developers]" rel="bookmark" href="http://devilsworkshop.org/2008/02/18/setting-up-firefox-as-ide-for-firefox-extension-development-firefox-developers/">Setting Up Firefox as IDE for Firefox Extension Development</a>****

**Links:** <a href="http://pub.rtcamp.com/firefox/extensions/googbar.zip" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pub.rtcamp.com/firefox/extensions/googbar.zip', 'Download Source for Googbar']);" >Download Source for Googbar</a>

 [1]: mailto:extensionname@yourdomain.com
 [2]: mailto:GoogBar@devilsworkshop.org
