# spike
Monitor and get alerts of anomalies in broadcastify's feed's listener counts with machine-learned reference data.

Functional demo online: <strong><a href="http://spike.fyi/">spike.fyi</a></strong>
Anomaly alert feed: <a href="https://www.pushbullet.com/channel-popup?tag=spike" title="pushbullet #spike">pushbullet.com/channel-popup?tag=spike</a>

Broadcastify is an emergency communications scanner aggregation service. When something newsworthy happens in some county, either because they heard gunfire themselves or because they read a tweet etc, people start flocking to a scanner feed. When a feed suddenly gets more listeners than it normally would, that is an early indicator of a newsworthy event occurring often well-before it makes the news, and being notified of such spikes may be useful for journalists and rubberneckers: http://www.broadcastify.com/listen/top, http://www.radioreference.com/apps/db/

Though there are already programs that monitor feeds for thresholds that exceed a certain number, such as Scanner Radio for <a href="https://play.google.com/store/apps/details?id=com.scannerradio&hl=en" title="google play link">Android</a> and <a href="https://itunes.apple.com/us/app/scanner-radio-deluxe/id498405045?mt=8" title="iTunes link">iOS</a>, to cut down on false positives and negatives while increasing sensitivity, it would be helpful to have something that knows how many users is normal at 1am Saturday in Chicago on a non-holiday weekend, for example, rather than a constant, static threshhold of 2K listeners at which point to notify the user.

Further helpful for this would be to implement crude voice recognition (see 02/21 update below!) to listen to feeds for mentions of key terms like mass casualities, amber alert and active shooter. Perhaps a fork. The status of this is that it's just an idea that I'm excited about, haven't even decided which programming language to use, but wanted to start a repo while I am still motivated. If anyone wants to help, please contact me. 
-Doug


<strong>Changelog:</strong> 

02/16: Though I have not yet posted the code, I have a proof of concept running: <a href="http://spike.fyi/">spike.fyi</a>

02/21: Java coder Thomas (github: <a href="https://github.com/BlueMustache">BlueMustache</a>) has teamed up with me to help implement voice recognition to the project. Among things he is currently doing is experimenting with parsing <a href="http://wiki.radioreference.com/index.php/Expanded_APCO_10_Codes">ten codes</a> and using public APIs in case the math is very server-intensive or other services (like Google's) offer accurate transcription and allow multiple feeds. Several feeds of the higher crime rates would be a good start. If it is accurate enough to parse addresses, perhaps we can create some sort of a map. Lots of ways to swing it if progress is made.

02/24: Added a <a href="http://spike.fyi/x.php">technical breakdown</a> with code snippets, will add to github. 

02/25: I cleaned up the code a bit to make it faster for me to modify things without having to repeat a single step fifty times. I created a second page solely for fire departments: <a href="https://spike.fyi/fire.php">spike.fyi/fire.php</a>

02/26: Made the global sensitivity email alert thresholds work and added an alert signup request form. 

02/27: Made and submitted sitemap, robots.txt, changed url to https://spike.hmm.nyc with <a href="https://www.ssllabs.com/ssltest/analyze.html?d=spike.hmm.nyc&hideResults=on">strong ssl</a>, renamed repo from smartbroadcastify to spike, rebranded the site accordingly.

02/28: Changed host to <a href="http://spike.fyi">spike.fyi</a>, no ssl yet. Working on pushbullet support, looks promising. 

03/02: Added SSL, implemented Pushbullet (available to visitors https://www.pushbullet.com/channel-popup?tag=spike). Set the pb alerts to take themselves out of commission for a certain duration so as not to spam users with too many alerts. Searching for the best alert sensitivity threshold and alert snooze durations to make the site perform well without irritating users. 

03/03: Added weather! Violent crime and protests correlate with weather. Python was helpful (namely the csv lib). Using api.worldweatheronline.com, free access allows 250 reqs/day, presently just for police feeds (I have about 50 and 16 fire feeds). Weather updates by cron at hours 7, 10, 13, 20 EST which sounded about right.

03/04: Added weather info for fire feeds, converting weather description to lowercase (looks nicer).

<strong>To do:</strong> 

 • Push code/code samples to github
 
 • Try presenting the data in the form of a map overlay
 
 • Get some traffic -- meta keywords, markup etc 
 
 • Implement speech recognition
 
 • Clean up code to run more efficiently and to be more manageable (it's a mess).
