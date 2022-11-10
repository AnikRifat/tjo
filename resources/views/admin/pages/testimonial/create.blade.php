@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Create testimonial</h4>
        <div class="card-body">
            <div class="row">
                <div class="basic-form">
                    <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="title"
                              placeholder="Type Here ... " value="">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">name <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="name"
                              placeholder="Type Here ... " value="">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">image <b class="text-danger">*</b>:</label>
                            <canvas id="canv1"></canvas>
                            <input type="file" class="form-file-input form-control " name="image"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput1
                              onchange="upload()">
                        </div>


                        <div class="mb-3">
                            <label for="text" class="form-label">text <b class="text-danger">*</b>:</label>
                            <textarea name="text" class="form-control input-default " value=""></textarea>
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
