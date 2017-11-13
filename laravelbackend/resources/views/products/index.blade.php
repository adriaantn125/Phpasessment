<!-- Created by Adriaan van Niekerk -->
@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Listed Products</h1>
        <div class="row">
        @foreach($products as $product)
          <div class="col-md-4">
            <h2>{{$product->title}}</h2>
            <img style="width:90%;height:200px" src="{{ url('/') }}/storage/images/{{$product->image}}" alt="" />
            <p>{!!$product->description!!}</p>
            <p><a class="btn btn-danger" href="{{ url('/') }}/products/{{$product->id}}/edit" role="button">Edit Product &raquo;</a>
            {!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class' => ''])!!}
            {!!Form::hidden('_method', 'DELETE') !!}
            {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
            {!!Form::close()!!}
            </p>
          </div>
        @endforeach
        {{$products->links()}}
        </div>
      </div>
@endsection