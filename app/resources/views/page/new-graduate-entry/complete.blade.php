@extends('template')

@section('title', '新卒採用エントリーフォーム')

@section('head')
    <style>
        .form-container {
            min-height: 120px;
        }

        #main {
            height: 290px;
        }
    </style>
@endsection

@section('title-area')
    <h1 class="contents-main-title">新卒採用エントリーフォーム</h1>
    <span class="contents-sub-title">ENTRY FORM</span>
@endsection

@section('main-area')
    <div class="heading-texts">
        <p>ご応募ありがとうございます。<br>後ほど担当者よりご連絡させていただきますので、暫くお待ちください。</p>
    </div>
@endsection
