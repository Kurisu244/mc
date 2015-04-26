<?php

require_once 'qrgen/qrlib.php';
include('Connect_DB.php');

$latitude = $_GET['lati'];
$longitude = $_GET['long'];

ob_start("callback");

$codeURL = 'http://mclabs.gr/arc/getlost/generatepage.php?lat='.$latitude.'&lng='.$longitude;

$debugLog = ob_get_contents();
ob_end_clean();

QRcode::png($codeURL);