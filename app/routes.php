<?php

get('/', function () {
    $view = view('test');
    $view->current_date = date('D-m-Y H:i:s');
    return $view;
});

get('home', 'App\Controllers\HomeController@index');

get('not-found', 'AClassThatWillNotBeFound@someAction');