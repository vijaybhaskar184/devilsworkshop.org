---
title: 5 Plugins to Power Up Quick Look on Mac for browsing code
author: vibin
date: 2013-09-09
excerpt: Quick Look on Mac can be a great feature for browsing text files or code. These five plugins will make this feature even better.
url: /5-plugins-power-quick-mac-browsing-code/
dsq_thread_id:
  - 2956235784
categories:
  - Tutorial
tags:
  - Mac
  - Quick Look
---
Quick Look on OS X is a really neat feature allowing you to browse and preview files in Finder. The best part about Quick Look is that, it&#8217;s extensible. There are quite a few plugins available, but are scattered on the web.

Here, we&#8217;ll look at five Quick Look plugins which make browsing code much easier.

### Installing Quick Look plugins

The procedure is pretty simple, you just have to move the Quick Look plugin file to `~/Library/Quicklook/` and run `qlmanage -r` in terminal (that&#8217;ll reload QuickLook generators).

### QL Color Code

Quick Look by default doesn&#8217;t do syntax highlighting for code. This plugin fixes it.

[<img class="aligncenter size-medium wp-image-77572" alt="Syntax highlighting in Quicklook" src="http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-09-at-5.23.20-PM-600x332.png" width="600" height="332" />][1]

It supports quite a lot of programming languages and you can choose between themes. For example, running `defaults write org.n8gray.QLColorCode hlTheme ide-xcode` will set the highlight theme to that of Xcode. You can find more `defaults` in the Readme.

**Link:** <a href="https://code.google.com/p/qlcolorcode/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://code.google.com/p/qlcolorcode/', 'QLColorCode']);" >QLColorCode</a>

### QL Markdown

This is a must have if you use Markdown formatting for storing notes. The plugin even lets you change the styling &#8211; including fonts, margin, padding, and more, by letting you edit the style.css file.

[<img class="aligncenter size-medium wp-image-77574" alt="Markdown formatting" src="http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-09-at-5.24.33-PM-600x313.png" width="600" height="313" />][2]

It also works regardless of what extension you use for Markdown files &#8211; .md, .markdown, .mdown or whatever.

**Link:** <a href="https://github.com/toland/qlmarkdown/downloads" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/toland/qlmarkdown/downloads', 'QLMarkdown']);" >QLMarkdown</a>

### QL Stephen

This one is a little tricky. There can be a lot of cases where the text file you want to view doesn&#8217;t have an extension at all. Best example is repositories on Github having a README file (or Makefile etc.).

This plugin lets you preview all of them.

**Link:** <a href="http://whomwah.github.io/qlstephen/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://whomwah.github.io/qlstephen/', 'QLStephen']);" >QLStephen</a>

### Better Zip

If you ever wanted to view what&#8217;s in a ZIP file without actually extracting it, this plugin is what you need.

[<img class="aligncenter size-medium wp-image-77575" alt="Previewing ZIP files" src="http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-09-at-5.22.15-PM-600x321.png" width="600" height="321" />][3]

**Link: **<a href="http://macitbetter.com/BetterZip-Quick-Look-Generator/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://macitbetter.com/BetterZip-Quick-Look-Generator/', 'BetterZip 2']);" >BetterZip 2</a>

Now, for the fifth plugin &#8211; it&#8217;s not actually a plugin, but a small shell command.

`defaults write com.apple.finder QLEnableTextSelection -bool TRUE`

This command makes the text in Quick Look selectable. While this may sound silly, this alone can be the smartest hack for making Quick Look better.

So that sums it up. Do you know any more ways to make Quick Look better on OS X? Put them in the comments.

 [1]: http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-09-at-5.23.20-PM.png
 [2]: http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-09-at-5.24.33-PM.png
 [3]: http://cdn.devilsworkshop.org/files/2013/09/Screen-Shot-2013-09-09-at-5.22.15-PM.png
