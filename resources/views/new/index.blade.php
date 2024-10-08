@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Yangiliklar</h3>

                        <a href="{{ route('advantage.create') }}" class="btn btn-success btn-sm float-right">
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
                                <th>Sarlavha</th>
                                <th>Malumot</th>
                                <th>Rasm</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($news as $new)
                                <tr>
                                    <td>{{ $new->title }}</td>
                                    <td>{{ $new->description }}</td>
                                    <td>
                                        <img src="{{ asset("public/files/".$new->image) }}" width="100">
                                    </td>
                                    <td>{{ \App\Models\News::$statuses[$new->status] ?? ""  }}</td>
                                    <td>
                                        <a class="" href="{{ route('new.show',$new->id) }}" style="margin-right: 7px">
                                            <span class="fa fa-eye"></span>
                                        </a>

                                        <a class="" href="{{ route('new.edit',$new->id) }}" style="margin-right: 2px">
                                            <span class="fa fa-edit" style="color: #562bb0"></span>
                                        </a>

                                        <form action="{{ route("new.destroy", $new->id) }}" method="POST">
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

                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
