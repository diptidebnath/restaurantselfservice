@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Din beställning') }}</div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('order.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="productname"> {{ $pizzas->name }} </label>

                            </div>
                            <div class="form-group row">
                                <label for="productdesc">{{ $pizzas->price }} SEK</label>
                            </div>
                            <div class="form-group row">
                                <label for="totalprice">{{ $pizzas->price }} SEK</label>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Skicka beställning') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
