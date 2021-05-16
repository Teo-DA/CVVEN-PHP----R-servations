<?php

function e404 () {
    require '../CVEN/404.php';
    exit();
}


function dd(...$vars) {
    foreach($vars as $var) {
        echo '<pre>';
        print_r($var);
        echo'</pre>';
    }
}

function get_pdo (): PDO {
    return  new \PDO('mysql:host=localhost;dbname=CVEN', 'root', 'darchy', [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
    ]);
}

function h(?string $value): string {
    if ($value === null) {
        return '';
    }
    return htmlentities($value);
}
?>