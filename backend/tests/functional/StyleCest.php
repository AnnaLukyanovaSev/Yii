<?php
namespace backend\tests\functional;

use backend\tests\FunctionalTester;

class StyleCest
{
    public function checkStyle(FunctionalTester $I)
    {
        $I->amOnRoute('/styles');
        $I->see('Styles', 'h1');

        $I->amOnRoute('/styles/update?id=3');
        $I->see('Update');

        $I->amOnRoute('/styles/view?id=3');
        $I->see('Update');

        $I->amOnRoute('/styles/create');
        $I->see('Create Styles','h1');
    }

}
