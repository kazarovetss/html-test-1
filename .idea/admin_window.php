<?php
$header = file_get_contents("html/header.html");
$body = file_get_contents("html/body-admin.html");
$date = file_get_contents("html/date.html");
$body = str_replace("{DATE}", $date, $body);
echo $header;
echo $body;