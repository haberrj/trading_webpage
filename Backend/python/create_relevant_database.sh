#!/bin/bash
# Author: Ron Haber
# Date: 16.12.2020
# This script will execute the transfer between the .csv files and the .db files

while [1]
do
    now=$(date)
    echo $now

    # Transactions
    python3 /scripts/Backend/python/create_sqldb.py -c /database_files/Binance/Actual/CSV_Transactions/BTC_transactions.csv -n BTC_Transactions
    python3 /scripts/Backend/python/create_sqldb.py -c /database_files/Binance/Actual/CSV_Transactions/ETH_transactions.csv -n ETH_Transactions
    python3 /scripts/Backend/python/create_sqldb.py -c /database_files/Binance/Actual/CSV_Transactions/LTC_transactions.csv -n LTC_Transactions
    python3 /scripts/Backend/python/create_sqldb.py -c /database_files/Binance/Actual/CSV_Transactions/BNB_transactions.csv -n BNB_Transactions
    # Price Data
    python3 /scripts/Backend/python/create_sqldb.py -c /database_files/Binance/BTC_Realtime.csv -n BTC_Realtime
    python3 /scripts/Backend/python/create_sqldb.py -c /database_files/Binance/ETH_Realtime.csv -n ETH_Realtime
    python3 /scripts/Backend/python/create_sqldb.py -c /database_files/Binance/LTC_Realtime.csv -n LTC_Realtime
    python3 /scripts/Backend/python/create_sqldb.py -c /database_files/Binance/BNB_Realtime.csv -n BNB_Realtime
    # Cash Data
    python3 /scripts/Backend/python/create_sqldb.py -c /home/ronhaber/Binance/Actual/Balances/BTC_Balance.csv -n BTC_Balance
    python3 /scripts/Backend/python/create_sqldb.py -c /home/ronhaber/Binance/Actual/Balances/ETH_Balance.csv -n ETH_Balance
    python3 /scripts/Backend/python/create_sqldb.py -c /home/ronhaber/Binance/Actual/Balances/LTC_Balance.csv -n LTC_Balance
    python3 /scripts/Backend/python/create_sqldb.py -c /home/ronhaber/Binance/Actual/Balances/BNB_Balance.csv -n BNB_Balance

    echo "Complete!"
    sleep 45 # sleep 45 seconds
done