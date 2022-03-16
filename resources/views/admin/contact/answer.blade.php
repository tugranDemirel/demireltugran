@extends('admin.layouts.app')
@section('title')
    Blog Düzenle
@endsection
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Mesaj Cevapla</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Mesaj Cevapla</li>
            </ol>
            <div class="d-none d-md-inline-flex justify-center align-items-center"><a href="javascript: void(0);" class="btn btn-color-scheme btn-sm fs-11 fw-400 mr-l-40 pd-lr-10 mr-l-0-rtl mr-r-40-rtl hidden-xs hidden-sm ripple" target="_blank">Mesaj Cevapla</a>
            </div>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    @include('admin.widgets.alert')
    <!-- =================================== -->
    <div class="widget-list">
        <form action="{{ route('home.contact.send', ['id' => $data[0]['id']]) }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <!-- /.col-md-12 -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="l30">Gönderen Adı</label>
                        <input class="form-control" id="l30" readonly value="{{ $data[0]['name'] }}" type="text">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="l30">Gönderen Mail</label>
                        <input class="form-control" id="l30" readonly value="{{ $data[0]['email'] }}" type="text">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="l30">Gönderen Mail</label>
                        <input class="form-control" id="l30" readonly value="{{ $data[0]['phoneNumber'] }}" type="text">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="l30">Mesaj Konu</label>
                        <textarea name="description" id="" cols="30" rows="3" readonly class="form-control">{{ $data[0]['subject'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="l30">Mesaj Konu</label>
                        <textarea id="" cols="30" rows="5" readonly class="form-control">{{ $data[0]['message'] }}</textarea>
                    </div>
                </div>
                    <!-- /.widget-bg -->


                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <h5 class="box-title">Mesaj Cevap</h5>
                            <textarea data-toggle="tinymce" name="answer"  data-plugin-options='{ "height": 400 }'></textarea>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary btn-rounded" type="submit">Cevapla</button>
                </div>
                <!-- /.widget-holder -->
            </div>
        </form>
        <!-- /.row -->
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.4/tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.4/themes/inlite/theme.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.4/jquery.tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
@endsection
