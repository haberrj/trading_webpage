# trading_webpage
For creating a webpage for the trading bot
This repo is meant to hold the frontend and backend files for running a webpage.
This will reflect my current holdings and produce a graph showing progress.

# docker instructions
BUILD
- docker build -t <name> .
RUN
- docker run -d --name <name> -p <port of device>:80 -v <Location of files>:/database_files/Binance haberrj/crypto-webpage:latest
