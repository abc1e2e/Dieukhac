<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- @vite('resources/css/style.css') --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="lin-h">

            <div class="container-header">
                <div class="content">
                    <img class="iconlyregularboldcall" alt="" src="../img_home/ic_call.png">
                    <div class="tlsthanglongsteelvn">Hotline: 0972.888.888</div>
                    <img class="iconlyregularboldmessage" alt="" src="../img_home/ic_mail.png">
                    <div class="tlsthanglongsteelvn">tls@thanglongsteel.vn</div>
                </div>
                <div class="ting-vit">
                   
                        <img class="lin-h-item" alt="" src="../img_home/9.png">
                        <p>Tiếng Việt</p>
                   
                </div>
        
            </div>
        </div>
        <nav class="container">
            <div class="flex-header-sp">
                <img src="{{ asset('img_home/logo.png') }}" alt="logo" class="img_header_sp">
                <button class="menu-toggle">☰</button>
            </div>
                <ul class="horizontal-menu"> 
                    <li class="img_header_sp_li" style="padding-right: 20px">  <img src="{{ asset('img_home/logo.png') }}" alt="logo"></li>
                    <li><a class="link_header" href="/">Trang chủ</a></li>
                    <li><a class="link_header" href="/about">Về chúng tôi</a></li>
                    <li><a class="link_header" href="/project">Dự án</a></li>
                    <li><a class="link_header" href="/product">Sản Phẩm & Dịch Vụ</a></li>
                    <li><a class="link_header" href="/news">Tin tức</a></li>
                    <li><a href="/contact" class="btn_contact">Liên hệ</a></li>
                </ul>

        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="grid-footer container">
            <div class="sp_footer"> 
               <img src="{{ asset('img_home/logo.png') }}" alt="logo">
                <p class="p_footer"> <span>THĂNG LONG STEEL</span> là một công ty chuyên nghiệp và đáng tin cậy trong lĩnh vực thiết kế và thi công cảnh quan. Với niềm đam mê và tâm huyết với nghệ thuật cảnh quan, chúng tôi đã mang đến cho hàng nghìn khách hàng những không gian mơ ước, nổi bật và góp phần làm đẹp cho cộng đồng và cuộc sống của họ.</p>

                <div class="flex_item">
                    <img src="{{ asset('img_home/Call.png') }}" alt="call.png">
                    <p class="p_footer">0972.888.888</p>
                </div>
                <div class="flex_item">
                    <img src="{{ asset('img_home/Message.png') }}" alt="call.png">
                    <p class="p_footer">tls@thanglongsteel.vn</p>
                </div>
                <div class="flex_item">
                    <img src="{{ asset('img_home/Location.png') }}" alt="call.png">
                    <p class="p_footer">Tầng 11, Tòa nhà Lạc Hồng, Số 85 đường Lê Văn Lương, Phường Nhân Chính, Quận Thanh Xuân, Hà Nội</p>
                </div>
                <div>
                    <img src="../iconsocialmedia/ic_facebook.png" alt="ic_facebook">
                    <img src="../iconsocialmedia/ic_youtube.png" alt="ic_youtube">
                    <img src="../iconsocialmedia/ic_twitter.png" alt="ic_twitter">
                </div>
            </div>  
            <div class="mt-5 ml-6"> 
                <p class="p_footer_2">Khám phá</p>
                <p class="p_footer">Mô hình linh vật trang trí Tết</p>
                <p class="p_footer">Mô hình trang trí Trung Thu</p>
                <p class="p_footer">Mô hình trang trí Halloween</p>
                <p class="p_footer">Mô hình linh vật trang trí Noel</p>
            </div>  
            <div class="mt-5 ml-6"> 
                <p class="p_footer_2">Liên hệ</p>
                <a href="/private-policy" class="p_footer">Chính sách bảo mật</a>
                <p class="p_footer">Thông tin pháp lý</p>
                <p><a href="/contact" class="p_footer"> Liên hệ </a></p>
                <p><a href="/news" class="p_footer"> Bản tin </a></p>
                <p><a href="/question" class="p_footer"> Câu hỏi thường gặp </a></p>
            </div>  
            <div class="mt-5 sp_footer"> 
                <p class="p_footer_2">Yêu cầu báo giá</p>
                <button class="btn_fooder">Gửi yêu cầu báo giá</button>
                <p class="p_footer">Chứng chỉ Năng lực Hoạt động Xây dựng Cấp III. Số: HCM-00046954, cấp ngày 19/10/2020 tại Sở Kế hoạch và Đầu tư thành phố Hồ Chí Minh</p>
                <img src="{{ asset('img_home/home_page_img_certification.png') }} " alt="home_page_img_certification">
            </div>  
            
        </div>
        <p style="text-align: center">&copy; Copyright {{ date('Y') }}, CÔNG TY CP THĂNG LONG STEEL. Đã đăng ký bản quyền </p>
    </footer>
</body>
</html>
@yield('script')
<script>
    $(document).ready(function() {
        $('.menu-toggle').click(function() {
            $('.horizontal-menu').toggleClass('show');
        });
    });
</script>