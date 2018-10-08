<?php
namespace backend\tests\functional;

use backend\tests\FunctionalTester;

class FilmCest
{
    public function checkFilm(FunctionalTester $I)
    {
        $I->amOnRoute('/film');
        $I->see('Films', 'h1');
    }

}
