<?php
    define('DB_SERVER','localhost:3306');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','987654321');
    define('DB_DATABASE','cse');
    define('DB_DATABASE_2','attendance');
    $db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $db_new= new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE_2);
    ?>
