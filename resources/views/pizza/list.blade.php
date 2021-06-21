@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                 <h2 class="card-header ">{{ __('Select Pizza') }}</h2>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                      @if(count($pizzas)>0)
                        @foreach($pizzas as $key=>$pizza)
                        <div class="card">
                   
                    <div class="card-body">
                      
                  
                   {{$pizza->name}}
                   

                         {{$pizza->description}}
                          {{$pizza->price}}Sek
                          <a href="/order/?id={{$pizza->id}}" > <button class="btn btn-secondary float-right">Add</button></a>
                          </div>
                          </div>
                          @endforeach
                          @endif
                    
                
            </div>
        </div>
    </div>
@endsection
