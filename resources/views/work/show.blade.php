@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Show Work</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable"
                               class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                               user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Title(uz)</th>
                                <td>{{ $work->title_uz }}</td>
                            </tr>

                            <tr>
                                <th>Title(ru)</th>
                                <td>{{ $work->title_ru }}</td>
                            </tr>

                            <tr>
                                <th>Description(uz)</th>
                                <td>{{ $work->description_uz }}</td>
                            </tr>

                            <tr>
                                <th>Description(ru)</th>
                                <td>{{ $work->description_ru }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Work::$statuses[$work->status] }}</td>
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
