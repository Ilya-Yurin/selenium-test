<?php

namespace DIDevelop\Tests\Selenium\Common;

use Facebook\WebDriver\Chrome\ChromeDriver;
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
        putenv("webdriver.chrome.driver=/usr/bin/chromedriver");
        $this->webDriver = ChromeDriver::start($this->desired_capabilities);
    }

    public function tearDown()
    {
        $this->webDriver->quit();
    }
}
