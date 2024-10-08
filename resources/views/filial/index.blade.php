@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Filiallar</h3>

                        <a href="{{ route('filial.create') }}" class="btn btn-success btn-sm float-right">
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
                                <th>Nomi</th>
                                <th>Malumot</th>
                                <th>Rasm</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($filials as $filial)
                                <tr>
                                    <td>{{ $filial->name }}</td>
                                    <td>{{ $filial->info }}</td>
                                    <td>
                                        <img src="{{ asset("public/files/".$filial->image) }}" width="100">
                                    </td>
                                    <td>{{ \App\Models\Filial::$statuses[$filial->status] ?? ""  }}</td>
                                    <td>
                                        <a class="" href="{{ route('filial.show',$filial->id) }}" style="margin-right: 7px">
                                            <span class="fa fa-eye"></span>
                                        </a>

                                        <a class="" href="{{ route('filial.edit',$filial->id) }}" style="margin-right: 2px">
                                            <span class="fa fa-edit" style="color: #562bb0"></span>
                                        </a>

                                        <form action="{{ route("filial.destroy", $filial->id) }}" method="POST">
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

                        {{ $filials->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection