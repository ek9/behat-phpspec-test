<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class DefaultContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given there is a :arg1, which costs £:arg2
     */
    public function thereIsAWhichCostsPs($arg1, $arg2)
    {
        $product = Product::namedAndPriced($arg1, $price);
        $this->catalogue->add($product);
    }

    /**
     * @When I add the :arg1 to the basket
     */
    public function iAddTheToTheBasket($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should have :arg1 product in the basket
     */
    public function iShouldHaveProductInTheBasket($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the overall basket price should be £:arg1
     */
    public function theOverallBasketPriceShouldBePs($arg1)
    {
        throw new PendingException();
    }
}
