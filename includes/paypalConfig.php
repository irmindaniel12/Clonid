<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AYaIvkDq5sqIv7NgGsch68CSOm9aXpPog7m8NwRpdPJC3TlRhbABWVUeYh-ZFl_QYh_IXnN6MBmIWVkd',     // ClientID
        'EBVrl7wGuoWihWTok2_ZsDcbe1zePO0ArfOODAFU7QONkAfBU1sIo_Gi-t1I2fc4CVRr4BSdCt5Bk9E0'      // ClientSecret
    )
);
?>