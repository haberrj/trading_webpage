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
                    <p class="cash">Allocated Cash Amount:  €</p>
                    <p class="balance">Current Balance:
                    <?php
                        include 'Frontend/php/read_csv.php';
                        $file = "/home/ronhaber/Documents/Webpage/BTC_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo getBalance($values);
                        closeConnection($connection);
                    ?>
                        BTC
                    </p>
                    <p class="price">Current Price: €</p>
                    <p class="last_holding">Current Holding Price:
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/BTC_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo getPrice($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="networth">Current Networth:
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/BTC_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo calculateNetworth($values);
                        closeConnection($connection);
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
                    <p class="cash">Allocated Cash Amount:  €</p>
                    <p class="balance">Current Balance:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/ETH_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo getBalance($values);
                        closeConnection($connection);
                    ?>
                        ETH
                    </p>
                    <p class="price">Current Price:  €</p>
                    <p class="last_holding">Current Holding Price:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/ETH_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo getPrice($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="networth">Current Networth:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/ETH_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo calculateNetworth($values);
                        closeConnection($connection);
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
                    <p class="cash">Allocated Cash Amount:  €</p>
                    <p class="balance">Current Balance:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/LTC_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo getBalance($values);
                        closeConnection($connection);
                    ?>
                        LTC
                    </p>
                    <p class="price">Current Price:  €</p>
                    <p class="last_holding">Current Holding Price:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/LTC_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo getPrice($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="networth">Current Networth:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/LTC_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo calculateNetworth($values);
                        closeConnection($connection);
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
                    <p class="cash">Allocated Cash Amount:  €</p>
                    <p class="balance">Current Balance:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/BNB_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo getBalance($values);
                        closeConnection($connection);
                    ?>
                        BNB
                    </p>
                    <p class="price">Current Price:  €</p>
                    <p class="last_holding">Current Holding Price:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/BNB_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo getPrice($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                    <p class="networth">Current Networth:  
                    <?php
                        $file = "/home/ronhaber/Documents/Webpage/BNB_DB.db";
                        $connection = connectToDB($file);
                        $values = getLastValues($connection);
                        echo calculateNetworth($values);
                        closeConnection($connection);
                    ?>
                        €
                    </p>
                </div>
            </section>
        </section>
    </div>

</body>
</html>