@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Create live</h4>
        <div class="card-body">
            <div class="row">
                <div class="basic-form">
                    <form action="{{ route('live.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="mb-3">
                            <label class="me-sm-2">Course <b class="text-danger">*</b>:</label>
                            <select class="me-sm-2 default-select form-control wide" name="course_id"
                              id="inlineFormCustomSelect">
                                <option selected>Select One </option>
                                @foreach ($courses as $item)
                                <option value="{{ $item->course_id }}">{{ $item->title }}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="banner" class="form-label">banner <b class="text-danger">*</b>:</label>
                            <canvas id="canv1"></canvas>
                            <input type="file" class="form-file-input form-control " name="banner"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput1
                              onchange="upload()">
                        </div>
                        <div class="mb-3">
                            <label for="start_date" class="form-label">start_date <b class="text-danger">*</b>:</label>
                            <<input type="date" name="start_date" class="datepicker-default form-control"
                              id="start_date">
                        </div>
                        <div class="mb-3">
                            <label for="end_date" class="form-label">end_date <b class="text-danger">*</b>:</label>
                            <input type="date" name="end_date" class="datepicker-default form-control" id="end_date">
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
