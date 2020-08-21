@extends('layouts.app')

@section('title')
    Student Details
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Student Details') }}</div>

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

                    {{ Form::open( array( 'url' => 'studentdetails', 'files' => true, 'class' => 'submit' ) ) }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Registration No.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="registrationnumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Roll No.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="rollnumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Class</label>
                            <div class="col-md-6">
                                <select name="class" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="10TH">10TH</option>
                                    <option value="12TH">12TH</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Stream</label>
                            <div class="col-md-6">
                                <select name="stream" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="GENERAL">GENERAL(10TH)</option>
                                    <option value="MEDICAL">MEDICAL</option>
                                    <option value="NON-MEDICAL">NON-MEDICAL</option>
                                    <option value="COMMERCE">COMMERCE</option>
                                    <option value="ARTS">ARTS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Exam Start Time</label>
                            <div class="col-md-6">
                                <input type="time" class="form-control" name="examstarttime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Exam End Time</label>
                            <div class="col-md-6">
                                <input type="time" class="form-control" name="examendtime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Date</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="examdate" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Student Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="studentcode" value="{{ $studentcode }}" required readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Photograph</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="photograph" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
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
