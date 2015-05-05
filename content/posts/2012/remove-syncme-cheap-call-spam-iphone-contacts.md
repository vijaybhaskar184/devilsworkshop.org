---
title: Remove Sync.Me “cheap call” spam from your iPhone Contacts
author: rahul286
date: 2012-11-15
excerpt: AppleScript to Remove Sync.Me (SmartSync) "cheap call" spam voip-URL from your iPhone Contacts book. You can use it to remove any other URL field as well.
url: /remove-syncme-cheap-call-spam-iphone-contacts/
dsq_thread_id:
  - 2946543577
categories:
  - Tutorial
tags:
  - AppleScript
  - iphone
  - Mac
  - SmartSync
  - Sync.Me
---
Not so long time ago, I was a happy Sync.Me user. It was named SmartSync then and as far as I remember was among top application in Apple&#8217;s App Store.

Out of the blue in one of its update they added support for some VOIP-service. As they already had access to my iPhone contact-book, they without my permission added a &#8220;cheap call&#8221; URL-field to every contact in my iPhone. You can see it below:

<p style="text-align: center;">
  <img class="size-full wp-image-68260 aligncenter" title="cheap-call link in contacts-1" src="http://cdn.devilsworkshop.org/files/2012/11/cheap-call-link-in-contacts-1.png" alt="" width="347" height="507" />
</p>

Initially, I ignored it but it created issues during next sync. This &#8220;cheap call&#8221; link on next-sync got added to my Mac&#8217;s Contacts book (*Address-book* on old Mac OS version). From their it got synced to my Google Contacts!

When I tried contacting Sync.Me support, I did not get reply for 5-days. After that, their support team said that cheap-call feature is pulled so that I need to wait for few weeks after which they will add an option to remove cheap-call fields from my contacts!

### AppleScript came to rescue

Sometime back I learned little-bit of AppleScript using it I first tried creating my own small AppleScript to clean this mess. When I stuck, I  started googling which lead me to amazing <a href="http://vocaro.com/trevor/software/applescript/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://vocaro.com/trevor/software/applescript/', 'AppleScripts collection by Trevor']);" >AppleScripts collection by Trevor</a>.

I used Trevor&#8217;s *Remove Emails for Label *script and after some minor changes got it working to remove this &#8220;cheap call&#8221; spam from my contacts.

#### **How-To Use This!**

  1. Open **Contacts** Application on your Mac.
  2. Take a backup of your contacts. Use `File >> Export >> Contacts Archive...` option.
  3. Download <a href="https://github.com/rahul286/AppleScript/blob/master/RemoveURLsByLabel.scpt?raw=true" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/rahul286/AppleScript/blob/master/RemoveURLsByLabel.scpt?raw=true', 'this AppleScript file']);" >this AppleScript file</a>.
  4. You will see `RemoveURLsByLabel.scpt` file on your Mac. Just click it and it will open with **AppleScript Editor** application.
  5. Now, go to your Contact and select contacts from which you would like to remove &#8220;cheap call&#8221; field. You can select all contacts. Script will not make any changes to contacts which do not have &#8220;cheap call&#8221; field.
  6. After selecting one or more or all contacts, go to AppleScript Editor and click `Run` button.  <img class="alignnone size-full wp-image-68258" title="AppleScript Editor Run Button-1" src="http://cdn.devilsworkshop.org/files/2012/11/AppleScript-Editor-Run-Button-1.png" alt="" width="628" height="162" />
  7. The script will first remind you to backup your contacts, then it will prompt for URL label name. Default is &#8220;cheap call&#8221; which should work fine. For non-english users, if label name is something else, type/paste it there. <img class="alignnone size-full wp-image-68259" title="cheap-call remove" src="http://cdn.devilsworkshop.org/files/2012/11/cheap-call-remove.png" alt="" width="390" height="220" />
  8. Just hit OK. Script will take some time to finish if you have large contact-book. At the end of it, you will see &#8220;cheap-call&#8221; spam gone!
  9. Sync your Mac contacts to iPhone. Feel free to run this script again, if this field re-appears because of syncing to some other resource.

### What&#8217;s Next&#8230;

I have removed Sync.Me. They might add an option to remove it in future but I hate it when some app leaves its shit in my contact book. I removed this application for now.

I am now using iOS6&#8217;s built-in Facebook/Twitter Sync options. iOS6 sync&#8217;s less data as compared to Sync.Me but I am happy with less data rather than more spam in my contact book!

**Github Link:** <a href="https://github.com/rahul286/AppleScript/blob/master/RemoveURLsByLabel.scpt" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/rahul286/AppleScript/blob/master/RemoveURLsByLabel.scpt', 'AppleScript to remove cheap-call spam by Sync.Me']);" >AppleScript to remove cheap-call spam by Sync.Me</a>
