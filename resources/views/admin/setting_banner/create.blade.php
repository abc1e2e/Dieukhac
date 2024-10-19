@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Tạo Banner Mới</h1>
    <form action="{{ route('admin.setting_banner.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh Banner</label>
            <input type="file" id="image" name="image" class="form-control">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('admin.setting_banner.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection