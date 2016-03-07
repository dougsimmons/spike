#!/bin/sh
delay=20 # rate limit not to hammer broadcastify
curl -s http://www.broadcastify.com/listen/feed/5184|grep wrap|grep '/td'|html2text|head -1|ts '[%Y-%m-%d|%H:%M:%S]' >> /var/log/scanners/cincinnatifire.log;sleep $delay # cinc oh fd
## which produces:
## [2016-03-06|09:31:21] 10
## [2016-03-06|09:46:22] 8
##
## followed by lines for other feeds/logs
##
## This is a dumb way to get the data and I would like to get API access, but Broadcastify does not hand it out for noncommercial tinkering like this,
## so I either have to ask again nicely now that I have a sweet project put together, or maybe pay, or make sure that Broadcastify is cool with me scraping
## in this manner with a frequency of about 15 minutes. 
## 
## Whichever of those options, I need to switch to one soon to trim down the bandwidth of not grabbing an entire html page for a single number, 
## also because I am obliged to as the project is reliant on data it collects from Broadcastify.
