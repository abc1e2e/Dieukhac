@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <div class="container">
        <p class="p_new_1">Trang chủ <img src="../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp"> Danh sách sản phẩm <img src="../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp"> Chi tiết sản phẩm</p>
    </div>
   <div class="container">
        <div class="flex-detail">
            <div class="container-detail">
                <img class="img_1" src="{{ Storage::url($post->image_main) }}" alt="img_main">
            </div>
            <div class="slider_bar">
                {{-- {{ dd($postSlider->title) }} --}}
                <h2>{{ !empty($postSlider->title) ? $postSlider->title : "" }}</h2>
                <p>{{ !empty($postSlider->content) ? $postSlider->content : "" }}</p>
                <p class="flex-detail-sliderbar"> <img src="/images/Category.png" alt="Profile"> Sản phẩm: {{ !empty($postSlider->customer) ? $postSlider->name : "" }} </p>
                <p class="flex-detail-sliderbar"> <img src="/images/Bookmark.png" alt="Profile"> Tag: {{ !empty($postSlider->tag) ? $postSlider->tag : "" }} </p>
            </div>
        </div>
        <div class="container-detail">
            <h2>{{ $post->title }}</h2>
            <p class="content-detail">{{ $post->content }}</p>
        </div>
        @foreach ($postImg as $key => $value)

            <div class="container-detail">
                <img class="img_1" src="{{ Storage::url($value->image) }}" alt="img_main">
                <h2>{{ $value->title }}</h2>
                <p class="content-detail">{{ $value->content }}</p>
            </div>

        @endforeach
            <h2>Sản phẩm liên quan</h2>
            <div class="container">
                <div class="product_grid_img">
                    @foreach ( $post_3 as $k => $v)
                    <div class="project_img">
                        <a href ="{{ route('product.detail',['id' => $v->id ]) }}"><img src="{{ Storage::url($v->image_main) }}" alt="image_product_{{ $k }}"></a>
                        <p>{{ $v->title }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
    
   </div>
@endsection