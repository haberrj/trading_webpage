<?php
    include 'read_csv.php';

    function Print_Cash($file){
        $connection = connectToDB($file);
        $values = getLastCashValues($connection);
        echo getCash($values);
        closeConnection($connection);
    }
    
    function Print_Balance($file){
        $connection = connectToDB($file);
        $values = getLastTransactionValues($connection);
        echo getBalance($values);
        closeConnection($connection);
    }

    function Print_Current_Price($file){
        $connection = connectToDB($file);
        $values = getLastPriceValues($connection);
        echo getPrice($values);
        closeConnection($connection);
    }

    function Print_Holding_Price($file){
        $connection = connectToDB($file);
        $values = getLastTransactionValues($connection);
        $last_holding_price = getHoldingPrice($values);
        echo $last_holding_price;
        if($last_holding_price != "N/A"){
            echo " €";
        }
        closeConnection($connection);
    }

    function Print_Networth($file, $file2, $file3){
        $connection = connectToDB($file);
        $trans_values = getLastTransactionValues($connection);
        closeConnection($connection);
        $connection = connectToDB($file2);
        $price_values = getLastPriceValues($connection);
        closeConnection($connection);
        $connection = connectToDB($file3);
        $cash_values = getLastCashValues($connection);
        closeConnection($connection);
        echo calculateNetworth(getBalance($trans_values), getPrice($price_values), getCash($cash_values));
    }
    
?>