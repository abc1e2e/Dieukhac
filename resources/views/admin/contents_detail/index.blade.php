@extends('layouts.admin')
@section('content')
    <h1>Quản lý danh mục</h1>

    <a href="{{ route('admin.content_detail.create') }}" class="btn btn-primary">Thêm danh mục</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                {{-- <th>Name</th> --}}
                <th>Content</th>
                <th>Content_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    {{-- <td>{{ $content->name }}</td> --}}
                    <td>{{ $content->content }}</td>
                    <td>{{ $content->content_id }}</td>
                    <td>
                        <a href="{{ route('admin.content_detail.edit', $content->id) }}" class="btn btn-edit">Sửa</a>
                        <form action="{{ route('admin.content_detail.destroy', $content->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-button">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $contents->links('pagination') }}
    </div>
@endsection