<?php

$db_log='root';
$db_pass='root';
$db_name='rustywheels';
$db_host='localhost';

$link = mysqli_connect($db_host, $db_log, $db_pass, $db_name);

if (!$link) {
    echo "доступ поплыл, пароль убери";
}