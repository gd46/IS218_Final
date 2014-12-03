<?php

require 'Autoloader.php';
spl_autoload_register('Autoloader::loader');
//$sql = 'SELECT UNITID, MAX(EFYTOTLT) FROM enrollment';

require('connect.php');
$sql = 'SELECT * FROM enrollment';

$sth = $dbh->prepare($sql);
$sth->execute();
$results = $sth->fetchAll();
print_r($results);
?>