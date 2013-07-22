<?php

$rex_mobile = 'rex_mobile';

$error = '';

// REDAXO 3.2.3, 4.0.x, 4.1.x - Dateien in Ordner files/addons/ kopieren
if ($REX['VERSION'] . $REX['SUBVERSION'] < '42')
{
  include($REX['INCLUDE_PATH'] . '/addons/' . $rex_mobile . '/functions/functions.inc.php');
  $source_dir = $REX['INCLUDE_PATH'] . '/addons/' . $rex_mobile . '/files';
  $dest_dir = $REX['MEDIAFOLDER'] . '/addons/' . $rex_mobile;
  $start_dir = $REX['MEDIAFOLDER'] . '/addons';

  if (is_dir($source_dir))
  {
    if (!is_dir($start_dir))
    {
      mkdir($start_dir);
    }
    if(!rex_copyDir($source_dir, $dest_dir , $start_dir))
    {
      $error = 'Verzeichnis '.$source_dir.' konnte nicht nach '.$dest_dir.' kopiert werden!';
    }
  }
}

if ($error != '')
{
  $REX['ADDON']['installmsg'][$rex_mobile] = $error;
  $REX['ADDON']['install'][$rex_mobile] = false;
}
else
{
  $REX['ADDON']['install'][$rex_mobile] = true;
}
?>