@extends('admin.layouts.app')
@section('title')
    Sosyal Medya Ekle
@endsection
@section('css')
@endsection
@section('content')
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Sosyal Medya Ekle</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Sosyal Medya Ekle</li>
            </ol>
            <div class="d-none d-md-inline-flex justify-center align-items-center"><a href="javascript: void(0);" class="btn btn-color-scheme btn-sm fs-11 fw-400 mr-l-40 pd-lr-10 mr-l-0-rtl mr-r-40-rtl hidden-xs hidden-sm ripple" target="_blank">Sosyal Medya Düzenle</a>
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
        <form action="{{ route('home.media.update', ['id'=>$data]) }}" method="post">
            @csrf
            <div class="row">
                <!-- /.col-md-12 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l30">Sosyal Media Adı</label>
                        <input class="form-control" id="l30" name="name" placeholder="Sosyal Medya Adı" value="{{ \App\Models\SocialMedia::getTitle($data) }}" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l30">Sosyal Medya URL</label>
                        <input class="form-control" id="l30" name="url" placeholder="https://www.demireltugran.com" value="{{ \App\Models\SocialMedia::getUrl($data) }}" type="text">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-rounded" type="submit">Yayınla</button>
                    </div>
                </div>

                <!-- /.widget-holder -->
            </div>
        </form>
        <!-- /.row -->
    </div>
@endsection
@section('js')
@endsection
