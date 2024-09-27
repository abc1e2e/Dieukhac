@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/new.css') }}">
@endsection

@section('title', 'Product Detail Page')

@section('content')
    <div class="container">
        <p class="p_new_1">Trang chủ <img src="../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp"> Tin Tức <img src="../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp"> Chi tiết tin tức</p>
    </div>
    <div class="container">
        <div class="container-detail">
            <h2 class="new_h2_title">{{ $post->title }}</h2>
            <div class="flex_new_header">
                <div class="flex_new_header_2"> 
                    <p> {{ $post->formatedDate }}</p>
                    <p>{{ count($comment) }} Bình luận</p>
                </div>
                <div class="flex_new_header_3">
                    <img src="../images/Facebook.png" alt="FaceBook">
                    <img src="../images/Instagram.png" alt="Instagram">
                    <img src="../images/Messenger.png" alt="Message">
                    <img src="../images/LinkedIn.png" alt="LinkedIn">
                    <img src="../images/Twitter.png" alt="Twitter">
                </div>
            </div>

        </div>
        <div class="flex-detail">

            <div class="container-detail">

                <img class="img_1" src="{{ Storage::url($post->image_main) }}" alt="img_main">

                <p class="content-detail">{{ $post->content }}</p>

                @foreach ($postImg as $key => $value)
                    <div>
                        <img class="img_1" src="{{ Storage::url($value->image) }}" alt="img_main">
                        <h2>{{ $value->title }}</h2>
                        <p class="content-detail">{{ $value->content }}</p>
                    </div>
                @endforeach
            </div>
            <div class="slider_bar">
                <p>Bài viết xem nhiều</p>
                <div class="new_flex_img">

                    @foreach ($post_8 as $k => $v)
                        <div class="new_img">
                            <div class="slider_bar_link">
                                <a href="{{ route('news.detail', ['id' => $v->id]) }}"><img
                                        src="{{ Storage::url($v->image_main) }}"
                                        alt="image_product_{{ $k }}"></a>
                            </div>
                            <div>
                                <p>{{ $v->title }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- {{ dd($postSlider->title) }} --}}
                {{-- <h2>{{ !empty($postSlider->title) ? $postSlider->title : "" }}</h2>
                <p>{{ !empty($postSlider->content) ? $postSlider->content : "" }}</p> --}}
            </div>
        </div>

        <div class="container-detail">
            <div class="container-detail flex-comment-header">
                <img src="../images/bubble-chat.png" alt="bubble-chat">
                <p class="p-comment-headder">BÌNH LUẬN</p>
            </div>
            <div>
                <form action="" id="form_comment">
                    @csrf
                    <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                    <div class="form_div">
                        <label for="">Nhập nội dung câu hỏi</label>
                        <textarea name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form_div">
                        <label for="" >Tên</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="form_div">
                        <div>
                            <label for="">Email</label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div>
                            <label for="">Số điện thoại</label>
                            <input type="text" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="form_div">
                        <input type="submit" value="Gửi" >
                    </div>
                </form>
            </div>
        </div>
        <div class="container-detail" id="commentList">
            <p>{{count($comment)}} bình luận</p>
            @if(!empty($comment))
                @foreach ($comment as $k => $v)
                    <div class="comment">
                        <div class="text_comment">
                            <div class="text_comment_1">
                                <div class="text_comment_2">{{ $v->name }}</div>
                                <div class="text_comment_3">{{ $v->created_at }}</div>
                            </div>
                            <div class="text_comment_4">{{ $v->content }}</div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#form_comment').submit(function(e) {
        var id = 
        e.preventDefault();  // Ngăn form submit theo cách thông thường

        let formData = {
            'post_id': $('#post_id').val(), 
            'content': $('#content').val(),
            'name': $('#name').val(),
            'email': $('#email').val(),
            'phone': $('#phone').val(),
            '_token': $('input[name=_token]').val()
        };
        console.log(formData)
        $.ajax({
            url: "{{ route('news.comment') }}",  
            type: "POST",
            data: formData,
            success: function(response) {
                console.log(response.data);
                alert('Bình luận đã được gửi thành công!');
                // Xóa nội dung form sau khi gửi thành công
                $('#form_comment')[0].reset();
                // Cập nhật danh sách bình luận (nếu cần)
                updateCommentList(response.data);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
                alert('Có lỗi xảy ra khi gửi bình luận');
            }
        });
    });

    function updateCommentList(newComment) {
    let commentHtml = '     <div class="comment">'+
                    '<div class="text_comment">'+
                    '<div class="text_comment_1">'+
                        '<div class="text_comment_2">'+
                            newComment.name +'</div>'+
                        '<div class="text_comment_3">'+
                            newComment.created_at +'</div>'+
                    '</div>'+
                    '<div class="text_comment_4">' +newComment.content+' </div>'+
                '</div>'+
            '</div>';
    $('#commentList').append(commentHtml);
}
});
</script>
@endsection