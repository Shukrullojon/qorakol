@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Malumotlarni Tahrirlash</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($center, ['method' => 'PATCH','route' => ['center.update', $center->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="text"><strong>Malumot:</strong></label>{!! Form::label('text',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('text', null, ['autocomplete'=>'OFF','id'=>'text','placeholder' => 'Malumot','required'=>true,'class' => "form-control ".($errors->has('text') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('text'))
                                        <span class="error invalid-feedback">{{ $errors->first('text') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="link"><strong>Link:</strong></label>{!! Form::label('link',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('link', null, ['autocomplete'=>'OFF','id'=>'link','placeholder' => 'Link','required'=>true,'class' => "form-control ".($errors->has('link') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('link'))
                                        <span class="error invalid-feedback">{{ $errors->first('link') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="student_count"><strong>Student Soni:</strong></label>{!! Form::label('student_count',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('student_count', null, ['autocomplete'=>'OFF','id'=>'student_count','placeholder' => 'Student Soni','required'=>true,'class' => "form-control ".($errors->has('student_count') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('student_count'))
                                        <span class="error invalid-feedback">{{ $errors->first('student_count') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <br>
                                <button type="submit" class="btn btn-primary form-control">Update</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
