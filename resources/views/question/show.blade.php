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
                                <th>Savol</th>
                                <td>{{ $question->question }}</td>
                            </tr>

                            <tr>
                                <th>A</th>
                                <td>{{ $question->answer_1 }}</td>
                            </tr>

                            <tr>
                                <th>B</th>
                                <td>{{ $question->answer_2 }}</td>
                            </tr>

                            <tr>
                                <th>C</th>
                                <td>{{ $question->answer_3 }}</td>
                            </tr>

                            <tr>
                                <th>D</th>
                                <td>{{ $question->answer_4 }}</td>
                            </tr>

                            <tr>
                                <th>Javob</th>
                                <td>{{ \App\Models\Question::$answers[$question->correct_answer] }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Question::$statuses[$question->status] }}</td>
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
