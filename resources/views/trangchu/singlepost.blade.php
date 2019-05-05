<!DOCTYPE html>
<html lang="vi">

@include('layouttrang.head')

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="{{asset('main/img/core-img/logo1.png')}}" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Email: nguyenluongthuc@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: nguyenluongthuc@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+84 984 77 88 78"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +84 984 77 88 78</span></a>
                            </div>

                            <!-- Top Header Content -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><font color="#FFFFFF">Làng </font><b style="color: #FF0707; font-style: Coolvetica;" >Tăm Việt</b></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                   <li><a href="{{url('/')}}">Trang chủ</a></li>
                                   <li><a href="{{url('/post')}}">Tin tức</a></li>
                                   <li><a href="{{url('/hoatdong')}}">Hoạt động</a></li>
                                   <li><a href="{{url('/sanpham')}}">Sản phẩm</a></li>
                                   <li><a href="{{url('/lienhe')}}">Liên hệ</a></li>
                               </ul>

                               <!-- Search Icon -->
                              

                        </div>
                        <!-- Navbar End -->
                    </div>
                </nav>

                <!-- Search Form -->
                <div class="search-form">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                        <button type="submit" class="d-none"></button>
                    </form>
                    <!-- Close Icon -->
                    <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
    <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center"
    style="background-image: url({{url('uploads/slide/IMG_1918.JPG')}});">

</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/post')}}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Single Blog Post</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Blog Content Area Start ##### -->
<section class="blog-content-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12 col-md-8">
                <div class="blog-posts-area">

                    <!-- Post Details Area -->
                    <div class="single-post-details-area">
                        <div class="post-content">
                            <h4 class="post-title">{{$sgp->tieude}}</h4>
                            <div class="post-meta mb-30">
                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{substr($sgp->created_at,0,10)}}</a>
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Làng Tăm Việt</a>
                            </div>
                            <div class="post-thumbnail mb-30">
                                <img src="img/bg-img/35.jpg" alt="">
                            </div>
                            <p>
                                {!! $sgp->tomtat!!}
                            </p>
                            <img src="{{url('uploads/tintuc/'.$sgp->tieude.'/'.$sgp->hinhanh1)}}" alt="">
                            <p>{!! $sgp->motahinhanh1!!}</p>

                            <img src="{{url('uploads/tintuc/'.$sgp->tieude.'/'.$sgp->hinhanh2)}}" alt="">
                            <p>{!! $sgp->motahinhanh2!!}</p>

                            <img src="{{url('uploads/tintuc/'.$sgp->tieude.'/'.$sgp->hinhanh3)}}" alt="">
                            <p>{!! $sgp->motahinhanh3!!}</p>

                            <img src="{{url('uploads/tintuc/'.$sgp->tieude.'/'.$sgp->hinhanh4)}}" alt="">
                            <p>{!! $sgp->motahinhanh4!!}</p>

                            <img src="{{url('uploads/tintuc/'.$sgp->tieude.'/'.$sgp->hinhanh5)}}" alt="">
                            <p>{!! $sgp->motahinhanh5!!}</p>

                            <img src="{{url('uploads/tintuc/'.$sgp->tieude.'/'.$sgp->hinhanh6)}}" alt="">
                            <p>{!! $sgp->motahinhanh6!!}</p>

                            <img src="{{url('uploads/tintuc/'.$sgp->tieude.'/'.$sgp->hinhanh7)}}" alt="">
                            <p>{!! $sgp->motahinhanh7!!}</p>



                        </div>
                    </div>

                    <!-- Post Tags & Share -->


                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix">
                        <h4 class="headline">Bình luận</h4>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <div class="comment-wrapper d-flex">
                                    <!-- Comment Meta -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/37.jpg" alt="">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>Simona Halep</h5>
                                            <span class="comment-date">09:00 AM,  20 Jun 2018</span>
                                        </div>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                        <a class="active" href="#">Reply</a>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="single_comment_area">
                                        <div class="comment-wrapper d-flex">
                                            <!-- Comment Meta -->
                                            <div class="comment-author">
                                                <img src="img/bg-img/38.jpg" alt="">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5>Rafael Nadal</h5>
                                                    <span class="comment-date">09:30 AM,  20 Jun 2018</span>
                                                </div>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                <a class="active" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="single_comment_area">
                                <div class="comment-wrapper d-flex">
                                    <!-- Comment Meta -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/39.jpg" alt="">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>Maria Sharapova</h5>
                                            <span class="comment-date">02:20 PM,  20 Jun 2018</span>
                                        </div>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                        <a class="active" href="#">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <!-- Leave A Comment -->
                    
                </div>
            </div>

            <!-- Blog Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-4">
                <div class="post-sidebar-area">

                    <!-- ##### Single Widget Area ##### -->
                      <!--   <div class="single-widget-area">
                            <form action="#" method="get" class="search-form">
                                <input type="search" name="search" id="widgetSearch" placeholder="Search...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </form>
                        </div> -->

                        <!-- ##### Single Widget Area ##### -->


                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Xem nhiều</h4>
                            </div>

                            <!-- Single Latest Posts -->
                            @foreach($alltin as $tin)
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="{{url('uploads/tintuc/'.$tin->tieude.'/'.$tin->hinhanh1)}}" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="{{url('/post/singlepost/'.$tin->id)}}" class="post-title">
                                        <h6>{{$tin->tieude}}</h6>
                                    </a>
                                    <a href="{{url('/post/singlepost/'.$tin->id)}}" class="post-date">{{substr($tin->created_at,0,10)}}</a>
                                </div>
                            </div>
                            @endforeach

                            
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        

                        <!-- ##### Single Widget Area ##### -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouttrang.foot')
</body>

</html>