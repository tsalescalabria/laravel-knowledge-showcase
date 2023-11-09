<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BasePageController;

class HomeController extends BasePageController
{
    public function index()
    {
        return view('home', ['categories' =>  $this->getAllCategories()]);
    }
}


