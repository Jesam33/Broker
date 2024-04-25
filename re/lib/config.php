<?php

if (!defined('SITEURL')):
	define('SITEURL', "http://localhost:8080/");
endif;

if (!defined('MULTIPATH')):
	define('MULTIPATH', "http://localhost:8080/");
endif;


if (!defined('CONTACT_EMAIL')):
	define('CONTACT_EMAIL', " ");
endif;

if (!defined('CONTACT_PHONE')):
	define('CONTACT_PHONE', " 00000000000 ");
endif;
if (!defined('CONTACT_PHONE2')):
	define('CONTACT_PHONE2', " 00000000000 ");
endif;
if (!defined('CONTACT_WHATSAPP')):
	define('CONTACT_WHATSAPP', " 00000000000 ");
endif;




if (!defined('CONTACT_ADDRESS')):
	define('CONTACT_ADDRESS', "United Kingdom ");
endif;
if (!defined('FULL_NAME')):
	define('FULL_NAME', "test name");
endif;
if (!defined('SLOGAN')):
	define('SLOGAN', " ");
endif;

if (!defined('FACEBOOK')):
	define('FACEBOOK', "https://facebook.com/");
endif;

if (!defined('TWITTER')):
	define('TWITTER', "https://twitter.com/=");
endif;
if (!defined('INSTAGRAM')):
	define('INSTAGRAM', "https://instagram.com/");
endif;



$date = new DateTime('NOW');
?>