@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>お問い合わせ（確認）</h1>
        <br>
        <table class="table">
            <tr>
                <th>お名前</th>
                <td>{{ $inputs['name'] }}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $inputs['email'] }}</td>
            </tr>
            <tr>
                <th>件名</th>
                <td>{{ $inputs['subject'] }}</td>
            </tr>
            <tr>
                <th>内容</th>
                <td>{!! nl2br(e($inputs['message'])) !!}</td>
            </tr>
        </table>
        <form action="{{ route('mailform.sendmail') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="name" value="{{ $inputs['name'] }}">
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">
            <input type="hidden" name="subject" value="{{ $inputs['subject'] }}">
            <input type="hidden" name="message" value="{{ $inputs['message'] }}">
            <a href="{{ route('mailform.contact') }}" class="btn btn-default">戻る</a>
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    </div>
</div>
@endsection
