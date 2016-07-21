<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;

class ConfigurationController extends Controller {

    public function __construct() {
        
    }

    public function update() {
        $input = Input::all();

        foreach ($input as $key => $value) {
            DB::table('configs')
                    ->where('config_name', $key)
                    ->update(array('config_value' => $value));
        }

        return response()->json(array('results' => 'success', 'response' => 'Configuration Updated'));
    }

}
