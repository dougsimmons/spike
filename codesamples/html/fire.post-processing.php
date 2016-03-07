<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<!--<meta http-equiv="refresh" content="470; url=./">-->
<meta name="viewport" content="width=device-width, initial-scale=0.95">
<title>spike: fresh news from broadcastify's metadata: fire freqs</title>
<link href='style3.css' rel='stylesheet'> 
<!--<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<link href='sons-of-obsidian.css' rel='stylesheet'>-->
<script type="text/javascript" src="jquery-latest.js"></script> 
<script type="text/javascript" src="jquery.tablesorter.js"></script>  
<!--
<script>if (window.parent == window) {var _gaq = _gaq || [];_gaq.push([_setAccount, UA-74367294-1]);_gaq.push([_setDomainName,
spike.fyi]);_gaq.push([_setAllowLinker, true]);_gaq.push([_trackPageview]);(function() {var ga = document.createElement(script); ga.type =
text/javascript;ga.async = true;ga.src = /ga2/ga.js;var s = document.getElementsByTagName(script)[0];s.parentNode.insertBefore(ga, s);})();}</script>
-->


<!--<script>if (window.parent == window) {var _gaq = _gaq || [];_gaq.push([_setAccount, UA-74367294-1]);_gaq.push([_setDomainName,
spike.fyi]);_gaq.push([_setAllowLinker, true]);_gaq.push([_trackPageview]);(function() {var ga = document.createElement(script); ga.type =
text/javascript;ga.async = true;ga.src = /google/analytics.js;var s = document.getElementsByTagName(script)[0];s.parentNode.insertBefore(ga, s);})();}</script>
-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','/google/analytics.js','ga');

  ga('create', 'UA-74367294-1', 'auto');
  ga('send', 'pageview');

</script>

<!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74367294-1', 'auto');
  ga('send', 'pageview');

</script>
-->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.spike.fyi","*.spike.fyi","*.spike.hmm.nyc"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//spike.fyi/data/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 3]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//spike.fyi/data/piwik.php?idsite=3" style="border:0;" alt=""/></p></noscript>
<!-- End Piwik Code -->


<!--<link href='https://fonts.googleapis.com/css?family=Varela+Round|Karla' rel='stylesheet' type='text/css'>-->
<style>
p, td, tablesorter, th { font-family: 'Karla', sans-serif;
}
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 400;
  src: local('Karla'), local('Karla-Regular'), url(/karla.ttf) format('truetype');
}
@font-face {
  font-family: 'Varela Round';
  font-style: normal;
  font-weight: 400;
  src: local('Varela Round'), local('VarelaRound-Regular'), url(/valera.ttf) format('truetype');
}

</style>
</head><BODY>
<div class='page'>
  <div class='inner'>
<BR><p class="inner">
<p style="text-align:left;" class="inner">
spike
<span style="float:right;">
spot events using <a href="http://www.broadcastify.com" title="Broadcastify - Live Police, Fire, EMS, Aircraft, and Rail Audio Feeds" target="_blank">broadcastify</a>'s metadata
</span>
</p>
<BR>
<p class="inner" style="text-align:left;">


<a href="/" title="data on police departments">police</a>&nbsp&nbsp&nbsp&nbsp
fire&nbsp&nbsp&nbsp&nbsp
<a href="/about.php" title="worth reading...">about</a>&nbsp&nbsp&nbsp&nbsp
<a href="/email.php" title="sign up to receive email alerts when cities spike">alerts</a>&nbsp&nbsp&nbsp&nbsp
<a href="/thresh.php" title="define email alert threshold (test)">thresholds</a>&nbsp&nbsp&nbsp&nbsp
<a href="https://github.com/dougsimmons/smartbroadcastify" title="github repo for spike" target="_blank">github</a>
<span style="float:right;">
realtime alerts via <a href="https://www.pushbullet.com/channel-popup?tag=spike" title="https://www.pushbullet.com/channel-popup?tag=spike">pushbullet</a>

<!--realtime alerts:
<a class="pushbullet-subscribe-widget" data-channel="spike" data-widget="button" data-size="small"></a>
<script type="text/javascript">(function(){var a=document.createElement('script');a.type='text/javascript';a.async=true;a.src='https://widget.pushbullet.com/embed.js';var b=document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a,b);})();</script>
-->
</span>

<table id="myTable" class="tablesorter">
	   <thead>
        <tr>
		<th>fire dept</th>
        <th>listeners</th>
        <!--<th>&#8595; &#916; (vs x&#772;)</th>-->
        <th>&#8595; &#916; (vs x&#772;)</th>
        <th>σ</th>
        <th>σ2</th>
		<th>weather &#8457;</th>
		<th>links</th>

        </tr>
      </thead>
      <tbody>
        <tr>
        <td>Providence RI
		</td>
        <td>19</td>
        <td class="status">4</td>
        <td>2.0
