<?php
namespace backend\tests\functional;

use backend\tests\FunctionalTester;

class CreatorCest
{
    public function checkCreator(FunctionalTester $I)
    {
        $I->amOnRoute('/creators');
        $I->see('Creators', 'h1');
    }

}