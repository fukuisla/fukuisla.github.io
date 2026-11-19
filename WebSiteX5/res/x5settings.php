<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '5B00D90497CF2B71ADB44C182C51ACCD',
	'url' => 'https://fukuisla.github.io/WebSiteX5/',
	'homepage_url' => 'https://fukuisla.github.io/WebSiteX5/index.html',
	'icon' => 'https://fukuisla.github.io/WebSiteX5/favImage.png',
	'version' => '2026.3.6.0',
	'sitename' => 'ふくいSLA',
	'lang_code' => 'ja-JP',
	'rtl' => false,
	'public_folder' => '',
	'salt' => 'd0m6zzkv3m8pok1xvjk6kpt13qy59s6q1or',
	'common_email_sender_addres' => '',
	'enable_sender_header' => true,
	'date_format' => 'yyyy/MM/dd',
	'date_format_ext' => 'dddd MMMM dd yyyy',
	'date_format_no_day' => 'yyyy/MM',
	'date_format_no_day_ext' => 'MMMM yyyy'
);
/*
|-------------------------------
|	BREAKPOINTS
|-------------------------------
*/

$imSettings['breakpoints'] = array(
	array("name" => "Desktop", "hash" => "ea2f0ee4d5cbb25e1ee6c7c4378fee7b", "start" => "max", "end" => 1150.0, "fluid" => false),
	array("name" => "Breakpoint 1", "hash" => "d2f9bff7f63c0d6b7c7d55510409c19b", "start" => 1149.9, "end" => 720.0, "fluid" => false),
	array("name" => "Mobile", "hash" => "72e5146e7d399bc2f8a12127e43469f1", "start" => 719.9, "end" => 480.0, "fluid" => false),
	array("name" => "Mobile Fluid", "hash" => "5ecdcca63de80fd3d4fbb36295d22b7d", "start" => 479.9, "end" => 0.0, "fluid" => true),
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"vomstr8h-imCpt\">単語をチェックしてください:</label><br />
			<input type=\"text\" id=\"vomstr8h-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_0s5o3p6a.png',
	'notification_public_key' => 'BO388-8ksSXz-EqqM7HoqXbme6uljs2EsLL5fd7zu41jpK8AdECH2_2zTefbFRZdNU1eN09zc3g_6WgpCDaemk4',
	'notification_private_key' => 'qmqeRCmkrz0WL-wWFVxQZbVn1bKj4-gmenbfCSupTGI',
	'notification_dbprefix' => 'w5_qanodex9_notifications_',
	'enable_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'https://fukuisla.github.io/WebSiteX5/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(0, 0, 0, 1); background-color: rgba(164, 194, 244, 1); padding: 10px; border: solid; border-block-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1); border-inline-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1); border-width: 0px; border-radius: 3px; ',
	'email_opening' => 'お客様各位<br />  <br />  お買い上げいただきありがとうございます。<br />  <br />  ここでは、ご注文の内容をご覧頂けます。<br />  <br />  以下に、注文された商品の一覧、請求情報、選択した配送方法とお支払い方法の説明が表示されます。',
	'email_closing' => 'さらに詳しい情報が必要な場合は、サポートまでお問い合わせください。<br /><br />何卒よろしくお願い致します。',
	'email_payment_opening' => 'お客様各位<br />  <br />  お買い上げいただきありがとうございます。お客様のお支払いが完了いたしました。ご注文は、迅速に処理されます。<br />  <br />  以下にご注文いただいた商品のリストと、請求書と発送の詳細を記載します。',
	'email_payment_closing' => 'さらに詳しい情報が必要な場合は、サポートまでお問い合わせください。',
	'email_digital_shipment_opening' => 'お客様各位<br />ご購入いただきありがとうございます。<br />ご購入された商品のダウンロードリンクをご確認ください:',
	'email_digital_shipment_closing' => 'さらに詳しい情報が必要な場合は、サポートまでお問い合わせください。',
	'email_physical_shipment_opening' => 'お客様へ、<br />  ご購入いただきありがとうございます。<br />  配送済み商品のリストをご確認ください:',
	'email_physical_shipment_closing' => 'さらに詳しい情報が必要な場合は、サポートまでお問い合わせください。',
	'email_attachments' => array(),
	'email_payment_attachments' => array(),
	'email_digital_shipment_attachments' => array(),
	'email_physical_shipment_attachments' => array(),
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'review_email' => '',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '¥',
	'currency_code' => 'JPY',
	'currency_name' => 'Japan, Yen',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array(
	'h768in0x' => array(
		'id' => 'h768in0x',
		'name' => '新規カテゴリ',
		'containsProductsWithProductPage' => false,
		'products' => array(),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_qanodex9_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => '銀行振込',
		'description' => '銀行振込で後払いする。',
		'email_text' => 'ここは銀行振り込みによる支払いを行うために必要なデータです。

XXX YYY ZZZ

いったん支払いが完了すると、注文番号と一緒に領収書のコピーを送信する必要があることに注意してください。',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'メール',
		'description' => '商品は 3-5 日以内にお届けとなります。',
		'email_text' => 'メール に出荷.\\n商品は 3-5 日以内にお届けとなります。',
		'tracking_type' => 'none'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'エクスプレス配送',
		'description' => '商品は 1-2 日以内にお届けとなります。',
		'email_text' => 'エクスプレス配送 に出荷.\\n商品は 1-2 日以内にお届けとなります。',
		'tracking_type' => 'none'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2026.3.6 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#37474F" style="background-color: #37474F; min-width: 700px;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px; border-collapse: separate;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; font: normal normal normal 12pt \'Noto Serif JP\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: rgba(0, 0, 0, 1) rgba(0, 0, 0, 1) rgba(0, 0, 0, 1) rgba(0, 0, 0, 1); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px;  padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px;  background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailIcons" style="background-color: #FFFFFF;border-left: 1px solid rgba(0, 0, 0, 1); border-right: 1px solid rgba(0, 0, 0, 1); border-bottom-style: solid; border-bottom-color: #000000; border-bottom-width: 1px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;  padding-top: 25px;  padding-bottom: 25px; padding-left: 15px; padding-right: 15px;  text-align: center;  min-height: 300px; " width="700"></td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 9pt \'Noto Serif JP\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  margin-top: 5px; padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px; background-color: transparent">' . "\n\t\t" . 'このメールには、上記の受信者専用の情報が含まれています。<br>このメールをエラーで受け取った場合は、すぐに送信者に通知し、コピーせずに破棄してください。' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#37474F';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Noto Serif JP\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Noto Serif JP;';

// End of file x5settings.php