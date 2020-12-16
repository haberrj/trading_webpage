<?php
    function connectToDB($file){
        $connection = new SQLite3($file);
        if($connection){
        } else {
            echo "Server Error\n";
        }
        return $connection;
    }

    function getLastValues($connection){
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

    function getTime($values){
        return $values[0];
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

    function calculateNetworth($values){
        $balance = (float)getBalance($values);
        $price = getHoldingPrice($values);
        if($price == "N/A")
        {
            $price = 0.0;
        } else {
            $price = (float)$price;
        }
        $networth = $balance * $price;
        return $networth;
    }

    function closeConnection($connection){
        $connection->close();
    }

    // connectToDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
    // runDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
    // runDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
?>
