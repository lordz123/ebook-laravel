<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Product::latest()->paginate(5);
        return view('admin.product', compact('book'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cover' => 'required',
            'book' => 'required|mimes:pdf',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);

        $image = $request->file('cover');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'),$new_name);

        // $uniqueFileName = $request->file('book')->getClientOriginalName() . '.' . $request->file('book')->getClientOriginalExtension();
        // $request->get('book')->move(public_path('books') . $uniqueFileName);

        $book = $request->file('book');
        $new_book_name = rand() . '.' . $book->getClientOriginalExtension();
        //$book->move(public_path('books'),$book);
        $book->store('uploads');
        $data = array(
            'cover' => $new_name,
            'book' => $new_book_name,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        );
        Product::create($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
