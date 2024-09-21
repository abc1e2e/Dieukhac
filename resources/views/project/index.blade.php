@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/project.css') }}">
@endsection

@section('title', 'Project Page')

@section('content')
    <div class="project_bg_1 mb-20">
        <div class="container ">
            <h2 class="project_h2">
                Danh sách dự án
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="project_grid_img">
            @foreach ( $posts as $key => $value)
                <div class="project_img">
                    <a href="{{ route('project.detail',['id' => $value->id ]) }}"> <img src="{{ Storage::url($value->image_main) }}" alt="image_project_{{ $key }}"> </a>
                    <p>{{ $value->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        {{ $posts->links('pagination') }}
    </div>
@endsection