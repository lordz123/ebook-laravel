<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product');
    }
    public function store()
    {
        return view('admin.addProduct');
    }
}
