#! /usr/bin/python
import csv, os
from collections import defaultdict # extracts the weather data I want, temperature and description, from the csv
city="Cincinnati"

path="/var/log/scanners/"
#deg = u'\N{DEGREE SIGN}'
columns = defaultdict(list) # each value in each column is appended to a list

with open(""+path+""+city+"temp.csv") as f:
    reader = csv.DictReader(f) # read rows into a dictionary format
    for row in reader: # read a row as {column1: value1, column2: value2,...}
        for (k,v) in row.items(): # go over each column name and value 
            columns[k].append(v) # append the value into the appropriate list

print((columns['temp_F']),(columns['weatherDesc']))

