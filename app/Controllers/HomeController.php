<?php namespace App\Controllers;

use Ionix\Routing\Controller;
use Ionix\Validation\Factory as Validator;

class HomeController extends Controller {

    public function __construct()
    {
        var_dump(s('test')->toUpper()->toString());
    }

    public function index(Validator $validator)
    {
        $validator = $validator->make($_GET, ['name' => 'required']);
        var_dump($validator->passes());
        var_dump($validator->getErrors());
    }
}