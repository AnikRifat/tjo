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
                            <input required type="text" class="form-control input-default " name="name"
                              placeholder="Type Here ... ">
                        </div>
                        <div class="mb-3">
                            <label class="me-sm-2">Course <b class="text-danger">*</b>:</label>
                            <select class="me-sm-2 default-select form-control wide" name="type"
                              id="inlineFormCustomSelect">
                                <option selected>Select One </option>
                                @foreach ($courses as $item)
                                <option value="{{ $itemm->course_id }}">{{ $itemm->title }}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">thumbnail <b class="text-danger">*</b>:</label>
                            <canvas id="canv1"></canvas>
                            <input required type="file" class="form-file-input form-control " name="thumbnail"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput1
                              onchange="upload()">
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">discount <b class="text-danger">*(give only number)</b>:</label>
                            <textarea type="text" class="form-control input-default " name="discount"
                              placeholder="e.g 45"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="intro" class="form-label">Intro <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="intro"
                              placeholder="Type Here ... ">
                        </div>
                        <div class="mb-3">
                            <label for="overview" class="form-label">overview <b class="text-danger">*</b>:</label>
                            <textarea id="editor" name="overview"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="duration"
                              placeholder="Type Here ... ">
                        </div>
                        <div class="mb-3">
                            <label for="classes" class="form-label">Total classes <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="classes"
                              placeholder="Type Here ... ">
                        </div>
                        <div class="mb-3">
                            <label class="me-sm-2">Type <b class="text-danger">*</b>:</label>
                            <select class="me-sm-2 default-select form-control wide" name="type"
                              id="inlineFormCustomSelect">
                                <option value="1" selected>One</option>
                                <option value="0">Two</option>

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
