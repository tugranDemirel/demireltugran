@extends('admin.layouts.app')
@section('title')
    Referans Ekle
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Referans Ekle</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Referans Ekle</li>
            </ol>
            <div class="d-none d-md-inline-flex justify-center align-items-center"><a href="javascript: void(0);" class="btn btn-color-scheme btn-sm fs-11 fw-400 mr-l-40 pd-lr-10 mr-l-0-rtl mr-r-40-rtl hidden-xs hidden-sm ripple" target="_blank">Yeni Referans Ekle</a>
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
        <form action="{{ route('home.reference.store') }}" enctype="multipart/form-data" method="post">
        @csrf
            <div class="row">
                <!-- /.col-md-12 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l30">Referans Adı</label>
                        <input class="form-control" id="l30" name="name" placeholder="Referans İsmi" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l31">Referans Görseli</label>
                        <input class="form-control" id="l31" name="image"type="file">
                    </div>
                </div>
                <div class="col-md-12 mt-1">
                    <button class="btn btn-primary btn-rounded" type="submit">Yayınla</button>
                </div>
                <!-- /.widget-holder -->
            </div>
        </form>
        <!-- /.row -->
    </div>
@endsection
@section('js')
@endsection
