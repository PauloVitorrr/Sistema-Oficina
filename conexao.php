<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'sistemaws';

    $x = mysql_connect($host,$user,$password) or die(mysql_error());
    mysql_select_db($db, $x) or die(mysql_error()); 

?>