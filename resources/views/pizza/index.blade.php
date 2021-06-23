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
                   
                    <div class="card-body">
                    <table class="w-100">
                    <tr>
                    <th>Name</th>
                     <th>Description</th>
                      <th>Price</th>
                      <th>&nbsp;</th>
                      <th>&nbsp;</th>
                      </tr>
                         @if(count($pizzas)>0)
                        @foreach($pizzas as $key=>$pizza)
                        <tr>
                        <td>{{$pizza->name}}</td>
                        <td> {{$pizza->description}}</td>
                         <td> {{$pizza->price}} SEK</td>
                         <td><a href="/pizza/{{$pizza->id}}/edit">Edit</a></td>
                         <td> <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal{{$pizza->id}}">
                                      Delete
                                    </button>
                                     <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$pizza->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <form action="{{route('pizza.destroy',[$pizza->id])}}" method="post">@csrf
                                    {{method_field('DELETE')}}
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete {{$pizza->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       Are you sure?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                      </div>
                    </div>
                </form>
                  </div>
                </div>
                                    
                                    </td>
                          </tr>
                          @endforeach
                          @endif
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
