@extends('admin.layouts.app')
@section('main-body')
<div class="main-body">

    <div class="card">
        <h4 class="card-header">Create contact</h4>
        <div class="card-body">
            <div class="row">
                <div class="basic-form">
                    <form action="{{ route('contact.update',1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="email" class="form-label">email <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="email"
                              placeholder="Type Here ... " value="{{ $contact->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">phone <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="phone"
                              placeholder="Type Here ... " value="{{ $contact->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="skype" class="form-label">skype <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="skype"
                              placeholder="Type Here ... " value="{{ $contact->skype }}">
                        </div>
                        <div class="mb-3">
                            <label for="wechat" class="form-label">wechat <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="wechat"
                              placeholder="Type Here ... " value="{{ $contact->wechat }}">
                        </div>
                        <div class="mb-3">
                            <label for="qq" class="form-label">qq <b class="text-danger">*</b>:</label>
                            <input required type="text" class="form-control input-default " name="qq"
                              placeholder="Type Here ... " value="{{ $contact->qq }}">
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
