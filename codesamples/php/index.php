<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<!--<meta http-equiv="refresh" content="600; url=./">-->
<meta name="viewport" content="width=device-width, initial-scale=0.95">
<title>spike: fresh news from broadcastify's metadata: police freqs</title>
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
<noscript><p><img src="//spike.fyi/data/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
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


police&nbsp&nbsp&nbsp&nbsp
<a href="/fire.php" title="data on fire departments">fire</a>&nbsp&nbsp&nbsp&nbsp
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


<table id="myTable" class="tablesorter">
	   <thead>
        <tr>
		<th>city</th>
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
        <td>Albuquerque
		</td>
        <td><?php $last=exec(escapeshellcmd("cat alblast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./albba.sh")); echo $change ?></td>
        <td><?php system('./stvalb.py'); ?></td>
        <td><?php system('./varalb.py'); ?></td>
	    <td><?php system('cat ./weaChicago.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/17469" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Albuquerque%20(police%20OR%20swat%20OR%20shooting%20OR%20shooter%20OR%20protest%20%23%20OR%20%23breaking)&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Albuquerque+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Albuquerque-New-Mexico.html" target=_blank><img src="./crime.png" title="area crime stats"></a>
		&nbsp&nbsp<a href="https://www.google.com/maps/place/Albuquerque,+NM/" target=_blank><img src="./googmap.png" title="google maps location"></a></td>


        <tr>
        <td>Boise
		</td>
        <td><?php $last=exec(escapeshellcmd("cat boilast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./boiba.sh")); echo $change ?></td>
        <td><?php system('./stvboi.py'); ?></td>
        <td><?php system('./varboi.py'); ?></td>
	    <td><?php system('cat ./weaBoise.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/9711" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Boise%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Boise+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Boise-Idaho.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Boise,+ID/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
        </tr> 

        <tr>
        <td>Providence RI 
		</td>
        <td><?php $last=exec(escapeshellcmd("cat prplast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./prpba.sh")); echo $change ?></td>
        <td><?php system('./stvprp.py'); ?></td>
        <td><?php system('./varprp.py'); ?></td>
		<td><?php system('cat ./weaProvidence.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/21809" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Providence%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Providence+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Providence-Rhode-Island.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Providence,+RI/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
        </tr> 

        <tr>
        <td>San Bernardino
		</td>
        <td><?php $last=exec(escapeshellcmd("cat sbolast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./sboba.sh")); echo $change ?></td>
        <td><?php system('./stvsbo.py'); ?></td>
        <td><?php system('./varsbo.py'); ?></td>
		<td><?php system('cat ./weaSan_Bernardino.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/12443" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=San%20Bernardino%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=San+Bernardino+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-San-Bernardino-California.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/San+Bernardino,+CA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
        </tr> 

        <tr>
        <td>Bangor ME
		</td>
        <td><?php $last=exec(escapeshellcmd("cat banlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./banba.sh")); echo $change ?></td>
        <td><?php system('./stvban.py'); ?></td>
        <td><?php system('./varban.py'); ?></td>
		<td><?php system('cat ./weaBangor.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/561" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Bangor%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Bangor+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Bangor-Maine.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Bangor,+ME/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
        </tr> 

<!--  <tr>
        <td>Jefferson AL
		</td>
        <td><?php $last=exec(escapeshellcmd("cat alalast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./alaba.sh")); echo $change ?></td>
        <td><?php system('./stvala.py'); ?></td>
        <td><?php system('./varala.py'); ?></td>
		<td><?php system('cat ./weaJefferson.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/21549" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Salem%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Salem+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Salem-Wisconsin.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Salem,+WI/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
        </tr> 
-->
	  <tr>
        <td>Salem OR
		</td>
        <td><?php $last=exec(escapeshellcmd("cat slmlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./slmba.sh")); echo $change ?></td>
        <td><?php system('./stvslm.py'); ?></td>
        <td><?php system('./varslm.py'); ?></td>
		<td><?php system('cat ./weaSalem.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/17769" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Salem%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Salem+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Salem-Oregon.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Salem,+OR/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
        </tr> 

		
		
		
        <tr>
        <td>Stratford CT
		</td>
        <td><?php $last=exec(escapeshellcmd("cat strlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./strba.sh")); echo $change ?></td>
        <td><?php system('./stvstr.py'); ?></td>
        <td><?php system('./varstr.py'); ?></td>
		<td><?php system('cat ./weaStratford.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/7546" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Stratford%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Stratford+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Stratford-Connecticut.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Stratford,+CT/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
        </tr> 

		<tr>
        <td>Chicago 
		</td>
		<td><?php $last=exec(escapeshellcmd("cat chilast.txt")); echo $last ?></td>
		<td class="status"><?php $change=exec(escapeshellcmd("./chiba.sh")); echo $change ?></td>
        <td><?php system('./stvchi.py'); ?></td>
        <td><?php system('./varchi.py'); ?></td>
		<td><?php system('cat ./weaChicago.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/763" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
        &nbsp&nbsp<a href="https://twitter.com/search?q=Chicago%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
        &nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Chicago+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Chicago-Illinois.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Chicago,+IL/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr>
        <tr>
        <td>Phoenix AZ 
		</td>
		<td><?php $last=exec(escapeshellcmd("cat arilast.txt")); echo $last ?></td>
		<td class="status"><?php $change=exec(escapeshellcmd("./ariba.sh")); echo $change ?></td>
        <td><?php system('./stvari.py'); ?></td>
        <td><?php system('./varari.py'); ?></td>
		<td><?php system('cat ./weaPhoenix.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/12145"> <img src="./audio.png" title="broadcastify scanner feed"></a>
        &nbsp&nbsp<a href="https://twitter.com/search?q=Phoenix%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
        &nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Phoenix+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Phoenix-Arizona.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Phoenix,+AZ/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
		</td>

        </tr>
        <tr>
        <td>Austin TX
		</td>
		<td><?php $last=exec(escapeshellcmd("cat auslast.txt")); echo $last ?> </td>
        <td class="status"><?php $change=exec(escapeshellcmd("./ausba.sh")); echo $change ?></td>
        <td><?php system('./stvaus.py'); ?></td>
        <td><?php system('./varaus.py'); ?></td>
		<td><?php system('cat ./weaAustin.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/14439" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Austin%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
        &nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Austin+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Austin-Texas.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Austin,+TX/"><img src="./googmap.png" title="google maps location"></a>
		</td>

        </tr>
        <tr>
        <td>Baltimore
		</td>
        <td><?php $last=exec(escapeshellcmd("cat ballast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./balba.sh")); echo $change ?></td>
        <td><?php system('./stvbal.py'); ?></td>
        <td><?php system('./varbal.py'); ?></td>
		<td><?php system('cat ./weaBaltimore.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/3918" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Baltimore%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Baltimore+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Baltimore-Maryland.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Baltimore,+MD/"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr>
        <tr>
        <td>Las Vegas
		</td>
        <td><?php $last=exec(escapeshellcmd("cat laslast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./lasba.sh")); echo $change ?></td>
        <td><?php system('./stvlas.py'); ?></td>
        <td><?php system('./varlas.py'); ?></td>
		<td><?php system('cat ./weaLas_Vegas.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/21038" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?f=tweets&vertical=default&q=Vegas%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Las+Vegas+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Las-Vegas-Nevada.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Las+Vegas,+NV/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
		</td>

        </tr>
        <tr>
        <td>Cleveland
        </td>
		<td><?php $last=exec(escapeshellcmd("cat clelast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./cleba.sh")); echo $change ?></td>
        <td><?php system('./stvcle.py'); ?></td>
        <td><?php system('./varcle.py'); ?></td>
		<td><?php system('cat ./weaCleveland.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/11446" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Cleveland%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Cleveland+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Cleveland-Ohio.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Cleveland,+OH/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

	<tr>
        <td>San Diego
		</td>
        <td><?php $last=exec(escapeshellcmd("cat sadlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./sadba.sh")); echo $change ?></td>
        <td><?php system('./stvsad.py'); ?></td>
        <td><?php system('./varsad.py'); ?></td>
		<td><?php system('cat ./weaSan_Diego.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/6740" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=San%20Diego%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Stratford+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-San-Diego-California.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/San+Diego,+CA/"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr>
	<tr>
        <td>Oakland CA
		</td>
        <td><?php $last=exec(escapeshellcmd("cat oaklast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./oakba.sh")); echo $change ?></td>
        <td><?php system('./stvoak.py'); ?></td>
        <td><?php system('./varoak.py'); ?></td>
		<td><?php system('cat ./weaOakland.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/20932" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Oakland%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Oakland+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Oakland-California.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Oakland,+CA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr>
	<tr>
        <td>Boston PD
		</td>
        <td><?php $last=exec(escapeshellcmd("cat bpdlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./bpdba.sh")); echo $change ?></td>
        <td><?php system('./stvbpd.py'); ?></td>
        <td><?php system('./varbpd.py'); ?></td>
		<td><?php system('cat ./weaBoston.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/17472" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Boston%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Boston+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Boston-Massachusetts.html" target=_blank><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Boston,+MA/" target=_blank><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>


	<tr>
        <td>Buffalo
		</td>
        <td><?php $last=exec(escapeshellcmd("cat buflast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./bufba.sh")); echo $change ?></td>
        <td><?php system('./stvbuf.py'); ?></td>
        <td><?php system('./varbuf.py'); ?></td>
		<td><?php system('cat ./weaBuffalo.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/17053" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Buffalo%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Buffalo+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Buffalo-New-York.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Buffalo,+NY/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Dallas
		</td>
        <td><?php $last=exec(escapeshellcmd("cat dallast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./dalba.sh")); echo $change ?></td>
        <td><?php system('./stvdal.py'); ?></td>
        <td><?php system('./vardal.py'); ?></td>
		<td><?php system('cat ./weaDallas.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/5319" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Dallas%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Dallas+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Dallas-Texas.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Dallas,+TX/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>DC
		</td>
        <td><?php $last=exec(escapeshellcmd("cat dcmlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./dcmba.sh")); echo $change ?></td>
        <td><?php system('./stvdcm.py'); ?></td>
        <td><?php system('./vardcm.py'); ?></td>
		<td><?php system('cat ./weaDC.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/1605" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=DC%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=DC+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Washington-District-of-Columbia.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Washington,+DC/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Denver
		</td>
        <td><?php $last=exec(escapeshellcmd("cat denlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./denba.sh")); echo $change ?></td>
        <td><?php system('./stvden.py'); ?></td>
        <td><?php system('./varden.py'); ?></td>
		<td><?php system('cat ./weaDenver.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/32" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Denver%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Denver+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Denver-Colorado.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Denver,+CO/"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Des Moines
		</td>
        <td><?php $last=exec(escapeshellcmd("cat deslast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./desba.sh")); echo $change ?></td>
        <td><?php system('./stvdes.py'); ?></td>
        <td><?php system('./vardes.py'); ?></td>
		<td><?php system('cat ./weaDes_Moines.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/5725" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Des%20Moines%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Des+Moines+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Des-Moines-Iowa.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Des+Moines,+Iowa/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Detroit
		</td>
        <td><?php $last=exec(escapeshellcmd("cat detlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./detba.sh")); echo $change ?></td>
        <td><?php system('./stvdet.py'); ?></td>
        <td><?php system('./vardet.py'); ?></td>
		<td><?php system('cat ./weaDetroit.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/13671" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Detroit%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Detroit+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Detroit-Michigan.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Detroit,+MI/"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	
	
	<tr>
        <td>Houston
		</td>
        <td><?php $last=exec(escapeshellcmd("cat houlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./houba.sh")); echo $change ?></td>
        <td><?php system('./stvhou.py'); ?></td>
        <td><?php system('./varhou.py'); ?></td>
		<td><?php system('cat ./weaHouston.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/1364" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Houston%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Houston+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Houston-Texas.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Houston,+TX/"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Indianapolis
		</td>
        <td><?php $last=exec(escapeshellcmd("cat indlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./indba.sh")); echo $change ?></td>
        <td><?php system('./stvind.py'); ?></td>
        <td><?php system('./varind.py'); ?></td>
		<td><?php system('cat ./weaIndianapolis.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/4628" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Indianapolis%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Indianapolis+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Indianapolis-Indiana.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Indianapolis,+IN/"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>LAPD
		</td>
        <td><?php $last=exec(escapeshellcmd("cat laplast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./lapba.sh")); echo $change ?></td>
        <td><?php system('./stvlap.py'); ?></td>
        <td><?php system('./varlap.py'); ?></td>
		<td><?php system('cat ./weaLAPD.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/20296" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=LAPD%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=LAPD+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Los-Angeles-California.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Los+Angeles,+CA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Memphis
		</td>
        <td><?php $last=exec(escapeshellcmd("cat memlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./memba.sh")); echo $change ?></td>
        <td><?php system('./stvmem.py'); ?></td>
        <td><?php system('./varmem.py'); ?></td>
		<td><?php system('cat ./weaMemphis.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/215" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Memphis%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Memphis+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Memphis-Tennessee.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Memphis+TN/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Milwaukee
		</td>
        <td><?php $last=exec(escapeshellcmd("cat millast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./milba.sh")); echo $change ?></td>
        <td><?php system('./stvmil.py'); ?></td>
        <td><?php system('./varmil.py'); ?></td>
		<td><?php system('cat ./weaMemphis.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/9840" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Milwaukee%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Milwaukee+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Milwaukee-Wisconsin.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Milwaukee+WI/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Nashville
		</td>
        <td><?php $last=exec(escapeshellcmd("cat naslast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./nasba.sh")); echo $change ?></td>
        <td><?php system('./stvnas.py'); ?></td>
        <td><?php system('./varnas.py'); ?></td>
		<td><?php system('cat ./weaNashville.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/10458" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Nashville%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Nashville+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/neighborhood/East-Nashville-Nashville-TN.html"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Nashville+TN/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	

    </tr>
	<tr>
        <td>Newark 
		</td>
        <td><?php $last=exec(escapeshellcmd("cat npdlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./npdba.sh")); echo $change ?></td>
        <td><?php system('./stvnpd.py'); ?></td>
        <td><?php system('./varnpd.py'); ?></td>
		<td><?php system('cat ./weaNewark.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/19749" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Newark%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Newark+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Newark-New-Jersey.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Newark,+NJ/"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>New Orleans
		</td>
        <td><?php $last=exec(escapeshellcmd("cat newlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./newba.sh")); echo $change ?></td>
        <td><?php system('./stvnew.py'); ?></td>
        <td><?php system('./varnew.py'); ?></td>
		<td><?php system('cat ./weaNew_Orleans.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/3877" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=New%20Orleans%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Stratford+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/neighborhood/Mid-City-New-Orleans-LA.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/New+Orleans,+LA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>NYPD
		</td>
        <td><?php $last=exec(escapeshellcmd("cat nyplast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./nypba.sh")); echo $change ?></td>
        <td><?php system('./stvnyp.py'); ?></td>
        <td><?php system('./varnyp.py'); ?></td>
		<td><?php system('cat ./weaNYPD.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/1189" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=NYPD%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=NYPD+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-New-York-New-York.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/New+York,+NY/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Oklahoma
		</td>
        <td><?php $last=exec(escapeshellcmd("cat okllast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./oklba.sh")); echo $change ?></td>
        <td><?php system('./stvokl.py'); ?></td>
        <td><?php system('./varokl.py'); ?></td>
		<td><?php system('cat ./weaOklahoma.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/20932" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Oklahoma%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Oklahoma+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Oklahoma-Oklahoma.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Oklahoma+OK/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	
		
	<tr>
        <td>Philly 
		</td>
        <td><?php $last=exec(escapeshellcmd("cat ppdlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./ppdba.sh")); echo $change ?></td>
        <td><?php system('./stvppd.py'); ?></td>
        <td><?php system('./varppd.py'); ?></td>
		<td><?php system('cat ./weaPhiladelphia.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/4603" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Philadelphia%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Philadelphia+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Philadelphia-Pennsylvania.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Philadelphia,+PA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>San Francisco
		</td>
        <td><?php $last=exec(escapeshellcmd("cat sanlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./sanba.sh")); echo $change ?></td>
        <td><?php system('./stvsan.py'); ?></td>
        <td><?php system('./varsan.py'); ?></td>
		<td><?php system('cat ./weaSan_Francisco.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/6336" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Francisco%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Francisco+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-San-Francisco-California.html"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/San+Francisco,+CA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
	<tr>
        <td>Seattle
		</td>
        <td><?php $last=exec(escapeshellcmd("cat sealast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./seaba.sh")); echo $change ?></td>
        <td><?php system('./stvsea.py'); ?></td>
        <td><?php system('./varsea.py'); ?></td>
		<td><?php system('cat ./weaSeattle.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/6492" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Seattle%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Seattle+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Seattle-Washington.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Seattle,+WA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>

	
		<tr>
        <td>Miami
		</td>
        <td><?php $last=exec(escapeshellcmd("cat mialast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./miaba.sh")); echo $change ?></td>
        <td><?php system('./stvmia.py'); ?></td>
        <td><?php system('./varmia.py'); ?></td>
		<td><?php system('cat ./weaMiami.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/2964" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Miami%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Miami+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Miami-Florida.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Miami,+FL/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr>
     <tr>
        <td>St. Louis
		</td>
        <td><?php $last=exec(escapeshellcmd("cat stllast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./stlba.sh")); echo $change ?></td>
        <td><?php system('./stvstl.py'); ?></td>
        <td><?php system('./varstl.py'); ?></td>
		<td><?php system('cat ./weaSt_Louis.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/16074" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=St%20Louis%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=St+Louis+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
        &nbsp&nbsp<a href="http://www.city-data.com/crime/crime-St.-Louis-Missouri.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
		&nbsp&nbsp<a href="https://www.google.com/maps/place/St+Louis,+MO/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
		
        </td>

        </tr>
     <tr>
        <td>Portland
		</td>
		<td><?php $last=exec(escapeshellcmd("cat porlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./porba.sh")); echo $change ?></td>
        <td><?php system('./stvpor.py'); ?></td>
        <td><?php system('./varpor.py'); ?></td>
		<td><?php system('cat ./weaPortland.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/20613" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Portland%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
        &nbsp&nbsp<a href="https://www.google.com/search?q=Portland+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Portland-Oregon.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Portland,+OR/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr> 
		
     <tr>
        <td>Pittsburgh PA
		</td>
        <td><?php $last=exec(escapeshellcmd("cat pitlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./pitba.sh")); echo $change ?></td>
        <td><?php system('./stvpit.py'); ?></td>
        <td><?php system('./varpit.py'); ?></td>
		<td><?php system('cat ./weaPittsburgh.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/10904" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Pittsburgh%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?Pittsburgh+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Pittsburgh-Pennsylvania.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Pittsburgh,+PA/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
		
        </tr> 
     <tr>
        <td>Salt Lake City
		</td>
        <td><?php $last=exec(escapeshellcmd("cat sallast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./salba.sh")); echo $change ?></td>
        <td><?php system('./stvsal.py'); ?></td>
        <td><?php system('./varsal.py'); ?></td>
		<td><?php system('cat ./weaSalt_Lake_City.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/18656" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Salt%20Lake%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Salt+Lake+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Salt-Lake-City-Utah.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Salt+Lake+City/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr> 
     <tr>
        <td>Lincoln NE
		</td>
        <td><?php $last=exec(escapeshellcmd("cat linlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./linba.sh")); echo $change ?></td>
        <td><?php system('./stvlin.py'); ?></td>
        <td><?php system('./varlin.py'); ?></td>
		<td><?php system('cat ./weaLincoln.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/14395" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Lincoln%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Lincoln+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Lincoln-Nebraska.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Lincoln,+NE/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr> 
     <tr>
        <td>Anchorage
		</td>
        <td><?php $last=exec(escapeshellcmd("cat anclast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./ancba.sh")); echo $change ?></td>
        <td><?php system('./stvanc.py'); ?></td>
        <td><?php system('./varanc.py'); ?></td>
		<td><?php system('cat ./weaAnchorage.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/15468" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Anchorage%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Anchorage+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Anchorage-Alaska.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Anchorage,+AK/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr> 
     <tr>
        <td>St. Paul
		</td>
        <td><?php $last=exec(escapeshellcmd("cat stplast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./stpba.sh")); echo $change ?></td>
        <td><?php system('./stvstp.py'); ?></td>
        <td><?php system('./varstp.py'); ?></td>
		<td><?php system('cat ./weaSt_Paul.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/13544" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=St%20Paul%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=St+Paul+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-St.-Paul-Minnesota.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/St+Paul,+MN/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr> 

        </tr> 
     <tr>
        <td>Honolulu
		</td>
        <td><?php $last=exec(escapeshellcmd("cat honlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./honba.sh")); echo $change ?></td>
        <td><?php system('./stvhon.py'); ?></td>
        <td><?php system('./varhon.py'); ?></td>
		<td><?php system('cat ./weaHonolulu.txt'); ?></td>
        <td><a href="http://www.broadcastify.com/listen/feed/18603" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Honolulu%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Honolulu+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/" target="_blank"></a><img src="./crime.png" title="area crime stats">
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Honolulu,+HI/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
		</td>
        
	    </tr> 
     <tr>
        <td>Birmingham AL
		</td>
        <td><?php $last=exec(escapeshellcmd("cat alalast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./alaba.sh")); echo $change ?></td>
        <td><?php system('./stvala.py'); ?></td>
        <td><?php system('./varala.py'); ?></td>
		<td><?php system('cat ./weaBirmingham.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/21549" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Alabama%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Alabama+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Birmingham-Alabama.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Birmingham,+AL/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr> 

		        <tr>
        <td>Boston #2
		</td>
        <td><?php $last=exec(escapeshellcmd("cat bstlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./bstba.sh")); echo $change ?></td>
        <td><?php system('./stvbst.py'); ?></td>
        <td><?php system('./varbst.py'); ?></td>
		<td><?php system('cat ./weaBoston.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/6254" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Boston%20(police%20OR%20swat%20OR%20shooting%20OR%20shooter%20OR%20protest%20%23%20OR%20%23breaking)&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Boston+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Boston-Massachusetts.html" target=_blank><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Boston,+MA/" target=_blank><img src="./googmap.png" title="google maps location"></a>
        </td>
		</tr>

		<tr>
        <td>Broward FL
		</td>
        <td><?php $last=exec(escapeshellcmd("cat brolast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./broba.sh")); echo $change ?></td>
        <td><?php system('./stvbro.py'); ?></td>
        <td><?php system('./varbro.py'); ?></td>
		<td><?php system('cat ./weaMiami.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/3010" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Broward%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Broward+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Miramar-Florida.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Broward,+FL/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
    
	<tr>
        <td>Fort Worth TX
		</td>
        <td><?php $last=exec(escapeshellcmd("cat forlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./forba.sh")); echo $change ?></td>
		<td><?php system('./stvfor.py'); ?></td>
        <td><?php system('./varfor.py'); ?></td>
		<td><?php system('cat ./weaFort_Worth.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/5319" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Fort%20Worth%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Stratford+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Fort-Worth-Texas.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Fort+Worth+TX/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>

	<tr>
        <td>Springfield MO
		</td>
        <td><?php $last=exec(escapeshellcmd("cat sprlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./sprba.sh")); echo $change ?></td>
        <td><?php system('./stvspr.py'); ?></td>
        <td><?php system('./varspr.py'); ?></td>
		<td><?php system('cat ./weaSpringfield.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/4142" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Springfield%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Springfield+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Springfield-Missouri.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Springfield+MO/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

        </tr>

     <tr>
        <td>Little Rock
		</td>
        <td><?php $last=exec(escapeshellcmd("cat litlast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./litba.sh")); echo $change ?></td>
        <td><?php system('./stvlit.py'); ?></td>
        <td><?php system('./varlit.py'); ?></td>
		<td><?php system('cat ./weaLittle_Rock.txt'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/18094" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Little%20Rock%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?q=Little+Rock+(police+OR+swat+OR+shooting+OR+shooter+OR+protest+%23+OR+%23breaking)&biw=1920&bih=1115&tbm=nws&source=lnt&tbs=qdr:h&sa=X&ved=0ahUKEwjetcaon4TLAhVEGz4KHVlOAsgQpwUIFQ&dpr=1" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Little-Rock-Arkansas.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Little+Rock,+AR/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>
		</tr>

		
		</tbody>
    </table>
	

	</center>
<!--	change email alert thresholds for delta value <a href="./email.php">here</a> -->

<p class="page">
<B>

<p class="inner"><?php $total=exec(escapeshellcmd("cat total.txt")); echo $total ?></b> BC listeners on <?php $totalfeeds=exec(escapeshellcmd("cat totalfeeds.txt")); echo $totalfeeds ?> BC feeds at <?php echo date("G:i:s T");?>.
Tracking <?php $cur=exec(escapeshellcmd("st --sum ./last.txt")); echo $cur ?> on <?php $curfeeds=exec(escapeshellcmd("./ttlmyfeeds.py")); echo $curfeeds ?> here,
which is <?php $total=exec(escapeshellcmd("./ttlppl.py")); echo $total ?>% of BC's listeners using <?php $total=exec(escapeshellcmd("./ttlfeeds.py")); echo $total ?>% of BC's feeds. Sum of <!--&#916; x&#772;--> delta/means <?php $deltafire=exec(escapeshellcmd("st -sum delta.txt")); echo $deltafire ?> (the higher, the more dire).<BR>
Weather updated <?php $total=exec(escapeshellcmd("cat wts.txt")); echo $total ?> EST.<BR>
<a class="pushbullet-subscribe-widget" data-channel="spike" data-widget="button" data-size="small"></a>
<script type="text/javascript">(function(){var a=document.createElement('script');a.type='text/javascript';a.async=true;a.src='https://widget.pushbullet.com/embed.js';var b=document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a,b);})();</script>




<!--<?php $total=exec(escapeshellcmd("cat total.txt")); echo $total ?></b> BC listeners on <?php $totalfeeds=exec(escapeshellcmd("cat totalfeeds.txt")); echo $totalfeeds ?> BC feeds at <?php echo date("G:i:s T");?>.
Tracking <?php $cur=exec(escapeshellcmd("st --sum ./last.txt")); echo $cur ?> on <?php $curfeeds=exec(escapeshellcmd("./ttlmyfeeds.py")); echo $curfeeds ?> here.<BR>
That's <?php $total=exec(escapeshellcmd("./ttlppl.py")); echo $total ?>% of BC's listeners on <?php $total=exec(escapeshellcmd("./ttlfeeds.py")); echo $total ?>% of BC's feeds. Sum of &#916; x&#772; values for police feeds <?php $deltafire=exec(escapeshellcmd("st -sum delta.txt")); echo $deltafire ?>. -->

<!--
<?php $total=exec(escapeshellcmd("cat total.txt")); echo $total ?></b> broadcastify listeners at <?php echo date("G:i:s T");?><BR>
<?php $cur=exec(escapeshellcmd("st --sum ./last.txt")); echo $cur ?> listeners of tracked feeds, trajectory <?php $delta=exec(escapeshellcmd("st -sum delta.txt")); echo $delta ?><BR>&nbsp<BR>
-->

<BR>&nbsp<BR>
<a name="thresh"></a>
<a href="#top">top</a>
<BR>&nbsp<BR>&nbsp<BR>
- - - - -<BR>&nbsp<BR>
<p class="inner"><B>about</b><BR>&nbsp<BR>
This table represents the likelihood of one or more newsworthy events occuring in each city, the first and greenest line being the most probable, descending toward the least probability of catastrophe.<BR><BR>
It is calculated by comparing the current number of listeners to each city's respective scanner feed from <a href="http://www.broadcastify.com">broadcastify.com</a> to what my server has learned through crude "machine learning" to be the typical listener count for that feed and for a given time of day.<BR><BR>
Calculating listener count data collected from Broadcastify against some historical data enables this system to provide a "smart" dynamic 
threshold of identifying anomalous feed activity quickly, well before CNN gets it and often before local news picks up the stories, as it's proven already. <BR><BR>
This is only a proof of concept of number crunching made pretty with a front-end and not intended to be a public website, rather an active project. It performs email alerts, which are vital in learning of events early; however I have not yet programmed a signup page. Almost!<BR><BR>
Scripting languages involved include bash, Python and PHP, running on a Debian Linux server. If you're interested in how this thing works, read <a href="/x.php" title="technical explanation">this</a> (warning, way too verbose).<br>&nbsp<br>
Doug Simmons<BR>&nbsp<BR>
<a href="https://www.linkedin.com/in/douglassimmons">linkedin</a>, <a href="https://github.com/dougsimmons">github</a>, <a href="/job/DougSimmonsResume_Aug2015.pdf" title="DougSimmonsResume_Aug2015.pdf">resume</a>
<BR>&nbsp<BR>&nbsp<BR><BR>&nbsp<BR>&nbsp<BR>
<!--<BR><a href="./how.php"><strong>technical breakdown</strong></a><BR>-->
<BR><BR><BR><BR>&nbsp<BR>&nbsp<BR>&nbsp<BR>&nbsp<BR>&nbsp<BR>&nbsp<BR>&nbsp<BR><BR>&nbsp<BR>&nbsp<BR><a name="technical"></a> 






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

<!-- DEACTIVATED CITIES -->



<!--
	<tr>
        <td>Fredericton CAN
		</td>
        <td><?php $last=exec(escapeshellcmd("cat frelast.txt")); echo $last ?></td>
        <td class="status"><?php $change=exec(escapeshellcmd("./freba.sh")); echo $change ?></td>
        <td><?php system('./stvfre.py'); ?></td>
        <td><?php system('./varfre.py'); ?></td>
		<td><a href="http://www.broadcastify.com/listen/feed/17737" target="_blank"><img src="./audio.png" title="broadcastify scanner feed"></a>
		&nbsp&nbsp<a href="https://twitter.com/search?q=Fredericton%20police%20-rt&src=typd" target="_blank"><img src="./tw.png" title="twitter search"></a>
		&nbsp&nbsp<a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=Stratford+police+OR+fire&tbs=qdr:h" target="_blank"><img src="./goog.png" title="google news search"></a>
		&nbsp&nbsp<a href="http://www.city-data.com/crime/crime-Fredericton-Canada.html" target=_blank"><img src="./crime.png" title="area crime stats"></a>
        &nbsp&nbsp<a href="https://www.google.com/maps/place/Fredericton-Canada/" target="_blank"><img src="./googmap.png" title="google maps location"></a>
        </td>

    </tr>
--><!--
-->


</body>
</html>
