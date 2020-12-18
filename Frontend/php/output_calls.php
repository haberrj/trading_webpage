<?php
    include 'read_csv.php';

    function BTC_Cash(){
        $file = "/database_files/BTC_Balance.db";
        $connection = connectToDB($file);
        $values = getLastCashValues($connection);
        echo getCash($values);
        closeConnection($connection);
    }
    
    function BTC_Balance(){
        $file = "/database_files/BTC_Transactions.db";
        $connection = connectToDB($file);
        $values = getLastTransactionValues($connection);
        echo getBalance($values);
        closeConnection($connection);
    }

    function BTC_Current_Price(){
        $file = "/database_files/BTC_Realtime.db";
        $connection = connectToDB($file);
        $values = getLastPriceValues($connection);
        echo getPrice($values);
        closeConnection($connection);
    }
?>