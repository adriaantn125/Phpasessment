<!-- Created by Adriaan van Niekerk -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', "Please enter product title")}}
                        {{Form::text('title', '', ['class' => 'form-control' , 'placeholder' => 'Product Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('description', "Please enter product description")}}
                        {{Form::textarea('description', '', ['class' => 'form-control' , 'placeholder' => 'Product description', 'id' => 'article-ckeditor'])}}
                    </div>
                     <div class="form-group">
                        {{Form::label('price', "Please enter product price")}}
                        {{Form::number('price', '', ['class' => 'form-control currency' , 'placeholder' => 'Product price', 'data-number-to-fixed' => "2"])}}
                    </div>
                    <div class="form-group">
                        {{Form::file('image')}}
                    </div>
                     {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
