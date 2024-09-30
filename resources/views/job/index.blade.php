@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Job Management</h3>

                        <a href="{{ route('job.create') }}" class="btn btn-success btn-sm float-right">
                            <span class="fas fa-plus-circle"></span>
                            Create
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <!-- Data table -->
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Title(uz)</th>
                                <th>Address(uz)</th>
                                <th>Image</th>
                                <th>Image(Logo)</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{ $job->title_uz }}</td>
                                    <td>{!! $job->address_uz !!}</td>
                                    <td>
                                        <img src="{{ asset("public/files/".$job->image) }}" width="100">
                                    </td>
                                    <td>
                                        <img src="{{ asset("public/files/".$job->image_logo) }}" width="100">
                                    </td>
                                    <td>{{ \App\Models\Job::$statuses[$job->status] }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="" href="{{ route('job.show',$job->id) }}"
                                               style="margin-right: 7px">
                                                <span class="fa fa-eye"></span>
                                            </a>

                                            <a class="" href="{{ route('job.edit',$job->id) }}"
                                               style="margin-right: 2px">
                                                <span class="fa fa-edit" style="color: #562bb0"></span>
                                            </a>

                                            <form action="{{ route("job.destroy", $job->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="button"
                                                        style='display:inline; border:none; background: none'
                                                        onclick="if (confirm('Вы уверены?')) { this.form.submit() } "><span
                                                        class="fa fa-trash"></span></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfooter>
                                <tr>
                                    <td colspan="12">
                                        {{ $jobs->withQueryString()->links()   }}
                                    </td>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
