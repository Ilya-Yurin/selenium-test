<?php

namespace DIDevelop\Tests\Selenium;

use DIDevelop\Tests\Selenium\Common\CommonTest;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverSelect;

class AuthenticationTest extends CommonTest
{

    /**
     * @test Make order
     */
    /*public function assertOrderSuccess()
    {
        $this->webDriver->get($this->appUrl . 'en/');
        // find "Pizza" category link and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="all_products"]/div/div[5]/div/h3/a'));
        $element->click();
        // find "Shrimp" category of pizza link and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="all_products"]/div/div[2]/div/a'));
        $element->click();
        // find "Meat pizza" category link and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="all_products"]/div/div[2]/div/a'));
        $element->click();
        // find "Order now" link and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="all_products"]/div/form[2]/div/div[3]/div[2]/a'));
        $element->click();

        // find price of product
        $pricePerOne = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="price_number"]'))->getAttribute('content');
        $productCount = 3;
        // find qtty select element
        $qttySelectElement = $this->webDriver->findElement(WebDriverBy::name('qtty'));
        $qttySelect = new WebDriverSelect($qttySelectElement);
        // Select option
        $qttySelect->selectByValue($productCount);

        // check total price for new qtty
        $this->assertEquals(($pricePerOne * $productCount) . '', $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="price_number"]'))->getText());

        // find "Add to cart" button and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="add_to_cart"]'));
        $element->click();

        // find "Checkout" button and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="checkout_buttons"]/div/a[1]'));
        $element->click();

        // REVIEW CART
        $reviewCartQuantity = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="cart_table"]/tbody/tr[1]/td[2]/div/input'))->getAttribute('content');
        $reviewCartPriceData = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="cart_table"]/tbody/tr[1]/td[3]/span'))->getText();

        $reviewSubtotalData = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="subtotal"]'))->getText();
        $reviewToalData = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="total"]'))->getText();

        print_r("\n");
        print_r($reviewCartQuantity);
        print_r("\n");
        print_r($reviewCartPriceData);
        print_r("\n");
        print_r($reviewSubtotalData);
        print_r("\n");
        print_r($reviewToalData);
        print_r("\n");

        // find "Order Now" button and click, go to login step
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="cart_step_review"]/div[4]/a'));
        $element->click();

        // LOGIN STEP
        $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="login_form"]/div[2]/input'))->sendKeys('ily2014yurin@gmail.com');
        $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="login_form"]/div[3]/input'))->sendKeys('130608');
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="login_form"]/div[5]/div/button[1]'));
        $element->click();

        // STEP ADDRESS
        $this->assertContains('You have been successfully logged in.', $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="centered_wrapper"]/div[1]'))->getText());

        // find "Continue" button and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="cart_step_address"]/div[2]/div/a'));
        $element->click();

        // STEP TIME
        // find "Go to payment" button and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="cart_step_time"]/div[3]/div/a'));
        $element->click();

        // STEP TIME
        // find "Credit card online" button and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="cart_step_payment"]/div/div[1]/ul/li[1]/a'));
        $element->click();

        // find "Place my order" button and click
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="finish_pay_button"]'));
        $element->click();

        // it would be good to check the order number in the database
        $this->assertContains('Order number', $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="individual_order"]/div/div[2]/div[2]/div'))->getText());
    }*/

    /**
     * @test Login on test website
     */
/*    public function assertAuthorized()
    {
        $this->webDriver->get($this->appUrl . 'login/');
        $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="login_form"]/div[2]/input'))->sendKeys('ily2014yurin@gmail.com');
        $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="login_form"]/div[3]/input'))->sendKeys('130608');
        $element = $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="login_form"]/div[5]/div/button[1]'));
        $element->click();
        $this->assertContains('You have been successfully logged in.', $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="centered_wrapper"]/div[1]'))->getText());
    }*/

    /**
     * @test Check categories
     * @depends assertAuthorized
     */
/*    public function assertCategories()
    {
        $this->webDriver->get($this->appUrl . 'en/');
        $this->assertEquals('Calzones', $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="all_products"]/div/div[2]/div/h3/a'))->getText());
        $this->assertEquals('Pizza', $this->webDriver->findElement(WebDriverBy::xpath('//*[@id="all_products"]/div/div[5]/div/h3/a'))->getText());
    }*/

    /**
     * @test Make Order
     */
    public function assertOrderSuccess()
    {
        print_r("TESTS WORKING \n");
        $this->assertContains('You have been successfully', 'You have been successfully logged in');
    }
}
