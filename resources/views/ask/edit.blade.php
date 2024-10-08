@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tahrirlash</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($ask, ['method' => 'PATCH','route' => ['ask.update', $ask->id], 'enctype' => 'multipart/form-data']) !!}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="title"><strong>Sarlavha:</strong></label>{!! Form::label('title',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('title', null, ['autocomplete'=>'OFF','id'=>'title','placeholder' => 'Sarlavha','required'=>true,'class' => "form-control ".($errors->has('title') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('title'))
                                        <span class="error invalid-feedback">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="description"><strong>Malumot:</strong></label>{!! Form::label('description',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('description', null, ['autocomplete'=>'OFF','id'=>'description','placeholder' => 'Malumot','required'=>true,'class' => "form-control ".($errors->has('description') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('description'))
                                        <span class="error invalid-feedback">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="status"><strong>Status:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}<br>
                                    {!! Form::select('status', \App\Models\Ask::$statuses, null, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
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
