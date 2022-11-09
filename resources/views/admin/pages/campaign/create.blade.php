@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Create campaign</h4>
        <div class="card-body">
            <div class="row">
                <div class="basic-form">
                    <form action="{{ route('campaign.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">name <b class="text-danger">*</b>:</label>
                            <input type="text" class="form-control input-default " name="name"
                              placeholder="Type Here ... ">
                        </div>
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
                            <label for="thumbnail" class="form-label">thumbnail <b class="text-danger">*</b>:</label>
                            <canvas id="canv1"></canvas>
                            <input type="file" class="form-file-input form-control " name="thumbnail"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput1
                              onchange="upload()">
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">discount <b class="text-danger">*(give only
                                    number)</b>:</label>
                            <div class="form-check custom-checkbox mb-3 checkbox-success">
                                <input type="checkbox" class="form-check-input" checked="" id="check"
                                  name="hasdiscount">

                            </div>
                            <input type="text" class="form-control input-default " id="discount" name="discount"
                              placeholder="e.g 45"></input>
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
                        <div class="mb-3">
                            <label class="me-sm-2">Type <b class="text-danger">*</b>:</label>
                            <select class="me-sm-2 default-select form-control wide" name="type"
                              id="inlineFormCustomSelect">
                                <option value="1" selected>Live Class</option>
                                <option value="0">Pre Recorded</option>

                            </select>
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
