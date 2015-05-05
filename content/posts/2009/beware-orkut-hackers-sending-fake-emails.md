---
title: Beware! Orkut Hackers Sending Fake eMails!
author: arjunskumar47
date: 2009-05-02
url: /beware-orkut-hackers-sending-fake-emails/
views:
  - 29
dsq_thread_id:
  - 2947097599
categories:
  - News
tags:
  - emails
  - Hacking
  - Help
  - Orkut
  - Phishing
  - privacy
  - Profile
  - suggestions
---
Beware all Orkut users! Now hackers are sending friend request emails that look similar to any genuine Orkut email. Below are screen shots of emails sent by hackers:

<p style="text-align: center">
  <img class="aligncenter wp-image-50803" src="http://cdn.devilsworkshop.org/files/2009/05/orkut-fake-mail.png" alt="orkut-fake-mail" width="485" height="325" />
</p>

<p style="text-align: center">
  <img class="aligncenter" src="http://cdn.devilsworkshop.org/files/2009/05/orkut-original-mail-600x490.png" alt="orkut-original-mail" width="420" height="343" />
</p>

At first, you might find similarities in both the emails, but on a closer observation, I found that all the links in that mail that came to me are redirected to the following address

> #### **http://www.l0gm3.h4ck3r.in/orkut/ServiceLogin.php?id=66 **

Initially, I didn&#8217;t look for anything and just clicked on that link in the email and even typed my Login details in the fields. That is when I remembered that I had saved my Password and Username for Orkut in my Firefox Browser. I saw the URL and I was shocked to see it.

<p style="text-align: center">
  <img class="aligncenter" src="http://cdn.devilsworkshop.org/files/2009/05/orkut-hacker-url.png" alt="URL" width="356" height="24" />
</p>

## Now, how does this work?

Basically, hacking using fake Login pages is called as **Phishing&#8230;**

  * When you click on sign in, the Login form will go to another file. In this case the file name is **process.php**
  * Now this **process.php** file will contain the code in the below image.  
    <img class="aligncenter" src="http://cdn.devilsworkshop.org/files/2009/05/php-file.png" alt="PHP-code" width="493" height="223" />  
    Now the highlighted **FILENAME.TXT** file&#8217;s name can be anything that can be kept as a secret.
  * The **FILENAME.TXT** file stores the Username and Password entered into the fields of the fake Login page

Please be careful while logging into Orkut account. Just ***TRIPLE CHECK*** the URL if you see an Orkut Login page that you have not TYPED yourself in the in the address bar <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

Still, I&#8217;m doing research on this site to crack out what that **.txt** filename is..!! 😛
