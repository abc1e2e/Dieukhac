@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection

@section('title', 'About Page')

@section('content')
    <div class="about_bg_1">
        <div class="container ">
            <h2 class="about-h2 mt-5">Về chúng tôi</h2>
            <div class="about_content">
                <p class="p_bg_1">Công ty CP điêu khắc ứng dụng Việt nam: Tinh tế là cách chúng tôi tạo nên giá trị
                    Chào mừng đến với Công ty CP điêu khắc ứng dụng Việt nam, một không gian nơi sự tinh tế gặp gỡ sự tận tâm để tạo ra giá trị cao của không gian ARTWORK cho cộng đồng và xã hội. Là người sáng lập và người có tầm nhìn xa trông rộng đứng sau công ty, tôi mang đến sự kết hợp đa dạng giữa thiết kế, kỹ thuật, nghệ thuật, quản lý sản phẩm và tinh thần kinh doanh để tạo ra những trải nghiệm gia trị cao trong bối cảnh phù hợp nhất của bạn vượt qua các chuẩn mực thông thường.</p>
                {{-- <p class="p_bg_1">Với đội ngũ Kỹ sư thiết kế, quản lý chất chất lượng, đội ngũ công nhân lành nghề nhiều kinh nghiệm và sử dụng c·c phần mềm </p>
                <p class="p_bg_1">thiết kế, tính toán chuyên nghiệp luôn cung cấp cho khách hàng những giải pháp tốt nhất và nhanh nhất về ngành kết cấu thép.</p> --}}
            </div>
            <div class="about_content">
                <p class="p_bg_1">Cách tiếp cận của chúng tôi tại Công ty cổ phần điêu khắc ứng dụng Việt Nam là sự kết hợp độc đáo giữa những hiểu biết sâu sắc trong quá khứ và công nghệ tiên tiến, trong đó mỗi dự án và sản phẩm là một hành trình tiến bộ. Bằng cách khai thác cả kỹ thuật truyền thống và hiện đại, chúng tôi nỗ lực định hình tương lai của các không gian ARTWORK tạo ra những không gian truyền cảm hứng, thu hút và phát triển theo thời đại.</p>
                {{-- <p class="p_bg_1">5.000m2/3.000 m2 diện tích mặt bằng, Nhà máy sản xuất được trang bị đầy đủ máy móc, thiết bị, dây chuyền sản xuất hiện đại</p>
                <p class="p_bg_1">như: Máy chặt sắt, Máy ghá dầm, Máy hàn tự động, Máy nắn dầm, phun bi làm sạch, Phun sơn ...</p> --}}
            </div>
            <div class="about_content">
                <p class="p_bg_1">Hợp tác với chúng tôi có nghĩa là bước vào một thế giới nơi các yếu tố thiết kế vượt thời gian hòa quyện liền mạch với khả năng của các công nghệ mới. Chúng tôi tin vào việc tạo ra những kiệt tác hữu hình, minh chứng cho bối cảnh hiện tại để phát triển bối cảnh bền vững cho tương lai. Không chỉ là chứng kiến thiết kế; mà là trải nghiệm sự kết hợp hài hòa giữa truyền thống và đổi mới trong mọi sáng tạo.
                    Cam kết của chúng tôi đối với sự tiến bộ vượt xa một năm cụ thể hoặc một tính năng công nghệ đơn lẻ. Chúng tôi liên tục khám phá và tích hợp những tiến bộ giúp nâng cao tính thẩm mỹ, chức năng và trải nghiệm tổng thể của các sản phẩm và không gian ARTWORK cũng như không gian trải nghiệm khác. Kết quả là một danh mục các sản phẩm, dự án, không gian trải nghiệm phản ánh sự tận tâm trong việc vượt qua ranh giới và phát triển khái niệm "không gian lý tưởng" cho hiện tại và thế hệ tương lai.
                    Bước vào những không gian, công trình ARTWORK ngày nay phát triển thành di sản của tương lai. Công ty Điêu Khắc Ứng Dụng Việt Nam mời bạn tham gia vào hành trình của chúng tôi, nơi các sản phẩm và không gian ARTWORK không có giới hạn và mỗi dự án trở thành bức tranh của trí tưởng tượng và sự tiến bộ. </p>
                {{-- <p class="p_bg_1">phẩm mới áp dụng trong công nghiệp và dân dụng để trở thành đơn vị sản xuất kết cấu thép cÛ uy tín trong nước với chất lượng </p>
                <p class="p_bg_1">cao nhất và dịch vụ tốt nhất. Chúng tôi cam kết luôn xây dựng và phát triển công ty gắn chặt với mục tiêu chất lượng và sự hài </p> --}}
            </div>
            <div class="about_button">
                <button>Hồ sơ công ty</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid-section mb-20 pt-50">
            <div>
                <img src="img_about/about_us_img_content_1.png" alt="about_us_img_content_1.png">
            </div>
            <div>
                <p class="p_chungtoi">Lịch sử hình thành</p>
                <p class="p_congty">Quá trình hình thành và phát triển</p>
                <p class="p_introduce">Được thành lập và hoạt động theo Giấy phép đăng ký kinh doanh số 0109344009 do Phòng Đăng ký kinh doanh - sở Kế hoạch và Đầu tư thành phố Hà Nội cấp ngày 16/9/2020. Bằng sự nỗ lực không ngừng của tập thể lãnh đạo, đội ngũ cán bộ, kỹ sư và công nhân viên, đến nay chúng tôi đang trên đà vươn lên trở thành một đơn vị uy tín trong lĩnh vực cung cấp sản phẩm kết cấu thép.</p>
                <p class="p_introduce">Chúng tôi đặt mục tiêu chất lượng lên hàng đầu từ đó xây dựng niềm tin bền vững nơi khách hàng và đối tác, trở thành một thương hiệu quen thuộc trong các lĩnh vực :</p>
                <ul>
                    <li class="p_introduce">Sản xuất các cấu kiện kim loại, sản xuất thùng, bể chứa và dụng cụ chứa bằng kim loại...</li>
                    <li class="p_introduce">Sản xuất nhà thép tiền chế, sản phẩm ngành cơ khí, gia công cơ khí, lắp đặt máy móc và thiết bị công nghiệp.</li>
                    <li class="p_introduce">Buôn bán máy móc, thiết bị và phụ tùng máy khai khoáng.</li>
                    <li class="p_introduce">Buôn bán vật liệu, thiết bị lắp đặt khác trong xây dựng.</li>
                    <li class="p_introduce">Xây dựng dân dụng và công nghiệp.</li>
                    <li class="p_introduce">Thiết kế kiến trúc công trình dân dụng, công nghiệp.</li>
                    <li class="p_introduce">Thiết kế kết cấu công trình dân dụng, công nghiệp.</li>
                    <li class="p_introduce">Gia công chế tạo, lắp dựng công trình thép nghệ thuật, công trình biểu tượng bằng kết cấu thép.</li>
                </ul>
            </div>

        </div>
    </div>
    <div style="background-color: #F8F9FA">
        <div class="container">
            <div class="grid-section mb-20 pt-50">
                <div>
                    <p class="p_congty">Tầm nhìn & Sứ mệnh</p>
                    <div>
                        <img style ="width: auto;" src="img_about/Icon_1.png" alt="Icon_1.png">
                    </div>
                    <p class="p_about_1">Tầm nhìn</p>
                    </p class="p_introduce" >Công ty CP Thăng Long Steel đã và đang hợp tác với rất nhiều đối tác lớn cùng chiến lược lâu dài bền vững</p>
                    <div>
                        <img style ="width: auto;" src="img_about/Icon_2.png" alt="Icon_1.png">
                    </div>
                    <p class="p_about_1">Sứ mệnh</p>
                    </p class="p_introduce">Chúng tôi luôn nỗ lực, không ngừng sáng tạo, đổi mới, cải tiến sản phẩm và dịch vụ nhằm tối đa hóa lợi ích cho khách hàng.
                    Đào tạo, nâng cao chất lượng nguồn nhân lực đáp ứng yêu cầu phát triển.
                    Đặt chất lượng công trình lên hàng đầu.
                    Xây dựng mô hình quản trị công ty hiện tại, chuyên nghiệp.</p>
                </div>
                <div>
                    <img src="img_about/about_us_img_content_2.png" alt="about_us_img_content_2.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="t_center"> 
            <h2 class="p_congty ">Nghệ nhân</h2>
        </div>
        <div class="about_content">
            <p class="p_introduce">Các nghệ nhân điêu khắc của Thăng Long Steel là những bậc thầy trong lĩnh vực tạo hình kim loại, với nhiều năm kinh </p>
            <p class="p_introduce">nghiệm và niềm đam mê cháy bỏng với nghệ thuật. Mỗi tác phẩm được họ chế tác không chỉ thể hiện kỹ năng tinh xảo mà </p>
            <p class="p_introduce">còn chứa đựng sự sáng tạo và tâm huyết. Từ những chi tiết nhỏ nhất đến tổng thể tác phẩm, các nghệ nhân của chúng tôi </p>
            <p class="p_introduce">luôn đặt trọn tâm huyết vào từng đường nét, tạo nên những kiệt tác nghệ thuật độc đáo và đầy ý nghĩa. </p>
        </div>

        <div class="grid-img_about">
            <div class="img_about_relative">
                <img src="img_about/image.png" alt="image1.png">
                <p class="p_img_1">Nguyễn Hải Yến</p>
                <p class="p_img_2">(Nghệ Nhân Điêu Khắc)</p>
            </div>
            <div>
                <img src="img_about/about_us_img_content_4.png" alt="about_us_img_content_4.png">
            </div>
            <div>
                <img src="img_about/about_us_img_content_5.png" alt="about_us_img_content_5.png">
            </div>
            <div>
                <img src="img_about/about_us_img_content_6.png" alt="about_us_img_content_6.png">
            </div>
            <div>
                <img src="img_about/about_us_img_content_7.png" alt="about_us_img_content_7.png">
            </div>
            <div>
                <img src="img_about/about_us_img_content_8.png" alt="about_us_img_content_8.png">
            </div>
            <div>
                <img src="img_about/about_us_img_content_9.png" alt="about_us_img_content_9.png">
            </div>
            <div>
                <img src="img_about/about_us_img_content_10.png" alt="about_us_img_content_10.png">
            </div>
        </div>
    </div>
    <div class="about_bg_3">
        <div class="about_bg_3_h2">
            <h2 class="about-h2">Đối tác & Khách hàng</h2>
        </div>
        <div class="img_about_footer">
            <div >
                <img src="img_about/about_us_img_logo_1.png" alt="about_us_img_logo_1.png">
            </div>
            <div>
                <img src="img_about/about_us_img_logo_2.png" alt="about_us_img_logo_2.png">
            </div>
            <div>
                <img src="img_about/about_us_img_logo_3.png" alt="about_us_img_logo_3.png">
            </div>
            <div>
                <img src="img_about/about_us_img_logo_4.png" alt="about_us_img_logo_4.png">
            </div>
            <div>
                <img src="img_about/about_us_img_logo_5.png" alt="about_us_img_logo_5.png">
            </div>
            <div>
                <img src="img_about/about_us_img_logo_6.png" alt="about_us_img_logo_6.png">
            </div>
        </div>
    </div>
@endsection