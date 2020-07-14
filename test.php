<?php

require_once('vendor/autoload.php');

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Chrome\ChromeOptions;

//Desired Capabilities
$options = new ChromeOptions();
$options->addArguments([
        '--auto-open-devtools-for-tabs',
        '--user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1'
    ]);

//Pass the variable to chrome
$desiredCapabilities = DesiredCapabilities::chrome();
$desiredCapabilities->setCapability(ChromeOptions::CAPABILITY, $options);

//Set URL
$host = 'http://localhost:4444/wd/hub';
$driver = RemoteWebDriver::create($host, $desiredCapabilities);
$driver->get('https://www.lamudi.com.ph');