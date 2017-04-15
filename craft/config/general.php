<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */


return array(
  'localhost' => array(
    'devMode' => true,
    'siteUrl' => 'http://localhost:8888/',
		// Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
		'enableCsrfProtection' => true,
		// Default Week Start Day (0 = Sunday, 1 = Monday...)
		'defaultWeekStartDay' => 0,
		// Whether "index.php" should be visible in URLs (true, false, "auto")
		'omitScriptNameInUrls' => 'auto',

		'defaultSearchTermOptions' => array(
			'subLeft' => true,
			'subRight' => true,
		),
		// Control Panel trigger word
		'cpTrigger' => 'admin',

    'environmentVariables' => array(
      'baseUrl'  => 'http://localhost:8888/',
    ),
    'testToEmailAddress' => 'dev@email.com',
  ),

  // Use IP address of your droplet below
  '138.68.20.244' => array(
    'siteUrl' => null,

		// Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
		'enableCsrfProtection' => true,
		// Default Week Start Day (0 = Sunday, 1 = Monday...)
		'defaultWeekStartDay' => 0,
		// Whether "index.php" should be visible in URLs (true, false, "auto")
		'omitScriptNameInUrls' => 'auto',

		'defaultSearchTermOptions' => array(
			'subLeft' => true,
			'subRight' => true,
		),
		// Control Panel trigger word
		'cpTrigger' => 'admin',

    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://138.68.20.244/',
    )
  )
);
