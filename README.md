# smartbroadcastify
Monitor/be alerted of anomalies in broadcastify's feed's listener counts with machine-learned reference data.

Updates: 

02/16: Though I have not yet posted the code, I have a proof of concept online: 

<a href="https://hmm.nyc/news">hmm.nyc/news</a>

02/21: Thomas <a href="https://github.com/BlueMustache">(github: BlueMustache)</a>, a Java coder, is teaming up with me to help implement voice recognition to the project. That will definitely make things interesting! Among things he is currently doing is experimenting with parsing <a href="http://wiki.radioreference.com/index.php/Expanded_APCO_10_Codes">ten codes</a>. I don't know yet how much server muscle will be needed to run recognition on a few dozen feeds, hope it doesn't break the bank.

02/26: I've created a second page solely for fire departments, hmm.nyc/news/fire.php

General:

Broadcastify is an emergency communications scanner aggregation service. When something newsworthy happens in some county, either because they heard gunfire themselves or because they read a tweet etc, people start flocking to a scanner feed. When a feed suddenly gets more listeners than it normally would, that is an early indicator of a newsworthy event occurring often well-before it makes the news, and being notified of such spikes may be useful for journalists and rubberneckers: http://www.broadcastify.com/listen/top, http://www.radioreference.com/apps/db/

Though there are already programs that monitor feeds for thresholds that exceed a certain number, such as bc-notify (Haskell) and Scanner Radio for Android, to cut down on false positives and negatives, it would be helpful to have something that knows how many users is normal at 1am Saturday in Chicago on a non-holiday weekend, for example, rather than a constant, static threshhold of 2K listeners at which point to notify the user.

Further helpful for this would be to implement crude voice recognition to listen to feeds for mentions of key terms like mass casualities, amber alert and active shooter. Perhaps a fork. The status of this is that it's just an idea that I'm excited about, haven't even decided which programming language to use, but wanted to start a repo while I am still motivated. If anyone wants to help, please contact me. 
-Doug
