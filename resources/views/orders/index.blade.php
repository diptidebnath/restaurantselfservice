@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <h2 class="card-header pizza_card_title">{{ __('Order Status') }}</h2>
              @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                <div class="row">
                    
                    
                      @if(count($orders)>0)
                        @foreach($orders as $key=>$order)
                        <div class="card col-6 col-md-4 p-2 bg-transparent border-0">
                    <div class="card-body {{$order->status}} ">
                     <h3 class="order_no">#{{$order->id}}</h3>
                       <p class="order_no_text">  {{$order->products}}</p>
                     
                        
                        
                         <a href="/order/{{$order->id}}/edit"> <button class="btn btn-custom-status">{{$order->status}}</button></a>
                          </div>
                           </div>
                          @endforeach
                          @endif
                    
               </div>
            </div>
        </div>
    </div>
@endsection
