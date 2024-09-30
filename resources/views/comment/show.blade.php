@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Show Comment</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable"
                               class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                               user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Comment(uz)</th>
                                <td>{{ $comment->comment_uz }}</td>
                            </tr>

                            <tr>
                                <th>Comment(ru)</th>
                                <td>{{ $comment->comment_ru }}</td>
                            </tr>

                            <tr>
                                <th>Fio</th>
                                <td>{{ $comment->fio }}</td>
                            </tr>

                            <tr>
                                <th>Company</th>
                                <td>{{ $comment->company }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Comment::$statuses[$comment->status] }}</td>
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
