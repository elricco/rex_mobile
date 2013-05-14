<?php

$rex_mobile = 'rex_mobile';

$error = '';

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