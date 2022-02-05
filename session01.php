<?php

//セッションをスタートさせる
session_start();

$sid = session_id();

echo $sid;

$_SESSION['name'] = 'john';
$_SESSION['age'] = 12;
$_SESSION['love'] = 'ラーメン';
