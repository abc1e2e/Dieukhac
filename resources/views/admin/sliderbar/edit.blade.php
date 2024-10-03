@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Chỉnh Sửa Side Bar Bài Viết</h1>
        
        <form action="{{ route('admin.sliderbar.update', $sliderbar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="category" class="form-label">Bài Viết</label>
                <select id="post_id" name="post_id" class="form-control" required>
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}" {{ old('post_id', $sliderbar->post_id) == $post->id ? 'selected' : '' }}>
                            {{ $post->title }}
                        </option>
                    @endforeach
                </select>
                @error('post_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Tiêu Đề</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $sliderbar->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Nội Dung</label>
                <textarea id="content" name="content" rows="5" required>{{ old('content', $sliderbar->content) }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Sản Phẩm</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $sliderbar->name) }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Khách Hàng</label>
                <input type="text" id="customer" name="customer" class="form-control" value="{{ old('customer',  $sliderbar->customer) }}" required>
                @error('customer')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tag" class="form-label">Tag</label>
                <input type="text" id="tag" name="tag" class="form-control" value="{{ old('tag', $sliderbar->tag) }}" required>
                @error('tag')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Thời gian</label>
                <input type="text" id="time" name="time" class="form-control" value="{{ old('time', $sliderbar->time) }}" required>
                @error('time')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $sliderbar->address) }}" required>
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="{{ route('admin.sliderbar.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
@endsection