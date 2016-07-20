<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ConfigurationController extends Controller {

    public function __construct() {
        
    }

    public function update() {
        $input = Input::all();
        print_r($input);
    }

}
