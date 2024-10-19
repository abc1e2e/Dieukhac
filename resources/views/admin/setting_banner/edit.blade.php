@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Chỉnh Sửa Ảnh Banner</h1>
    <form action="{{ route('admin.setting_banner.update', $setting_banner->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh Banner</label>
            @if($setting_banner->image)
                <div>
                    <img src="{{ asset('storage/' . $setting_banner->image) }}" alt="Current Image" style="width: 150px; height: auto;">
                </div>
            @endif
            <input type="file" id="image" name="image" class="form-control">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('admin.setting_banner.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection