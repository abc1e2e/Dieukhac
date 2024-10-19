@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Tạo Danh Mục Mới</h1>
    <form action="{{ route('admin.content_detail.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="content_id" class="form-label">Bài viết</label>
            <select id="content_id" name="content_id" class="form-control" required>
                @foreach($contents as $content)
                    <option value="{{ $content->id }}" {{ old('content_id') == $content->id ? 'selected' : '' }}>
                     {{$content->name}}
                    </option>
                @endforeach
            </select>
            @error('content_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội Dung</label>
            <textarea id="content" name="content"  rows="5" required>{{ old('content') }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('admin.content_detail.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection