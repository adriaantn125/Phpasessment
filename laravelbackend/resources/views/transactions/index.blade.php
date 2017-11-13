<!-- Created by Adriaan van Niekerk -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(count($users) > 0)
                        <div class="list-group">
                        <l1>
                            <a href="#" class="list-group-item list-group-item-action active">
                                Client Name
                            </a>
                        </li>
                            @foreach($users as $user)
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="{{ url('/transactions') }}/{{$user->id}}">{{$user->name}}</a>
                                <span class="badge badge-primary badge-pill">R{{$user->balance}}</span>
                            </li>
                            @endforeach
                        </div>
                    @else
                        Sorry no transactions found!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
