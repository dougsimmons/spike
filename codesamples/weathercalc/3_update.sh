#!/bin/sh
# the first two scripts output "(['40'], ['Mist'])"
# this here script takes that output and pipes it through seven seds and one awk
# that output"(['40'], ['Mist'])" into "40° mist", saving it to a file that the php
# in the index script reads and displays on the site, and is also used in the 
# pushbullet alerts (https://www.pushbullet.com/#following/spike)
delay=4
./1_weacin.py;./2_webcin.py|sed 's/[])(]//g'|sed 's/[[)(]//g'|sed "s/'//g"|awk '{print tolower($0)}'|sed 's/partly //g'|sed 's/unknown //g'|sed 's/light //g'|sed 's/,/°/g' > weather_Cincinnati.txt;sleep $delay
# etc
