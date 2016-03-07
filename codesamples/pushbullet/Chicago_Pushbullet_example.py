#!/bin/sh
city=Chicago 				##### example pushbullet alert
feed=763 				# broacastify.com feed count to include link in pushbullet alert
weather=`cat weather_Chicago.txt` 	# sets weather variable to be 39° overcast #!/bin/sh
url="https://spike.fyi" 		# defines my site URL
delta=`cat globalbusy.txt` 		# defines delta as minimum change of listeners for designated busy feeds
delay=`cat globalpbsleep.txt` 		# rate limits all the pushbulletting so I don't get banned for hammering too fast
snooze=`cat globalsnooze.txt` 		# forgot why I made this
tag="spike" 				# pushbullet channel tag
api="topsecretcode" 			# my pb api code (free so far)
root="broadcastify.com/listen/feed/"
time=`/usr/bin/thetime.sh`
mean=`st --mean "$city"now.txt` 	# sets mean as the typical Chicago listener count of the current hour from historical data
last=`cat "$city"last.txt` 		# sets last as Chicago's current listener count
dec=`echo "$last-$mean"` 		# figures out the spike figure but in decimal
change=`echo "($dec+0.5)/1" | bc` 	# sets change to be dec smoothed out and rounded
  if [ "$change" -ge "$delta" ]; then 	# here we go, in the event fo the change being greater than the minimum treshhold, pump out the pushbullet alert below when I hit the pb api
curl https://api.pushbullet.com/v2/pushes -u "$api": -d channel_tag="$tag" -d type=note -d title="$city $last listeners ↑$change, Δ$delta, $weather, $time EST" -d body="stream $root$feed home $url" -X POST;
sleep "$delay"; 			# waits a few seconds
chmod uoga-x chipu.sh;sleep "$snooze"; 	# so as not to push eighty Chicago alerts every three minutes, by chmodding, the script takes itself out of commission, then sleeps for $snooze (EG, 3 hours)
 fi					# closes the if/then
chmod uoga+x chipu.sh 			# after sleeping, it makes it self executable again, and puts the alert back into play

### This pushbullet alert looks like:
#
# San_Bernardino 98 listeners ↑37, Δ35, 61° haze, 10:25:56 ET
# stream broadcastify.com/listen/feed/12443 home https://spike.fyi
#
### which you may see here: https://www.pushbullet.com/#following/spike
