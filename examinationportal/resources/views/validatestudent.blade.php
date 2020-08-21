@extends('layouts.app')

@section('title')
    Validate
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Validate Student') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($successmessage))
                        <div class="alert alert-success">
                            {{ $successmessage }}</a>
                        </div>
                    @endif

                    @if(!empty($nodatamessage))
                        <div class="alert alert-danger">
                            {{ $nodatamessage }}
                        </div>
                    @endif

                    {{ Form::open( array( 'url' => 'validate', 'method' => 'get' ) ) }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Student Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="studentcode" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Validate') }}
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
