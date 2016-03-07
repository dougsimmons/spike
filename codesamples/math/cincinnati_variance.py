#! /usr/bin/python
import subprocess
from py_descriptive_statistics import Enum   # calculates variance using https://github.com/gleicon/py_descriptive_statistics

city = 'cincinnati'

last = subprocess.check_output(["head", "-n", "1", "{}pair.txt".format(city)])
now = subprocess.check_output(["tail", "-n", "1", "{}pair.txt".format(city)])
last = float(last)
now = float(now)
enum = Enum([last,now])
rounded = round(enum.variance())
print rounded
