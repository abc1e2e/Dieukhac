@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Chỉnh Sửa Nội Dung</h1>
    <form action="{{ route('admin.contents.update', $content->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên Danh Mục</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $content->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('admin.contents.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection