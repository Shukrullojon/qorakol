@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Show About</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable"
                               class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                               user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Title(uz)</th>
                                <td>{{ $about->title_uz }}</td>
                            </tr>

                            <tr>
                                <th>Title(ru)</th>
                                <td>{{ $about->title_ru }}</td>
                            </tr>

                            <tr>
                                <th>Description(uz)</th>
                                <td>{{ $about->description_uz }}</td>
                            </tr>

                            <tr>
                                <th>Description(ru)</th>
                                <td>{{ $about->description_ru }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>
                                    <img src="{{ asset("public/files/".$about->image) }}" width="200">
                                </td>
                            </tr>
                            <tr>
                                <td>Video</td>
                                <td>
                                    <video controls src="{{ asset("public/files/".$about->video) }}" width="200"></video>
                                </td>
                            </tr>

                            <tr>
                                <th>Video Alt(uz)</th>
                                <td>{{ $about->video_alt_uz }}</td>
                            </tr>

                            <tr>
                                <th>Video Alt(ru)</th>
                                <td>{{ $about->video_alt_ru }}</td>
                            </tr>

                            <tr>
                                <th>Img Alt(uz)</th>
                                <td>{{ $about->img_alt_uz }}</td>
                            </tr>

                            <tr>
                                <th>Img Alt(ru)</th>
                                <td>{{ $about->img_alt_ru }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\About::$statuses[$about->status] }}</td>
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
