<?php
$rex_mobile = 'rex_mobile';
$rex_mobile_root = $REX['INCLUDE_PATH'].'/addons/'.$rex_mobile.'/';

$I18N_rex_qr = new i18n($REX['LANG'], $REX['INCLUDE_PATH'].'/addons/'.$rex_mobile.'/lang/');
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

?>