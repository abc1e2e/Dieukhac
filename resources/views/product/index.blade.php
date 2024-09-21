@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('title', 'product Page')

@section('content')
    <div class="product_bg_1 mb-20">
        <div class="container ">
            <h2 class="product_h2">
                Sản phẩm & Dịch vụ
            </h2>
            <p>MÔ HÌNH TRANG TRÍ HALLOWEEN</p>
        </div>
    </div>
    <div class="container">
        <div class="product_grid_img">
            @foreach ($posts as $key => $value)
                <div class="project_img">
                    <a href ="{{ route('product.detail',['id' => $value->id ]) }}"><img src="{{ Storage::url($value->image_main) }}" alt="image_product_{{ $key }}"></a>
                    <p>{{ $value->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        {{ $posts->links('pagination') }}
    </div>
@endsection