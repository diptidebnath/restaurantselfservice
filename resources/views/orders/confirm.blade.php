@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
               <h2 class="card-header pizza_card_title">{{ __('Din beställning?') }}</h2>
                <div class="card order_custom_card p-4">
                    
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                      <p class="order_no_text">  Håll utkik efter ditt beställningsnummer:</p>
                      <h3 class="order_no">#{{ $data->id }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
