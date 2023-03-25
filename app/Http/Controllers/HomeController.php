<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $age = 25;
        $person = new \stdClass();
        $person->age = $age;

        //return view("front.index", ['age' => $age]);
        //return view("front.index", compact("age"));
        //return view("front.index")->with("age", $age)->with("name", "Muhammed");
        //return view("front.index")->with(["age" => $age, "name" => "Muhammed"]);
        return view("front.index", compact("person"));
    }

    public function about()
    {
        return redirect()->route("contact");
        //return Redirect::route("contact")
    }

    public function contact()
    {
        return view("front.contact");
    }
}
