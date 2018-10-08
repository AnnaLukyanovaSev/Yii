<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;

class CreatorsChangeCest
{

    public function checkCreatorNew(FunctionalTester $I)
    {
        //add and update

        $I->amOnPage('/creators');
        $I->click('Create Creators');
        $I->fillField('Surname', 'Miles');
        $I->click('Save');
        $I->click('Update');
        $I->see('Update creators:');
        $I->click('Creators');
        $I->see('Creators');
        $I->seeInCurrentUrl('creators/index');

        //add and delete

        $I->amOnPage('/creators');
        $I->click('Create Creators');
        $I->fillField('Surname', 'Miles');
        $I->click('Save');
        $I->click('Delete');
        // $I->see('Creators');



        //add blank

        $I->amOnPage('/creators');
        $I->click('Create Creators');
        $I->fillField('Surname', '');
        $I->click('Save');
        $I->see('Surname cannot be blank.');
    }

    public function reductCreatorNew(FunctionalTester $I)
    {
        //reduct and update
        $I->amOnPage('/creators');
        $I->click('Update');
        $I->fillField('Surname', 'Petrukovich');
        $I->click('Save');
        //$I->see('Update creators:');
        $I->click('Creators');
        $I->see('Creators');

        //add blank

        $I->amOnPage('/creators');
        $I->click('Update');
        $I->fillField('Surname', '');
        $I->click('Save');
        $I->see('Surname cannot be blank.');

        //reduct and delete

        $I->amOnPage('/creators');
        $I->click('Update');
        $I->fillField('Surname', 'Petrukovich');
        $I->click('Delete');

    }
}