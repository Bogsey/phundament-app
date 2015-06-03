<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('myapp');
$I->seeLink('About');
$I->click('About');
$I->see('This is the About page.');
