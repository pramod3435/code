<?php 
#################### Used Variables ################
/*
$sms_fname
$sms_otp
$sms_password
$sms_new_mobile
$sms_booking_id
$sms_booking_amount
$sms_booking_paid_amount
$sms_booking_due_amount
$sms_service_name
$sms_service_provider
$sms_service_provider_area
$sms_service_time
$sms_cancellation_charge
$sms_referral_code
$sms_friendname
$sms_credited_amount
$sms_order_id
$sms_wallet_balance
$merchant_uer_id
$merchant_pass
$service_pack
$sms_merchant_invoice_id
$sms_service_and_time
$sms_support_mobile
$deal_pack_name
$sms_play_store_url
$sms_demo_url
$sms_login
$sms_password
$sms_demo_login
$sms_support_contact
*/
switch($template_name){
 
         case "OTP Verification Websito":
		 $sms_msg="Hi $sms_fname, Your verification code is $sms_otp. Team WebSito";
		 break;
		 
		 case "Demo Login Details Websito":
		 $sms_msg="Hi your demo URL $sms_demo_url#Login ID $sms_login, PW $sms_password. to Login $sms_demo_login";
		 break;
		 
		 case "Demo Account Expired Websito":
		 $sms_msg="Hi $sms_fname, Your Demo has expired! Hope you sensed worth of our website! Get your website Today in 2 hrs, Team WebSito call $sms_support_contact";
		 break;
		 
		 case "WebSito Affiliate":
		 $sms_msg="Hi $sms_name, your Login Id: $sms_email, Password: $sms_password and Referral Code: $sms_referral_code. Thx Business Relation Team, WebSito";
		 break;
		 
		 case "WebSito Affiliate Request":
		 $sms_msg="Hi $sms_name, we've received your affiliate request and It is under process for screening.You will get E-mail within 24 hours. Team WebSito";
		 break;
		 
		 case "WebSito Order Success":
		 $sms_msg="Hi $sms_fname, we've received Rs. $sms_grand_total_amount against your order ID: $sms_order_id. Thanks WebSito";
		 break;
		 
		 case "WebSito Order Confirmation":
		 $sms_msg="Your order for $sms_additional_subs will be activated within 2 working hours.Thanks WebSito";
		 break;
		 
		 case "WebSito Post Activation":
		 $sms_msg="Hi $sms_fname, your website $domain_name is activated and on live. Update your data now. Thx Team WebSito";
		 break;
		 
		 case "WebSito Post Activation":
		 $sms_msg="We've received order for $sms_additional_subs.you'll get call from Support.Thx WebSito";
		 break;
		 
		 case "Content Writing Job Completion":
		 $sms_msg="Hi $sms_fname, We have updated your contents, kindly review it and give us your valuable feedback. Thx WebSito";
		 break;
		 
		 case "Gmail Server Job Completion":
		 $sms_msg="Hi $sms_fname, your Gmail Server ready to use. Your login credentials shared on registered Email ID. Stay Safe & Secured with WebSito. Thx WebSito";
		 break;
		 
		 case "Self Manage":
		 $sms_msg="For our Members $sms_fname, We Introduces new featured to boost your profession: a Self Manage SEO and Google responsive dynamic Website in 2 hours with unlimited pages, Option to Change Design anytime, CMS, Blogs, Social Media, Gmail Server, Integrated Special features-Act, Rules, Judgement, Tools, Article, Business News etc. Starts @ just 2,999/- # www.WebSito.in";
		 break;
		 
		 case "New Web Features":
		 $sms_msg="For Members $sms_fname, We Introduces new features to boost your profession digitally: A Self Manage SEO and Google responsive dynamic Website in 2 hours with unlimited pages, Option to Change Design anytime, CMS, Blogs, Social Media, Gmail Server, Integrated Special features-Act, Rules, Judgement, Tools, Article, Business News etc. Starts @ just 2,999/- # www.WebSito.in |+91-9999132429";
		 break;
		 
		 case "Members plan":
		 $sms_msg="Dear member $sms_fname, Be found on Google with easy SEO# Make your website visible on Google 1st page with Self managed Dynamic & SEO friendly web pages |Exclusively for CA/CMA/CS/Lawyers ! Google MAP & Gmail server# Its an investment not expenses ! https://websito.in | +91-9999132429";
		 break;
		 
		 case "Reminder Message":
		 $sms_msg="Hi Sir, I'm keenly waiting for your response to develop your professional website. Thx $sms_fname WebSito | https://websito.in | +91-9999132429";
		 break;
		 
		 case "Response SMS":
		 $sms_msg="Hi Sir; $sms_fname from WebSito. Just spoken with you regarding Professional WebSite Development | We're Specialised for CA/CMA/CS/Lawyers| We Deliver SEO & Google responsive Dynamic Website in Just 2 hrs. with features- Mobile Responsive & Latest user friendly designs, Unlimited pages, Option to change Design anytime, Blogs, Job Posting, Social Media, Special features like, Working Tools, Act, Rules, Form, Article, Judgement, Business News etc. starts @ 2,999! Google MAP & Gmail server# Its an investment not expenses ! https://websito.in | +91-9999132429";
		 break;
		 
		 case "Domain Transfer":
		 $sms_msg="Hi, your case is Domain transfer. Kindly share your Domain Panel login credential at support@websito.in with Your Order ID to proceed. Thx WebSito.";
		 break;
		 
		 case "Webmail Approval":
		 $sms_msg="Hi $sms_fname, Your Email ID is Approved. Temporary login credentials send at your regd email id. Now you can setup and use Outlook. Follow Instruction & Advice given in admin panel. Call us if not received.Thx WebSito";
		 break;
		 
		 
		 
		 default: 
		 $sms_msg="";
		 break;	
	
}
//echo $sms_msg;
$original_sms_msg=$sms_msg;
$sms_msg=urlencode($sms_msg); 
/*
How to use this SMS Template to send SMS
$sms_parameters=array('template_name'=>'OTP verification at registration','sms_fname'=>'Sunil','sms_otp'=>'12698');
$receiver_mobile='919716454920';
SendSMS($sms_parameters,$receiver_mobile);
*/
?> 