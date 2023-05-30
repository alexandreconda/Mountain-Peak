<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&( 
filemtime('/var/www/html/app/app/system/urls.xml') > 1675197865|| filemtime('/var/www/html/app/var/config/localurls.xml') > 1675088621)) { return false; } else {
$GLOBALS['SIGNIFICANT_CREATEURL'] =array (
  'core~default:index@classic' => 
  array (
    0 => 1,
    1 => 'index',
    2 => false,
    3 => 
    array (
    ),
    4 => 
    array (
    ),
    5 => '',
    6 => false,
    7 => 
    array (
    ),
  ),
  'core~sommets:index@classic' => 
  array (
    0 => 1,
    1 => 'index',
    2 => false,
    3 => 
    array (
    ),
    4 => 
    array (
    ),
    5 => '/sommets',
    6 => false,
    7 => 
    array (
    ),
  ),
  '@classic' => 
  array (
    0 => 2,
    1 => 'index',
    2 => false,
  ),
);
return true;
}
