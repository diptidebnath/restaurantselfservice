


    @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Import/Export Product') }}</div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                      
        <form action="{{ route('import-file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-5" style="max-width: 600px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Browse file</label>
                </div>
            </div>
            <button class="btn btn-danger">Click to Import</button>
            <a class="btn btn-primary" href="{{ route('export-file') }}">Click to Export</a>
        </form>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
