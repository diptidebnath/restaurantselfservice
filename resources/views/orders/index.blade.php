@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">{{ __('All Orders') }}
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                      @if(count($orders)>0)
                        @foreach($orders as $key=>$order)
                    <div class="card-body">
                      
                        {{$order->id}}
                         {{$order->products}}
                         <a href="/order/{{$order->id}}/edit"> <button class="btn btn-primary">{{$order->status}}</button></a>
                          </div>
                          @endforeach
                          @endif
                    
                </div>
            </div>
        </div>
    </div>
@endsection
