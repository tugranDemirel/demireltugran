<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tuğran Demirel - {{ $siteSetting[0]['title'] }}</title>
    <meta name="description" content="{{$siteSetting[0]['description']}}">
    <meta name="keywords" content="{{$siteSetting[0]['keywords']}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="icon" href="{{ asset('admin/assets/favicon.ico') }}">
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/plugins/feature.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
</head>

<body class="template-color-2 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

<div class="main-page-wrapper">
    <div class="rn-header-image-area">
        <div class="bg_image--9 bg_image h-100">
        </div>
    </div>
    <div class="rn-content-wrapper">
        <div class="">
            <div class="row padding-tb m_dec-top align-items-center d-flex">
                <div class="col-lg-6">
                    <div class="header-left">
                        <div class="header-thumbnail">
                            <img src="{{ asset($siteSetting[0]['profileImage']) }}" alt="Tuğran Demirel">
                        </div>
                        <div class="header-info-content">
                            <h4 class="title">Tuğran Demirel</h4>
                            <div class="status-info">PHP & Laravel Framework Backend Developer</div>
                            <!-- social sharea area -->
                            <div class="social-share-style-1 border-none mt--40">
                                <ul class="social-share d-flex liststyle">
                                    @if(!empty($siteSetting[0]['facebook']))
                                    <li class="facebook"><a target="_blank" href="{{ $siteSetting[0]['facebook'] }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                </path>
                                            </svg></a>
                                    </li>
                                    @endif
                                    @if(!empty($siteSetting[0]['instagram']))
                                    <li class="instagram"><a target="_blank" href="{{ $siteSetting[0]['instagram'] }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg></a>
                                    </li>
                                    @endif
                                    @if(!empty($siteSetting[0]['linkedin']))
                                    <li class="linkedin"><a target="_blank" href="{{ $siteSetting[0]['linkedin'] }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                </path>
                                                <rect x="2" y="9" width="4" height="12"></rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg></a>
                                    </li>
                                    @endif
                                    @if(!empty($siteSetting[0]['github']))
                                    <li class="linkedin">
                                        <a target="_blank" href="{{ $siteSetting[0]['github'] }}">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                                            </svg>
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <!-- end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-right">
                        <ul class="rn-header-content">
                            <li><span class="overhead">EMAİL</span>{{ $siteSetting[0]['email'] }}</li>
                            <li><span class="overhead">TELEFON NUMARASI</span>{{ $siteSetting[0]['phoneNumber'] }}</li>
                        </ul>
                        <ul class="rn-header-content two">
                            <li><span class="overhead">DOĞUM GÜNÜ</span>28 Mart</li>
                            <li><span class="overhead">KONUM</span>Yozgat, Türkiye</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt--40 tab-content-wrapper">
               @include('layouts.sidebar')
                <div class="col-lg-10">
                    <div class="tab-area">
                        <div class="d-flex align-items-start">
                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade  show active" id="v-pills-Javascript" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <!-- Start about Area -->
                                    <div id="about" class="rn-about-area">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="image-area shadow-none padding-none" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">
                                                            <div class="thumbnail">
                                                                <img src="{{ asset($siteSetting[0]['aboutImage']) }}" alt="Tuğran Demirel">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true" class="col-lg-7 mt_sm--30">
                                                        <div class="contant">
                                                            <div class="section-title text-left">
                                                                <span class="subtitle"></span>
                                                                <h2 class="title small-h2">Hakkımda</h2>
                                                            </div>
                                                            <p class="discription color-body">

                                                                {{ date('Y')-1999 }} yaşındayım.
                                                                @if((date('Y')-1999) <= 24)Karamanoğlu Mehmetbey Üniversitesinde bilgisayar mühendisliği bölümünde öğrenciyim. @endif PHP & Laravel Frameworku üzerinde çalışmalar yapıyorum.
                                                                Bunun yanı sıra Veri Madenciliği, Görüntü işleme ile uğraşmaktayım.

                                                            </p>
                                                            <ul class="about-skill-style mb--40">
                                                                <li><i data-feather="check"></i><span>PHP & Laravel Framework Backend Developer
                                                                    </span></li>
                                                                <li><i data-feather="check"></i><span>Python
                                                                    </span></li>
                                                                <li><i data-feather="check"></i><span>24/7 Destek
                                                                    </span></li>
                                                                <li><i data-feather="check"></i><span>Sınırsız Revizyon
                                                                    </span></li>
                                                            </ul>
{{--                                                            <a class="rn-btn" href="#"><span>CV İNDİR</span></a>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- what I am doing area -->
                                                <div class="row mt--50">
                                                    <div class="col-12 text-center">
                                                        <h6 class="title color-lightn mb--30">
                                                            Neler Yapıyorum
                                                        </h6>
                                                    </div>
                                                    <div class="col-lg-6 mb_sm--30 mb_md--30">
                                                        <div class="service-card-one border-style">
                                                            <div class="inner">
                                                                <i data-feather="edit"></i>
                                                                <h6 class="title color-lightn">
                                                                    Backend Developer
                                                                </h6>
                                                                <p class="describe">
                                                                    Sizlerin isteği doğrultusunda istediğiniz özelliklere sahip sistemleri en son teknolojileri kullanarak, en az maliyet en yüksek işlev düşüncesini benimsemiş şekilde yapıyorum.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="service-card-one border-style">
                                                            <div class="inner">
                                                                <i data-feather="cast"></i>
                                                                <h6 class="title color-lightn">
                                                                    Web Dizayn
                                                                </h6>
                                                                <p class="describe">
                                                                    Sizlerin göz zevkine göre istediğini site tasarımını yapıyorum.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- what I am doing area End -->
                                                @if(!empty(\App\Models\Reference::all()))
                                                <div class="row mt--50">
                                                    <!-- Brand style three -->
                                                    <div class="rn-brand-area">
                                                        <div class="container">
                                                            <div class="row mb--30">
                                                                <div class="col-12 text-center">
                                                                    <h6 class="title color-lightn m--0">Referanslarım</h6>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="brand-wrapper-three mb_dec--30">
                                                                    @foreach( \App\Models\Reference::all() as $k => $v)
                                                                    <!-- Start Single Brand  -->
                                                                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true" class="rn-brand flex-basis-style-1">
                                                                        <div class="border-style shadow-none inner smlg-brand text-center">
                                                                            <div class="thumbnail">
                                                                                <a href="#"><img src="{{ asset($v['image']) }}" alt="Client-image"></a>
                                                                            </div>
                                                                            <div class="seperator"></div>
                                                                            <div class="client-name"><span><a href="#">{{ $v['name'] }}</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Single Brand  -->
                                                                        @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Brand style three End -->
                                                </div>
                                                @endif
                                            </div>
                                    </div>
                                    <!-- End about Area -->
                                </div>
                                @if(\App\Models\Work::all()->count() > 0)
                                @if(!empty(\App\Models\Work::all()))
                                <div class="tab-pane fade" id="v-pills-Wordpress" role="tabpanel" aria-labelledby="v-pills-wordpress-tab">
                                    <!-- Start Portfolio Area -->
                                    <div class="rn-portfolio-area" id="portfolio">
                                        <div class="container">
                                            <div class="row mt--10 mt_md--10 mt_sm--10 mt-dec-30">
                                                <!-- Start Single Portfolio -->
                                                @foreach(\App\Models\Work::all() as $k => $v)
                                                <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--30 mt_md--30 mt_sm--30">
                                                    <div class="rn-portfolio" data-toggle="modal" data-target="#work{{ $v['id'] }}">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{ asset($v['image']) }}" alt="Personal Portfolio Images">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <div class="category-info">
                                                                    <div class="category-list">
                                                                        <a href="javascript:void(0)">{{ $v['title'] }}</a>
                                                                    </div>
                                                                    <div class="meta">
                                                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a> 600</span>
                                                                    </div>
                                                                </div>
                                                                <h4 class="title"><a href="javascript:void(0)">{{ $v['subject'] }}<i class="feather-arrow-up-right"></i></a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Portfolio -->
                                                @endforeach
                                            </div>
                                           @if(count(\App\Models\Work::all()) > 9)
                                                <div class="row mt--40">
                                                    <div class="col-12 text-center">
                                                        <a class="rn-btn" href="#">Daha Fazlası <i class="feather-loader"></i></a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- End portfolio Area -->
                                </div>
                                @endif
                                @else
                                    <div class="tab-pane fade" id="v-pills-Wordpress" role="tabpanel" aria-labelledby="v-pills-wordpress-tab">
                                        <!-- Start Portfolio Area -->
                                        <div class="rn-portfolio-area" id="portfolio">
                                            <div class="container">
                                                <div class="row mt--10 mt_md--10 mt_sm--10 mt-dec-30">
                                                    <!-- Start Single Portfolio -->
                                                        <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--30 mt_md--30 mt_sm--30">
                                                            <div class="rn-portfolio" data-toggle="modal" data-target="">
                                                                <div class="inner">
                                                                    <div class="thumbnail">
                                                                        <a href="javascript:void(0)">
                                                                            <img src="{{ asset('front/assets/images/noProject/noProject.png') }}" alt="Personal Portfolio Images">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <div class="category-info">
                                                                            <div class="category-list">
                                                                            </div>
                                                                        </div>
                                                                        <h4 class="title text-center"><a href="javascript:void(0)">Proje Yok<i class="feather-arrow-up-right"></i></a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Portfolio -->

                                                </div>
                                                @if(count(\App\Models\Work::all()) > 9)
                                                    <div class="row mt--40">
                                                        <div class="col-12 text-center">
                                                            <a class="rn-btn" href="#">Daha Fazlası <i class="feather-loader"></i></a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- End portfolio Area -->
                                    </div>
                                @endif
                                @if(!empty(\App\Models\Blog::all()))
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                                    <!-- Start News Area -->
                                    <div class="rn-blog-area" id="blog">
                                        <div class="container">
                                            <div class="row mt-dec-30">
                                                @foreach(\App\Models\Blog::all() as $k => $v)
                                                <!-- Start Single blog -->
                                                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                                                    <div class="rn-blog" data-toggle="modal" data-target="#blog{{$v['id']}}">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{ asset($v['image']) }}" alt="{{ $v['title'] }}">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <div class="category-info">
                                                                    <div class="meta">
                                                                            <span><i class="feather-clock"></i> <?php
                                                                                \Carbon\Carbon::setLocale('tr'); ?>
                                                                                {{ $v['created_at']->diffForHumans() }}
                                                                                 </span>
                                                                    </div>
                                                                </div>
                                                                <h4 class="title"><a href="javascript:void(0)">{{ $v['title'] }}
                                                                        <i class="feather-arrow-up-right"></i></a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single blog -->
                                                    @endforeach
                                            </div>
                                            @if(count(\App\Models\Blog::all()) > 6)
                                            <div class="row mt--40">
                                                <div class="col-12 text-center">
                                                    <a class="rn-btn" href="#">Daha Fazlası<i class="feather-loader"></i></a>
                                                </div>
                                            </div>
                                                @endif
                                        </div>
                                    </div>
                                    <!-- ENd Mews Area -->
                                </div>
                                @endif
                                <div class="tab-pane fade" id="v-pills-python" role="tabpanel" aria-labelledby="v-pills-python-tabs">
                                    <!-- Start Contact section -->
                                    <div class="rn-contact-area" id="contacts">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="contact-about-area">
                                                        <div class="thumbnail">
                                                            <img src="{{ $siteSetting[0]['contactImage'] }}" alt="contact-img">
                                                        </div>
                                                        <div class="title-area">
                                                            <h4 class="title">Tuğran Demirel</h4>
                                                            <span>PHP & Laravel Framework Backend Developer</span>
                                                        </div>
                                                        <div class="description">
                                                            <p>Freelancer iş için benimle iletişime geçebilirsiniz.
                                                            </p>
                                                            <span class="phone">Telefon Numarası: <a
                                                                    href="tel:{{ $siteSetting[0]['phoneNumber'] }}">{{ $siteSetting[0]['phoneNumber'] }}</a></span>
                                                            <span class="mail">Email: <a
                                                                    href="mailto:{{ $siteSetting[0]['email'] }}">{{ $siteSetting[0]['email'] }}</a></span>
                                                        </div>
                                                        <div class="social-area">
                                                            <div class="name">BENİ BULUN</div>
                                                            <div class="social-icone">
                                                                <a href="{{ $siteSetting[0]['facebook'] }}"><i data-feather="facebook"></i></a>
                                                                <a href="{{ $siteSetting[0]['instagram'] }}"><i data-feather="instagram"></i></a>
                                                                <a href="{{ $siteSetting[0]['linkedin'] }}"><i data-feather="linkedin"></i></a>
                                                                <a href="{{ $siteSetting[0]['github'] }}"><i data-feather="github"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-aos-delay="600" class="col-lg-7 contact-input">
                                                    <div class="contact-form-wrapper ml--0">
                                                        <div class="introduce">
                                                            <form class="rnt-contact-form rwt-dynamic-form row" method="post" action="{{ route('contact') }}">
                                                                @csrf
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="contact-name">Adınız</label>
                                                                        <input class="form-control form-control-lg" name="name" type="text">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="contact-phone">Telefon Numaranız</label>
                                                                        <input class="form-control" name="phone"  type="text">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for="contact-email">Email</label>
                                                                        <input class="form-control form-control-sm" name="email" type="email">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for="subject">Konu</label>
                                                                        <input class="form-control form-control-sm" name="subject" type="text">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for="contact-message">Mesajınız</label>
                                                                        <textarea name="message" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <button type="submit" class="rn-btn">
                                                                        <span>GÖNDER</span>
                                                                        <i data-feather="arrow-right"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Contuct section -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Footer Area -->
