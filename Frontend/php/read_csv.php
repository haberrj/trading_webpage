<?php
    $rows = file('/home/ronhaber/Documents/Webpage/sample.csv');
    $last_row = array_pop($rows);
    $data = str_getcsv($last_row);
?>