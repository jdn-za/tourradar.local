<?php
session_start();
if (!array_key_exists('count', $_SESSION)) $_SESSION['count'] = 0;
$_SESSION['count']++;
echo json_encode([
    'Date' => date('Y-m-d H:i:s'),
    'IP' => $_SERVER['HTTP_CLIENT_IP']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['REMOTE_ADDR'])
  ])
?>