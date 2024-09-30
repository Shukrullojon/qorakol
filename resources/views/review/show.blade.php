@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Show Review</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable"
                               class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                               user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <td>{{ $review->name }}</td>
                            </tr>

                            <tr>
                                <td>Video</td>
                                <td>
                                    <video autoplay controls src="{{ asset("public/files/".$review->video) }}" width="200"></video>
                                </td>
                            </tr>

                            <tr>
                                <th>Video Alt(uz)</th>
                                <td>{{ $review->video_alt_uz }}</td>
                            </tr>

                            <tr>
                                <th>Video Alt(ru)</th>
                                <td>{{ $review->video_alt_ru }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Review::$statuses[$review->status] }}</td>
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
