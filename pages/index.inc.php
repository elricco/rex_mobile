<?php
// ANlegen einiger Variablen
$Basedir = dirname(__FILE__);
$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');
$func = rex_request('func', 'string');

// Seitenheader von REDAXO includen
include $REX['INCLUDE_PATH'].'/layout/top.php';

// Submenue erzeugen
$subpages = array(
	array('start',$I18N->msg('rex_mobile_menu_info')),
	array('settings',$I18N->msg('rex_mobile_menu_settings')),
	array('css_bootstrap',$I18N->msg('rex_mobile_menu_css_bootstrap')),
	array('css_foundation',$I18N->msg('rex_mobile_menu_css_foundation'))
);

rex_title("Mobile Detect", $subpages);

// Laden der jeweiligen Menueseite
switch($subpage) {
	case "settings":
		require $Basedir .'/settings.inc.php';
		break;
	
	case "css_bootstrap":
		require $Basedir .'/css_bootstrap.inc.php';
		break;
	
	case "css_foundation":
		require $Basedir .'/css_foundation.inc.php';
		break;
	
	default:
		require $Basedir .'/start.inc.php';
}

// Seitenfooter von REDAXO includen
include $REX['INCLUDE_PATH'].'/layout/bottom.php';
?>