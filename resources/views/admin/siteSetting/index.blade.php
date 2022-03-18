@extends('admin.layouts.app')
@section('title')
@endsection
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
@endsection
@section('content')

    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Site Ayarları Düzenle</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Site Ayarları Düzenle</li>
            </ol>
            <div class="d-none d-md-inline-flex justify-center align-items-center"><a href="javascript: void(0);" class="btn btn-color-scheme btn-sm fs-11 fw-400 mr-l-40 pd-lr-10 mr-l-0-rtl mr-r-40-rtl hidden-xs hidden-sm ripple" target="_blank">Site Ayarları Düzenle</a>
            </div>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list">
        <div class="row">
            <div class="col-md-12 widget-holder">
                <div class="widget-bg">
                    <div class="widget-body clearfix">
                        <h5 class="box-title mr-b-0">Site Ayarları Güncelle</h5>
                        <form action="{{ route('home.setting.update', ['id'=> $siteSetting[0]['id']]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l0">Site Adı</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="l0" placeholder="Site Adı" type="text" value="{{ $siteSetting[0]['title'] }}" name="title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l15">Site Açıklaması</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="l15" rows="3" name="description">{{ $siteSetting[0]['description'] }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l1">Site Keywords</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{ $siteSetting[0]['keywords'] }}" name="keywords" class="form-control" data-role="tagsinput">
                                    <br><small class="text-muted">Anahtar kelimeleri , ile ayırınız</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l16">Site Profil Resim</label>
                                <div class="col-md-9">
                                    <input id="l16" type="file" name="profileImage">
                                    <br><small class="text-muted">Site ön yüzünde bulunan profil resmi</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l16">Site Arkaplan Resmi</label>
                                <div class="col-md-9">
                                    <input id="l16" type="file" name="backgroundImage">
                                    <br><small class="text-muted">Site ön yüzünde bulunan arkaplan resmi</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l16">Site Hakkımızda Resmi</label>
                                <div class="col-md-9">
                                    <input id="l16" type="file" name="aboutImage">
                                    <br><small class="text-muted">Site ön yüzünde bulunan hakkımızdaki kısımdaki resim</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l16">Site Logo</label>
                                <div class="col-md-9">
                                    <input id="l16" type="file" name="logo">
                                    <br><small class="text-muted">Site logosu</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l16">Site Tarayıcı Resmi</label>
                                <div class="col-md-9">
                                    <input id="l16" type="file" name="svg">
                                    <br><small class="text-muted">Tarayıcının üst kısmında bulunan resim</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l13">Site Durumu</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="l13" name="status">
                                        <option @if($siteSetting[0]['status'] == SITE_STATUS_ACTIVE) selected @endif value="{{ SITE_STATUS_ACTIVE }}">Site Kullanıma Açık</option>
                                        <option @if($siteSetting[0]['status'] == SITE_STATUS_PASSIVE) selected @endif value="{{ SITE_STATUS_PASSIVE }}">Site Kullanıma Kapalı</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l1">Site Telefon Numarası</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="l1" placeholder="05000000" maxlength="11"  type="text" name="phoneNumber" value="{{ $siteSetting[0]['phoneNumber'] }}">
                                    <small class="text-muted">Anahtar kelimeleri , ile ayırınız.</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l2">Site İletişim Email Adresi </label>
                                <div class="col-md-9">
                                    <div class="input-group"><span class="input-group-addon"><i class="material-icons list-icon">mail_outline</i> </span>
                                        <input class="form-control" id="l2" placeholder="Email Address" type="email" name="email" value="{{ $siteSetting[0]['email'] }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l1">İletişim Başlık</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="l1" placeholder="" type="text" name="contactTitle" value="{{ $siteSetting[0]['contactTitle'] }}"> <small class="text-muted">İletişim kısmındaki yazının başlığı</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l15">İletişim Açıklaması</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="l15" rows="3" name="contactText">{{ $siteSetting[0]['contactTitle'] }}</textarea>
                                    <small class="text-muted">İletişim kısmındaki yazının açıklaması</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l16">Site İletişim Resmi</label>
                                <div class="col-md-9">
                                    <input id="l16" type="file" name="contactImage">
                                    <br><small class="text-muted">Site iletişim kısmında bulunan resim</small>
                                </div>
                            </div>
                            <div class="form-group row">
                               <div class="col-md-3">
                                   <label class="col-md-3 col-form-label" for="l16">Facebook Hesabı</label>
                                   <div class="col-md-9">
                                       <input id="l16" class="form-control"  type="input" name="facebook" value="{{ $siteSetting[0]['facebook'] }}">
                                       <br><small class="text-muted">Tam url belirtiniz.</small>
                                   </div>
                               </div>
                                <div class="col-md-3">
                                   <label class="col-md-3 col-form-label" for="l16">İnstagram Hesabı</label>
                                   <div class="col-md-9">
                                       <input id="l16" class="form-control" type="input" name="instagram" value="{{ $siteSetting[0]['instagram'] }}">
                                       <br><small class="text-muted">Tam url belirtiniz.</small>
                                   </div>
                               </div>
                                <div class="col-md-3">
                                   <label class="col-md-3 col-form-label" for="l16">Linkedin Hesabı</label>
                                   <div class="col-md-9">
                                       <input id="l16" class="form-control" type="input" name="linkedin" value="{{ $siteSetting[0]['linkedin'] }}">
                                       <br><small class="text-muted">Tam url belirtiniz.</small>
                                   </div>
                               </div>
                                <div class="col-md-3">
                                   <label class="col-md-3 col-form-label" for="l16">Github Hesabı</label>
                                   <div class="col-md-9">
                                       <input id="l16" class="form-control" type="input" name="github" value="{{ $siteSetting[0]['github'] }}">
                                       <br><small class="text-muted">Tam url belirtiniz.</small>
                                   </div>
                               </div>
                            </div>
                            <div class="form-actions">
                                <div class="form-group row">
                                    <div class="col-md-12 ml-md-auto btn-list">
                                        <button class="btn btn-primary btn-rounded" type="submit">Güncelle</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.widget-body -->
                </div>
                <!-- /.widget-bg -->
            </div>
            <!-- /.widget-holder -->
            <!-- /.widget-holder -->
        </div>
        <!-- /.row -->
    </div>
@endsection
@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
@endsection