</td>
        <td>4.0
</td>
		<td>36° cloudy 
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/14921" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Providence%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Providence+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.providenceri.com/fire" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Providence,+RI/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
        </tr> `

	
	<tr>
        <td>FDNY
		</td>
        <td>94</td>
        <td class="status">-7</td>
        <td>4.0
</td>
        <td>16.0
</td>
		<td>37° cloudy
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/9358" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=FDNY%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=FDNY&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="https://apps.usfa.fema.gov/civilian-fatalities/incident/reportList/New%20York" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/New+York,+NY/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
		</tr>
	<tr>
        <td>Newark NJ
		</td>
        <td>12</td>
        <td class="status">0</td>
        <td>0.0
</td>
        <td>0.0
</td>
		<td>39° cloudy 
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/818" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Newark%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Newark+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.nj.gov/dca/divisions/dfs/pdf/fire_in_nj_2014.pdf" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Newark,+NJ/"><img src="./googmap.png" title="google maps location"></a>
        </td>

	
	<tr>
        <td>Philly north
		</td>
        <td>13</td>
        <td class="status">1</td>
        <td>0.0
</td>
        <td>0.0
</td>
		<td>41° cloudy 
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/18738" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Philadelphia%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Philadelphia+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.phillyfirenews.com/2015/01/05/philadelphia-year-end-2014-report/" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Philadelphia,+PA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Philly south
		</td>
        <td>21</td>
        <td class="status">7</td>
        <td>4.0
</td>
        <td>14.0
</td>
		<td>41° cloudy 
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/15747" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Philadelphia%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Philadelphia+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.phillyfirenews.com/2015/01/05/philadelphia-year-end-2014-report/" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Philadelphia,+PA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
  	<tr>
        <td>Flint MI
		</td>
        <td>2</td>
        <td class="status">0</td>
        <td>1.0
</td>
        <td>0.0
</td>
		<td>35° haze
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/7815" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Flint%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Flint+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Flint,+MI/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
   	<tr>
        <td>Toledo, OH
		</td>
        <td>61</td>
        <td class="status">14</td>
        <td>7.0
</td>
        <td>47.0
</td>
		<td>34&deg; snow
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/22077" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Toledo%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Toledo+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Toledo,+OH/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
   	<tr>
        <td>Cincinnati, OH
		</td>
        <td>8</td>
        <td class="status">0</td>
        <td>0.0
</td>
        <td>0.0
</td>
		<td>40°  mist
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/5184" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Cincinnati%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Cincinnati+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Cincinnati,+OH/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
 
  	<tr>
        <td>Rochester, NY
		</td>
        <td>4</td>
        <td class="status">1</td>
        <td>0.0
</td>
        <td>0.0
</td>
		<td>32° cloudy 
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/10348" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Rochester%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Rochester+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.cityofrochester.gov/rfd/" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Rochester,+NY/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
 
  	<tr>
        <td>Evansville, IN
		</td>
        <td>0</td>
        <td class="status">-39</td>
        <td>20.0
</td>
        <td>405.0
</td>
		<td>52° cloudy 
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/3691" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Evansville%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Evansville+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.evansville.in.gov/index.aspx?page=53" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Evansville,+IN/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
 
  	<tr>
        <td>Louisville, KY
		</td>
        <td>7</td>
        <td class="status">0</td>
        <td>0.0
</td>
        <td>0.0
</td>
		<td>46° haze
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/8582" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Louisville%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Louisville+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://louiestat.louisvilleky.gov/node/18/date/2015-12-16" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Louisville,+KY/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
 
  	<tr>
        <td>Hartford, CT
		</td>
        <td>10</td>
        <td class="status">1</td>
        <td>1.0
</td>
        <td>0.0
</td>
		<td>37° sunny
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/387" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Hartford%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Hartford+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.hartford.gov/fire" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Hartford,+CT/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
 
  	<tr>
        <td>Columbus, OH
		</td>
        <td>35</td>
        <td class="status">5</td>
        <td>3.0
</td>
        <td>8.0
</td>
		<td>41°  overcast 
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/11148" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Columbus%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Columbus+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="https://www.columbus.gov/Templates/Detail.aspx?id=65449" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Columbus,+OH/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
 
  	<tr>
        <td>Charlotte, NC
		</td>
        <td>12</td>
        <td class="status">-8</td>
        <td>4.0
</td>
        <td>19.0
</td>
		<td>54° cloudy 
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/13058" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Charlotte%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Charlotte+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://fdmaps.com/charlotte-fire-department-eng-2012/" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Charlotte,+NC/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
 
 
  	<tr>
        <td>Birmingham, AL
		</td>
        <td>3</td>
        <td class="status">-3</td>
        <td>2.0
</td>
        <td>3.0
</td>
		<td>61° sunny
</td>
		<td><a href="http://www.broadcastify.com/listen/feed/22133" target="_blank"><img src="xaudio.png.pagespeed.ic.yGQphOfnTS.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Birmingham%20fire%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Birmingham+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://fire.birminghamal.gov/" target=_blank"><img src="./fire.png" title="area fire info"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Birmingham,+AL/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
    </tr>
 
 
      </tbody>
    </table></center>
<!--	change email alert thresholds for delta value <a href="/email.php">here</a> -->

<p class="page">
<B>
26230</B> BC listeners on 5661 BC feeds at 9:54:12 EST.
Tracking 7608 on 66.0 here,
which is 29.0% of BC's listeners using 1.2% of BC's feeds. Sum of <!--&#916; x&#772;--> delta/means -46 (the higher, the more fire).<BR>
Weather updated 14:48 EST.<BR><BR>
</tr>
</table>

<a class="pushbullet-subscribe-widget" data-channel="spike" data-widget="button" data-size="small"></a>
<script type="text/javascript">(function(){var a=document.createElement('script');a.type='text/javascript';a.async=true;a.src='https://widget.pushbullet.com/embed.js';var b=document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a,b);})();</script>
<BR><BR>
<a href="#top">top</a>

<BR>&nbsp<BR>&nbsp<BR>
- - - - -<BR>&nbsp<BR>
<p class="inner"><B>about</B><BR>&nbsp<BR>
This table represents the likelihood of one or more newsworthy events occuring in each city, the first and greenest line being the most probable, descending toward the least probability of catastrophe.<BR><BR>
It is calculated by comparing the current number of listeners to each city's respective scanner feed from <a href="http://www.broadcastify.com">broadcastify.com</a> to what my server has learned through crude "machine learning" to be the typical listener count for that feed and for a given time of day.<BR><BR>
Calculating listener count data collected from Broadcastify against some historical data enables this system to provide a "smart" dynamic 
threshold of identifying anomalous feed activity quickly, well before CNN gets it and often before local news picks up the stories, as it's proven already. <BR><BR>
This is only a proof of concept of number crunching made pretty with a front-end and not intended to be a public website, rather an active project. It performs email alerts, which are vital in learning of events early; however I have not yet programmed a signup page. Almost!<BR><BR>
Scripting languages involved include bash, Python and PHP, running on a Debian Linux server. If you're interested in how this thing works, read <a href="/x.php" title="technical explanation">this</a> (warning, way too verbose).<br>&nbsp<br>
Doug Simmons<BR>&nbsp<BR>
<a href="https://www.linkedin.com/in/douglassimmons">linkedin</a>, <a href="https://github.com/dougsimmons">github</a>, <a href="/job/DougSimmonsResume_Aug2015.pdf" title="DougSimmonsResume_Aug2015.pdf">resume</a>
<BR>&nbsp<BR>&nbsp<BR><BR>&nbsp


<BR>
<a href="/">home</a><BR><BR>
<!--<a href="/how.php"><strong>technical runthrough</strong></a><BR>-->
<!--<BR><BR><BR><BR>&nbsp<BR>&nbsp<BR>&nbsp<BR>&nbsp<BR>&nbsp<BR>&nbsp<BR>&nbsp<BR><BR>&nbsp<BR>&nbsp<BR><a name="technical"></a> -->

 </div>
</div>

</P>

<script>
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 

$(document).ready(function() { 
    // call the tablesorter plugin 
    $("table").tablesorter({ 
        // sort on the first column and third column, order asc 
        sortList: [[2,1]] 
    }); 
}); 



   </script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() < 0;
      })
      .parent().css('background-color', '#FFF9F7');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 0;
      })
      .parent().css('background-color', '#E9FFE9');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 1;
      })
      .parent().css('background-color', '#D1FFD1');
});

</script>


<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 4;
      })
      .parent().css('background-color', '#B2FFB2');
});

</script>
<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 6;
      })
      .parent().css('background-color', '#92FF92');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 8;
      })
      .parent().css('background-color', '#7BFF7B');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 11;
      })
      .parent().css('background-color', '#5DFF5D');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 15;
      })
      .parent().css('background-color', '#40FF40');
});

</script>


<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 20;
      })
      .parent().css('background-color', '#2BFF2B');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 30;
      })
      .parent().css('background-color', '#16FF16');
});

</script>


<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 35;
      })
      .parent().css('background-color', '#00FF00');
});

</script>


<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 40;
      })
      .parent().css('background-color', '#00EB00');
});

</script>


<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 50;
      })
      .parent().css('background-color', '#00DB00');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 75;
      })
      .parent().css('background-color', '#00C700');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 90;
      })
      .parent().css('background-color', '#00BA00');
});

</script>


<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 120;
      })
      .parent().css('background-color', '#00AE00');
});

</script>
   


<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 150;
      })
      .parent().css('background-color', '#00A100');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 200;
      })
      .parent().css('background-color', '#009300');
});

</script>

</BODY>
</html>