<div class="rn-footer-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-area text-center">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset($siteSetting[0]['logo']) }}" alt="logo" style="border-radius: 50%; ">
                        </a>
                    </div>
                    <p class="description mt--30">© 2021 - {{ date('Y') }}. Tüm hakları <a target="_blank" href="{{ env('APP_URL') }}">Tuğran Demirel</a> tarafından saklıdır.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- Modal Portfolio Body area Start  WORKKKK-->
@if($projects->count() > 0)
@foreach($projects as $k => $v)
<div class="modal fade" id="#work{{ $v['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="portfolio-popup-thumbnail">
                            <div class="image">
                                <img class="w-100" src="{{ asset($v['image']) }}" alt="slide">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="text-content">
                            <h3>
                                <span>{{ $v['title'] }}</span>
                            </h3>
                            <p class="mb--30">{{ $v['subject'] }}</p>
                            <p>{{ $v['description'] }}</p>
                            <div class="button-group mt--20">
                                <a href="#" class="rn-btn thumbs-icon">
                                    <span>BEĞEN</span>
                                    <i data-feather="thumbs-up"></i>
                                </a>
                                <a href="{{ $v['url'] }}" class="rn-btn">
                                    <span>PROJEYİ GÖRÜNTÜLE</span>
                                    <i data-feather="chevron-right"></i>
                                </a>
                            </div>

                        </div>
                        <!-- End of .text-content -->
                    </div>
                </div>
                <!-- End of .row Body-->
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
<!-- End Modal Portfolio area -->

