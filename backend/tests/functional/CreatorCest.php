<?php
namespace backend\tests\functional;

use backend\tests\FunctionalTester;

class CreatorCest
{
    public function checkCreator(FunctionalTester $I)
    {
        $I->amOnRoute('/creators');
        $I->see('Creators', 'h1');

        $I->amOnRoute('/creators/update?id=3');
        $I->see('Update');

        $I->amOnRoute('/creators/view?id=3');
        $I->see('Update');

        $I->amOnRoute('/creators/create');
        $I->see('Create Creators','h1');
    }

}