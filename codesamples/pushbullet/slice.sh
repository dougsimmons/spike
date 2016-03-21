#!/bin/sh
# Execute this against a feed listener counts log to extract 
# the data points of the current hour of the current weekday 
# going back a month to subsuequently calculate the mean.
# Explained here: https://spike.fyi/how.php
# EG ./slice.sh chicago.log

log="$1"
hr07=$(date --date="7 days ago" +"%m"-"%d")"|$(date +"%H")"
hr14=$(date --date="14 days ago" +"%m"-"%d")"|$(date +"%H")"
hr21=$(date --date="21 days ago" +"%m"-"%d")"|$(date +"%H")"
hr28=$(date --date="28 days ago" +"%m"-"%d")"|$(date +"%H")"
eval "grep '$hr07' $log"
eval "grep '$hr14' $log"
eval "grep '$hr21' $log"
eval "grep '$hr28' $log"
