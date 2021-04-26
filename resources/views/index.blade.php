@extends('layouts.app')

@section('content')
<div class="main_container">
    <div class="main_left">
        <div class="main_left_container">
            <div class="create_area">
                <a href="{{ route('create') }}" class="button-create">定型文を作成する</a>
            </div><!-- /.create_area -->
            <div class="list-group">
            @foreach($templates as $template)
                <a href="{{ route('show',['id' => $template->id]) }}" class="list-group-item {{ $current_template_id === $template->id ? 'active' : '' }}">
                {{ $template->title }}
                </a>
            @endforeach
            </div><!-- /.list-group -->
        </div><!-- /.main_left_container -->
    </div><!-- /.main_left -->
    <div class="main_right">
        <div class="right_header">
            <button class="btn-copy modal1" onclick="copy()">COPY</button>
            <a href="{{ route('edit',['id' => $template_id]) }}" class="buttons btn-edit" name="content">編集</a>
            <a href="{{ route('delete',['id' => $template_id]) }}" class="buttons btn-delete" name="content" onClick="delete_alert(event);return false;">削除</a>
        </div><!-- /.right_header -->
        <div class="template_area">
            <textarea>{{ $template_id->content }}</textarea>
        </div><!-- /.template_area -->
    </div><!-- /.main_right -->
</div><!-- /.main_container -->

@endsection