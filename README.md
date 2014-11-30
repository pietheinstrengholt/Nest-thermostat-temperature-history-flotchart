<a href="http://www.strengholt-online.nl">
  <img src="http://www.strengholt-online.nl/wp-content/uploads/2014/11/nest-temp2.png" width="800px">
</a>

Nest thermostat temperature
=======

The Nest thermostat temperature history is a tool written in PHP and Javascript. It uses the FlotCharts code to draw graphs from the data obtained from the "Nest servers". In order to read the information from nest the nest-api is used.

Copyright (c) 2014 Piethein Strengholt, piethein@strengholt-online.nl

INSTALLATION
------------

1. Create table with database.sql
2. Change username, password in load.php and json.php
3. Add nest account and password to load.php
4. Start polling with load.php


CREDITS
-------

The following scripts are used within Nest thermostat temperature tool:

* FlotCharts: http://www.flotcharts.org/
* jQuery: http://jquery.com/
* nest-api: https://github.com/gboudreau/nest-api


TODO
----

* Cleanup code.
* Change graph color when heating, cooling, auto-away or leaf mode is.