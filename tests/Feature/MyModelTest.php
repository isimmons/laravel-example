<?php

use Illuminate\Support\Facades\DB;
use Isimmons\Example\Models\MyModel;

it('can return the uppercased value of a name', function () {

    $myModel = MyModel::factory()->create(['name' => 'John']);

    expect($myModel->getUppercasedName())->toEqual('JOHN');
});

it('can use json queries', function () {
    MyModel::factory()->create(['name' => 'John', 'options' =>  json_encode(['languages' => 'en'])]);

    $models = DB::table('my_models')
    ->whereJsonContains('options->languages', 'en')
    ->get();

    expect($models)->toHaveCount(1);
});
