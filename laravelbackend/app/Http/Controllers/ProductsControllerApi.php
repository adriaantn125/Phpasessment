<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Discount;
use Response;

class ProductsControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        foreach($products as $product)
        {
            $discounts =  Discount::where('min', '<=', $product->price)->where('max', '>=', $product->price)->get();
            $dis = 0;
            foreach($discounts as $discount)
            {
                $dis = $discount->discount;
            }
            $product->discount = round($product->price - ($product->price * $dis));
        }
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $discounts =  Discount::where('min', '<=', $product->price)->where('max', '>=', $product->price)->get();
        $dis = 0;
        foreach($discounts as $discount)
        {
            $dis = $discount->discount;
        }
        $product->discount = round($product->price - ($product->price * $dis));
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
