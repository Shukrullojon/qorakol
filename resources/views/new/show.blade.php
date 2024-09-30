@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Show News</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable"
                               class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                               user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Title(uz)</th>
                                <td>{{ $news->title_uz }}</td>
                            </tr>

                            <tr>
                                <th>Title(ru)</th>
                                <td>{{ $news->title_ru }}</td>
                            </tr>

                            <tr>
                                <th>Description(uz)</th>
                                <td>{{ $news->description_uz }}</td>
                            </tr>

                            <tr>
                                <th>Description(ru)</th>
                                <td>{{ $news->description_ru }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td>
                                    <img src="{{ asset("public/files/".$news->image) }}" width="200">
                                </td>
                            </tr>

                            <tr>
                                <th>Modal Images</th>
                                <td>
                                    @foreach($news->files as $f)
                                        <img src="{{ asset("public/files/".$f->file) }}" height="150px" width="150px" style="margin: 5px">
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <th>Img Alt(uz)</th>
                                <td>{{ $news->img_alt_uz }}</td>
                            </tr>

                            <tr>
                                <th>Img Alt(ru)</th>
                                <td>{{ $news->img_alt_ru }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\News::$statuses[$news->status] }}</td>
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
