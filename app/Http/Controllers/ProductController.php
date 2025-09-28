<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::get(); // or Product::all()
        return view('product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate data
        $request->validate([
            'name.*' => 'required|string',
            'quantity.*' => 'required|integer',
            'price.*' => 'required|numeric',
        ]);

        $names = $request->name;
        $quantities = $request->quantity;
        $prices = $request->price;

        for ($i = 0; $i < count($names); $i++) {
            Product::create([
                'name' => $names[$i],
                'quantity' => $quantities[$i],
                'price' => $prices[$i],
            ]);
        }

        return redirect()->route('product.index')->with('success', 'products added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['products'] = Product::findOrFail($id);
        return view('product.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        // Validate inputs
        $request->validate([
            'id.*'       => 'nullable|exists:products,id',
            'name.*'     => 'required|string',
            'quantity.*' => 'required|integer',
            'price.*'    => 'required|numeric',
        ]);

        $id = $request->id;
        $product     =  Product::find($request->id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product Update successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->back()->with('success', 'product deleted successfully.');
    }
}
