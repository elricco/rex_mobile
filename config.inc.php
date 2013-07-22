<?php
$rex_mobile = 'rex_mobile';
$rex_mobile_root = $REX['INCLUDE_PATH'].'/addons/'.$rex_mobile.'/';

//$I18N_rex_qr = new i18n($REX['LANG'], $REX['INCLUDE_PATH'].'/addons/'.$rex_mobile.'/lang/');
$REX['ADDON']['rxid'][$rex_mobile] = 'rex_mobile';
$REX['ADDON']['page'][$rex_mobile] = $rex_mobile;
$REX['ADDON']['name'][$rex_mobile] = 'Mobile-Detect';
$REX['ADDON']['supportpage'][$rex_mobile] = 'http://mobiledetect.net';
$REX['ADDON']['perm'][$rex_mobile] = $rex_mobile.'[]';
$REX['PERM'][] = $rex_mobile.'[]';
$REX['ADDON']['version'][$rex_mobile] = '0.1.0';
$REX['ADDON']['author'][$rex_mobile] = 'Tim Filler';

// AUTO INCLUDE FUNCTIONS & CLASSES
////////////////////////////////////////////////////////////////////////////////
if ($REX['REDAXO'])
{
  $pattern = $rex_mobile_root.'functions/function.*.inc.php';
  $include_files = glob($pattern);
  if(is_array($include_files) && count($include_files) > 0){
     foreach ($include_files as $include)
     {
       require_once $include;
     }
  }
  if (!isset($I18N))
  {
    $I18N = new i18n($REX['LANG'],$REX['INCLUDE_PATH'] . '/addons/' . $rex_mobile . '/lang/');
  }
  
  // I18N, Addon-Titel für die Navigation
  if (isset($I18N) && is_object($I18N))
  {
    if ($REX['VERSION'] . $REX['SUBVERSION'] < '42')
    {
      $I18N->locale = $REX['LANG'];
      $I18N->filename = $REX['INCLUDE_PATH'] . '/addons/' . $rex_mobile . '/lang/'. $REX['LANG'] . ".lang";
      $I18N->loadTexts();
    }
    else
    {
      $I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/' . $rex_mobile . '/lang/');
    }  
		$REX['ADDON']['page'][$rex_mobile] = $rex_mobile;
    $REX['ADDON']['name'][$rex_mobile] = $I18N->msg('rex_mobile_menu_link');
  }  
  
}
  
  $pattern = $rex_mobile_root.'classes/class.*.php';
  $include_files = glob($pattern);

  if(is_array($include_files) && count($include_files) > 0){
     foreach ($include_files as $include)
     {
       require_once $include;
     }
  }
  
  require_once $rex_mobile_root.'classes/Mobile_Detect.php';
  $REX['MOBILE_DETECT'] = new Mobile_Detect();
  $REX['MOBILE'] = ($REX['MOBILE_DETECT']->isMobile() ? ($REX['MOBILE_DETECT']->isTablet() ? 'tablet' : 'phone') : 'computer');


// Konfiguration

// --- DYN
$REX['ADDON']['rex_mobile']['use_framework'] = '1';
$REX['ADDON']['rex_mobile']['use_bootstrap'] = '1';
$REX['ADDON']['rex_mobile']['use_foundation'] = '0';
// --- /DYN
?>