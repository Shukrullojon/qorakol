@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Markaz Haqida</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Malumot</th>
                                <td>{!! $center->text !!}</td>
                            </tr>

                            <tr>
                                <th>Link</th>
                                <td>{{ $center->link }}</td>
                            </tr>

                            <tr>
                                <th>O'quvchilar Soni</th>
                                <td>{{ $center->student_count }}</td>
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
