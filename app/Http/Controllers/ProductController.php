<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use GuzzleHttp\Psr7\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    // not underderstand
    public function create()
    {
        // Display the form to create a new product
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());
        return ProductResource::make( $product ); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return ProductResource::make( $product );
    }

    // not underderstand
    public function edit($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Display the form to edit an existing product
        return view('product.edit', compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return ProductResource::make( $product );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return Response()->json([
            'deleted'=> 'success'
        ]);
    }
}
