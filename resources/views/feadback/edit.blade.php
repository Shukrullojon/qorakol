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
                        {!! Form::model($feadback, ['method' => 'PATCH','route' => ['feadback.update', $feadback->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="row">

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="name"><strong>Ism:</strong></label>{!! Form::label('name',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('name', null, ['autocomplete'=>'OFF','id'=>'name','placeholder' => 'Malumot','required'=>true,'class' => "form-control ".($errors->has('name') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('name'))
                                        <span class="error invalid-feedback">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="image"><strong>Image:</strong></label>{!! Form::label('image',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::file('image', null, ['autocomplete'=>'OFF','id'=>'image','placeholder' => 'Image','required'=>true,'class' => "form-control ".($errors->has('image') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('image'))
                                        <span class="error invalid-feedback">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="link"><strong>Link:</strong></label>{!! Form::label('link',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('link', null, ['autocomplete'=>'OFF','id'=>'link','placeholder' => 'Link','required'=>true,'class' => "form-control ".($errors->has('link') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('link'))
                                        <span class="error invalid-feedback">{{ $errors->first('link') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label for="status"><strong>Status:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::select('status', \App\Models\Advantage::$statuses, null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('status'))
                                        <span class="error invalid-feedback">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="description"><strong>Malumot:</strong></label>{!! Form::label('description',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('description', null, ['autocomplete'=>'OFF','id'=>'description','placeholder' => 'Malumot','required'=>true,'class' => "form-control ".($errors->has('description') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('description'))
                                        <span class="error invalid-feedback">{{ $errors->first('description') }}</span>
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
