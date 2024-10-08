@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Yangiliklar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Sarlavha</th>
                                <td>{!! $new->title !!}</td>
                            </tr>

                            <tr>
                                <th>Malumot</th>
                                <td>{{ $new->description }}</td>
                            </tr>

                            <tr>
                                <th>Rasm</th>
                                <td>
                                    <img src="{{ asset("public/files/".$new->image) }}" width="100">
                                </td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\News::$statuses[$new->status] }}</td>
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
