---
title: Managing local changes using “git stash” tool
author: rahul286
date: 2012-08-06
url: /managing-local-git-stash-tool/
dsq_thread_id:
  - 2969677810
categories:
  - Tutorial
tags:
  - Developers
  - git
  - stash
  - Tools
  - upgrade
---
*<a href="http://devilsworkshop.org/managing-local-git-stash-tool/image-description/" rel="attachment wp-att-60421"><img class="alignright size-thumbnail wp-image-60421" title="image description" src="http://cdn.devilsworkshop.org/files/2012/08/im-lovin-git-reverse-200x200.jpg" alt="" width="200" height="200" /></a>(Disclaimer: I am quite new to git so I may end-up making a mistake here!)*

#### Use-case:

You are using a third-party software codes via it&#8217;s git repo. For some reason, say that software&#8217;s developer does not have support for plugin or customization or the support for changes is limited. Somehow you need to make changes to codes but since changes are useful to only you, they reject your pull requests.

You still want to keep using this software and want to preserve your changes across future updates! Here comes git&#8217;s stash tool to your rescue! 😉

#### Workflow:

Our workflow will have mainly 3 steps:

  1. Save your local changes (`git stash save`)
  2. Upgrade local git repo (`git fetch` & `git checkout [...]`)
  3. Re-apply (merge) local changes to new codebase (`git stash apply`)

### #1. Saving local changes

If you have local-changes and if you decide to update your codes (git pull/git checkout to latest tag), its quite likely that git will give you a hint to either discard or **stash** your changes.

Since you do not want to discard them, lets stash them using simply

<pre><code class="no-highlight">git stash</code></pre>

Or

<pre><code class="no-highlight">git stash save "some useful name/comment"</code></pre>

When you run a command like above, all your local changes gets saves to a stack. You don&#8217;t need to worry about where this stack resides, or other internal details. You can imagine that your local modifications are stored in a <a href="http://en.wikipedia.org/wiki/Black_hole" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Black_hole', 'blackhole']);" >blackhole</a>! 😉

### #2. Upgrade local codebase

This involve mostly fetching remote changes and switching to latest tag (or branch if they don&#8217;t like tagging).

Since we are dealing with versions, I feel using git pull is not necessary. git pull does git fetch which is followed by git merger. As we are on a tag (which is not supposed to change by convention) there must be nothing to merge on it from remote.

I generally use following set of commands for upgradation. YMMV.

<pre><code class="no-highlight">git fetch
git tag -l
git checkout &lt;latest-tag&gt;</code></pre>

### #3. Reapplying local changes to latest codes

Since that developer did not incorporated your changes, you will find latest codes do not have your customizations.

You can reapply them using

<pre><code class="no-highlight">git stash apply</code></pre>

Or specifying stash index (in case you did stash save many times)

<pre><code class="no-highlight">git stash apply stash@{2}</code></pre>

To get exact index number, in case of multiple stash-saves, please use following command

<pre><code class="no-highlight">git stash list</code></pre>

My changes got reapplied successfully without any issue. 😉

I guess depending on changes, we may need to do some adjustments as we do when doing merge.

### Bonus: Undoing Stash Apply!

Just in case you applies wrong stash, or apply it on a wrong tag/branch, you will need a way to undo it.

If you are maintaing only one stash, then simply run&#8230;

<pre><code class="no-highlight">git stash show -p | git apply -R</code></pre>

OR specify stash index

<pre><code class="no-highlight">git stash show -p stash@{2} | git apply -R</code></pre>

If you know any better way, feel free to share with us! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

*(image credit: created in-house by our design Yogesh Daphane. Idea was mine!)*
