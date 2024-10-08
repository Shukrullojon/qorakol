@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">O'qituvchilar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Nomi</th>
                                <td>{!! $teacher->name !!}</td>
                            </tr>

                            <tr>
                                <th>Malumot</th>
                                <td>{!! $teacher->info !!}</td>
                            </tr>

                            <tr>
                                <th>Tajriba</th>
                                <td>{!! $teacher->experence !!}</td>
                            </tr>

                            <tr>
                                <th>Rasm</th>
                                <td>
                                    <img src="{{ asset("public/files/".$teacher->image) }}" width="100">
                                </td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Teacher::$statuses[$teacher->status] ?? ""  }}</td>
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
