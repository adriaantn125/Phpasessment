<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;

class TransactionsControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userid)
    {
        $transactions =  Transaction::where('user_id',$userid)->get();
        return $transactions;
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
    public function store(Request $request,$userid)
    {
        $transaction = new Transaction;
        $transaction->discription = 'Client App Top Up';
        $transaction->status = 1;
        $transaction->amount = $request['amount'];
        $transaction->paymentmethod = 'Visa';
        $transaction->user_id = $userid;
        $transaction->save();
        $user = User::find($userid);
        $amount = $user->balance;
        $amount = $amount + $request['amount'];
        $user->balance = $amount;
        $user->save();
        return ['success',$amount];
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
    public function buy(Request $request,$userid,$amountin,$title)
    {
        $transaction = new Transaction;
        $transaction->discription = $title;
        $transaction->status = 1;
        $transaction->amount = $amountin * -1;
        $transaction->paymentmethod = 'Client Wallet';
        $transaction->user_id = $userid;
        $user = User::find($userid);
        if($user->balance < $amountin)
        {
            return "You don`t have enough funds. Please topup your account!";
        }
        $amount = $user->balance;
        $amount = $amount - $amountin;
        $user->balance = $amount;
        $transaction->save();
        $user->save();
        return 'success';
    }
}
