<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Bot</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="Frontend/js/autoUpdate.js"></script> -->
    <link rel="stylesheet" href="Frontend/css/main.css">
    <link rel="stylesheet" href="Frontend/css/update_values.css">
</head>
<body>
    <script type="text/javascript">
        function btcCashQuery() {
            $.ajax({
                url: 'Frontend/php/interaction_with_jq.php',
                type: 'POST',
                dataType: 'json',
                data: ({curr: 'BTC', type: 'cash'}),
                success: function(data){
                    $('#btc_cash').html(data);
                }
            });
        }
        btcCashQuery();
        setTimeout(btcCashQuery, 5000);
    </script>
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
                    <p class="cash_btc">Allocated Cash Amount:
                        <div id="btc_cash">
                        </div>
                        €
                    <p>
                    <p class="balance">Current Balance:
                        <div class="btc_balance">
                            BTC
                        </div>
                    </p>
                    <p class="price">Current Price: 
                        <div class="btc_price">
                        </div>
                        €
                    </p>
                    <p class="last_holding">Current Holding Price:
                        <div class="btc_holding">
                        </div>
                    </p>
                    <p class="networth">Current Networth:
                        <div class="btc_networth">
                            €
                        </div>
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
                        <div class="eth_cash">
                            €
                        </div>
                    </p>
                    <p class="balance">Current Balance:
                        <div class="eth_balance">
                            BTC
                        </div>
                    </p>
                    <p class="price">Current Price: 
                        <div class="eth_price">
                            €
                        </div>
                    </p>
                    <p class="last_holding">Current Holding Price:
                        <div class="eth_holding">
                        </div>
                    </p>
                    <p class="networth">Current Networth:
                        <div class="eth_networth">
                            €
                        </div>
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
                        <div class="ltc_cash">
                            €
                        </div>
                    </p>
                    <p class="balance">Current Balance:
                        <div class="ltc_balance">
                            BTC
                        </div>
                    </p>
                    <p class="price">Current Price: 
                        <div class="ltc_price">
                            €
                        </div>
                    </p>
                    <p class="last_holding">Current Holding Price:
                        <div class="ltc_holding">
                        </div>
                    </p>
                    <p class="networth">Current Networth:
                        <div class="ltc_networth">
                            €
                        </div>
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
                        <div class="bnb_cash">
                            €
                        </div>
                    </p>
                    <p class="balance">Current Balance:
                        <div class="bnb_balance">
                            BTC
                        </div>
                    </p>
                    <p class="price">Current Price: 
                        <div class="bnb_price">
                            €
                        </div>
                    </p>
                    <p class="last_holding">Current Holding Price:
                        <div class="bnb_holding">
                        </div>
                    </p>
                    <p class="networth">Current Networth:
                        <div class="bnb_networth">
                            €
                        </div>
                    </p>
                </div>
            </section>
        </section>
    </div>

</body>
</html>