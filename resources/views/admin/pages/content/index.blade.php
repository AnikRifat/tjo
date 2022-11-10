{{-- {{ dd($content) }} --}}

@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Create content</h4>
        <div class="card-body">
            <div class="row">
                <div class="basic-form">
                    <form action="{{ route('content.update',1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">name <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="name"
                              placeholder="Type Here ... " value="{{ $content->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">title <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="title"
                              placeholder="Type Here ... " value="{{ $content->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="sub_title" class="form-label">sub title <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="sub_title"
                              placeholder="Type Here ... " value="{{ $content->sub_title }}">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">image <b class="text-danger">*</b>:</label>
                            <canvas id="canv1"></canvas>
                            <input type="file" class="form-file-input form-control " name="image"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput1
                              onchange="upload()">
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">logo <b class="text-danger">*</b>:</label>
                            <canvas id="canv2"></canvas>

                            <input type="file" class="form-file-input form-control " name="logo"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput2
                              onchange="upload2()">
                        </div>
                        <div class="mb-3">
                            <label for="favicon" class="form-label">favicon <b class="text-danger">*</b>:</label>
                            <canvas id="canv3"></canvas>

                            <input type="file" class="form-file-input form-control " name="favicon"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput3
                              onchange="upload3()">
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
  function upload3(){
    var imgcanvas = document.getElementById("canv3");
    var fileinput = document.getElementById("finput3");
    var image = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
  }
</script>
@endsection
