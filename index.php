<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="Frontend/js/auto_fill.js"></script>
    <link rel="stylesheet" href="Frontend/css/main.css">
</head>
<body>
    <div class="hero-bg">
        <section class="top-info">
            <header>
                <a href="https://www.binance.com/en/my/dashboard">
                    <img src="Frontend/images/Binance_logo.png" alt="Binance Website">
                </a>
            </header>
            <h1><a href="#">Trading Bot Statistics</a></h1>
            <p>Below are the current holdings of each type of currency and their respective growths over time.</p>
        </section>
        <section class="cryptos">
            <section class="btc">
                <div class="btc_title">
                    <h2>BTC</h2>
                    <img src="Frontend/images/bitcoin.png" alt="Bitcoin logo">
                </div>
                <div class="btc_info">
                    <p class="cash">Allocated Cash Amount:  
                    <?php
                        include 'Frontend/php/read_csv.php';
                        $file = "/database_files/BTC_Balance.db";
                        $connection = connectToDB($file);
                        $values = getLastCashValues($connection);
                        echo getCash($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="balance">Current Balance:
                    <?php
                        $file = "/database_files/BTC_Transactions.db";
                        $connection = connectToDB($file);
                        $values = getLastTransactionValues($connection);
                        echo getBalance($values);
                        closeConnection($connection);
                    ?>
                        BTC
                    </p>
                    <p class="price">Current Price: 
                    <?php    
                        $file = "/database_files/BTC_Realtime.db";
                        $connection = connectToDB($file);
                        $values = getLastPriceValues($connection);
                        echo getPrice($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="last_holding">Current Holding Price:
                    <?php
                        $file = "/database_files/BTC_Transactions.db";
                        $connection = connectToDB($file);
                        $values = getLastTransactionValues($connection);
                        $last_holding_price = getHoldingPrice($values);
                        echo $last_holding_price;
                        if($last_holding_price != "N/A"){
                            echo " €";
                        }
                        closeConnection($connection);
                    ?>
                    </p>
                    <p class="networth">Current Networth:
                    <?php
                        $file = "/database_files/BTC_Transactions.db";
                        $file2 = "/database_files/BTC_Realtime.db";
                        $file3 = "/database_files/BTC_Balance.db";
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
                    ?>
                        €
                    </p>
                </div>
            </section>
            <section class="eth">
                <div class="eth_title">
                    <h2>ETH</h2>
                    <img src="Frontend/images/ethereum.png" alt="Ethereum logo">
                </div>
                <div class="eth_info">
                    <p class="cash">Allocated Cash Amount:  
                    <?php    
                        $file = "/database_files/ETH_Balance.db";
                        $connection = connectToDB($file);
                        $values = getLastCashValues($connection);
                        echo getCash($values);
                        closeConnection($connection);
                    ?>
                        €</p>
                    <p class="balance">Current Balance:  
                    <?php
                        $file = "/database_files/ETH_Transactions.db";
                        $connection = connectToDB($file);
                        $values = getLastTransactionValues($connection);
                        echo getBalance($values);
                        closeConnection($connection);
                    ?>
                        ETH
                    </p>
                    <p class="price">Current Price:  
                    <?php    
                        $file = "/database_files/ETH_Realtime.db";
                        $connection = connectToDB($file);
                        $values = getLastPriceValues($connection);
                        echo getPrice($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="last_holding">Current Holding Price:  
                    <?php
                        $file = "/database_files/ETH_Transactions.db";
                        $connection = connectToDB($file);
                        $values = getLastTransactionValues($connection);
                        $last_holding_price = getHoldingPrice($values);
                        echo $last_holding_price;
                        if($last_holding_price != "N/A"){
                            echo " €";
                        }
                        closeConnection($connection);
                    ?>
                    </p>
                    <p class="networth">Current Networth:  
                    <?php
                        $file = "/database_files/ETH_Transactions.db";
                        $file2 = "/database_files/ETH_Realtime.db";
                        $file3 = "/database_files/ETH_Balance.db";
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
                    ?>
                        €
                    </p>
                </div>
            </section>
            <section class="ltc">
                <div class="ltc_title">
                    <h2>LTC</h2>
                    <img src="Frontend/images/litecoin.png" alt="Litecoin logo">
                </div>
                <div class="ltc_info">
                    <p class="cash">Allocated Cash Amount:  
                    <?php    
                        $file = "/database_files/LTC_Balance.db";
                        $connection = connectToDB($file);
                        $values = getLastCashValues($connection);
                        echo getCash($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="balance">Current Balance:  
                    <?php
                        $file = "/database_files/LTC_Transactions.db";
                        $connection = connectToDB($file);
                        $values = getLastTransactionValues($connection);
                        echo getBalance($values);
                        closeConnection($connection);
                    ?>
                        LTC
                    </p>
                    <p class="price">Current Price:  
                    <?php    
                        $file = "/database_files/LTC_Realtime.db";
                        $connection = connectToDB($file);
                        $values = getLastPriceValues($connection);
                        echo getPrice($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="last_holding">Current Holding Price:  
                    <?php
                        $file = "/database_files/LTC_Transactions.db";
                        $connection = connectToDB($file);
                        $values = getLastTransactionValues($connection);
                        $last_holding_price = getHoldingPrice($values);
                        echo $last_holding_price;
                        if($last_holding_price != "N/A"){
                            echo " €";
                        }
                        closeConnection($connection);
                    ?>
                    </p>
                    <p class="networth">Current Networth:  
                    <?php
                        $file = "/database_files/LTC_Transactions.db";
                        $file2 = "/database_files/LTC_Realtime.db";
                        $file3 = "/database_files/LTC_Balance.db";
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
                    ?>
                        €
                    </p>
                </div>
            </section>
            <section class="bnb">
                <div class="bnb_title">
                    <h2>BNB</h2>
                    <img src="Frontend/images/binance_coin.png" alt="Binancecoin logo">
                </div>
                <div class="bnb_info">
                    <p class="cash">Allocated Cash Amount:  
                    <?php    
                        $file = "/database_files/BNB_Balance.db";
                        $connection = connectToDB($file);
                        $values = getLastCashValues($connection);
                        echo getCash($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="balance">Current Balance:  
                    <?php
                        $file = "/database_files/BNB_Transactions.db";
                        $connection = connectToDB($file);
                        $values = getLastTransactionValues($connection);
                        echo getBalance($values);
                        closeConnection($connection);
                    ?>
                        BNB
                    </p>
                    <p class="price">Current Price:  
                    <?php    
                        $file = "/database_files/BNB_Realtime.db";
                        $connection = connectToDB($file);
                        $values = getLastPriceValues($connection);
                        echo getPrice($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="last_holding">Current Holding Price:  
                    <?php
                        $file = "/database_files/BNB_Transactions.db";
                        $connection = connectToDB($file);
                        $values = getLastTransactionValues($connection);
                        $last_holding_price = getHoldingPrice($values);
                        echo $last_holding_price;
                        if($last_holding_price != "N/A"){
                            echo " €";
                        }
                        closeConnection($connection);
                    ?>
                    </p>
                    <p class="networth">Current Networth:  
                    <?php
                        $file = "/database_files/BNB_Transactions.db";
                        $file2 = "/database_files/BNB_Realtime.db";
                        $file3 = "/database_files/BNB_Balance.db";
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
                    ?>
                        €
                    </p>
                </div>
            </section>
        </section>
    </div>

</body>
</html>