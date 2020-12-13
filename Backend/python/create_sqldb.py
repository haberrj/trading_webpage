#!/usr/bin/python3

# Author: Ron Haber
# Date: 12.12.2020
# This script will take an input csv file and create a database for it
# This will only work for the individual transaction files

import os, sys
import os.path
import sqlite3, csv
import argparse

parser = argparse.ArgumentParser(description="Find the ideal thresholds for any currency.")
parser.add_argument("-c", "--excel", type=str, required=True, help="The csv file that will be converted to a database")
parser.add_argument("-n", "--name", type=str, required=True, help="The name of the target database")

args = parser.parse_args()
excel = str(args.excel)
name = str(args.name) + ".db"
direc = "/home/ronhaber/Documents/Webpage/"

def CheckIfFileExists(filename):
    # Will also remove the file if it exists
    return os.path.isfile(filename)

def CreateNewDB(value):
    new_db = direc + value
    print(value)
    with open(new_db, "w") as new_file:
        print("New DB file created at: ", new_db)
    return new_db

def PopulateNewDB(db_file, csv_data):
    con = sqlite3.connect(db_file)
    cur = con.cursor()
    cur.execute("CREATE TABLE transactions (time, name, id, price, status, coin, type);")
    print("DB Header created")
    cur.executemany("INSERT INTO transactions (time, name, id, price, status, coin, type) VALUES(?, ?, ?, ?, ?, ?, ?);", csv_data)
    print("DB populated")
    con.commit()
    con.close()

def AppendDB(db_file, csv_data):
    con = sqlite3.connect(db_file)
    cur = con.cursor()
    cur.execute("INSERT INTO transactions (time, name, id, price, status, coin, type) VALUES(?, ?, ?, ?, ?, ?, ?);", csv_data)
    print("New line added to the database")
    con.commit()
    con.close()

def ReadAllValuesFromCSV(csv_file):
    with open(csv_file, "r") as data_file:
        data = csv.DictReader(data_file)
        to_db = [(i['time'], i['name'], i['id'], i['price'], i['status'], i['coin'], i['type']) for i in data]
    return to_db

def ReadMostRecentValueFromCSV(csv_file):
    csv_data = ReadAllValuesFromCSV(csv_file)
    relevant_data = csv_data[-1]
    return relevant_data

def CheckIfValueIsAlreadyWritten(csv_data, db_file):
    con = sqlite3.connect(db_file)
    cur = con.cursor()
    result = cur.execute("SELECT * FROM transactions").fetchall()[-1]
    cur.close()
    if(csv_data[0] == result[0]):
        print("Value already exists")
        return True
    else:
        print("Adding new data")
        return False

if __name__ == "__main__":
    db_direc = direc + name
    if(CheckIfFileExists(db_direc)):
        try:
            csv_data = ReadMostRecentValueFromCSV(excel)
        except FileNotFoundError:
            print("CSV file not found")
            sys.exit()
        check = CheckIfValueIsAlreadyWritten(csv_data, db_direc)
        if(check):
            sys.exit()
        else:
            AppendDB(db_direc, csv_data)
    else:
        new_db = CreateNewDB(name)
        print(new_db)
        csv_data = ReadAllValuesFromCSV(excel)
        PopulateNewDB(new_db, csv_data)
