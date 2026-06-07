<?php
require '../config.php';

$data = [
    'action' => 'start_workflow'
];

$ch = curl_init(N8N_WEBHOOK);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER,['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

echo curl_exec($ch);
curl_close($ch);
?>