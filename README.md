<a href="http://www.strengholt-online.nl">
  <img src="http://www.strengholt-online.nl/wp-content/uploads/2014/12/nest-flotchart.jpg" width="700px">
</a>

Nest thermostat temperature
=======

The "Nest thermostat history tool" is a near real-time temperature / monitoring tool to visualise all thermostat statistics. The tool can visualise temperature over a large amount of time. Different colors are used for heating (red), auto_away (blue), leaf (green) and other (yellow). It fetches the data from the nest servers and stores it in a local database. The tool is written in PHP and Javascript.

Copyright (c) 2014 Piethein Strengholt, piethein@strengholt-online.nl

INSTALLATION
------------

1. Create a new table with the database.sql script
2. Change servername, username and password in load.php and json.php files
3. Add your nest account-name and password to the load.php file
4. Start polling with load.php (cronjob every 5 minutes)
To poll every minute change the 'barWidth: 300000' to 'barWidth: 60000' in the index.html


CREDITS
-------

The following scripts are used within Nest thermostat temperature tool:

* FlotCharts: http://www.flotcharts.org/
* jQuery: http://jquery.com/
* nest-api: https://github.com/gboudreau/nest-api


TODO
----

* Add Curved lines: https://github.com/MichaelZinsmaier/CurvedLines
* Cleanup code.