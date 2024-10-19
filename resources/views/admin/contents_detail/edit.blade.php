@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Chỉnh Sửa Nội Dung</h1>
    <form action="{{ route('admin.content_detail.update', $content_detail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="content_id" class="form-label">Bài viết</label>
            <select id="content_id" name="content_id" class="form-control" required>
                @foreach($contents as $content)
                    <option value="{{ $content->id }}" {{ old('content_id', $content_detail->content_id) == $content->id  ? 'selected' : '' }}>
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
            <textarea id="content" name="content"  rows="5" required>{{  old('content', $content_detail->content) }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('admin.content_detail.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection