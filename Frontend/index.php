<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/auto_fill.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="hero-bg">
        <section class="top-info">
            <header>
                <a href="https://www.binance.com/en/my/dashboard">
                    <img src="images/Binance_logo.png" alt="Binance Website">
                </a>
            </header>
            <h1><a href="#">Trading Bot Statistics</a></h1>
            <p>Below are the current holdings of each type of currency and their respective growths over time.</p>
        </section>
        <section class="cryptos">
            <section class="btc">
                <div class="btc_title">
                    <h2>BTC</h2>
                    <img src="images/bitcoin.png" alt="Bitcoin logo">
                </div>
                <div class="btc_info">
                    <p class="cash">Allocated Cash Amount:
                    <?php
                        $rows = file('/home/ronhaber/Documents/Webpage/sample.csv');
                        $last_row = array_pop($rows);
                        $data = str_getcsv($last_row);
                    ?>
                        €
                    </p>
                    <p class="balance">Current Balance:
                        €
                    </p>
                    <p class="price">Current Price:
                         €
                    </p>
                    <p class="last_holding">Current Holding Price:
                        €
                    </p>
                    <p class="networth">Current Networth:
                        €
                    </p>
                </div>
            </section>
            <section class="eth">
                <div class="eth_title">
                    <h2>ETH</h2>
                    <img src="images/ethereum.png" alt="Ethereum logo">
                </div>
                <div class="eth_info">
                    <p class="cash">Allocated Cash Amount:  €</p>
                    <p class="balance">Current Balance:  €</p>
                    <p class="price">Current Price:  €</p>
                    <p class="last_holding">Current Holding Price:  €</p>
                    <p class="networth">Current Networth:  €</p>
                </div>
            </section>
            <section class="ltc">
                <div class="ltc_title">
                    <h2>LTC</h2>
                    <img src="images/litecoin.png" alt="Litecoin logo">
                </div>
                <div class="ltc_info">
                    <p class="cash">Allocated Cash Amount:  €</p>
                    <p class="balance">Current Balance:  €</p>
                    <p class="price">Current Price:  €</p>
                    <p class="last_holding">Current Holding Price:  €</p>
                    <p class="networth">Current Networth:  €</p>
                </div>
            </section>
            <section class="bnb">
                <div class="bnb_title">
                    <h2>BNB</h2>
                    <img src="images/binance_coin.png" alt="Binancecoin logo">
                </div>
                <div class="bnb_info">
                    <p class="cash">Allocated Cash Amount:  €</p>
                    <p class="balance">Current Balance:  €</p>
                    <p class="price">Current Price:  €</p>
                    <p class="last_holding">Current Holding Price:  €</p>
                    <p class="networth">Current Networth:  €</p>
                </div>
            </section>
        </section>
    </div>

</body>
</html>