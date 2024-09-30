@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Comment</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($comment, ['method' => 'PATCH','route' => ['comment.update', $comment->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="comment_uz"><strong>Comment(uz):</strong></label>{!! Form::label('comment_uz',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('comment_uz', null, ['autocomplete'=>'OFF','id'=>'comment_uz','placeholder' => 'Comment(uz)','required'=>true,'class' => "form-control ".($errors->has('comment_uz') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('comment_uz'))
                                        <span class="error invalid-feedback">{{ $errors->first('comment_uz') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="comment_ru"><strong>Comment(ru):</strong></label>{!! Form::label('comment_ru',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('comment_ru', null, ['autocomplete'=>'OFF','id'=>'comment_ru','placeholder' => 'Comment(ru)','required'=>true,'class' => "form-control ".($errors->has('comment_ru') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('comment_ru'))
                                        <span class="error invalid-feedback">{{ $errors->first('comment_ru') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="fio"><strong>Fio:</strong></label>{!! Form::label('fio',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('fio', null, ['autocomplete'=>'OFF','id'=>'fio','placeholder' => 'Fio','required'=>true,'class' => "form-control ".($errors->has('fio') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('fio'))
                                        <span class="error invalid-feedback">{{ $errors->first('fio') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="company"><strong>Company:</strong></label>{!! Form::label('company',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('company', null, ['autocomplete'=>'OFF','id'=>'fio','placeholder' => 'Company','required'=>true,'class' => "form-control ".($errors->has('company') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('company'))
                                        <span class="error invalid-feedback">{{ $errors->first('company') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="status"><strong>Status:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('status', \App\Models\Comment::$statuses,null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
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
