@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.min.css')}}">
@endsection
@section('js')
<script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
<script src="{{ asset('assets/tinymce/js/tinymce/tinymce.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools  contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

</script>
<script type="text/javascript">
        $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('#lfm').filemanager('image');
    $('#lfm').filemanager('file');

</script>
@endsection
@section('header')
<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="icon dripicons-home"></i></a></li>
        <li class="breadcrumb-item"><a href="">Category</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Category</a></li>
    </ol>
</nav>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <h5 class="card-header">Tambah Artikel</h5>
        <form action="{{ url('/admin/add-category') }}" method="post" enctype="multipart/form-data" id="add-category">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Description" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="url" id="url" class="form-control" placeholder="URL" required>
                </div>
                
            <div class="card-footer bg-light">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary clear-form">Clear</button>
            </div>
        </form>
    </div>
</div>
@endsection

