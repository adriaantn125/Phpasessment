<!-- Created by Adriaan van Niekerk -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Transactions for {{$users->name}}</div>
                @if (count($transactions) != 0)
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Discription</th>
                            <th>Payment Method</th>
                            <th>Satus</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $tran)
                        <tr>
                            <td>{{$tran->discription}}</td>
                            <td>{{$tran->paymentmethod}}</td>
                            @if($tran->status)
                                <td style="color:green;">Success</td>
                            @else
                                <td style="color:red;">Failed</td>
                            @endif
                            <td>R{{$tran->amount}}</td>
                            <td>{{$tran->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
