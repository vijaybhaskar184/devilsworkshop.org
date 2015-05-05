---
title: How to use PayPal Instant Payment Notification for e-commerce Website?
author: parshwanemijain
date: 2010-03-17
url: /how-to-use-paypal-instant-payment-notification-for-e-commerce-website/
robotsmeta:
  - index,follow
views:
  - 429
dsq_thread_id:
  - 2947108573
categories:
  - Tutorial
tags:
  - Developers
  - HTML
  - Paypal
---
In this part, we are going to learn about PayPal Instant Payment Notification (IPN).

IPN is a message service that notifies you of events related to PayPal transactions. You can use IPN to automate back-office and administrative functions. As the name says Instant Payment Notification, it really is instant. The moment a customer buys a product from your website using PayPal, IPN reaches your server within few seconds.

The process is shown in the following image (Copied from PayPal)

<a rel="attachment wp-att-21465" href="http://devilsworkshop.org/how-to-use-paypal-instant-payment-notification-for-e-commerce-website/ipnoverview/"><img class="alignnone size-full wp-image-21465" title="IPNOverview" src="http://cdn.devilsworkshop.org/files/2010/03/IPNOverview.gif" alt="" width="530" height="480" /></a>

When a customer buys your product, PayPal sends the transaction detail to the IPN URL provided by you.

Lets write a code to handle IPN

<pre><code class="php">        $req = 'cmd=_notify-validate';
        //Collect the variables sent by PayPal
        foreach ($_POST as $key =&gt; $value) {
            $value = urlencode(stripslashes($value));
            $req .= "&$key=$value";
        }

        //Send them back to PayPal to verify whether they are authentic or not
        $paypal_action = 'https://www.paypal.com/cgi-bin/webscr';
        //For PayPal Sandbox: $paypal_action = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        $ch = curl_init($paypal_action);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        $result = curl_exec($ch);
        curl_close($ch);

        //If PayPal verified the posted data
        if (strcmp ($result, "VERIFIED") == 0) {
            $transaction_id = $_POST['txn_id'];
            $payment_status = $_POST['payment_status'];
            $item_name = $_POST['item_name'];
            $amount = $_POST['mc_gross'];
            $quantity = $_POST['quantity'];
            $fee_deducted = $_POST['mc_fee'];
            $payer_email = $_POST['payer_email'];
            $payment_date = $_POST['payment_date'];

            //Check the payment status
            switch($payment_status) {
                case 'Processed':
                    //Processed and Completed are almost same. Perform the action for successful payment.
                    break;

                case 'Completed':
                    //Perform the action for successful payment.
                    break;

                case 'Pending':
                     //Perform the action for pending payment status.
                    break;

                default:
                    break;

            }
        }
        else {
            //Perform the action for invalid IPN.
        }</code></pre>

Lets see what we have done so far.

PayPal sends the transaction details to our server. To check whether, PayPal sent this data, we need to send the data back to PayPal. If the data was sent by PayPal, it will display &#8220;VERIFIED&#8221;.

  * Line # 1-6: To send data back to PayPal, we will first collect the variables posted to our server. We need to add &#8216;cmd=_notify-validate&#8217; to these variables to tell PayPal to validate the data provided.
  * Line # 8-17: We will use CURL to send data back to PayPal. We will collect the information displayed by the PayPal in $result.
  * Line # 20: We will check whether the posted data was valid or not.
  * Line # 21-28: If the data is valid, then we will stored the sent data in variables. Few examples of the variables are: 
      * txn_id : This is the transaction id of the transaction made. It is unique for every transaction.
      * item_name : This is the product name.
      * mc_gross: Full amount of the customer&#8217;s payment, before transaction fee is subtracted.
      * mc_fee: Transaction fee which is deducted for the transaction.
      * payment_status: The payment status such as Processed, Completed, Pending, Failed, etc.
      * payer_email: Email address of the payer.
      * payment_date: Date on which payment was made.
    
    For more information on variables, refer <a href="https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_html_IPNandPDTVariables" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_html_IPNandPDTVariables', 'PayPal IPN and PDT Variables']);" >PayPal IPN and PDT Variables</a></li> 
    
      * Line # 31-47: Depending on the payment status, perform the necessary action.</ul> 
    
    By using IPN, you can maintain inventory, transaction logs and automate so many other things.
    
    For more information on PayPal IPN, you can refer the following link:
    
      * PayPal Instant Payment Notification Guide <a href="https://cms.paypal.com/cms_content/US/en_US/files/developer/IPNGuide.pdf" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/cms_content/US/en_US/files/developer/IPNGuide.pdf', 'PDF']);" >PDF</a> <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_admin_IPNIntro" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_admin_IPNIntro', 'HTML']);" >HTML</a>
      * <a href="https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_html_IPNandPDTVariables" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_html_IPNandPDTVariables', 'PayPal IPN and PDT Variables']);" >PayPal IPN and PDT Variables</a>
