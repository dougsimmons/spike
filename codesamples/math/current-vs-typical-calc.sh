#!/bin/sh
city=cincinnati  		### Simple script to produce the most important figure,
				### the change in listenership versus what is typical of that hour of the day 
mean=`st --mean "$city"now.txt`
last=`cat "$city"last.txt`
dec=`echo "$last-$mean" | bc`
echo "($dec+0.5)/1" | bc

