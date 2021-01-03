<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('content.index');
    }
    public function shopnow()
    {
        return view('content.shopnow');
    }
    public function product()
    {
        return view('content.product');
    }
    public function download($book)
    {
        $file = public_path('/books/'.$book);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, $book, $headers);
    }
}
