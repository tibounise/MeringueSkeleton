<?php

define('__APPROOT__',__DIR__.'/..');

require __APPROOT__.'/vendor/meringue/Meringue.php';
require __APPROOT__.'/app/config/MeringueConf.php';

// Hack to allow the use of i18n without specifying the namespace
class i18n extends \meringue\locale\i18n {}

Meringue::start();

?>