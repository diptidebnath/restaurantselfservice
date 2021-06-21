@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Product') }}</div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('pizza.store') }}" class="p-3">
                            @csrf

                            <div class="form-group row">
                                <label for="productname">Product Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                    id="productname" name="name" aria-describedby="nameHelp"
                                    placeholder="Enter Producr Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group row">
                                <label for="productdesc">Product description</label>
                                <textarea class="form-control  @error('description') is-invalid @enderror" id="productdesc"
                                    name="description" placeholder="Enter Producr description"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="number" class="form-control     @error('price') is-invalid @enderror"
                                    id="productprice" name="price" aria-describedby="PriceHelp"
                                    placeholder="Enter Producr Price">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
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
