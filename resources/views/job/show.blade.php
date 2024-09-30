@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Show Job</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable"
                               class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                               user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <td>
                                    <img src="{{ asset("public/files/".$job->image) }}" width="200">
                                </td>
                            </tr>

                            <tr>
                                <th>Image(Logo)</th>
                                <td>
                                    <img src="{{ asset("public/files/".$job->image_logo) }}" width="100">
                                </td>
                            </tr>

                            <tr>
                                <th>Modal Images</th>
                                <td>
                                    @foreach($job->files as $f)
                                        <img src="{{ asset("public/files/".$f->file) }}" height="150px" width="150px" style="margin: 5px">
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <th>Title(uz)</th>
                                <td>{{ $job->title_uz }}</td>
                            </tr>

                            <tr>
                                <th>Title(ru)</th>
                                <td>{{ $job->title_ru }}</td>
                            </tr>

                            <tr>
                                <th>Address(uz)</th>
                                <td>{{ $job->address_uz }}</td>
                            </tr>

                            <tr>
                                <th>Address(ru)</th>
                                <td>{{ $job->address_ru }}</td>
                            </tr>

                            <tr>
                                <th>Description(uz)</th>
                                <td>{{ $job->description_uz }}</td>
                            </tr>

                            <tr>
                                <th>Description(ru)</th>
                                <td>{{ $job->description_ru }}</td>
                            </tr>

                            <tr>
                                <th>Width</th>
                                <td>{{ $job->width }}</td>
                            </tr>

                            <tr>
                                <th>Height</th>
                                <td>{{ $job->height }}</td>
                            </tr>

                            <tr>
                                <th>Img alt(uz)</th>
                                <td>{{ $job->img_alt_uz }}</td>
                            </tr>

                            <tr>
                                <th>Img alt(ru)</th>
                                <td>{{ $job->img_alt_ru }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Job::$statuses[$job->status] }}</td>
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
