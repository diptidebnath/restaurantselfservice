@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                 <h2 class="card-header pizza_card_title">{{ __('Vad vill du äta idag?') }}</h2>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                      @if(count($pizzas)>0)
                        @foreach($pizzas as $key=>$pizza)
                        <div class="card pizza_bg my-2">
                   
                    <div class="card-body ">
                      
                  
                  <span class="font-primary"> {{$pizza->name}}</span>
                   

                         {{$pizza->description}}
                          {{$pizza->price}}Sek
                          <a href="/createorder/{{$pizza->id}}" class="float-right"> <img src="../../img/pizza-arrow.svg" alt="Add Pizza"></a>
                          </div>
                          </div>
                          @endforeach
                          @endif
                    
                
            </div>
        </div>
    </div>
@endsection
