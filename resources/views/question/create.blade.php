@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Yangi Malumot Qo'shish</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'question.store','method'=>'POST','enctype' => 'multipart/form-data']) !!}
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="question"><strong>Savol:</strong></label>{!! Form::label('question',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('question', null, ['autocomplete'=>'OFF','id'=>'question','placeholder' => 'Savol','required'=>true,'class' => "form-control ".($errors->has('question') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('question'))
                                        <span class="error invalid-feedback">{{ $errors->first('question') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="answer_1"><strong>A:</strong></label>{!! Form::label('answer_1',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::text('answer_1', null, ['autocomplete'=>'OFF','id'=>'answer_1','placeholder' => 'A','required'=>true,'class' => "form-control ".($errors->has('answer_1') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('answer_1'))
                                        <span class="error invalid-feedback">{{ $errors->first('answer_1') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="answer_2"><strong>B:</strong></label>{!! Form::label('answer_2',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::text('answer_2', null, ['autocomplete'=>'OFF','id'=>'answer_2','placeholder' => 'B','required'=>true,'class' => "form-control ".($errors->has('answer_2') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('answer_2'))
                                        <span class="error invalid-feedback">{{ $errors->first('answer_2') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="answer_3"><strong>C:</strong></label>{!! Form::label('answer_3',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::text('answer_3', null, ['autocomplete'=>'OFF','id'=>'answer_3','placeholder' => 'C','required'=>true,'class' => "form-control ".($errors->has('answer_3') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('answer_3'))
                                        <span class="error invalid-feedback">{{ $errors->first('answer_3') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="answer_4"><strong>D:</strong></label>{!! Form::label('answer_4',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::text('answer_4', null, ['autocomplete'=>'OFF','id'=>'answer_4','placeholder' => 'D','required'=>true,'class' => "form-control ".($errors->has('answer_4') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('answer_4'))
                                        <span class="error invalid-feedback">{{ $errors->first('answer_4') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="correct_answer"><strong>Javob:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::select('correct_answer', \App\Models\Question::$answers, null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('correct_answer') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('correct_answer'))
                                        <span class="error invalid-feedback">{{ $errors->first('correct_answer') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="status"><strong>Status:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::select('status', \App\Models\Advantage::$statuses, null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('status'))
                                        <span class="error invalid-feedback">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <br>
                                <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
