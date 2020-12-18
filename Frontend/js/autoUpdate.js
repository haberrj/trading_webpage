$(document).ready(function (){
    //BTC
    var auto_refresh_BTC_cash = setInterval(
        function()
        {
            $('#btc_cash').load('../php/interaction_with_jq.php', {'curr': 'BTC', 'type': 'cash'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_BTC_Price = setInterval(
        function()
        {
            $('#btc_price').load('../php/interaction_with_jq.php', {'curr': 'BTC', 'type': 'current_price'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_BTC_Holding = setInterval(
        function()
        {
            $('#btc_holding').load('../php/interaction_with_jq.php', {'curr': 'BTC', 'type': 'holding_price'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_BTC_Balance = setInterval(
        function()
        {
            $('#btc_balance').load('../php/interaction_with_jq.php', {'curr': 'BTC', 'type': 'balance'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_BTC_Networth = setInterval(
        function()
        {
            $('#btc_networth').load('../php/interaction_with_jq.php', {'curr': 'BTC', 'type': 'networth'}).fadeIn("slow");
        }, 10000);
    //ETH
    var auto_refresh_ETH_cash = setInterval(
        function()
        {
            $('#eth_cash').load('../php/interaction_with_jq.php', {'curr': 'ETH', 'type': 'cash'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_ETH_Price = setInterval(
        function()
        {
            $('#eth_price').load('../php/interaction_with_jq.php', {'curr': 'ETH', 'type': 'current_price'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_ETH_Holding = setInterval(
        function()
        {
            $('#eth_holding').load('../php/interaction_with_jq.php', {'curr': 'ETH', 'type': 'holding_price'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_ETH_Balance = setInterval(
        function()
        {
            $('#eth_balance').load('../php/interaction_with_jq.php', {'curr': 'ETH', 'type': 'balance'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_ETH_Networth = setInterval(
        function()
        {
            $('#eth_networth').load('../php/interaction_with_jq.php', {'curr': 'ETH', 'type': 'networth'}).fadeIn("slow");
        }, 10000);
    //LTC
    var auto_refresh_LTC_cash = setInterval(
        function()
        {
            $('#ltc_cash').load('../php/interaction_with_jq.php', {'curr': 'LTC', 'type': 'cash'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_LTC_Price = setInterval(
        function()
        {
            $('#ltc_price').load('../php/interaction_with_jq.php', {'curr': 'LTC', 'type': 'current_price'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_LTC_Holding = setInterval(
        function()
        {
            $('#ltc_holding').load('../php/interaction_with_jq.php', {'curr': 'LTC', 'type': 'holding_price'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_LTC_Balance = setInterval(
        function()
        {
            $('#ltc_balance').load('../php/interaction_with_jq.php', {'curr': 'LTC', 'type': 'balance'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_LTC_Networth = setInterval(
        function()
        {
            $('#ltc_networth').load('../php/interaction_with_jq.php', {'curr': 'LTC', 'type': 'networth'}).fadeIn("slow");
        }, 10000);
    //BNB
    var auto_refresh_BNB_cash = setInterval(
        function()
        {
            $('#bnb_cash').load('../php/interaction_with_jq.php', {'curr': 'BNB', 'type': 'cash'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_BNB_Price = setInterval(
        function()
        {
            $('#bnb_price').load('../php/interaction_with_jq.php', {'curr': 'BNB', 'type': 'current_price'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_BNB_Holding = setInterval(
        function()
        {
            $('#bnb_holding').load('../php/interaction_with_jq.php', {'curr': 'BNB', 'type': 'holding_price'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_BNB_Balance = setInterval(
        function()
        {
            $('#bnb_balance').load('../php/interaction_with_jq.php', {'curr': 'BNB', 'type': 'balance'}).fadeIn("slow");
        }, 10000);
    var auto_refresh_BNB_Networth = setInterval(
        function()
        {
            $('#bnb_networth').load('../php/interaction_with_jq.php', {'curr': 'BNB', 'type': 'networth'}).fadeIn("slow");
        }, 10000);
}
)