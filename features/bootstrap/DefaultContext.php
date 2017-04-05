<?php

use Behat\Behat\Exception\PendingException;
use Behat\Behat\Context\BehatContext as Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class DefaultContext extends Context
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
        $this->catalogue = new Catalogue();
    }

    /**
     * @Given there is a :arg1, which costs £:arg2
     */
    public function thereIsAWhichCostsPs($arg1, $arg2)
    {
        $product = Product::namedAndPriced($arg1, $arg2);
        $this->catalogue->add($arg1);
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

    /**
     * @Given /^there is a "Sith Lord Lightsaber", which costs £(\d+)$/
     */
    public function thereIsASithLordLightsaberWhichCostsPs($arg1)
    {
        $this->catalogue = new Catalogue();
    }

    /**
     * @When /^I add the "([^"]*)" to the basket$/
     */
    public function iAddTheToTheBasket2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should have (\d+) product in the basket$/
     */
    public function iShouldHaveProductInTheBasket2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the overall basket price should be £(\d+)$/
     */
    public function theOverallBasketPriceShouldBePs2($arg1)
    {
        throw new PendingException();
    }

}
