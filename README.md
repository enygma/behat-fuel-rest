Behat + FuelPHP = RESTful Happiness
=============

This repository provides the sample code for a blog post showing how
to integrate Behat testing with a FuelPHP-based instance that extends
the Controller_Rest to make a RESTful interface.

Files provided:
=============
1. A set of definitions for use with Behat to test RESTful interfaces 

@ behat/features/bootstrap/FeatureContextRest.php

2. A set of example Scenarios for Behat to test the FuelPHP controller/model

@ behat/features/index.feature

3. Controller and Model for use with FuelPHP

@ fuelphp/classes/controller/user.php

@ fuelphp/classes/model/User.php

This assumes you have (or know how to set up) a FuelPHP instance installed
where the Behat testing can access it (HTTP requests)

@author Chris Cornutt <ccornutt@phpdeveloper.org>
@license MIT
