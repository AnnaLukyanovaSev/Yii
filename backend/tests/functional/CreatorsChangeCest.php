<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;

class CreatorsChangeCest
{

    public function checkCreatorNew(FunctionalTester $I)
    {
        $I->wantTo('add and update element');
        $I->amOnPage('/creators');
        $I->click('Create Creators');
        $I->fillField('Surname', 'Miles');
        $I->click('Save');
        $I->click('Update');
        $I->see('Update creators:');
        $I->click('Creators');
        $I->see('Creators');
        $I->seeInCurrentUrl('creators/index');


        $I->wantTo('add and delete element');
        $I->amOnPage('/creators');
        $I->click('Create Creators');
        $I->fillField('Surname', 'Miles');
        $I->click('Save');
        $I->click('Delete');


        $I->wantTo('add blank element');
        $I->amOnPage('/creators');
        $I->click('Create Creators');
        $I->fillField('Surname', '');
        $I->click('Save');
        $I->see('Surname cannot be blank.');

    }

    public function reductCreatorNew(FunctionalTester $I)
    {
        $I->wantTo('reduct element');
        $I->amOnPage('/creators');
        $I->click('Update');
        $I->fillField('Surname', 'Petrukovich');
        $I->click('Save');
        $I->click('Creators');
        $I->see('Creators');

        $I->wantTo('reduct with blank element');
        $I->amOnPage('/creators');
        $I->click('Update');
        $I->fillField('Surname', '');
        $I->click('Save');
        $I->see('Surname cannot be blank.');

        $I->wantTo('reduct with element and delete it');
        $I->amOnPage('/creators');
        $I->click('Update');
        $I->fillField('Surname', 'Petrukovich');
        $I->click('Delete');
    }
}