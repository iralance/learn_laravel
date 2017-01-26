<?php
/**
 * Created by PhpStorm.
 * User: qianlei
 * Date: 2017/1/25
 * Time: 下午1:03
 */
$app['router']->get('/', function(){
    return '<h1>success!</h1>';
});

$app['router']->get('/welcome', 'App\Http\Controllers\WelcomeController@index');