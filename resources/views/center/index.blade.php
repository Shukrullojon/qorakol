@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">MArkaz Haqida</h3>

                        <a href="{{ route('center.create') }}" class="btn btn-success btn-sm float-right">
                            <span class="fas fa-plus-circle"></span> Create
                        </a>
                    </div>
                    <div class="card-body">
                        @if (Session::get('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Malumot</th>
                                <th>Link</th>
                                <th>O'quvchilar soni</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($centers as $center)
                                <tr>
                                    <td>{{ $center->text }}</td>
                                    <td>{{ $center->link }}</td>
                                    <td>{{ $center->student_count }}</td>
                                    <td>
                                        <a class="" href="{{ route('center.show',$center->id) }}" style="margin-right: 7px">
                                            <span class="fa fa-eye"></span>
                                        </a>

                                        <a class="" href="{{ route('center.edit',$center->id) }}" style="margin-right: 2px">
                                            <span class="fa fa-edit" style="color: #562bb0"></span>
                                        </a>

                                        <form action="{{ route("center.destroy", $center->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="button"
                                                    style='display:inline; border:none; background: none'
                                                    onclick="if (confirm('Вы уверены?')) { this.form.submit() } "><span
                                                    class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $centers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
