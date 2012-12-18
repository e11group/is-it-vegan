<?php 

//error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

//defs
date_default_timezone_set('America/Los_Angeles');

require_once '../app/config/definitions.php';

//important shit

require_once VENDOR_DIR . 'autoload.php';

require_once CLASS_DIR . 'class_autoload.php';
new class_autoload();

require_once INC_DIR . 'helper.php';

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(dirname(__FILE__)).'/templates'),
    'escape' => function($value) {
        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    },
    'charset' => 'ISO-8859-1',
));



?>

<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>vegan or not</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php echo STYLE_DIR; ?>foundation.css">
	<link rel="stylesheet" href="<?php echo STYLE_DIR; ?>style.css">

	<script src="<?php echo COMPONENTS_DIR; ?>modernizr/modernizr.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script data-main="<?php echo BASE; ?>javascripts/app" src="<?php echo COMPONENTS_DIR; ?>requirejs/require.js"></script>


</head>
<body>