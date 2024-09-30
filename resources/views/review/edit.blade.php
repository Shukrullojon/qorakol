@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Review</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($review, ['method' => 'PATCH','route' => ['review.update', $review->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="video"><strong>Video:</strong></label>{!! Form::label('video',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::file('video', null, ['autocomplete'=>'OFF','id'=>'video','placeholder' => 'Video','required'=>true,'class' => "form-control ".($errors->has('video') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('video'))
                                        <span class="error invalid-feedback">{{ $errors->first('video') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="status"><strong>Статус:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('status', \App\Models\About::$statuses,null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('status'))
                                        <span class="error invalid-feedback">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name"><strong>Name:</strong></label>{!! Form::label('name',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('name', null, ['autocomplete'=>'OFF','id'=>'name','placeholder' => 'Name','required'=>true,'class' => "form-control ".($errors->has('name') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('name'))
                                        <span class="error invalid-feedback">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="video_alt_uz"><strong>Video Alt(uz):</strong></label>{!! Form::label('video_alt_uz',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('video_alt_uz', null, ['rows' => 4,'autocomplete'=>'OFF','id'=>'video_alt_uz','placeholder' => 'Video Alt(uz)','required'=>true,'class' => "form-control ".($errors->has('video_alt_uz') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('video_alt_uz'))
                                        <span class="error invalid-feedback">{{ $errors->first('video_alt_uz') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="video_alt_ru"><strong>Vidoe Alt(ru):</strong></label>{!! Form::label('video_alt_ru',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('video_alt_ru', null, ['rows' => 4,'autocomplete'=>'OFF','id'=>'video_alt_ru','placeholder' => 'Video Alt(ru)','required'=>true,'class' => "form-control ".($errors->has('video_alt_ru') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('video_alt_ru'))
                                        <span class="error invalid-feedback">{{ $errors->first('video_alt_ru') }}</span>
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
