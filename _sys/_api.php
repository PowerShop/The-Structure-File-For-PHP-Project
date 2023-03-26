<?php
    // This file is the main core of the website.
    // Link all the files together.

    require dirname(__FILE__) . '/_sys/_config.php';
    require dirname(__FILE__) . '/_sys/_func.php';

    $api = (object) array(
        'sql' => new PDO('mysql:host=' . $_config['db_host'] . '; dbname=' . $_config['db_database'] . ';', $_config['db_user'], $_config['db_password']),
    
    );    
?>