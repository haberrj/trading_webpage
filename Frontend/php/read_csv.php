<?php
    $file = $_REQUEST['user'];
    $db = new SQLite3($file);
    $res = $db->query('SELECT * FROM transactions');
    $last_element = end($res);
    echo $last_element;
?>