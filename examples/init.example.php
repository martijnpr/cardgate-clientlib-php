<?php
require_once dirname( __FILE__ ) . '/../src/Autoloader.php';

cardgate\api\Autoloader::register();

$oCardGate = new cardgate\api\Client( 1, '<api key>', TRUE );
$oCardGate->setIp( $_SERVER['REMOTE_ADDR'] );
$oCardGate->setLanguage( 'nl' );
$oCardGate->version()->setPlatformName( 'PHP' );
$oCardGate->version()->setPlatformVersion( phpversion() );
$oCardGate->version()->setPluginName( 'Custom Implementation' );
$oCardGate->version()->setPluginVersion( '0.0.1' );

//$iSiteId = <optional site id>;
//$sSiteKey = '<optional site key>';
