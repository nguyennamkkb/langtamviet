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
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Blog Content Area Start ##### -->
<section class="alazea-blog-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                        
                    <!-- Single Blog Post Area -->
                    @foreach($alltin as $tin)
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post mb-50">
                            <div class="post-thumbnail mb-30">
                                <a href="{{url('/post/singlepost/'.$tin->id)}}"><img src="{{url('uploads/tintuc/'.$tin->tieude.'/'.$tin->hinhanh1)}}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="{{url('/post/singlepost/'.$tin->id)}}" class="post-title">
                                    <h5>{{$tin->tieude}}</h5>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{substr($tin->created_at,0,10)}}</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Làng Tăm Việt</a>
                                </div>
                                <p class="post-excerpt">{{$tin->tomtat}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- Single Blog Post Area -->


                </div>

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            {!!$alltin->links()!!}
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">

                <div class="checkout-content">
                    <h5 class="title--">Danh mục thương mại</h5>
                    @foreach($loaitin as $loai)
                    <div class="subtotal d-flex justify-content-between align-items-center">
                        <a href="{{url('/post?keyword='.$loai->id)}}"><h5> {{$loai->name}}</h5></a>
                    </div>
                    @endforeach


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