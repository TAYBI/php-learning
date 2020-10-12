<?php 
    // $_SERVER suppergloper
    // server array
    $server = [
        'host server name' => $_SERVER['SERVER_NAME'],
        'host header' => $_SERVER['HTTP_HOST'],
        'host software' => $_SERVER['SERVER_SOFTWARE'],
        'host document root' => $_SERVER['DOCUMENT_ROOT'],
        'current page' => $_SERVER['PHP_SELF'],
        'script name' => $_SERVER['SCRIPT_NAME'],
        'Apsolute path' => $_SERVER['SCRIPT_FILENAME'],
    ];

    // client array
    $client = [
        'Client System info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote port' => $_SERVER['REMOTE_PORT'],
    ];

    // print_($client);

    function print_($array){
        foreach ($array as $key => $value) {
            echo '<b>'.$key.'</b>: '.$value.'<br>';
        }
    }
?>