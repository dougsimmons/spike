#! /usr/bin/python
import pycurl, linecache, csv, sys, argparse, os   # probably a couple unnecessary libs
from cStringIO import StringIO
from collections import defaultdict

city="Cincinnati"
zip="45021"
cityurl="Cincinnati,oh"
api_key="blah123"
columns = defaultdict(list)

def get(url):
        c = pycurl.Curl()
        buffer = StringIO()
        c.setopt(pycurl.WRITEFUNCTION, buffer.write)
        c.setopt(pycurl.URL, url)
        c.perform()
        return buffer.getvalue();

#weather=get("https://api.worldweatheronline.com/free/v2/weather.ashx?key="+api_key+"&q="+city+"&cc=yes&format=csv&num_of_days=1&show_comments=yes") 	# depending on what I need, I pick one of these,
#weather=get("https://api.worldweatheronline.com/free/v2/weather.ashx?key="+api_key+"&q="+zip+"&cc=yes&format=csv&num_of_days=1&show_comments=yes") 	# either the city name, the city and state, or the zip
weather=get("https://api.worldweatheronline.com/free/v2/weather.ashx?key="+api_key+"&q="+cityurl+"&cc=yes&format=csv&num_of_days=1&show_comments=yes")  # curls weather data from api using zip code

cold = open(""+city+"temp.txt", "w") # writes dump of data from API with column names of what will be a csv prepended
cold.write("observation_time,temp_C,temp_F,weatherCode,weatherIconUrl,weatherDesc,windspeedMiles,windspeedKmph,winddirDegree,winddir16Point,precipMM,humidity,visibilityKm,pressureMB,cloudcover")
cold.write(weather)
cold.close()

line1 = open(""+city+"temp.txt").readlines()[3]  # defines line1 as the line in the api return that lists column labels
line2 = open(""+city+"temp.txt").readlines()[11] # defines line2 as the "now" line of the api return containing the data of interest

write2csv = open(""+city+"temp.csv", "w")  	 # writes the two lines to Cincinnatitemp.csv, prepped for second python script which I ought to combine
write2csv.write(line1)
write2csv.write(line2)
write2csv.close
