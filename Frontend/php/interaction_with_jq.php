<?php
    include "output_calls.php";
    // include "read_csv.php";

    if(!empty($_POST['curr']) && !empty($_POST['type'])){
        $curr = $_POST['curr'];
        $type = $_POST['type'];
        switch($curr){
            case 'BTC':
                $file1 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/BTC_Transactions.db";
                $file2 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/BTC_Realtime.db";
                $file3 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/BTC_Balance.db";
                break;
            case 'ETH':
                $file1 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/ETH_Transactions.db";
                $file2 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/ETH_Realtime.db";
                $file3 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/ETH_Balance.db";
                break;
            case 'LTC':
                $file1 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/LTC_Transactions.db";
                $file2 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/LTC_Realtime.db";
                $file3 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/LTC_Balance.db";
                break;
            case 'BNB':
                $file1 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/BNB_Transactions.db";
                $file2 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/BNB_Realtime.db";
                $file3 = "/home/ronhaber/Documents/Crypto_Docs/Binance/Databases/BNB_Balance.db";                
                break;
        }
        switch($type){
            case 'cash':
                Print_Cash($file3);
                break;
            case 'balance':
                Print_Balance($file1);
                break;
            case 'current_price':
                Print_Current_Price($file2);
                break;
            case 'holding_price':
                Print_Holding_Price($file1);
                break;
            case 'networth':
                Print_Networth($file1, $file2, $file3);
                break;
        }
    }
    
?>