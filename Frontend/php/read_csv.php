<?php
    function connectToDB($file){
        $connection = new SQLite3($file);
        if($connection){
        } else {
            echo "Server Error\n";
        }
        return $connection;
    }

    function getLastTransactionValues($connection){
        $results = $connection->query('SELECT * FROM transactions');
        while($row=$results->fetchArray(SQLITE3_ASSOC)){
            $time = $row['time'];
            $price = $row['price'];
            $balance = $row['coin'];
            $type = $row['type'];
        }
        $values = array($time, $price, $balance, $type);
        return $values;
    }

    function getLastPriceValues($connection){
        $results = $connection->query('SELECT * FROM prices');
        while($row=$results->fetchArray(SQLITE3_ASSOC)){
            $time = $row['time'];
            $price = $row['price'];
        }
        $values = array($time, $price);
        return $values;
    }

    function getLastCashValues($connection){
        $results = $connection->query('SELECT * FROM cash');
        while($row=$results->fetchArray(SQLITE3_ASSOC)){
            $time = $row['time'];
            $cash = $row['cash'];
        }
        $values = array($time, $cash);
        return $values;
    }

    function getTime($values){
        return $values[0];
    }

    function getCash($values){
        return $values[1];
    }

    function getPrice($values){
        return $values[1];
    }

    function getHoldingPrice($values){
        $type = getLastType($values);
        if($type == "SELL"){
            $price = "N/A";
        } else {
            $price = $values[1];
        }
        return $price;
    }

    function getBalance($values){
        $type = getLastType($values);
        if($type == "SELL"){
            $balance = 0.0;
        } else {
            $balance = $values[2];
        }
        return $balance;
    }

    function getLastType($values){
        return $values[3];
    }

    function calculateNetworth($balance, $price, $cash){
        $balance = (float)$balance;
        $price = (float)$price;
        if($balance == 0.0){
            $networth = $cash;
        } else {
            $networth = $balance * $price;
        }
        return $networth;
    }

    function closeConnection($connection){
        $connection->close();
    }

    // connectToDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
    // runDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
    // runDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
?>
