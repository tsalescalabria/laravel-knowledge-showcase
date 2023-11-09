<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BasePageController extends Controller
{
    public function index()
    {
    }

    protected function getAllCategories()
    {
        return Category::all();
    }
}
