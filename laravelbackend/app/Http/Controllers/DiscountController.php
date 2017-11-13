<?php
// Created by Adriaan van Niekerk
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::all();
        return view('discounts.index')->with('discounts',$discounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'min' => 'required',
            'max' => 'required',
            'discount' => 'required'
        ]);
        $discount = new Discount;
        $discount->min = $request->input('min');
        $discount->max = $request->input('max');
        $discount->discount = $request->input('discount') / 100;
        $discount->save();
        return redirect('/discounts')->with('success','Discount Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discount = Discount::find($id);
        return view('discounts.edit')->with('discount',$discount);
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
        $this->validate($request, [
            'min' => 'required',
            'max' => 'required',
            'discount' => 'required'
        ]);
        $discount = Discount::find($id);
        $discount->min = $request->input('min');
        $discount->max = $request->input('max');
        $discount->discount = $request->input('discount') / 100;
        $discount->save();
        return redirect('/discounts')->with('success','Discount Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discount = Discount::find($id);
        $discount->delete();
        return redirect('/discounts')->with('success','Discount Deleted');
    }
    
}
