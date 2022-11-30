@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">book</h4>
        <div class="card-body">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('book.create') }}" class="btn btn-primary">+ Add book</a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="text-center display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>image</th>
                                        <th>description</th>
                                        <th>price</th>
                                        <th>link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->name }}</td>

                                        <td><img src="{{ asset('/') }}assets/images/book/{{ $book->image }}"
                                              class="img-fluid" alt=""></td>
                                        <td>{{ $book->description }}</td>
                                        <td>{{ $book->price }}</td>
                                        <td>{{ $book->link }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('book.edit',$book->id) }}"
                                                  class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                      class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('book.destroy',$book->id) }}"
                                                  id="form{{ $book->id }}" method="get">
                                                    @csrf
                                                </form>
                                                <button class="btn btn-danger shadow btn-xs sharp"
                                                  onclick="deleteItem({{ $book->id }});"><i
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
