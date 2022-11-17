@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">live</h4>
        <div class="card-body">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('live.create') }}" class="btn btn-primary">+ Add live</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="text-center display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course ID</th>
                                        <th>Banner</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lives as $live)
                                    <tr>
                                        <td>{{ $live->id }}</td>
                                        <td>{{ $live->course_id }}</td>
                                        <td><img src="{{ asset('/') }}assets/images/course/{{ $live->banner }}"
                                              class="img-fluid" alt=""></td>
                                        <td>{{ $live->start_date  }}</td>
                                        <td>{{ $live->end_date  }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('live.edit',$live->id) }}"
                                                  class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                      class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('live.destroy',$live->id) }}"
                                                  id="form{{ $live->id }}" method="get">
                                                    @csrf
                                                </form>
                                                <button class="btn btn-danger shadow btn-xs sharp"
                                                  onclick="deleteItem({{ $live->id }});"><i
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
