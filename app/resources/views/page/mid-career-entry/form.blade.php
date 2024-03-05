@extends('template')

@section('title', '中途採用エントリーフォーム')

@section('head')
    <style>
        .hide-address-form tr:not(:first-child) {
            display: none;
        }
    </style>
    <script>
        function changeHomeAddress(value) {
            const homeForm = document.getElementById('home-form');
            if (value.checked)
                homeForm.classList.add('hide-address-form');
            else
                homeForm.classList.remove('hide-address-form');
        }

        function changeEmergencyAddress(value) {
            const emergencyForm = document.getElementById('emergency-form');
            if (value.checked)
                emergencyForm.classList.add('hide-address-form');
            else
                emergencyForm.classList.remove('hide-address-form');
        }
    </script>
@endsection

@section('title-area')
    <h1 class="contents-main-title">中途採用エントリーフォーム</h1>
    <span class="contents-sub-title">ENTRY FORM</span>
@endsection

@section('main-area')
    <div class="heading-texts">
        <p>下記のエントリーシートに応募情報を入力し、<span>「入力内容を確認」</span>ボタンをクリックしてください。<br>
            採用において収集される応募者の個人情報について、応募エントリーいただいた皆様のプライバシーを尊重し、<br>
            個人情報を保護するために細心の注意を払い厳重に管理しております。</p>

        <p>詳しくは「<a href="https://www.maruichi-yg.com/recruit/privacy-policy/">個人情報保護方針について</a>」をご確認ください。</p>
    </div>

    <h2 class="entry-form-title">プロフィール情報の入力</h2>
    <p class="entry-form-attention">※全ての項目が入力必須項目となります。</p>

    <form name="form" method="post" id="form" action="{{ route('mid-career.confirm') }}" enctype="multipart/form-data">
        @csrf

        <style>
            .err {
                text-align: left;
                color: #c00;
                line-height: 1.5;
                margin-bottom: 1.5em;
            }
        </style>

        @if ($errors->any())
            <ul class="err">
                @if ($errors->has('error_message'))
                    <li>{{ $errors->first('error_message') }}</li>
                    <li></li>
                @endif

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="form-box clearfix">

            <h3>プロフィール情報</h3>

            <x-mid-career-entry.profile-form />
        </div>

        <div class="form-box clearfix">

            <h3>住所情報</h3>

            <x-mid-career-entry.address-form name="address">
                <x-slot:foot>
                    <tr>
                        <th>携帯電話</th>
                        <td class="form-input-wide">
                            <div>
                                <input type="text" name="address[mobile]" class="input-text-l" maxlength="20"
                                    value="{{ old('address.mobile') }}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>連絡方法</th>
                        <td class="form-input-radio">
                            <div>
                                <label>
                                    <input type="radio" value="電話" name="address[contact_method]"
                                        {{ old('address.contact_method') == '電話' ? 'checked' : '' }}>
                                    <span>電話</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" value="休暇中連絡先への電話" name="address[contact_method]"
                                        {{ old('address.contact_method') == '休暇中連絡先への電話' ? 'checked' : '' }}>
                                    <span>休暇中連絡先への電話</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" value="その他" name="address[contact_method]"
                                        {{ old('address.contact_method') == 'その他' ? 'checked' : '' }}>
                                    <span>その他</span>
                                </label>
                                <input type="text" name="address[other_contact_method]"
                                    value="{{ old('address.other_contact_method') }}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>連絡可能時間帯</th>
                        <td class="form-input-wide">
                            <div>
                                <input type="text" name="address[contact_time]" class="input-text-l"
                                    value="{{ old('address.contact_time') }}">
                                <span class="form-table-caption">例：9:00～17：00</span>
                            </div>
                        </td>
                    </tr>
                </x-slot>
            </x-mid-career-entry.address-form>
        </div>


        <div id="home-form" class="form-box clearfix {{ old('home.same_addr') ? 'hide-address-form' : '' }}">

            <h3>帰省先住所</h3>

            <x-mid-career-entry.address-form name="home">
                <x-slot:head>
                    <tr>
                        <td colspan="2" class="form-input-check">
                            <div>現住所と異なる場合は入力して下さい。現住所と同様の場合はチェックして下さい。</div>
                            <div>
                                <label>
                                    <input class="ha" type="checkbox" name="home[same_addr]" value="現住所と同じ"
                                        onchange="changeHomeAddress(this)" {{ old('home.same_addr') ? 'checked' : '' }}>
                                    <span>現住所と同じ</span>
                                </label>
                            </div>
                        </td>
                    </tr>
                </x-slot>
            </x-mid-career-entry.address-form>
        </div>

        <div id="emergency-form" class="form-box clearfix {{ old('emergency.same_addr') ? 'hide-address-form' : '' }}">

            <h3>緊急連絡先</h3>

            <x-mid-career-entry.address-form name="emergency">
                <x-slot:head>
                    <tr>
                        <td colspan="2" class="form-input-check">
                            <div>現住所と異なる場合は入力して下さい。現住所と同様の場合はチェックして下さい。</div>
                            <div>
                                <label>
                                    <input class="ha" type="checkbox" name="emergency[same_addr]" value="現住所と同じ"
                                        onchange="changeemergencyAddress(this)"
                                        {{ old('emergency.same_addr') ? 'checked' : '' }}>
                                    <span>現住所と同じ</span>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <td class="form-input-wide">
                            <div>
                                <input type="text" name="emergency[name]" class="input-text-l" maxlength="14"
                                    value="{{ old('emergency.name') }}">
                            </div>
                        </td>
                    </tr>
                </x-slot>
            </x-mid-career-entry.address-form>
        </div>

        <div class="form-box clearfix">
            <h3>学歴・職歴</h3>
            <x-mid-career-entry.resume-form count="14" name="careers">
                <x-slot:head>
                    <tr>
                        <td colspan="2" class="form-input-check">
                            <div>
                                各別にまとめて記入する
                            </div>
                        </td>
                    </tr>
                </x-slot>
            </x-mid-career-entry.resume-form>
        </div>

        <div class="form-box clearfix">
            <h3>免許・資格</h3>
            <x-mid-career-entry.resume-form count="5" name="licenses" />
        </div>

        <div class="form-box clearfix">
            <h3>賞罰</h3>
            <x-mid-career-entry.resume-form count="4" name="rewards" />
        </div>

        <div class="form-box clearfix">
            <h3>身上書</h3>
            <x-mid-career-entry.personal-statement-form />
        </div>

        <div class="form-footer">
            <button type="reset" formaction="{{ route('mid-career.index') }}" formmethod="GET">
                <span>入力内容をクリア</span>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </button>
            <button type="submt">
                <span>入力内容を確認</span>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
        </div>

    </form>
@endsection
