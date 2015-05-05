---
title: Easiest way to hide and unhide folders on Mac
author: vibin
date: 2013-04-14
excerpt: This tutorial shows you an easy way to hide and reveal files/folders on Mac using Bash aliases in Terminal.
url: /easiest-hide-unhide-folders-mac/
dsq_thread_id:
  - 2947127021
categories:
  - Tips
tags:
  - Mac tips
  - Terminal
---
Hiding and unhiding folders in Windows is pretty easy. You get an option in Folder options in Explorer. You don&#8217;t have any such thing in Mac&#8217;s Finder and that&#8217;s why you got resort to Terminal commands for it.

<p style="text-align: center;">
  <a href="http://cdn.devilsworkshop.org/files/2013/04/Screen-Shot-2013-04-14-at-1.01.41-PM.gif"><img class="aligncenter wp-image-73291" alt="hide-unhide-folder-mac" src="http://cdn.devilsworkshop.org/files/2013/04/Screen-Shot-2013-04-14-at-1.01.41-PM-600x344.gif" width="600" height="344" /></a>
</p>

### Hiding and revealing folders

Like I said, you got to use Terminal for this, so open Terminal.app from Launchpad or search on Spotlight.  
Once it&#8217;s open, paste this command and hit return.

`defaults write com.apple.finder AppleShowAllFiles -bool true`

This will reveal all hidden folders in your Mac. But you won&#8217;t see the results yet. You need to restart Finder to see the effect. To restart Finder, enter this command into Terminal.

`killall Finder`

You&#8217;ll now be able to see the hidden folders and files, their icons look faded and little different from normal folders/files.

To revert back, or hide folders &#8211; enter the same command you entered in the beginning, changing TRUE to FALSE, that is:

`defaults write com.apple.finder AppleShowAllFiles -bool false`

You need to enter `killall Finder` again to restart Finder once again.

Now how would you remember these commands, the next time you want to see hidden files? There&#8217;s a workaround for that too.

We&#8217;ll create a file called **.bash_profile** in the home folder of Mac. **.bash_profile** contains your preferences, aliases etc.

  1. Open Terminal and type `touch ~/.bash_profile`
  2. Next, `open -e .bash_profile`
  3. Once the file is open in Textedit, copy and paste this snippet into the file. 
    <pre><code class="bash">#reveal hidden folders in finder
alias revealfol='defaults write com.apple.finder AppleShowAllFiles -bool true
killall Finder'
#hide folders in finder
alias hidefol='defaults write com.apple.finder AppleShowAllFiles -bool false
killall Finder'</code></pre>

  4. Save the file and quit the app.
  5. In terminal, type `source .bash_profile`
  6. And you&#8217;re done.

What we have done a while ago is, create aliases for commands used for hiding and revealing folders. The aliases are `revealfol` and `hidefol`.

So, now if you type`revealfol` in Terminal, it will reveal hidden folders for you.`hidefol` will of course hide the folders, like you expected.

### Hide existing folders

Let&#8217;s say you want to create a hidden folder or want to hide a folder you already created &#8211; it&#8217;s pretty easy.

All you need to do is rename the folder or file, by putting a dot (.) before it.

This works because OS X hides all files/folders whose name starts with a dot. They&#8217;re called dotfiles.

To rename a existing folder in Mac, open Terminal and type

<pre><code class="bash">mv ~/Documents/secrets.txt ~/Documents/.secrets.txt</code></pre>

In the above command, the first argument should be the **original path of file** and second argument should the **path of renamed file** (same name with dot before it).

That&#8217;s all. If you&#8217;re a developer or someone who messes with this kind of stuff, you must have already knew this.

This tutorial was more intended for beginners. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
