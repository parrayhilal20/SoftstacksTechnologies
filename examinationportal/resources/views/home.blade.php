@extends('layouts.app')

@section('title')
    Add Question
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!empty($successmessage))
                        <div class="alert alert-success">
                            {{ $successmessage }}
                        </div>
                    @endif

                    {{ Form::open( array('url' => 'home') ) }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Add Question</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="addquestion" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Option1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="option1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Option2</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="option2" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Option3</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="option3" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Option4</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="option4" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Actual Response</label>
                            <div class="col-md-6">
                                 <select name="actual_response" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="option1">option1</option>
                                    <option value="option1">option1</option>
                                    <option value="option1">option1</option>
                                    <option value="option1">option1</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit Question') }}
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
