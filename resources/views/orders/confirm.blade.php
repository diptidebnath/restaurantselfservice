@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-custom-secondary p-4">
                    
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                      <p class="order_no_text">  Håll utkik efter ditt beställningsnummer:</p>
                      <div class="card-header">#{{ $data->id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
