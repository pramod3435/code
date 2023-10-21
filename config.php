<?php   

ob_start();

@session_start();

error_reporting(0);

$host = 'localhost';

$username = 'root';

$password ='';

$db_name = 'blogproject';

date_default_timezone_set('Asia/Kolkata');

include("db.class.php");

$obj = new DB($db_name, $host, $username, $password);

define(SITE_URL,"http://localhost/blogproject/");

define(FIRM_NAME,"S Singh & Associates LLP");

//define("TEMPLATE_URL","http://www.bestoffer.co.in/blogproject/");

//define("CUSTOMER_WEBSITE_URL","http://www.bestoffer.co.in/blogproject/");

define(SITE_URLNAME,"http://localhost/blogproject/");

define(SITE_TITLE,"blogproject");

define(SITE_SIGNATURE,"<br/>blog");

define(SITE_SERVER_PATH,$_SERVER['DOCUMENT_ROOT']."/");

define(SITE_SESSION,"blogproject");

include("variable.php");

include('functions.php');

?>