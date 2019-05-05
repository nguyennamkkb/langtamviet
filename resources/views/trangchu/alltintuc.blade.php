<!doctype html>

<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Làng Tăm Việt &amp; Sản phẩm Bán thủ công địa phương</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('main/img/core-img/logo1.png')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('main/style.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/demo.css')}}">

</head>

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
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: nguyenluongthuc@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +84 984 77 88 78</span></a>
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
                                    <li><a href="{{url('/about')}}">Chúng tôi</a></li>
                                    <li><a href="{{url('/tintuc')}}">Tin tức</a></li>
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            @if(isset($slide))
            @foreach($slide as $key)
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url({{asset('uploads/slide/'.$key->hinhanh)}});"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>{{$key->tieudechinh}}</h2> 
                                
                                <div class="welcome-btn-group">
                                    <a href="" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Chúng tôi <b>đang</b> làm gì ?</h2>
                        <p><b>Giá thành</b> - <b>Số lượng</b> - <b>Chất lượng Tốt nhất</b></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="{{asset('main/img/core-img/cf3.png')}}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Sản phẩm chất lượng</h5>
                                <p>Sản phẩm chất lương là tiêu chí <b>Hàng đầu</b> của chúng tôi, để có thể tồn tại và vươn xa hơn trong tương lai.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="{{asset('main/img/core-img/b2.png')}}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Sử dụng nguyên liệu chất lượng</h5>
                                <p>Với nguyên liệu là cây vầu khai thác chủ yến bên nước <b>Lào</b> để cho ra sản phẩm tốt nhất. </p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="500ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="{{asset('main/img/core-img/s3.png')}}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Mặt hàng kinh doanh</h5>
                                <p>Chúng tôi  kinh doanh chủ yến là   <b>Tăm Tròn</b>  <b>2 li</b>, <b>3 li</b>, .. Cung cấp các sản phẩm này đến các thị trường trong nước và ngoài nước .</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-video-area bg-overlay mb-100" >
                        <img src="{{asset('main/img/bg-img/undervd.jpg')}}" alt="">
                        <a href="https://www.youtube.com/watch?v=GQRG1xTjxEs" class="video-icon">
                            <i class="fa fa-play" aria-hidden="true" style="margin: auto;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Area End ##### -->
    <!-- timeline -->

    <div style="height: auto;background-color:#F9F9FF; margin: 0;">
        <div class="container" style="padding-top: 20px">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h1>Sự phát triển của làng tăm việt</h1>
                        <p>We devote all of our experience and efforts for creation</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="cd-timeline js-cd-timeline">
            <div class="cd-timeline__container">
                <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                        <img src="{{asset('main/img/core-img/logo1.png')}} " alt="Picture">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content js-cd-content">
                        <h2>Hoạt động đầu tiên</h2>
                        <img src="{{asset('main/img/sacxuan.jpg')}}" style="width: 475px" >
                        <p>Trước năm 1965, Quê tôi có nghề đan lát.</p>
                        <span class="cd-timeline__date">trước 1965</span>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->

                <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                        <img src="{{asset('main/img/core-img/logo1.png')}}" alt="Movie">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content js-cd-content">
                        <h2>Những năm sau đó</h2>
                        <p>Thị trường tăm cần tăm làm hương, những người có tay nghề giỏi đã trẻ ra loại tăm này và đã được thị trường chấp nhận </p>
                        <a href="#0" class="cd-timeline__read-more">Read more</a>
                        <span class="cd-timeline__date">Những năm 1990</span>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->

                <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                        <img src="{{asset('main/img/core-img/logo1.png')}}" alt="Picture">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content js-cd-content">
                        <h2>Phát triển rộng hơn</h2>
                        <p>phát triển sang các làng lân cận và tất cả sản phẩm làm ra đều tốt lên.</p>
                        <a href="#0" class="cd-timeline__read-more">Read more</a>
                        <span class="cd-timeline__date">JKhoảng Năm</span>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->

                <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                        <img src="{{asset('main/img/core-img/logo1.png')}}" alt="Location">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content js-cd-content">
                        <h2>Máy móc hỗ trợ</h2>
                        <p>Thời điểm nhu càu lớn nhất là khoảng <b>năm 2005</b> cơ sở chúng tôi xuất ra thị trường 400 Tấn/Tháng</p>
                        <a href="#0" class="cd-timeline__read-more">Read more</a>
                        <span class="cd-timeline__date">Feb 14</span>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->

                <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                        <img src="{{asset('main/img/core-img/logo1.png')}}" alt="Location">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content js-cd-content">
                        <h2>Title of section 5</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                        <a href="#0" class="cd-timeline__read-more">Read more</a>
                        <span class="cd-timeline__date">Feb 18</span>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->

                <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                        <img src="{{asset('main/img/core-img/logo1.png')}}" alt="Movie">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content js-cd-content">
                        <h2>Final Section</h2>
                        <p>This is the content of the last section</p>
                        <span class="cd-timeline__date">Feb 26</span>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->
            </div>
        </section>
        <!-- cd-timeline -->
    </div>


    <div class="container">
        <div class="col-12">
            <div class="border-line"></div>
        </div>
    </div>
    <section class="cool-facts-area bg-img section-padding-100-0" style="background-image:  url({{asset('main/img/bg-img/cool-facts.png')}});">
        <div class="container">
            <div class="row">

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="{{asset('main/img/core-img/cf2.png')}}" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">45</span>+</h2>
                            <h6>Hộ sản xuất</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="{{asset('main/img/core-img/s3.png')}}" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">300</span> Tấn +</h2>
                            <h6>Hàng xuất mỗi tháng</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="{{asset('main/img/core-img/cf3.png')}}" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">12</span>+</h2>
                            <h6>Quốc gia Sử dụng</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="{{asset('main/img/core-img/cf4.png')}}" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">10</span>+</h2>
                            <h6>Loại sản phẩm</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Side Image -->
        <div class="side-img wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
            <img src="{{asset('img/core-img/pot.png')}}" alt="">
        </div>
    </section>

    <div class="container">
        <div class="col-12">
            <div class="border-line"></div>
        </div>
    </div>


    <!-- end timeline -->
    <!--/ Section Services End /-->


    <!--/ Section Portfolio Star /-->
    <!-- ##### About Area Start ##### -->
    <section class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Về chúng tôi</h2>
                        <p><!-- We are leading in the plants service fields. --></p>
                    </div>
                    <p>Chúng tôi là Cơ sở sản xuất <b> Tăm Nhang Thực - Mười</b> . Chuyên mua bán sản phẩm Tăm Nhang với <b>chất lượng tốt nhất</b>, được chọn lọc kỹ càng từ các <b>hộ sản xuất</b>  trong vùng trước khi nhập kho và xuất ra chị trường.</p>

                    <!-- Progress Bar Content Area -->
                    <div class="alazea-progress-bar mb-50">
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Hộ sx trong vùng</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="35"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Kiểm soát <b>chất lượng</b>  hàng hóa</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="99"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Xuất đi <b>không</b> trả về</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="100"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Phản hồi <b>tốt</b> từ <b>Khách hàng</b></p>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="99"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="{{asset('main/img/core-img/b1.png')}}" alt="">
                                    <h5>Hộ sx trong cùng</h5>
                                    <p>Chúng tôi đang làm việc với khoảng 36% hộ sản xuất trong khoảng 100 hộ trong vùng và  <b>đảm bảo chất lượng đầu vào</b>(<i>nguyên liệu</i>)  cho hộ sản xuất.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="{{asset('main/img/core-img/b2.png')}}" alt="">
                                    <h5>Chất lượng hàng hóa</h5>
                                    <p>Chúng tôi kiểm tra chất lượng ngay tại <b> hộ sản xuất</b> và các công đoạn sản xuất ra sản phẩm một cách bài bản khoa học.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="{{asset('main/img/core-img/b3.png')}}" alt="">
                                    <h5>Chất lượng xuất đi</h5>
                                    <p>Sảm phẩm chúng tôi xuất đi được đảm bảo sản phẩm đó có <b>chất lượng</b> tốt nhất, đúng sản phẩm và nhu cầu của khách hàng</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="{{asset('main/img/core-img/b4.png')}}" alt="">
                                    <h5>phản hồi từ khách hàng</h5>
                                    <p>Đa số doang nghiệp phản hồi chất tốt và đúng yêu cầu hàng cần mua và quay lại tiếp tục mua hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>HOẠT ĐỘNG SẢN XUẤT</h2>
                        <p>We devote all of our experience and efforts for creation</p>
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
    <!-- ##### Portfolio Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="alazea-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Tin tức</h2>
                        <p>Cơ sở sản xuất Tăm Nhang Thực - Mười</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Blog Post Area -->
                

                <!-- Single Blog Post Area -->
                @if(isset($tintuc))
                @foreach($tintuc as $tin)

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        <div class="post-thumbnail mb-30">
                            <a href="single-post.html"><img src="{{asset('uploads/tintuc/'.$tin->tieude.'/'.$tin->hinhanh1)}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">
                                <h5>{{$tin->tieude}}</h5>
                            </a>
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{substr($tin->created_at,0,-9)}}</a>
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Làng Tăm Việt</a>
                            </div>
                            <p class="post-excerpt">{{$tin->tomtat}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                

                <!-- Single Blog Post Area -->
                

            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Subscribe Area Start ##### -->

    <!-- ##### Subscribe Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Liên lạc</h2>
                        <p>Thôn Đạo Tú, xã Quảng Phú Cầu, huyện Ứng Hòa, TP.Hà Nội.</p>
                    </div>
                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-100">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="contact-name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="contact-email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="contact-subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn alazea-btn mt-15">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <!-- Google Maps -->
                    <div class="map-area mb-100">
                        <img src="{{asset('main/img/bg-img/undervd.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image:  url({{asset('main/img/bg-img/3.jpg')}});">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="{{asset('main/img/core-img/logo.png')}}" alt=""></a>
                            </div>
                            <p>Tinh hoa văn hóa, làng nghề tăm việt</p>
                            <div class="social-info">
                                <a href="https://www.facebook.com/L%C3%A0ng-t%C4%83m-vi%E1%BB%87t-557884618054134/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->

                    <!-- Single Footer Widget -->

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-12 col-lg-5">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>LIÊN HỆ</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> Thông Đạo Tú, Xã Quảng Phú Cầu,Huyện Ứng Hòa, Tp.Hà Nội</p>
                                <p><span>Phone:</span> +84 984 77 88 78</p>
                                <p><span>Email:</span> nguyenluongthuc@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('main/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('main/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('main/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('main/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('main/js/active.js')}}"></script>
    <script src="{{asset('main/js/main.js')}}"></script>
</body>

</html>