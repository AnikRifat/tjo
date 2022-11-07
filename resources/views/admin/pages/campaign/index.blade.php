@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">campaign</h4>
        <div class="card-body">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('campaign.create') }}" class="btn btn-primary">+ Add Campaign</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="text-center display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>campaign ID</th>
                                        <th>Name</th>
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
                                    @foreach ($campaigns as $campaign)
                                    <tr>
                                        <td>{{ $campaign->id }}</td>
                                        <td>{{ $campaign->campaign_id }}</td>
                                        <td>{{ $campaign->name }}</td>
                                        <td><img
                                              src="{{ asset('/') }}assets/images/thumbnail/{{ $campaign->thumbnail }}"
                                              class="img-fluid" alt=""></td>
                                        <td>{{ $campaign->discount  }}</td>
                                        <td>{{ $campaign->start_date  }}</td>
                                        <td>{{ $campaign->end_date  }}</td>
                                        <td>{{ $campaign->type }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('campaign.edit',$campaign->id) }}"
                                                  class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                      class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('campaign.destroy',$campaign->id) }}"
                                                  id="form{{ $campaign->id }}" method="get">
                                                    @csrf
                                                </form>
                                                <button class="btn btn-danger shadow btn-xs sharp"
                                                  onclick="deleteItem({{ $campaign->id }});"><i
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
