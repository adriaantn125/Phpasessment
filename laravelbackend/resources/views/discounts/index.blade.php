<!-- Created by Adriaan van Niekerk -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Discount management <div style="float:right;"><a href="{{ url('/discounts/create') }}" class="btn btn-primary">Add</a> </div></div>
                @if (count($discounts) != 0)
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Min</th>
                            <th>Max</th>
                            <th>Discount</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($discounts as $discount)
                        <tr>
                            <td>{{$discount->min}}</td>
                            <td>{{$discount->max}}</td>
                            <td>{{$discount->discount}}</td>
                            <td><a href="{{ url('/discounts') }}/{{$discount->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>{!!Form::open(['action' => ['DiscountController@destroy', $discount->id], 'method' => 'POST', 'class' => ''])!!}
            {!!Form::hidden('_method', 'DELETE') !!}
            {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
            {!!Form::close()!!}</td>
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
