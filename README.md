# smartbroadcastify
Monitor/be alerted of anomalies in broadcastify's feed's listener counts with machine-learned reference data.

General:

Broadcastify is an emergency communications scanner aggregation service. When something newsworthy happens in some county, either because they heard gunfire themselves or because they read a tweet etc, people start flocking to a scanner feed. When a feed suddenly gets more listeners than it normally would, that is an early indicator of a newsworthy event occurring often well-before it makes the news, and being notified of such spikes may be useful for journalists and rubberneckers: http://www.broadcastify.com/listen/top, http://www.radioreference.com/apps/db/

Though there are already programs that monitor feeds for thresholds that exceed a certain number, such as bc-notify (Haskell) and Scanner Radio for Android, to cut down on false positives and negatives, it would be helpful to have something that knows how many users is normal at 1am Saturday in Chicago on a non-holiday weekend, for example, rather than a constant, static threshhold of 2K listeners at which point to notify the user.

Further helpful for this would be to implement crude voice recognition to listen to feeds for mentions of key terms like mass casualities, amber alert and active shooter. Perhaps a fork. The status of this is that it's just an idea that I'm excited about, haven't even decided which programming language to use, but wanted to start a repo while I am still motivated. If anyone wants to help, please contact me. 
-Doug


Updates: 

02/16: Though I have not yet posted the code, I have a proof of concept online: <a href="https://hmm.nyc/news">hmm.nyc/news</a>

02/21: Java coder Thomas (github: <a href="https://github.com/BlueMustache">BlueMustache</a>) has teamed up with me to help implement voice recognition to the project. Among things he is currently doing is experimenting with parsing <a href="http://wiki.radioreference.com/index.php/Expanded_APCO_10_Codes">ten codes</a> and using public APIs in case the math is very server-intensive or other services (like Google's) offer accurate transcription and allow multiple feeds. Several feeds of the higher crime rates would be a good start. If it is accurate enough to parse addresses, perhaps we can create some sort of a map. Lots of ways to swing it if progress is made.

02/24: Added a <a href="https://hmm.nyc/news/how.php">technical breakdown</a> with code snippets, will add to github. 

02/25: I cleaned up the code a bit to make it faster for me to modify things without having to repeat a single step fifty times. I created a second page solely for fire departments: <a href="https://hmm.nyc/news/fire.php">hmm.nyc/news/fire.php</a>
