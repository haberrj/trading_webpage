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

    function getPrice($values){
        return $values[1];
    }

    function getBalance($values){
        return $values[2];
    }

    function getLastType($values){
        return $values[3];
    }

    function calculateNetworth($values){
        $balance = (float)getBalance($values);
        $price = (float)getPrice($values);
        $networth = $balance * $price;
        return $networth;
    }

    function closeConnection($connection){
        $connection->close();
    }
    
    function runDB($file){
        $connection = connectToDB($file);
        $values = getLastValues($connection);
        echo getPrice($values);
    }
    // connectToDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
    // runDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
    // runDB('/home/ronhaber/Documents/Webpage/ETH_DB.db');
?>
