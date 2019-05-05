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
                    <li class="breadcrumb-item"><a href="{{url('/hoatdong')}}">Hoạt động</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hoạt động sản xuất</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Blog Content Area Start ##### -->
<section class="alazea-portfolio-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>HOẠT ĐỘNG SẢN XUẤT</h2>
                    <p>Những hình ảnh đẹp về hoạt động sản xuất lại làng nghề</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="alazea-portfolio-filter">
                    <div class="portfolio-filter">
                        <button class="btn active" data-filter="*">tất cả</button>
                        @if(isset($theloai))
                        @foreach($theloai as $tl)
                        <button class="btn" data-filter=".{{$tl->tenkhongdau}}">{{$tl->tentheloai}}</button>
                        @endforeach
                        @endif


                    </div>
                </div>
            </div>
        </div>

        <div class="row alazea-portfolio">
            @if(isset($anhsx))
            @foreach($anhsx as $anh)
            <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item machines {{$anh->loaianh->tenkhongdau}} wow fadeInUp" data-wow-delay="300ms">
                <!-- Portfolio Thumbnail -->
                <div class="portfolio-thumbnail bg-img" style="background-image:  url({{asset('uploads/anhsx/'.$anh->fileanh)}});"></div>
                <!-- Portfolio Hover Text -->
                <div class="portfolio-hover-overlay">
                    <a href="{{asset('uploads/anhsx/'.$anh->fileanh)}}" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 1">
                        <div class="port-hover-text">
                            <h3>{{$anh->tenanh}}</h3>
                            <h5>{{$anh->tieudephu}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @endif
            <!-- Single Portfolio Area -->


            <!-- Single Portfolio Area -->


        </div>
    </div>
</section>
<!-- ##### Blog Content Area End ##### -->
<br>
<br>
<br>
<br>
<!-- ##### Footer Area Start ##### -->
@include('layouttrang.foot')
</body>

</html>