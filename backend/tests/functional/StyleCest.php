<?php
namespace backend\tests\functional;

use backend\tests\FunctionalTester;

class StyleCest
{
    public function checkStyle(FunctionalTester $I)
    {
        $I->amOnRoute('/styles');
        $I->see('Styles', 'h1');
    }

}
