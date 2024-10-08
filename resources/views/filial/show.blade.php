@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Filial</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Nomi</th>
                                <td>{!! $filial->name !!}</td>
                            </tr>

                            <tr>
                                <th>Nomi</th>
                                <td>{!! $filial->info !!}</td>
                            </tr>

                            <tr>
                                <th>Rasm</th>
                                <td>
                                    <img src="{{ asset("public/files/".$filial->image) }}" width="100">
                                </td>
                            </tr>

                            <tr>
                                <th>Google</th>
                                <td>{{ $filial->google  }}</td>
                            </tr>

                            <tr>
                                <th>Yandex</th>
                                <td>{{ $filial->yandex  }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Filial::$statuses[$filial->status] ?? ""  }}</td>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
