<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $title = "Accueil";
        return view('main', ['title' => $title]);
    }

    public function contact() {
        $title = "Contact";
        return view('contact', ['title' => $title]);
    }

    public function pricing() {
        $title = "Tarifs";
        return view('pricing', ['title' => $title]);
    }

}
