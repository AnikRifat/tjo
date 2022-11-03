@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Demo Page</h4>
        <div class="card-body">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="text-center display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course ID</th>
                                        <th>Title</th>
                                        <th>Total Duration</th>
                                        <th>Total Classes</th>
                                        <th>Image</th>
                                        <th>Cover Image</th>
                                        <th>overview</th>
                                        <th>Preview</th>
                                        <th>intro</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->course_id }}</td>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td>{{ $course->classes }}</td>
                                        <td><img src="{{ asset('/') }}assets/images/course/{{ $course->image }}"
                                              class="img-fluid" alt=""></td>
                                        <td><img src="{{ asset('/') }}assets/images/course/{{ $course->cover_image }}"
                                              class="img-fluid" alt=""></td>
                                        <td>{!! $course->overview !!}</td>
                                        <td>{{ $course->preview }}</td>
                                        <td>{{ $course->intro }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('course.edit',$course->id) }}"
                                                  class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                      class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                      class="fa fa-trash"></i></a>
                                            </div>
                                        </td>


                                        @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
