<?php
isset( $GLOBALS['_kint_settings'] ) or $GLOBALS['_kint_settings'] = array();
$_kintSettings = &$GLOBALS['_kint_settings'];


/** @var bool if set to false, kint will become silent, same as Kint::enabled(false) or Kint::$enabled = false */
$ip = $_SERVER['REMOTE_ADDR'];

if ( $ip            == "127.0.0.1"
	 OR strpos ($ip,   "192.168.1.") === 0
	 OR strpos ($ip,   "192.168.0.") === 0) {
	$_kintSettings['enabled'] = true;
} else {
	$_kintSettings['enabled'] = false;
}

unset( $_kintSettings );