<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bán đất Thành phố Hồ Chí Minh</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style_ban.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="{{asset('img/logo.png')}}" alt="" style="margin-left: 40px;margin-top: 20px;"><p>LIGHTZ REAL ESTATE</p></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('view_trangchu')}}" class="{{ (\Request::route()->getName() == 'view_trangchu') ? 'active' : '' }}">Trang chủ</a></li>
                                <li><a href="{{route('view_dsDat')}}" class="{{ (\Request::route()->getName() == 'view_dsDat') ? 'active' : '' }}">Đất bán</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Xem trên bản đồ</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('view_dsPhong')}}" class="{{ (\Request::route()->getName() == 'view_dsPhong') ? 'active' : '' }}">Phòng cho thuê</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('view_dsPhong_map')}}">Xem trên bản đồ</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('view_vechungtoi')}}" class="{{ (\Request::route()->getName() == 'view_vechungtoi') ? 'active' : '' }}">Về chúng tôi</a></li>
                                <li><a href="{{route('view_lienlac')}}" class="{{ (\Request::route()->getName() == 'view_lienlac') ? 'active' : '' }}">Liên hệ</a></li>
                                <?php if(Auth::check()) { ?>
                                <li><a>XIN CHÀO {{Auth::user()->Ten}}</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">TIỀN: {{number_format(Auth::user()->Tien)}} VNĐ</a></li>
                                        <li><a href="{{route('view_trangcanhan')}}">TÀI KHOẢN</a></li>
                                        <li><a href="{{route('view_dangtin')}}">ĐĂNG TIN</a></li>
                                        <li><a href="./dangxuat">ĐĂNG XUẤT</a></li>
                                    </ul>
                                </li>
                                <?php }else { ?>
                                <li><a data-toggle="modal" data-target="#myModal">ĐĂNG NHẬP</a></li>
                                <?php } ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### BODY ##### -->
    @yield('content')
    <!-- ##### BODY End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-shawdow.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-6">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>VỀ CHÚNG TÔI</h6>
                            </div>
                            <p>Với hơn 15 năm kinh nghiệm làm nghề ký gửi nhà đất, Công ty cổ phần bất động sản LightZ RealEstate đã có hơn 2.375 khách hàng đã và đang sữ dụng dịch vụ ký gửi của chúng tôi và tất cả khách hàng điều hài lòng về phong cách phục vụ cũng như sự hiệu quả của việc ký gửi mang lại.
                            </p>
                            <p>Nhằm cung ứng một giải pháp hiệu quả cho nhu cầu này, LightZ Real Estate đã phát triển dịch vụ KÝ GỬI NHÀ ĐẤT để giúp người bán nhà, cho thuê bất động sản một cách NHANH CHÓNG và HIỆU QUẢ NHẤT.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-6">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Giờ làm việc</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Thứ hai - Thứ sáu</span> <span>08 AM - 19 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Thứ bảy</span> <span>08 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Chủ nhật</span> <span>Đóng cửa</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="{{asset('img/icons/phone-call.png')}}" alt="">0569 885 811</h6>
                                <h6><img src="{{asset('img/icons/envelope.png')}}" alt=""> lightz.realestate@gmail.com</h6>
                                <h6><img src="{{asset('img/icons/location.png')}}" alt="" style="margin-top: -5px;"> 169 Tô Hiến Thành, Phường 13, Quận 10, TP.HCM</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/classy-nav.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>

    <!-- ##### Scip single page ##### -->
    @yield('script')
    <!-- ##### End scip ##### -->

</body>

</html>