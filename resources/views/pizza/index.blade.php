@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">{{ __('All Pizza') }}
                    <span class="float-right">
                    <a href="{{route('pizza.create')}}">
                    <button class="btn btn-outline-secondary">Add Pizza</button>
                    </a>
                    </span>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                      @if(count($pizzas)>0)
                        @foreach($pizzas as $key=>$pizza)
                    <div class="card-body">
                      
                        {{$pizza->name}}
                         {{$pizza->description}}
                          {{$pizza->price}}Sek
                          </div>
                          @endforeach
                          @endif
                    
                </div>
            </div>
        </div>
    </div>
@endsection
