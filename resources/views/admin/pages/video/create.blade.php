@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Create video</h4>
        <div class="card-body">
            <div class="row">
                <div class="basic-form">
                    <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="link" class="form-label">link <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="link"
                              placeholder="Type Here ... " value="">
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">thumbnail <b class="text-danger">*</b>:</label>
                            <canvas id="canv1"></canvas>
                            <input type="file" class="form-file-input form-control " name="thumbnail"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput1
                              onchange="upload()">
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