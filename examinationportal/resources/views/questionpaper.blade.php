@extends('layouts.app')

@section('title')
    Question Paper
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Subject : Science</div>

                    <div class="card-body">

                        @if(!empty($successmessage))
                            <div class="alert alert-success">
                                {{ $successmessage }}
                            </div>
                        @endif
                        <p class="blinking"></p>
                        <input type="hidden" value="{{ $examstarttime }}" id="examstarttime">
                        <input type="hidden" value="{{ $examendtime }}" id="examendtime">
                        <input type="hidden" value="{{ $examdate }}" id="examdate">
                        
                        {{ Form::open(array('url' => 'questionpaper', 'class' => 'submit')) }}
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="{{ $questionpaper->id }}">
                                <input type="hidden" name="rollnumber" value="{{ $rollnumber }}">
                                Q.No.{{ $questionpaper->id }} :- {{ $questionpaper->question}}
                            </div>
                            <div class="col-md-12">
                                @if($option == $questionpaper->option1 )
                                    {{ Form::radio('option', $questionpaper->option1, true ) }}
                                    {{ $questionpaper->option1 }}
                                @else
                                    {{ Form::radio('option', $questionpaper->option1, false ) }}
                                    {{ $questionpaper->option1 }}
                                @endif
                            </div>
                            <div class="col-md-12">
                                @if($option == $questionpaper->option2 )
                                    {{ Form::radio('option', $questionpaper->option2, true  )}}
                                    {{ $questionpaper->option2 }}
                                @else
                                    {{ Form::radio('option', $questionpaper->option2, false  )}}
                                    {{ $questionpaper->option2 }}
                                @endif
                            </div>
                            <div class="col-md-12">
                                @if($option == $questionpaper->option3 )
                                    {{ Form::radio('option', $questionpaper->option3, true ) }}
                                    {{ $questionpaper->option3 }}
                                @else
                                    {{ Form::radio('option', $questionpaper->option3, false  )}}
                                    {{ $questionpaper->option3 }}
                                @endif
                            </div>
                            <div class="col-md-12">
                                @if($option == $questionpaper->option4 )
                                    {{ Form::radio('option', $questionpaper->option4, true  )}}
                                    {{ $questionpaper->option4 }}
                                @else
                                    {{ Form::radio('option', $questionpaper->option4, false  )}}
                                    {{ $questionpaper->option4 }}
                                @endif
                            </div>
                            
                            <div class="form-group row mt-4">
                                <div class="col-md-6">
                                    @if($questionpaper->id == 1)
                                        <input type="button" disabled="" value="{{ __('PREVIOUS') }}" class="btn btn-secondary">
                                    @else
                                        <a href="{{ url('questionpaper') }}/{{$questionpaper->id -1 }}" class="btn btn-success">
                                            {{ __('PREVIOUS') }}
                                        </a>
                                    @endif

                                    @if($totalquestion == $questionpaper->id)
                                        <input type="hidden" name="final" value="Final">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Submit') }}
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-success">
                                            {{ __('NEXT') }}
                                        </button>
                                    @endif
                                </div>
                            </div>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" >Your Details</div>
                    <div class="card-body">
                        <div class="col-md-12 badge badge-pill badge-warning" id="demo"></div>
                        <div class="col-md-12">
                            <div class="col-md-3 justify-content-center">
                                <img src="{{ asset('uploads') }}/{{ $studentdetail->photograph }}" alt="" style="height:100px; width: 100px;">
                            </div>
                            <div class="justify-content-center">
                                {{ __('Roll No. : ') }} {{ $studentdetail->roll_number }}
                            </div>
                            <div class="justify-content-center">
                               {{ __('Class : ') }} {{ $studentdetail->class }} 
                            </div>
                            <div class="justify-content-center">
                               {{ __('Stream : ') }} {{ $studentdetail->stream }} 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-left">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Question Links</div>
                    <div class="card-body">
                        @foreach( $questionlinks as $questionlinks)
                            <a href="{{ url('questionpaper') }}/{{$questionlinks->id}}_{{ $rollnumber }}" class="alert alert-primary">
                                {{ $questionlinks->id }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Question Responded</div>
                    <div class="card-body">
                        @foreach( $studentresponse as $studentresponse)
                            @if($studentresponse->question_status == "FILLED")
                                <a href="{{ url('questionpaper') }}/{{$studentresponse->question_number}}_{{ $rollnumber }}" class="alert alert-success">
                                    {{ $studentresponse->question_number }}
                                </a>
                             @else
                                <a href="{{ url('questionpaper') }}/{{$studentresponse->question_number}}_{{ $rollnumber }}" class="alert alert-danger">
                                    {{ $studentresponse->question_number }}
                                </a> 
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection