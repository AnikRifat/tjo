@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Course</h4>
        <div class="card-body">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('course.create') }}" class="btn btn-primary">+ Add Course</a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="text-center display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course ID</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Total Duration</th>
                                        <th>Total Classes</th>
                                        <th>Image</th>
                                        <th>Cover Image</th>
                                        <th>overview</th>
                                        <th>Preview</th>
                                        <th>intro</th>
                                        <th>Category</th>
                                        <th>Category ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->course_id }}</td>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->price }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td>{{ $course->classes }}</td>
                                        <td><img src="{{ asset('/') }}assets/images/course/{{ $course->image }}"
                                              class="img-fluid" alt=""></td>
                                        <td><img src="{{ asset('/') }}assets/images/course/{{ $course->cover_image }}"
                                              class="img-fluid" alt=""></td>
                                        <td>{!! Str::limit($course->overview, 50) !!}</td>
                                        <td>{{ $course->preview }}</td>
                                        <td>{{ $course->intro }}</td>
                                        <td>{{ $course->category }}</td>
                                        <td>{{ $course->category_id }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('course.edit',$course->id) }}"
                                                  class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                      class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('course.destroy',$course->id) }}"
                                                  id="form{{ $course->id }}" method="get">
                                                    @csrf
                                                </form>
                                                <button class="btn btn-danger shadow btn-xs sharp"
                                                  onclick="deleteItem({{ $course->id }});"><i
                                                      class="fa fa-trash"></i></button>
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
@section('script')
<script>
    function deleteItem(id) {
    // console.log(id);

    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    document.getElementById(`form${id}`).submit();
  }
})

    }
</script>
@endsection
