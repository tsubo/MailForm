@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>お問い合わせ</h1>
        <br>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('mailform.confirm') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group @if($errors->has('name')) has-error @endif">
                <label for="name">お名前</label>
                <input type="text" class="form-control" name="name"
                       placeholder="鈴木一朗"
                       value="{{ old('name', $inputs['name']) }}">
                <span class="help-block">{{ $errors->first('name') }}</span>
            </div>
            <div class="form-group @if($errors->has('email')) has-error @endif">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control" name="email"
                       placeholder="youremail@domain.com"
                       value="{{ old('email', $inputs['email']) }}">
                <span class="help-block">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group @if($errors->has('email_confirm')) has-error @endif">
                <label for="email_confirm">メールアドレス（確認）</label>
                <input type="email" class="form-control" name="email_confirm"
                       placeholder="youremail@domain.com"
                       value="{{ old('email_confirm', $inputs['email_confirm']) }}">
                <span class="help-block">{{ $errors->first('email_confirm') }}</span>
            </div>
            <div class="form-group @if($errors->has('subject')) has-error @endif">
                <label for="subject">件名</label>
                <input type="text" class="form-control" name="subject"
                       placeholder="お問い合わせの件"
                       value="{{ old('subject', $inputs['subject']) }}">
                <span class="help-block">{{ $errors->first('subject') }}</span>
            </div>
            <div class="form-group @if($errors->has('message')) has-error @endif">
                <label for="message">内容</label>
                <textarea class="form-control" name="message" rows="10">{{ old('message', $inputs['message']) }}</textarea>
                <span class="help-block">{{ $errors->first('message') }}</span>
            </div>
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    </div>
</div>
@endsection
