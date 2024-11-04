@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection

@section('title', 'Liên hệ')

@section('content')
    <div class="contact_bg_1">
        <div class="container ">
            <div class="p_contact"> 
                <p>Liên hệ với chúng tôi</p>
            </div>
            <div>
                <h2 class="contact_h2">
                        Liên hệ với chúng tôi <br>
                    ngay hôm nay để nhận tư vấn miễn phí dịch vụ <br> 
                    thiết kế và thi công 
                </h2>
            </div>
            <div class="form_contact">
                <form action="">
                    <div>
                        <input id="name" name="name" type="text" placeholder="Họ và tên">
                    </div>
                    <div>
                        <input id="phone" name="phone" type="text" placeholder="Nhập số điện thoại">
                    </div>
                    <div>
                        <textarea id="content" name="content" placeholder="Để lại lời nhắn cho chúng tôi"
                            style="width: 100%; height: 200px;"></textarea>
                    </div>
                    <input type="submit" value="Gửi">
                </form>
            </div>
        </div>
    </div>
    

@endsection