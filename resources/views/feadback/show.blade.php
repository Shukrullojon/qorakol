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
                                <th>Ism</th>
                                <td>{{ $feadback->name }}</td>
                            </tr>

                            <tr>
                                <th>Malumot</th>
                                <td>{{ $feadback->description }}</td>
                            </tr>

                            <tr>
                                <td>Rasmi</td>
                                <td>
                                    <img src="{{ asset("public/files/".$feadback->image) }}" width="200">
                                </td>
                            </tr>

                            <tr>
                                <th>Link</th>
                                <td>{{ $feadback->link }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Feadback::$statuses[$feadback->status] }}</td>
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
