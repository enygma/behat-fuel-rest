Behat + FuelPHP = RESTful Happiness
=============

This repository provides the sample code for a blog post showing how
to integrate Behat testing with a FuelPHP-based instance that extends
the Controller_Rest to make a RESTful interface.

Files provided:
=============
- A set of definitions for use with Behat to test RESTful interfaces 

@ behat/features/bootstrap/FeatureContextRest.php

- A set of example Scenarios for Behat to test the FuelPHP controller/model

@ behat/features/index.feature

- Controller and Model for use with FuelPHP

@ fuelphp/classes/controller/user.php

@ fuelphp/classes/model/User.php

This assumes you have (or know how to set up) a FuelPHP instance installed
where the Behat testing can access it (HTTP requests)

To Use
=============
- Copy the *FeatureContextRest.php* file somewhere when you can include it in your FeatureContext.php file
- Make your FeatureContext class extend the new REST context: *class FeatureContext etends FeatureContextRest {*
- Copy over the model/controller classes to the FuelPHP instance in your *app* folder
- Update the *behat.yml* file with the *base_url* setting for your test host URL

@author Chris Cornutt <ccornutt@phpdeveloper.org>

@license MIT
