<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Products::all();
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        //
        //store new product
        $product = new Products;
        $product->productNumber = $request->productNumber;
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->category_id = $request->productCategory;
        $product->productDescription = $request->productDescription;
        $product->measurement = $request->productMeasurement;
        $product->productImagePath = $request->productImagePath;
        $product->productQuantity = $request->productQuantity;

        try{
            $product->save();
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
        $product = Products::find($request->id);
        $product->productNumber = $request->productNumber;
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->category_id = $request->productCategory;
        $product->productDescription = $request->productDescription;
        $product->measurement = $request->productMeasurement;
        $product->productImagePath = $request->productImagePath;
        $product->productQuantity = $request->productQuantity;

        try{
            $product->save();
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
