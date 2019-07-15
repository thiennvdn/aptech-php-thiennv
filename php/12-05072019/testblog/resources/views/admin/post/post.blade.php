@extends('admin.layouts.app')

@section('headcripts')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
@endsection

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form">
                <!-- text input -->
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Post Sub Title</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title">
                    </div>
                    <div class="form-group">
                        <label for="slug"> Post Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                    </div>
                <!-- textarea -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="3" id="description" name="description" placeholder="Description"></textarea>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="status" id="status">
                        Publish
                      </label>
                    </div>

                </form>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Write Body Text here
              <small>Advanced and full of features</small>
            </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            <form>
                  <textarea id="editor" name="editor" rows="10" cols="80">
                                          This is my textarea to be replaced with CKEditor.
                  </textarea>
            </form>
          </div>
        </div>
        <!-- /.box -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>

@endsection

@section('ckeditor')
    <script>
        CKEDITOR.replace('editor', {
            filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
            filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
        });
    </script>
@endsection
