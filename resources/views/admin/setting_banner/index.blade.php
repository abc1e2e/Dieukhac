@extends('layouts.admin')
@section('content')
    <h1>Quản lý Banner</h1>

    {{-- <a href="{{ route('admin.setting_banner.create') }}" class="btn btn-primary">Thêm Banner</a> --}}

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image_URl</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($setting_banner as $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>{{ $banner->image }}</td>
                    <td>
                        <a href="{{ route('admin.setting_banner.edit', $banner->id) }}" class="btn btn-edit">Sửa</a>
                        <form action="{{ route('admin.setting_banner.destroy', $banner->id) }}" method="POST" style="display:inline-block;">
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
        {{ $setting_banner->links('pagination') }}
    </div>
@endsection