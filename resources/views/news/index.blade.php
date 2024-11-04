@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/new.css') }}">
@endsection

@section('title', 'Tin Tức')

@section('content')
    <div class="new_bg_1 mb-20">
        <div class="container ">
            <h2 class="new_h2">
                Tin Tức
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="new_grid_img">
            @foreach ( $posts as $key => $value)
                <div class="project_img">
                    <a href ="{{ route('news.detail',['id' => $value->id ]) }}" ><img src="{{ Storage::url($value->image_main) }}" alt="image_new_{{ $key }}"></a>
                    <p>{{ $value->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        {{ $posts->links('pagination') }}
    </div>
@endsection