@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/project.css') }}">
@endsection

@section('title', 'Project Page')

@section('content')
    <div class="container">
        <p>Trang chủ => Danh sách dự án => Chi tiết dự án</p>
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
                <p class="flex-detail-sliderbar"> <img src="/images/Profile.png" alt="Profile"> Khách hàng: {{ !empty($postSlider->customer) ? $postSlider->name : ""}} </p>
                <p class="flex-detail-sliderbar"> <img src="/images/Location.png" alt="Location"> Địa chỉ: {{ !empty($postSlider->address) ? $postSlider->name : "" }} </p>
                <p class="flex-detail-sliderbar"> <img src="/images/Calendar.png" alt="Calendar"> Thời gian: {{ !empty($postSlider->time) ? $postSlider->name : ""}} </p>
                <p class="flex-detail-sliderbar"> <img src="/images/Category.png" alt="Profile"> Sản phẩm: {{ !empty($postSlider->name) ? $postSlider->name : ""  }} </p>
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
                <div class="project_grid_img">
                    @foreach ( $post_3 as $k => $v)
                    <div class="project_img">
                        <a href="{{ route('project.detail',['id' => $v->id ]) }}"><img src="{{ Storage::url($v->image_main) }}" alt="image_project_{{ $k }}"></a>
                        <p>{{ $v->title }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
    
   </div>
@endsection