@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Edit live</h4>
        <div class="card-body">
            <div class="row">
                <div class="basic-form">
                    <form action="{{ route('live.update',$live->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="me-sm-2">Course <b class="text-danger">*</b>:</label>
                            <select class="me-sm-2 default-select form-control wide" name="course_id"
                              id="inlineFormCustomSelect">
                                <option selected>Select One </option>
                                @foreach ($courses as $item)
                                <option value="{{ $item->course_id }}" @if ( $item->course_id == $live->course_id)
                                    selected
                                    @endif

                                    >{{ $item->title }}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">thumbnail <b class="text-danger">*</b>:</label>
                            <canvas id="canv1"></canvas>
                            <input type="file" class="form-file-input form-control " name="thumbnail"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput1
                              onchange="upload()">
                        </div>

                        <div class="mb-3">
                            <label for="start_date" class="form-label">Class Start Date <b
                                  class="text-danger">*</b>:</label>
                            <input type="date" name="start_date" class="datepicker-default form-control" id="start_date"
                              value="{{ $live->start_date }}">
                        </div>
                        <div class="mb-3">
                            <label for="end_date" class="form-label">Registration End Date <b
                                  class="text-danger">*</b>:</label>
                            <input type="date" name="end_date" class="datepicker-default form-control" id="end_date"
                              value="{{ $live->end_date }}">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function upload(){
    var imgcanvas = document.getElementById("canv1");
    var fileinput = document.getElementById("finput1");
    var image = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
  }
  function upload2(){
    var imgcanvas = document.getElementById("canv2");
    var fileinput = document.getElementById("finput2");
    var image = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
  }
</script>
@endsection
