@extends('template')

@section('title', '中途採用エントリーフォーム')

@section('title-area')
    <h1 class="contents-main-title">中途採用エントリーフォーム</h1>
    <span class="contents-sub-title">ENTRY FORM</span>
@endsection

@section('main-area')
    <div class="heading-texts">
        <p>以下の入力内容をご確認いただき、入力内容に間違えがなければ<span>「送信する」</span>ボタンをクリックして下さい。
            <br />訂正する場合は<span>「入力内容を修正」</span>ボタンをクリックしてください。
        </p>
    </div>

    <h2 class="entry-form-title">プロフィール情報の入力</h2>

    <form name="form" method="post" id="form" action="{{ route('mid-career.complete') }}">
        @csrf

        {{-- プロフィール --}}
        <input name="profile[last_name]" type="hidden" value="{{ $data['profile']['last_name'] }}" />
        <input name="profile[first_name]" type="hidden" value="{{ $data['profile']['first_name'] }}" />
        <input name="profile[last_name_kana]" type="hidden" value="{{ $data['profile']['last_name_kana'] }}" />
        <input name="profile[first_name_kana]" type="hidden" value="{{ $data['profile']['first_name_kana'] }}" />
        <input name="profile[school_name]" type="hidden" value="{{ $data['profile']['school_name'] }}" />
        <input name="profile[sex]" type="hidden" value="{{ $data['profile']['sex'] }}" />
        <input name="profile[birthday_year]" type="hidden" value="{{ $data['profile']['birthday_year'] }}" />
        <input name="profile[birthday_month]" type="hidden" value="{{ $data['profile']['birthday_month'] }}" />
        <input name="profile[birthday_day]" type="hidden" value="{{ $data['profile']['birthday_day'] }}" />
        <input name="profile[email]" type="hidden" value="{{ $data['profile']['email'] }}" />
        <input name="profile[_face][base64]" type="hidden" value="{{ $data['profile']['_face']['base64'] }}" />
        <input name="profile[_face][mime]" type="hidden" value="{{ $data['profile']['_face']['mime'] }}" />

        {{-- 住所 --}}
        <input name="address[zip1]" type="hidden" value="{{ $data['address']['zip1'] }}" />
        <input name="address[zip2]" type="hidden" value="{{ $data['address']['zip2'] }}" />
        <input name="address[pref]" type="hidden" value="{{ $data['address']['pref'] }}" />
        <input name="address[addr1]" type="hidden" value="{{ $data['address']['addr1'] }}" />
        <input name="address[addr2]" type="hidden" value="{{ $data['address']['addr2'] }}" />
        <input name="address[tel]" type="hidden" value="{{ $data['address']['tel'] }}" />
        <input name="address[mobile]" type="hidden" value="{{ $data['address']['mobile'] }}" />
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

        {{-- 学歴・職歴 --}}
        @for ($i = 1; $i <= 14; $i++)
            <input name="careers[{{ $i }}][year]" type="hidden"
                value="{{ $data['careers'][$i]['year'] }}" />
            <input name="careers[{{ $i }}][month]" type="hidden"
                value="{{ $data['careers'][$i]['month'] }}" />
            <input name="careers[{{ $i }}][content]" type="hidden"
                value="{{ $data['careers'][$i]['content'] }}" />
        @endfor

        {{-- 免許・資格 --}}
        @for ($i = 1; $i <= 5; $i++)
            <input name="licenses[{{ $i }}][year]" type="hidden"
                value="{{ $data['licenses'][$i]['year'] }}" />
            <input name="licenses[{{ $i }}][month]" type="hidden"
                value="{{ $data['licenses'][$i]['month'] }}" />
            <input name="licenses[{{ $i }}][content]" type="hidden"
                value="{{ $data['licenses'][$i]['content'] }}" />
        @endfor

        {{-- 賞罰 --}}
        @for ($i = 1; $i <= 4; $i++)
            <input name="rewards[{{ $i }}][year]" type="hidden"
                value="{{ $data['rewards'][$i]['year'] }}" />
            <input name="rewards[{{ $i }}][month]" type="hidden"
                value="{{ $data['rewards'][$i]['month'] }}" />
            <input name="rewards[{{ $i }}][content]" type="hidden"
                value="{{ $data['rewards'][$i]['content'] }}" />
        @endfor

        {{-- 身上書 --}}
        <input name="personal_statement[reason]" type="hidden" value="{{ $data['personal_statement']['reason'] }}" />
        <input name="personal_statement[strength]" type="hidden"
            value="{{ $data['personal_statement']['strength'] }}" />
        <input name="personal_statement[weakness]" type="hidden"
            value="{{ $data['personal_statement']['weakness'] }}" />
        <input name="personal_statement[attitude]" type="hidden"
            value="{{ $data['personal_statement']['attitude'] }}" />
        @for ($i = 1; $i <= 6; $i++)
            <input name="personal_statement[favorite_subject{{ $i }}]" type="hidden"
                value="{{ $data['personal_statement']['favorite_subject' . $i] }}" />
        @endfor
        <input name="personal_statement[favorite_subject_level]" type="hidden"
            value="{{ $data['personal_statement']['favorite_subject_level'] }}" />
        <input name="personal_statement[sport]" type="hidden" value="{{ $data['personal_statement']['sport'] }}" />
        <input name="personal_statement[hobby]" type="hidden" value="{{ $data['personal_statement']['hobby'] }}" />
        <input name="personal_statement[desire]" type="hidden" value="{{ $data['personal_statement']['desire'] }}" />
        @for ($i = 1; $i <= 6; $i++)
            <input name="personal_statement[family][{{ $i }}][name]" type="hidden"
                value="{{ $data['personal_statement']['family'][$i]['name'] }}" />
            <input name="personal_statement[family][{{ $i }}][relationship]" type="hidden"
                value="{{ $data['personal_statement']['family'][$i]['relationship'] }}" />
            <input name="personal_statement[family][{{ $i }}][age]" type="hidden"
                value="{{ $data['personal_statement']['family'][$i]['age'] }}" />
            <input name="personal_statement[family][{{ $i }}][work]" type="hidden"
                value="{{ $data['personal_statement']['family'][$i]['work'] }}" />
            <input name="personal_statement[family][{{ $i }}][living]" type="hidden"
                value="{{ $data['personal_statement']['family'][$i]['living'] }}" />
        @endfor
        <input name="personal_statement[commute_hour]" type="hidden"
            value="{{ $data['personal_statement']['commute_hour'] }}" />
        <input name="personal_statement[commute_minute]" type="hidden"
            value="{{ $data['personal_statement']['commute_minute'] }}" />
        <input name="personal_statement[dependents]" type="hidden"
            value="{{ $data['personal_statement']['dependents'] }}" />
        <input name="personal_statement[spouse]" type="hidden" value="{{ $data['personal_statement']['spouse'] }}" />

        <div class="form-box clearfix">
            <h3>プロフィール情報</h3>
            <x-mid-career-entry.profile-confirm :data="$data['profile']" />
        </div>

        <div class="form-box clearfix">
            <h3>住所情報</h3>
            <x-mid-career-entry.address-confirm name="address" :data="$data['address']">
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
            </x-mid-career-entry.address-confirm>
        </div>

        <div class="form-box clearfix">
            <h3>帰省先住所</h3>
            @if (array_key_exists('same_addr', $data['home']))
                <p style="padding: 20px;">{{ $data['home']['same_addr'] }}</p>
            @else
                <x-mid-career-entry.address-confirm name="home" :data="$data['home']" />
            @endif
        </div>

        <div class="form-box clearfix">
            <h3>学歴・職歴</h3>
            <x-mid-career-entry.resume-confirm count="14" name="careers" :data="$data['careers']" />
        </div>

        <div class="form-box clearfix">
            <h3>免許・資格</h3>
            <x-mid-career-entry.resume-confirm count="5" name="licenses" :data="$data['licenses']" />
        </div>

        <div class="form-box clearfix">
            <h3>賞罰</h3>
            <x-mid-career-entry.resume-confirm count="4" name="rewards" :data="$data['rewards']" />
        </div>

        <div class="form-box clearfix">
            <h3>身上書</h3>
            <x-mid-career-entry.personal-statement-confirm :data="$data['personal_statement']" />
        </div>

        <div class="form-footer">
            <button type="submit" formaction="{{ route('mid-career.back') }}">
                <span>入力内容を修正</span>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </button>
            <button type="submit">
                <span>送信する</span>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
        </div>

    </form>

    <style>
        td {
            word-break: break-word;
        }
    </style>
@endsection