<!-- Modal Blog Body area Start -->
@foreach( \App\Models\Blog::all() as $k => $v)
<div class="modal fade" id="#blog{{$v['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-news" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>

            <!-- End of .modal-header -->

            <div class="modal-body">
                <img src="assets/images/blog/blog-big-01.html" alt="news modal" class="img-fluid modal-feat-img">
                <div class="news-details">
                    <span class="date"><?php
                        \Carbon\Carbon::setLocale('tr'); ?>
                        {{ $v['created_at']->diffForHumans() }}</span>
                    <h2 class="title">{{ $v['title'] }}</h2>
                       {!! $v['content'] !!}
                </div>

            </div>
            <!-- End of .modal-body -->
        </div>
    </div>
</div>
<!-- End Modal Blog area -->
@endforeach
<!-- Back to  top Start -->
<div class="backto-top">
    <div>
        <i data-feather="arrow-up"></i>
    </div>
</div>
<!-- Back to top end -->
<!-- End Modal Area  -->
<!-- JS ============================================ -->
<script src="{{ asset('front/assets/js/vendor/jquery.html') }}"></script>
<script src="{{ asset('front/assets/js/vendor/modernizer.min.html') }}"></script>
<script src="{{ asset('front/assets/js/vendor/feather.min.html') }}"></script>
<script src="{{ asset('front/assets/js/vendor/slick.min.html') }}"></script>
<script src="{{ asset('front/assets/js/vendor/bootstrap.html') }}"></script>
<script src="{{ asset('front/assets/js/vendor/text-type.html') }}"></script>
<script src="{{ asset('front/assets/js/vendor/wow.html') }}"></script>
<script src="{{ asset('front/assets/js/vendor/aos.html') }}"></script>
<script src="{{ asset('front/assets/js/vendor/particles.html') }}"></script>
<!-- main JS -->
<script src="{{ asset('front/assets/js/main.html') }}"></script>
</body>

</html>
