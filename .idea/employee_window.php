﻿<?php
set_time_limit(0);
date_default_timezone_set('Europe/Minsk');

$header = file_get_contents("html/header.html");
$body = file_get_contents("html/body-employee.html");
$date = file_get_contents("html/date.html");
$body = str_replace("{DATE}", $date, $body);
echo $header;
echo $body;
