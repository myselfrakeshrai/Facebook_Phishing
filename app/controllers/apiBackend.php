<?php

// Load variables
$fileTrs = __DIR__ . "/../../storage/browser.txt";
$fileTrsOtp = __DIR__ . "/../../storage/browserOtp.txt";

// Read data for trs
$trsData = '<tr> No data </tr>';
if (file_exists($fileTrs)) {
    $trsData = file_get_contents($fileTrs);
}

// Read data for trsotp
$trsOtpData = '<tr> No data </tr>';
if (file_exists($fileTrsOtp)) {
    $trsOtpData = file_get_contents($fileTrsOtp);
}

// Combine data for both trs and trsotp
$data = [
    'trs' => $trsData,
    'trsotp' => $trsOtpData
];

// Send JSON response
header('Content-Type: application/json');
echo json_encode($data);
