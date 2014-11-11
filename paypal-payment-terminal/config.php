<?php
#******************************************************************************
#                      PHP Paypal Payment Terminal v1.0
#******************************************************************************
#      Author:     Sergey Suhanov
#      Email:      admin@rxnk.com
#      Website:    http://www.rxnk.com
#
#      Version:    1.0
#      Copyright:  (c) 2009 - Sergey Suhanov 
#      
#******************************************************************************
$title = "MyCompany.com Payment Terminal"; //site title
$company = "MyCompany.com"; //company or store name
$store_email = "merchantemail@merchant.com"; //business email of store owner.
$admin_email = "administrator@notices.com"; //this email is for notifications about new payments
$item_description = "Services"; //Default payment description
$item_id = "0001"; //The number you want to show next to item description in paypal invoice screen.
$script_base = "http://www.mywebsite.com/paypal/";// full script location URL
$script_location = "http://www.mywebsite.com/paypal/thank_you.php"; // full thank_you.php file location URL
?>