@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ustunligimiz</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Sarlavha</th>
                                <td>{!! $advantage->title !!}</td>
                            </tr>

                            <tr>
                                <th>Malumot</th>
                                <td>{{ $advantage->description }}</td>
                            </tr>

                            <tr>
                                <th>Rasm</th>
                                <td>
                                    <img src="{{ asset("public/files/".$advantage->image) }}" width="100">
                                </td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Advantage::$statuses[$advantage->status] }}</td>
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
