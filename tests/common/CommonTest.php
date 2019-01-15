<?php

namespace DIDevelop\Tests\Selenium\Common;

use Facebook\WebDriver\Chrome\ChromeDriver;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Firefox\FirefoxDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;
use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverPlatform;
use PHPUnit\Framework\TestCase;

class CommonTest extends TestCase
{
    /**
     * @var ChromeDriver
     */
    protected $webDriver;
    protected $appUrl = 'https://myslice.didevelop.website/';
    protected $cookies = array();
    protected $desired_capabilities = null;

    public function setUp()
    {
/*        putenv("webdriver.chrome.driver=/Users/iyurin/app/src/php/di_develop_test/integrations_test/chromedriver");
        $options = new Phan();
        $options->setBinary('./bin/phantomjs');
        $options->addArguments(array(   --webdriver=8080 --webdriver-selenium-grid-hub=http://142.93.159.120:4444
            '--window-size=1280,1200', '--headless'
        ));
        $this->desired_capabilities = DesiredCapabilities::phantomjs();
        $this->desired_capabilities->setCapability(ChromeOptions::CAPABILITY, $options);
        $this->webDriver = ChromeDriver::start($this->desired_capabilities);*/

        //putenv("webdriver.chrome.driver=bin/chromedriver");
        $this->desired_capabilities = DesiredCapabilities::chrome();
        $this->desired_capabilities->setPlatform(WebDriverPlatform::LINUX);
        $this->webDriver = RemoteWebDriver::create('http://142.93.159.120:4444/wd/hub', $this->desired_capabilities);

        //putenv("webdriver.chrome.driver=/Users/iyurin/app/src/php/di_develop_test/integrations_test/geckodriver");
        //$this->webDriver = ChromeDriver::start($this->desired_capabilities);

    }

    public function tearDown()
    {
        $this->webDriver->quit();
    }
}