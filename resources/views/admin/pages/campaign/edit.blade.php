@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Create campaign</h4>
        <div class="card-body">
            <div class="row">
                <div class="basic-form">
                    <form action="{{ route('campaign.update',$campaign->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="title"
                              placeholder="Type Here ... " value="{{ $campaign->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">image <b class="text-danger">*</b>:</label>
                            <canvas id="canv1"></canvas>
                            <input type="file" class="form-file-input form-control " name="image"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput1
                              onchange="upload()">
                        </div>
                        <div class="mb-3">
                            <label for="cover_image" class="form-label">Cover Image <b
                                  class="text-danger">*</b>:</label>
                            <canvas id="canv2"></canvas>

                            <input type="file" class="form-file-input form-control " name="cover_image"
                              placeholder="Type Here ... " multiple="false" accept="image/*" id=finput2
                              onchange="upload2()">
                        </div>
                        <div class="mb-3">
                            <label for="prerview" class="form-label">Prerview <b class="text-danger">*</b>:</label>
                            <textarea type="text" class="form-control input-default " name="prerview"
                              placeholder="Type Here ... " value="{{ $campaign->preview }}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="intro" class="form-label">Intro <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="intro"
                              placeholder="Type Here ... " value="{{ $campaign->intro }}">
                        </div>
                        <div class="mb-3">
                            <label for="overview" class="form-label">overview <b class="text-danger">*</b>:</label>
                            <textarea id="editor" name="overview" value="">{!! $campaign->overview !!}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="duration"
                              placeholder="Type Here ... " value="{{ $campaign->duration }}">
                        </div>
                        <div class="mb-3">
                            <label for="classes" class="form-label">Total classes <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="classes"
                              placeholder="Type Here ... " value="{{ $campaign->classes }}">
                        </div>
                        <div class="mb-3">
                            <label class="me-sm-2">Type <b class="text-danger">*</b>:</label>
                            <select class="me-sm-2 default-select form-control wide" name="type"
                              id="inlineFormCustomSelect">
                                <option value="1" @if ( $campaign->classess == 1)
                                    selected
                                    @endif
                                    >One</option>
                                <option value="0" @if ( $campaign->classess == 0)
                                    selected
                                    @endif>Two</option>

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
