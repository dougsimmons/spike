#!/bin/sh
city=cincinnati
hr=$(date +"%H")  				# sets hr to be the current hour of the day that the script runs
tail -n 1 "$city".log| sed 's/^......................//' > "$city"last.txt 	# creats cincinnati.txt containing just current number of listeners
grep "$hr:" "$city".log| sed 's/^......................//' > "$city"now.txt  	# outputs all listener counts from the current hour but of previous days into cincinnatinow.txt
cat "$city"last.txt > "$city"pair.txt 		# begins "pair" file containing the current count one the first line...
st --mean "$city"now.txt >> "$city"pair.txt 	# calculates mean of #s in cincinnatinow.txt (historical data), adds as 2nd line to cincinnatipair.txt
dev=`st --stddev "$city"pair.txt` 		# outputs the standard deviation of the mean and current count using st, https://github.com/nferraz/st
echo "($dev+0.5)/1" | bc 			# rounds and echos figure to the nearest whole number
