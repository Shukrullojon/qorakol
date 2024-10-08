@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Qo'shish</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'filial.store','method'=>'POST','enctype' => 'multipart/form-data']) !!}
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="name"><strong>Nomi:</strong></label>{!! Form::label('name',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('name', null, ['autocomplete'=>'OFF','id'=>'name','placeholder' => 'Nomi','required'=>true,'class' => "form-control ".($errors->has('name') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('name'))
                                        <span class="error invalid-feedback">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="info"><strong>Malumoti:</strong></label>{!! Form::label('info',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('info', null, ['autocomplete'=>'OFF','id'=>'info','placeholder' => 'Malumoti','required'=>true,'class' => "form-control ".($errors->has('info') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('info'))
                                        <span class="error invalid-feedback">{{ $errors->first('info') }}</span>
                                    @endif
                                </div>
                            </div>

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
                                    <label for="status"><strong>Status:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::select('status', \App\Models\Advantage::$statuses, null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('status'))
                                        <span class="error invalid-feedback">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="google"><strong>Google Address:</strong></label>{!! Form::label('google',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('google', null, ['autocomplete'=>'OFF','id'=>'google','placeholder' => 'Google Address','required'=>true,'class' => "form-control ".($errors->has('google') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('google'))
                                        <span class="error invalid-feedback">{{ $errors->first('google') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="yandex"><strong>Yandex Address:</strong></label>{!! Form::label('yandex',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('yandex', null, ['autocomplete'=>'OFF','id'=>'yandex','placeholder' => 'Yandex Address','required'=>true,'class' => "form-control ".($errors->has('yandex') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('yandex'))
                                        <span class="error invalid-feedback">{{ $errors->first('yandex') }}</span>
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
