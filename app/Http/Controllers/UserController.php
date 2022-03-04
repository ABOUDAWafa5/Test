<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

    public function index()
    {
        $users = [];

        if (($open = fopen(storage_path() . "/WebDevTest.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $users[] = $data;
            }

            fclose($open);
        }

        echo "<pre>";
        print_r($users);
    }
}
