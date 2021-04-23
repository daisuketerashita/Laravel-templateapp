@extends('layouts.app')

@section('content')
<div class="main_container">
    <div class="template_create">
        <div class="create_header">定型文を編集する</div><!-- /.create_header -->
            <div class="create_form">
                <div class="alert_area">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                </div><!-- /.alert_area -->
            <form action="{{ route('update',[$template_id->id]) }}" method="post">
            @csrf
                <div class="form_group">
                <p><label class="create_title">タイトル</label></p>
                <input type="text" class="form_control" name="title" value="{{ $template_id->title }}">
                <p><label class="create_content">定型文</label></p>
                <textarea class="form_control" name="content" id="content" value="" style="resize: none;height:360px;">{{ $template_id->content }}</textarea>
                </div>
                <div class="create_submit">
                    <a href="{{ route('topapp') }}" class="btn_back">戻る</a>
                    <button type="submit" class="btn-register">登録</button>
                </div>
            </form>
        </div><!-- /.create_form -->
    </div><!-- /.template_create -->
</div><!-- /.main_container -->
@endsection
