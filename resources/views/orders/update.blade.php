@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Order Status') }}</div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('order.update', [$order->id]) }}">
                            @csrf
                               {{ method_field('PUT') }}

                            <div class="form-group row">
                                <label for="productname">{{$order->id}}</label>
                            </div>
                            <div class="form-group row">
                                <label for="productdesc">{{$order->products}}</label>
                               <select class="form-control  @error('name') is-invalid @enderror"
                                    id="status" name="status">
                                    <option value="Väntande" @if($order->status == "Väntande") Selected @endif >Väntande</option>
                                    <option value="Tillagas" @if($order->status == "Tillagas") Selected @endif>Tillagas</option>
                                    <option value="Klar" @if($order->status == "Klar") Selected @endif>Klar</option>
                                    </select>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
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
