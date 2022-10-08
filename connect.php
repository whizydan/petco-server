<?php 
define('host', '127.0.0.1');
define('user', 'kerberos_apprd');
define('pass', 'www.kerberos.co.ke');
define('db', 'kerberos_mydb');

$conn = mysqli_connect(host, user, pass, db) or die('Unable to Connect');
?>