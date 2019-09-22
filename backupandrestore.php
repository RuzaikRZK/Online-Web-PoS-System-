<?php
define("BACKUP_PATH", "D://phpprojectbackup//b");

$server_name   = "localhost";
$username      = "root";
$password      = "";
$database_name = "pos_system";
$date_string   = date("Ymd");

$cmd = "mysqldump --routines -h {$server_name} -u {$username} -p{$password} {$database_name} > " . BACKUP_PATH . "{$date_string}_{$database_name}.sql";

exec($cmd);

?>