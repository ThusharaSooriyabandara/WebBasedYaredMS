<?php
$host='localhost';
$username='root';
$password='';
$dbname='admin_database';

$conn = new mysqli($host,$username,$password,$dbname);

if(!$conn)
    {
        echo "There are some problem while connecting the database";
    }

?>