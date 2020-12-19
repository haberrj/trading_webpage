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
                        </div>
                        €
                    <p>
                    <p class="balance_btc">Current Balance:
                        <div id="btc_balance">
                            <script type="text/javascript">
                                function btcBalanceQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BTC', type: 'balance'}),
                                        success: function(data){
                                            $('#btc_balance').html(data);
                                        }
                                    });
                                }
                                btcBalanceQuery();
                                setTimeout(btcBalanceQuery, 5000);
                            </script>
                        </div>
                        BTC
                    </p>
                    <p class="price_btc">Current Price: 
                        <div id="btc_price">
                            <script type="text/javascript">
                                function btcPriceQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BTC', type: 'current_price'}),
                                        success: function(data){
                                            $('#btc_price').html(data);
                                        }
                                    });
                                }
                                btcPriceQuery();
                                setTimeout(btcPriceQuery, 5000);
                            </script>
                        </div>
                        €
                    </p>
                    <p class="last_holding_btc">Current Holding Price:
                        <div id="btc_holding">
                            <script type="text/javascript">
                                function btcHoldingQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BTC', type: 'holding_price'}),
                                        success: function(data){
                                            $('#btc_holding').html(data);
                                        }
                                    });
                                }
                                btcHoldingQuery();
                                setTimeout(btcHoldingQuery, 5000);
                            </script>
                        </div>
                    </p>
                    <p class="networth_btc">Current Networth:
                        <div id="btc_networth">
                            <script type="text/javascript">
                                function btcNetworthQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BTC', type: 'networth'}),
                                        success: function(data){
                                            $('#btc_networth').html(data);
                                        }
                                    });
                                }
                                btcNetworthQuery();
                                setTimeout(btcNetworthQuery, 5000);
                            </script>
                        </div>
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
                    <p class="cash_eth">Allocated Cash Amount:
                        <div id="eth_cash">
                            <script type="text/javascript">
                                function ethCashQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'ETH', type: 'cash'}),
                                        success: function(data){
                                            $('#eth_cash').html(data);
                                        }
                                    });
                                }
                                ethCashQuery();
                                setTimeout(ethCashQuery, 5000);
                            </script>
                        </div>
                        €
                    <p>
                    <p class="balance_eth">Current Balance:
                        <div id="eth_balance">
                            <script type="text/javascript">
                                function ethBalanceQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'ETH', type: 'balance'}),
                                        success: function(data){
                                            $('#eth_balance').html(data);
                                        }
                                    });
                                }
                                ethBalanceQuery();
                                setTimeout(ethBalanceQuery, 5000);
                            </script>
                        </div>
                        ETH
                    </p>
                    <p class="price_eth">Current Price: 
                        <div id="eth_price">
                            <script type="text/javascript">
                                function ethPriceQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'ETH', type: 'current_price'}),
                                        success: function(data){
                                            $('#eth_price').html(data);
                                        }
                                    });
                                }
                                ethPriceQuery();
                                setTimeout(ethPriceQuery, 5000);
                            </script>
                        </div>
                        €
                    </p>
                    <p class="last_holding_eth">Current Holding Price:
                        <div id="eth_holding">
                            <script type="text/javascript">
                                function ethHoldingQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'ETH', type: 'holding_price'}),
                                        success: function(data){
                                            $('#eth_holding').html(data);
                                        }
                                    });
                                }
                                ethHoldingQuery();
                                setTimeout(ethHoldingQuery, 5000);
                            </script>
                        </div>
                    </p>
                    <p class="networth_eth">Current Networth:
                        <div id="eth_networth">
                            <script type="text/javascript">
                                function ethNetworthQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'ETH', type: 'networth'}),
                                        success: function(data){
                                            $('#eth_networth').html(data);
                                        }
                                    });
                                }
                                ethNetworthQuery();
                                setTimeout(ethNetworthQuery, 5000);
                            </script>
                        </div>
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
                    <p class="cash_ltc">Allocated Cash Amount:
                        <div id="ltc_cash">
                            <script type="text/javascript">
                                function ltcCashQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'LTC', type: 'cash'}),
                                        success: function(data){
                                            $('#ltc_cash').html(data);
                                        }
                                    });
                                }
                                ltcCashQuery();
                                setTimeout(ltcCashQuery, 5000);
                            </script>
                        </div>
                        €
                    <p>
                    <p class="balance_ltc">Current Balance:
                        <div id="ltc_balance">
                            <script type="text/javascript">
                                function ltcBalanceQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'LTC', type: 'balance'}),
                                        success: function(data){
                                            $('#ltc_balance').html(data);
                                        }
                                    });
                                }
                                ltcBalanceQuery();
                                setTimeout(ltcBalanceQuery, 5000);
                            </script>
                        </div>
                        LTC
                    </p>
                    <p class="price_ltc">Current Price: 
                        <div id="ltc_price">
                            <script type="text/javascript">
                                function ltcPriceQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'LTC', type: 'current_price'}),
                                        success: function(data){
                                            $('#ltc_price').html(data);
                                        }
                                    });
                                }
                                ltcPriceQuery();
                                setTimeout(ltcPriceQuery, 5000);
                            </script>
                        </div>
                        €
                    </p>
                    <p class="last_holding_ltc">Current Holding Price:
                        <div id="ltc_holding">
                            <script type="text/javascript">
                                function ltcHoldingQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'LTC', type: 'holding_price'}),
                                        success: function(data){
                                            $('#ltc_holding').html(data);
                                        }
                                    });
                                }
                                ltcHoldingQuery();
                                setTimeout(ltcHoldingQuery, 5000);
                            </script>
                        </div>
                    </p>
                    <p class="networth_ltc">Current Networth:
                        <div id="ltc_networth">
                            <script type="text/javascript">
                                function ltcNetworthQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'LTC', type: 'networth'}),
                                        success: function(data){
                                            $('#ltc_networth').html(data);
                                        }
                                    });
                                }
                                ltcNetworthQuery();
                                setTimeout(ltcNetworthQuery, 5000);
                            </script>
                        </div>
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
                    <p class="cash_bnb">Allocated Cash Amount:
                        <div id="bnb_cash">
                            <script type="text/javascript">
                                function bnbCashQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BNB', type: 'cash'}),
                                        success: function(data){
                                            $('#bnb_cash').html(data);
                                        }
                                    });
                                }
                                bnbCashQuery();
                                setTimeout(bnbCashQuery, 5000);
                            </script>
                        </div>
                        €
                    <p>
                    <p class="balance_bnb">Current Balance:
                        <div id="bnb_balance">
                            <script type="text/javascript">
                                function bnbBalanceQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BNB', type: 'balance'}),
                                        success: function(data){
                                            $('#bnb_balance').html(data);
                                        }
                                    });
                                }
                                bnbBalanceQuery();
                                setTimeout(bnbBalanceQuery, 5000);
                            </script>
                        </div>
                        BNB
                    </p>
                    <p class="price_bnb">Current Price: 
                        <div id="bnb_price">
                            <script type="text/javascript">
                                function bnbPriceQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BNB', type: 'current_price'}),
                                        success: function(data){
                                            $('#bnb_price').html(data);
                                        }
                                    });
                                }
                                bnbPriceQuery();
                                setTimeout(bnbPriceQuery, 5000);
                            </script>
                        </div>
                        €
                    </p>
                    <p class="last_holding_bnb">Current Holding Price:
                        <div id="bnb_holding">
                            <script type="text/javascript">
                                function bnbHoldingQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BNB', type: 'holding_price'}),
                                        success: function(data){
                                            $('#bnb_holding').html(data);
                                        }
                                    });
                                }
                                bnbHoldingQuery();
                                setTimeout(bnbHoldingQuery, 5000);
                            </script>
                        </div>
                    </p>
                    <p class="networth_bnb">Current Networth:
                        <div id="bnb_networth">
                            <script type="text/javascript">
                                function bnbNetworthQuery() {
                                    $.ajax({
                                        url: 'Frontend/php/interaction_with_jq.php',
                                        type: 'POST',
                                        dataType: 'json',
                                        data: ({curr: 'BNB', type: 'networth'}),
                                        success: function(data){
                                            $('#bnb_networth').html(data);
                                        }
                                    });
                                }
                                bnbNetworthQuery();
                                setTimeout(bnbNetworthQuery, 5000);
                            </script>
                        </div>
                        €
                    </p>
                </div>
            </section>
        </section>
    </div>

</body>
</html>