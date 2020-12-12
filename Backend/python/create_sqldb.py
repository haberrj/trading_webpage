# Author: Ron Haber
# Date: 12.12.2020
# This script will take an input csv file and create a database for it

import sqlite3
import argparse

parser = argparse.ArgumentParser(description="Find the ideal thresholds for any currency.")
parser.add_argument("-d", "--home", type=str, required=True, help="The directory for artifacts")
parser.add_argument("-i", "--currencies", type=str, nargs="+", required=True, help="The names of currencies")
parser.add_argument("-p", "--commission", type=float, required=True, help="The commission percentage taken by the broker")
parser.add_argument("-t", "--test", type=int, required=True, help="Should the program run a demo on the prices, 1 to execute, 0 for just prices")

args = parser.parse_args()
home = str(args.home)