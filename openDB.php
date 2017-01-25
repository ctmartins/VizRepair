<?php
    $dbhost = 'localhost';
    $dbuser = 'bioxldb';
    $dbpass ='xldbbio';
    $dbname = 'bioconflict';

    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Could not connect to mysql');

    mysql_select_db($dbname);
?>
