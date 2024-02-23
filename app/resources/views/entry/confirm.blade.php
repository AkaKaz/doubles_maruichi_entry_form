@extends('template')

@section('title-area')
    <h1 class="contents-main-title">新卒採用エントリーフォーム</h1>
    <span class="contents-sub-title">ENTRY FORM</span>
@endsection

@section('main-area')
    <div class="heading-texts">
        <p>以下の入力内容をご確認いただき、入力内容に間違えがなければ<span>「送信する」</span>ボタンをクリックして下さい。
            <br />訂正する場合は<span>「入力内容を修正」</span>ボタンをクリックしてください。
        </p>
    </div>

    <h2 class="entry-form-title">プロフィール情報の入力</h2>

    <form name="form" method="post" id="form" action="complete">
        @csrf

        {{-- プロフィール --}}
        <input name="profile[last_name]" type="hidden" value="{{ $data['profile']['last_name'] }}" />
        <input name="profile[first_name]" type="hidden" value="{{ $data['profile']['first_name'] }}" />
        <input name="profile[last_name_kana]" type="hidden" value="{{ $data['profile']['last_name_kana'] }}" />
        <input name="profile[first_name_kana]" type="hidden" value="{{ $data['profile']['first_name_kana'] }}" />
        <input name="profile[school_name]" type="hidden" value="{{ $data['profile']['school_name'] }}" />
        <input name="profile[graduation_date]" type="hidden" value="{{ $data['profile']['graduation_date'] }}" />
        <input name="profile[sex]" type="hidden" value="{{ $data['profile']['sex'] }}" />
        <input name="profile[birthday_year]" type="hidden" value="{{ $data['profile']['birthday_year'] }}" />
        <input name="profile[birthday_month]" type="hidden" value="{{ $data['profile']['birthday_month'] }}" />
        <input name="profile[birthday_day]" type="hidden" value="{{ $data['profile']['birthday_day'] }}" />
        <input name="profile[email]" type="hidden" value="{{ $data['profile']['email'] }}" />

        {{-- 住所 --}}
        <input name="address[zip1]" type="hidden" value="{{ $data['address']['zip1'] }}" />
        <input name="address[zip2]" type="hidden" value="{{ $data['address']['zip2'] }}" />
        <input name="address[pref]" type="hidden" value="{{ $data['address']['pref'] }}" />
        <input name="address[addr1]" type="hidden" value="{{ $data['address']['addr1'] }}" />
        <input name="address[addr2]" type="hidden" value="{{ $data['address']['addr2'] }}" />
        <input name="address[tel]" type="hidden" value="{{ $data['address']['tel'] }}" />
        <input name="address[contact_method]" type="hidden" value="{{ $data['address']['contact_method'] }}" />
        <input name="address[other_contact_method]" type="hidden"
            value="{{ $data['address']['other_contact_method'] }}" />
        <input name="address[contact_time]" type="hidden" value="{{ $data['address']['contact_time'] }}" />

        {{-- 帰省先 --}}
        @if (array_key_exists('same_addr', $data['home']))
            <input name="home[same_addr]" type="hidden" value="{{ $data['home']['same_addr'] }}" />
        @endif
        <input name="home[zip1]" type="hidden" value="{{ $data['home']['zip1'] }}" />
        <input name="home[zip2]" type="hidden" value="{{ $data['home']['zip2'] }}" />
        <input name="home[pref]" type="hidden" value="{{ $data['home']['pref'] }}" />
        <input name="home[addr1]" type="hidden" value="{{ $data['home']['addr1'] }}" />
        <input name="home[addr2]" type="hidden" value="{{ $data['home']['addr2'] }}" />
        <input name="home[tel]" type="hidden" value="{{ $data['home']['tel'] }}" />

        <div class="form-box clearfix">
            <h3>プロフィール情報</h3>
            <x-entry.profile-confirm :data="$data['profile']" />
        </div>

        <div class="form-box clearfix">
            <h3>住所情報</h3>
            <x-entry.address-confirm name="address" :data="$data['address']">
                <x-slot:foot>
                    <tr>
                        <th>連絡方法</th>
                        <td class="form-input-radio">
                            {{ $data['address']['contact_method'] }}
                            @if ($data['address']['contact_method'] === 'その他')
                                （{{ $data['address']['other_contact_method'] }}）
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>連絡可能時間帯</th>
                        <td class="form-input-wide">
                            <div>
                                {{ $data['address']['contact_time'] }}
                            </div>
                        </td>
                    </tr>
                </x-slot:foot>
            </x-entry.address-confirm>
        </div>

        <div class="form-box clearfix">
            <h3>帰省先住所</h3>
            @if (array_key_exists('same_addr', $data['home']))
                <p style="padding: 20px;">{{ $data['home']['same_addr'] }}</p>
            @else
                <x-entry.address-confirm name="home" :data="$data['home']" />
            @endif
        </div>

        <div class="form-footer">
            <button type="submit" formaction="/back">
                <span>入力内容を修正</span>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </button>
            <button type="submit">
                <span>送信する</span>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
        </div>

    </form>
@endsection