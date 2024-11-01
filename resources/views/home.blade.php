@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('title', 'Home Page')

@section('content')
    <img src="{{ Storage::url($setting_banner->image) }}" alt="home_page_img_1" class="home_page_img_1">
    <div class="container">

        <div class="grid-section mb-20">
            <div>
                <p class="p_chungtoi">Về chúng tôi</p>
                <p class="p_congty">Công ty Cổ phần Ứng dụng Điêu khắc Việt Nam
                    CHuyên Thiết kế Cảnh quan & Mô Hình
                    Hàng đầu việt Nam</p>
                <img src="img_home/08.png" alt="8+">
                <p class="p_kinhnghiem"> Số năm <br>
                    kinh nghiệm</p>
            </div>
            <div>
                {{-- <pre class="p_introduce_content">{{ $content_detail1->content }}</pre> --}}
                <p class="p_introduce">Công ty Cổ phần Ứng dụng Điêu khắc Việt Nam được thành lập với vai trò tiên phong trong lĩnh vực tạo
                    hình, thiết kế, thi công cảnh quan, mô hình các dự án nghỉ dưỡng, khu vui chơi, khu du lịch... trong và
                    ngoài nước. Hiện nay, không chỉ đáp ứng thị trường trong nước chúng tôi đang từng bước chinh phục các
                    thị trường khó tính trên thế giới. Công ty cổ phần ứng dụng điêu khắc việt nam hiện đang là đơn vị dẫn đầu bằng trang thiết bị máy
                    móc hiện tại trong lĩnh vực kinh doanh tạo mẫu công nghệ. Với tiềm năng trang thiết bị và sự chuyên
                    nghiệp, không ngừng sáng tạo và đổi mới. Chúng tôi tin chắc rằng công ty cổ phần điêu khắc việt nam sẽ là đối tác tin cậy
                    của các doanh nghiệp Việt Nam và nước ngoài.</p>
                <div class="grid-section">
                    <div class="flex_item">
                        <div><img src="img_home/Item.png" alt="item">
                        </div>
                        <p class="p_item">Giá cả hợp lý</p>
                    </div>
                    <div class="flex_item">
                        <div><img src="img_home/Item.png" alt="item"></div>
                        <p class="p_item">Thiết kế độc quyền</p>
                    </div>
                </div>
                <div class="grid-section">
                    <div class="flex_item">
                        <div><img src="img_home/Item.png" alt="item">
                        </div>
                        <p class="p_item">Đội nhóm chuyên nghiệp</p>
                    </div>
                    <div class="flex_item">
                        <div><img src="img_home/Item.png" alt="item"></div>
                        <p class="p_item">Uy tín chất lượng</p>
                    </div>
                </div>

                <img src="img_home/18602.png" alt="18620">
            </div>

        </div>
    </div>
    <div style="background-color: #F8F9FA">
        <div class="container">
            <div class="grid-section mb-20 pt-50">
                <div>
                    <img src="img_home/home_page_img_content_3.png" alt="home_page_img_content_3.png">
                </div>
                <div>
                    <p class="p_chungtoi">Quy mô sản xuất</p>
                    <p class="p_congty">Quy mô sản xuất lên đến 3300 m2</p>
                    {{-- <pre class="p_introduce_content">{{ $content_detail2->content }}</pre> --}}
                    <p class="p_introduce">Công ty Cổ phần Ứng dụng Điêu khắc Việt Nam toạ lạc tại Tầng 11, Tòa nhà NetLand, ngõ 27 Lê Văn Lương, Phường Nhân Chính, Quận Thanh Xuân, Hà Nội. Diện tích nhà xưởng lên đến 3300m2. Xưởng sản xuất
                        được chia thành 4 khu chính:</p>
                    <ul>
                        <li class="p_introduce">Khu máy móc và sản xuất xốp 1500m2</li>
                        <li class="p_introduce">Khu thi công sản xuất nhựa composite 1000m2</li>
                        <li class="p_introduce">Khu hoàn thiện, kho bảo quản 500m2</li>
                        <li class="p_introduce">Khu lưu trú của nhân viên 300m2</li>
                    </ul>
                    <p class="p_introduce">Với diện tích và quy mô nhà xưởng trên chúng tôi tự tin có thể đáp ứng được các
                        đơn hàng, dự án lớn nhỏ của quý khách hàng.</p>
                </div>

            </div>

            <div class="grid-section mb-20 pb-50">
                <div>
                    <img src="img_home/home_page_img_content_4.png" alt="home_page_img_content_4.png">
                </div>
                <div>
                    <p class="p_chungtoi">NGUỒN LỰC NHÂN SỰ</p>
                    <p class="p_congty">Đội ngũ chuyên nghiệp & Tâm huyết</p>
                    {{-- <pre class="p_introduce_content">{{ $content_detail3->content}}</pre> --}}
                    <p class="p_introduce">NGUỒN LỰC NHÂN SỰ</p>
                    <p class="p_introduce">Công ty Cổ phần Ứng dụng Điêu khắc Việt Nam luôn chú trọng đến nguồn lực nhân sự, nguồn nhân lực
                        được xem là “tài sản quý giá"" của công ty.</p>
                    <ul>
                        <li class="p_introduce">Trình độ: Đội ngũ nhân sự luôn được ưu tiên tuyển chọn, đào tạo bài bản và
                            có bề dày kinh nghiệm trong lĩnh vực, tốt nghiệp từ các trường ĐH Mỹ Thuật danh tiếng trên cả
                            nước.</li>
                        <li class="p_introduce">Tận tâm: Tinh thần trách nhiệm cao, tận tâm với khách hàng và tận tâm với
                            công việc là “kim chỉ nam" của chúng tôi.</li>
                        <li class="p_introduce">Đoàn kết: Sẵn sàng hỗ trợ lẫn nhau trong công việc, hướng tới mục đích chung
                            là phục vụ khách hàng và phát triển thương hiệu công ty.</li>
                        <li class="p_introduce">Chuyên nghiệp: Sự am hiểu công việc và đam mê với nghề là yếu tố cốt lõi để
                            tạo nên tính chuyên nghiệp, sẵn sàng học hỏi và đổi mới trong kiến thức và cách làm việc.</li>
                    </ul>
                    <p class="p_introduce">GIÁ TRỊ CÔT LÕI</p>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="mb-20">
            <div class="grid-section">
                <div>
                    <p class="p_chungtoi">Quy trình sản xuất mô hình</p>
                    <h2 class="h-2"> Chỉ cần 4 bước bạn đã có một mô hình
                        hoàn chỉnh</h2>
                </div>
                <div>
                    {{-- <pre class="p_introduce_content"> {{ $content_detail4->content }}</pre> --}}
                    <p class="p_introduce">Quá trình sản xuất được thực hiện bởi các nghệ nhân và úng dụng công
                        nghệ
                        hàng đầu tại Công ty Cổ phần Ứng dụng Điêu khắc Việt Nam</p>
                </div>
            </div>

            <div class="image-container">
                <div class="image-container-1">
                    <img src="img_home/procedure_1.jpg" alt="home_page_img_step.png">
                    <div class="text-overlay-header">
                        <p>01</p>
                    </div>
                    <div class="text-overlay-footer">
                        <p>Nhận ý tưởng <br>& Lên thiết kế</p>
                    </div>
                </div>
                <div class="image-container-1">
                    <img src="img_home/procedure_2.jpg" alt="home_page_img_step.png">
                    <div class="text-overlay-header">
                        <p>02</p>
                    </div>
                    <div class="text-overlay-footer">
                        <p>Hoàn thiện <br> thiết kế 3D</p>
                    </div>
                </div>
                <div class="image-container-1">
                    <img src="img_home/procedure_3.jpg" alt="home_page_img_step.png">
                    <div class="text-overlay-header">
                        <p>03</p>
                    </div>
                    <div class="text-overlay-footer">
                        <p>Tạo hình phôi <br>
                            sản phẩm</p>
                    </div>
                </div>
                <div class="image-container-1">
                    <img src="img_home/procedure_4.jpg" alt="home_page_img_step.png">
                    <div class="text-overlay-header">
                        <p>04</p>
                    </div>
                    <div class="text-overlay-footer">
                        <p>Sơn màu hoàn thiện <br>
                            & Bàn giao</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="contact_home mb-20">
        {{-- <img src="img_home/home_page_img_bg_2.png" alt="img_home/home_page_img_bg_2.png"> --}}
        <div class="container grid-section contact_position">
            <div class="contact_position_1">
                <p class="contact_p_1">Liên hệ với chúng tôi</p>
                <p class="contact_p_2">Liên hệ với chúng tôi
                    ngay hôm nay để nhận tư vấn miễn phí dịch vụ thiết kế
                    và thi công </p>
            </div>
            <div class="contact_position_1">
                <form action="">
                    <div>
                        <input id="name" name="name" type="text" placeholder="Họ và tên">
                    </div>
                    <div>
                        <input id="phone" name="phone" type="text" placeholder="Nhập số điện thoại">
                    </div>
                    <div>
                        <textarea id="content" name="content" placeholder="Để lại lời nhắn cho chúng tôi"
                            style="width: 100%; height: 200px; box-sizing: border-box;"></textarea>
                    </div>
                    <input type="submit" value="Gửi">
                </form>
            </div>
        </div>
    </div>
    <div class="container mb-20">
        <div class="grid-section">
            <div>
                <p class="p_chungtoi">Tin tức cập nhật</p>
                <p class="p_congty">Các xu hướng hot trong năm nay</p>
            </div>
            <div class="new_home">
                <a href="/news">
                    Xem tất cả
                    <img src="img_home/right.png" alt="right.png">
                </a>
            </div>
        </div>
        <div class="post_image">
            <div class="row-1 grid-container">
                @foreach ($posts as $key => $value)
                    @if ($key < 5)
                        @if ($key == 0)
                            <div class="grid-item main-image">
                                <a href="{{ route('news.detail',['id' => $value->id ]) }}"> <img src="{{ Storage::url($value->image_main) }}" alt="image_main_1"> </a>
                            </div>
                        @elseif ($key == 1 || $key == 2)
                            <div class="grid-item dual-image secondary-image">
                                <a href="{{ route('news.detail',['id' => $value->id ]) }}">  <img src="{{ Storage::url($value->image_main) }}" alt="image_main_{{ $key + 1 }}"> </a>
                            </div>
                        @else
                            <div class="grid-item dual-image secondary-image">
                                <a href="{{ route('news.detail',['id' => $value->id ]) }}"> <img src="{{ Storage::url($value->image_main) }}" alt="image_main_{{ $key + 1 }}"> </a>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
            <div class="row-2 grid-container">
                @foreach ($posts as $key => $value)
                    @if ($key >= 5)
                        @if ($key == 5)
                            <div class="grid-item main-image">
                              <a href="{{ route('news.detail',['id' => $value->id ]) }}">  <img src="{{ Storage::url($value->image_main) }}" alt="image_main_1"> </a>
                            </div>
                        @elseif ($key == 6 || $key == 7)
                            <div class="grid-item dual-image secondary-image">
                                <a href="{{ route('news.detail',['id' => $value->id ]) }}">   <img src="{{ Storage::url($value->image_main) }}" alt="image_main_{{ $key + 1 }}"> </a>
                            </div>
                        @else
                            <div class="grid-item dual-image secondary-image">
                                <a href="{{ route('news.detail',['id' => $value->id ]) }}">  <img src="{{ Storage::url($value->image_main) }}" alt="image_main_{{ $key + 1 }}"> </a>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
