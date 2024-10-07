@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">To'liq Malumot</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable"
                               class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                               user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Fan</th>
                                <td>{{ $cource->name }}</td>
                            </tr>

                            <tr>
                                <th>Malumot</th>
                                <td>{{ $cource->description }}</td>
                            </tr>

                            <tr>
                                <th>Rasmi</th>
                                <td>
                                    <img src="{{ asset("public/files/".$cource->image) }}" width="200">
                                </td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Cource::$statuses[$cource->status] }}</td>
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
