<?php	

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));


if (version_compare(phpversion(), '5.2.0', '<')===true) {
    echo  '<div style="font:12px/1.35em arial, helvetica, sans-serif;">
<div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;">
<h3 style="margin:0; font-size:1.7em; font-weight:normal; text-transform:none; text-align:left; color:#2f2f2f;">
Whoops, it looks like you have an invalid PHP version.</h3></div><p>Minimum requirement is PHP 5.2.0 or newer.
</p></div>';
    exit;
}

require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');