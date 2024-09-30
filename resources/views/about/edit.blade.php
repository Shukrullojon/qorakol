@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit About</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($about, ['method' => 'PATCH','route' => ['about.update', $about->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="image"><strong>Image:</strong></label>{!! Form::label('image',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::file('image', null, ['autocomplete'=>'OFF','id'=>'image','placeholder' => 'Image','required'=>true,'class' => "form-control ".($errors->has('image') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('image'))
                                        <span class="error invalid-feedback">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>

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
                                    <label for="title_uz"><strong>Title(uz):</strong></label>{!! Form::label('title_uz',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('title_uz', null, ['autocomplete'=>'OFF','id'=>'title_uz','placeholder' => 'Title(uz)','required'=>true,'class' => "form-control ".($errors->has('title_uz') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('title_uz'))
                                        <span class="error invalid-feedback">{{ $errors->first('title_uz') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="title_ru"><strong>Title(ru):</strong></label>{!! Form::label('title_ru',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('title_ru', null, ['autocomplete'=>'OFF','id'=>'title_ru','placeholder' => 'Title(ru)','required'=>true,'class' => "form-control ".($errors->has('title_ru') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('title_ru'))
                                        <span class="error invalid-feedback">{{ $errors->first('title_ru') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="description_uz"><strong>Description(uz):</strong></label>{!! Form::label('description_uz',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('description_uz', null, ['rows' => 4,'autocomplete'=>'OFF','id'=>'description_uz','placeholder' => 'Description(uz)','required'=>true,'class' => "form-control ".($errors->has('description_uz') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('description_uz'))
                                        <span class="error invalid-feedback">{{ $errors->first('description_uz') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="description_ru"><strong>Description(ru):</strong></label>{!! Form::label('description_ru',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('description_ru', null, ['rows' => 4,'autocomplete'=>'OFF','id'=>'description_ru','placeholder' => 'Description(ru)','required'=>true,'class' => "form-control ".($errors->has('description_ru') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('description_ru'))
                                        <span class="error invalid-feedback">{{ $errors->first('description_ru') }}</span>
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
                                    <label for="video_alt_ru"><strong>Img Alt(ru):</strong></label>{!! Form::label('video_alt_ru',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('video_alt_ru', null, ['rows' => 4,'autocomplete'=>'OFF','id'=>'video_alt_ru','placeholder' => 'Video Alt(ru)','required'=>true,'class' => "form-control ".($errors->has('video_alt_ru') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('video_alt_ru'))
                                        <span class="error invalid-feedback">{{ $errors->first('video_alt_ru') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="img_alt_uz"><strong>Img Alt(uz):</strong></label>{!! Form::label('img_alt_uz',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('img_alt_uz', null, ['rows' => 4,'autocomplete'=>'OFF','id'=>'img_alt_uz','placeholder' => 'Img Alt(uz)','required'=>true,'class' => "form-control ".($errors->has('img_alt_uz') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('img_alt_uz'))
                                        <span class="error invalid-feedback">{{ $errors->first('img_alt_uz') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="img_alt_ru"><strong>Video Alt(ru):</strong></label>{!! Form::label('img_alt_ru',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('img_alt_ru', null, ['rows' => 4,'autocomplete'=>'OFF','id'=>'img_alt_ru','placeholder' => 'Img Alt(ru)','required'=>true,'class' => "form-control ".($errors->has('img_alt_ru') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('img_alt_ru'))
                                        <span class="error invalid-feedback">{{ $errors->first('img_alt_ru') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="status"><strong>Статус:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('status', \App\Models\About::$statuses,null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('status'))
                                        <span class="error invalid-feedback">{{ $errors->first('status') }}</span>
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
