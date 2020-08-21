@extends('layouts.app')
@section('title')
    Successful Message
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Final Message</div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            Your Question paper has been submitted successfully!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection