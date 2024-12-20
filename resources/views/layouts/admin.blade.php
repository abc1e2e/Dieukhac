<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="admin-container">
        <form id="logout-form" action="{{ route('profile.destroy') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Menu</h2>
            <ul class="sidebar-menu">
                <li>
                    <a href="#" class="toggle-submenu">Quản lý bài viết</a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.posts.index') }}">Tất cả bài viết</a></li>
                        <li><a href="{{ route('admin.postImgs.index') }}">Thêm ảnh và nội dung cho bài viết</a></li>
                        <li><a href="{{ route('admin.sliderbar.index') }}">Tạo thanh bên của bài viết (Side Bar)</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('admin.categories.index') }}">Quản lý danh sách</a></li>
                <li><a href="{{ route('admin.comments.index') }}">Quản lý các bình luận</a></li>
                <li><a href="{{ route('admin.setting_banner.index') }}">Quản lý Banner</a></li>
                {{-- <li>
                    <a href="#" class="toggle-submenu">Quản lý nội dung bài viết</a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.contents.index') }}">Quản lý  mục nội dung bài viết</a></li>
                        <li><a href="{{ route('admin.content_detail.index') }}">Quản lý chi tiết nội dung bài viết</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        
        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
@yield('script')
<script>
    $(document).ready(function() {
        $('.toggle-submenu').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).next('.submenu').toggleClass('active');
    });

    $(document).ready(function() {
            $('.delete-button').on('click', function(e) {
                e.preventDefault(); // Ngăn form được gửi ngay lập tức
                
                var form = $(this).closest('form'); // Lấy form gần nhất

                if (confirm('Bạn có chắc chắn muốn xóa bài viết này không?')) {
                    form.submit(); // Nếu người dùng nhấn OK, gửi form
                }
            });
     });
         // Hide the alert after 3 seconds
         setTimeout(function() {
             $('.alert-success').fadeOut('slow');
         }, 1000); // 3 seconds
     });
 </script>