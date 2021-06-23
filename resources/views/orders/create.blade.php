@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="card-header pizza_card_title">{{ __('Din beställning?') }}</h2>
                <div class="card order_custom_card">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('order.store') }}">
                            @csrf
                            <div class="row">
                            <div class="form-group col-6">
                                <label for="productname"> {{ $pizzas->name }} </label>
                                <input type="hidden" class="form-control  @error('name') is-invalid @enderror"
                                    id="productname" name="name" aria-describedby="nameHelp" value="{{ $pizzas->name }}">
                                <input type="hidden" class="form-control     @error('productid') is-invalid @enderror"
                                    id="productid" name="productid" value="{{ $pizzas->id }} ">
                                <input type="hidden" class="form-control     @error('qty') is-invalid @enderror" id="qty"
                                    name="qty" value="1">

                            </div>
                            <div class="form-group col-6 text-right">
                                <label for="productdesc">{{ $pizzas->price }} SEK</label>
                            </div>
                            <div class="form-group col-6">
                                <p class="font-weight-bold">Total</p>
                            </div>
                            <div class="form-group col-6 text-right">
                                <label for="totalprice" class="font-weight-bold">{{ $pizzas->price }} SEK</label>
                                <input type="hidden" class="form-control     @error('totalprice') is-invalid @enderror"
                                    id="totalprice" name="totalprice" aria-describedby="PriceHelp"
                                    value="{{ $pizzas->price }}">

                            </div>
                            <div class="form-group col-6">
                            <a href="/">
                            <button type="button" class="btn btn-custom-cancel">
                                        {{ __('Avbryt') }}
                                    </button>
                            </a>
                            </div>
                            <div class="form-group col-6">
                             <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-custom">
                                        {{ __('Skicka beställning') }}
                                    </button>
                                </div>
                            </div>
                            </div>


                             </div>

                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
