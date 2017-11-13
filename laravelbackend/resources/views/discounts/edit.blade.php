<!-- Created by Adriaan van Niekerk -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Discount</div>
                <div class="panel-body">
                    {!! Form::open(['action' => ['DiscountController@update', $discount->id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title', "Please enter min")}}
                        {{Form::number('min', $discount->min, ['class' => 'form-control' , 'placeholder' => 'Min'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('description', "Please enter max")}}
                        {{Form::number('max', $discount->max, ['class' => 'form-control' , 'placeholder' => 'Max', 'id' => 'article-ckeditor'])}}
                    </div>
                     <div class="form-group">
                        {{Form::label('price', "Please enter discount %")}}
                        {{Form::number('discount', ($discount->discount * 100), ['class' => 'form-control' , 'placeholder' => 'Discount', 'data-number-to-fixed' => "2"])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
