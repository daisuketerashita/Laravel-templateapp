@extends('layouts.app')

@section('content')
<div class="main_container">
    <div class="main_left">
        <div class="main_left_container">
            <div class="create_area">
                <a href="{{ route('create') }}" class="button-create">テンプレートを作成する</a>
            </div><!-- /.create_area -->
            <div class="list-group">
            @foreach($templates as $template)
                <a href="{{ route('show',['id' => $template->id]) }}" class="list-group-item">
                {{ $template->title }}
                </a>
            @endforeach
            </div><!-- /.list-group -->
        </div><!-- /.main_left_container -->
    </div><!-- /.main_left -->
    <div class="main_right">
        <div class="right_header">
            <button class="btn-copy modal1">COPY</button>
        </div><!-- /.right_header -->
        <div class="template_area">
            <textarea></textarea>
        </div><!-- /.template_area -->
    </div><!-- /.main_right -->
</div><!-- /.main_container -->
@endsection
