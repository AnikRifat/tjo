@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">testimonial</h4>
        <div class="card-body">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('testimonial.create') }}" class="btn btn-primary">+ Add testimonial</a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="text-center display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>title</th>
                                        <th>image</th>
                                        <th>text</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->id }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->title }}</td>
                                        <td>{{ $testimonial->text }}</td>
                                        <td><img
                                              src="{{ asset('/') }}assets/images/testimonial/{{ $testimonial->image }}"
                                              class="img-fluid" alt=""></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('testimonial.edit',$testimonial->id) }}"
                                                  class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                      class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('testimonial.destroy',$testimonial->id) }}"
                                                  id="form{{ $testimonial->id }}" method="get">
                                                    @csrf
                                                </form>
                                                <button class="btn btn-danger shadow btn-xs sharp"
                                                  onclick="deleteItem({{ $testimonial->id }});"><i
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
