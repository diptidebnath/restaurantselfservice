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
                                <input type="hidden" class="form-control  @error('name') is-invalid @enderror" id="productname" name="name" aria-describedby="nameHelp" value="{{ $pizzas->name }}">
                                  <input type="hidden" class="form-control     @error('productid') is-invalid @enderror" id="productid" name="productid" value="{{ $pizzas->id }} ">
                                   <input type="hidden" class="form-control     @error('qty') is-invalid @enderror" id="qty" name="qty" value="1">

                            </div>
                            <div class="form-group row">
                                <label for="productdesc">{{ $pizzas->price }} SEK</label>
                            </div>
                            <div class="form-group row">
                                <label for="totalprice">{{ $pizzas->price }} SEK</label>
                                   <input type="hidden" class="form-control     @error('totalprice') is-invalid @enderror" id="totalprice" name="totalprice" aria-describedby="PriceHelp" value="{{ $pizzas->price }}">

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
