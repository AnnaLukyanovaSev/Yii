<?php
namespace backend\tests\functional;

use backend\tests\FunctionalTester;

class FilmCest
{
    public function checkFilm(FunctionalTester $I)
    {
        $I->amOnRoute('/film');
        $I->see('Films', 'h1');

        $I->amOnRoute('/film/update?id=1');
        $I->see('Update');

        $I->amOnRoute('/film/view?id=1');
        $I->see('Update');

        $I->amOnRoute('/film/create');
        $I->see('Create Film','h1');

    }

}
