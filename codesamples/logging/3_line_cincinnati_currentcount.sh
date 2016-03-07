#!/bin/sh
tail -n 1 cincinnatifire.log| sed 's/^......................//' >  cincinnatilast.txt  ## just removes timestamp from - [2016-03-06|09:46:22] 8 - and writes 8 for subsequent calcs
# fifty other lines like that..
