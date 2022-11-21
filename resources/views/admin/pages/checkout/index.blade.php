@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">checkout</h4>
        <div class="card-body">
            <div class="row">
                <div class="card">
                    {{-- <div class="card-header">
                        <a href="{{ route('checkout.create') }}" class="btn btn-primary">+ Add checkout</a>

                </div> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="text-center display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course Type</th>
                                    <th>Course ID</th>
                                    <th>Course Name</th>
                                    <th>Student Name</th>
                                    <th>Student ID</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>Payment</th>
                                    <th>paid</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($checkouts as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>


                                        @if( $item->course->hasLive )
                                        Live Course
                                        @else
                                        Reguler Course
                                        @endif

                                    </td>
                                    <td>{{ $item->course->course_id }}</td>
                                    <td>{{ $item->course->title }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->id }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>{{ $item->user->phone }}</td>
                                    <td>{{ $item->course->price }}</td>
                                    <td>{{ $item->course->price }}</td>
                                    <td>not</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('checkout.show',$item->id) }}"
                                              class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                  class="fas fa-eye-alt"></i></a>
                                            <form action="{{ route('checkout.decline',$item->id) }}"
                                              id="form{{ $item->id }}" method="get">
                                                @csrf
                                            </form>
                                            <button class="btn btn-danger shadow btn-xs sharp"
                                              onclick="deleteItem({{ $item->id }});"><i
                                                  class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                            {{-- <tbody>
                                    @foreach ($checkouts as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td><img src="{{ asset('/') }}assets/images/checkout/{{ $item->image }}" class="img-fluid"
                                  alt=""></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('checkout.edit',$item->id) }}"
                                      class="btn btn-primary shadow btn-xs sharp me-1"><i
                                          class="fas fa-pencil-alt"></i></a>
                                    <form action="{{ route('checkout.destroy',$item->id) }}" id="form{{ $item->id }}"
                                      method="get">
                                        @csrf
                                    </form>
                                    <button class="btn btn-danger shadow btn-xs sharp"
                                      onclick="deleteItem({{ $item->id }});"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>


                            @endforeach


                            </tbody> --}}
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
