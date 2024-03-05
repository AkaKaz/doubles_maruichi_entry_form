{{-- blade-formatter-disable --}}
中途採用エントリーフォームから新しいエントリーがありました。
ご連絡してください。

【プロフィール情報】
　氏名： {{ $data['profile']['last_name'] }} {{ $data['profile']['first_name'] }}
　フリガナ： {{ $data['profile']['last_name_kana'] }} {{ $data['profile']['first_name_kana'] }}
　学校名： {{ $data['profile']['school_name'] }}
　卒業年月日： {{ $data['profile']['graduation_date'] }}
　性別： {{ $data['profile']['sex'] }}
　生年月日： {{ $data['profile']['birthday_year'] }}/{{ $data['profile']['birthday_month'] }}/{{ $data['profile']['birthday_day'] }}
　メールアドレス： {{ $data['profile']['email'] }}

【住所情報】
　郵便番号： {{ $data['address']['zip1'] }}-{{ $data['address']['zip2'] }}
　都道府県： {{ $data['address']['pref'] }}
　住所１： {{ $data['address']['addr1'] }}
　住所２： {{ $data['address']['addr2'] }}
　電話番号： {{ $data['address']['tel'] }}
　連絡方法： {{ $data['address']['contact_method'] }}
　連絡方法(その他)： {{ $data['address']['other_contact_method'] }}
　連絡可能時間帯： {{ $data['address']['contact_time'] }}

【帰省先住所】
@if (array_key_exists('same_addr', $data['home']))
　{{ $data['home']['same_addr'] }}
@else
　郵便番号： {{ $data['home']['zip1'] }}-{{ $data['home']['zip2'] }}
　都道府県： {{ $data['home']['pref'] }}
　住所１： {{ $data['home']['addr1'] }}
　住所２： {{ $data['home']['addr2'] }}
　電話番号： {{ $data['home']['tel'] }}
@endif

※自動配信です。このメールには返信できません。
{{-- blade-formatter-enable --}}
