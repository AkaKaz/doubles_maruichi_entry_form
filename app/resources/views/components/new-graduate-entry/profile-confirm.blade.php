@props(['data' => []])

<table class="entry-table profile-table">
    <tr>
        <th>氏 名</th>
        <td class="form-input-name">
            {{ $data['last_name'] }}
            {{ $data['first_name'] }}
        </td>
    </tr>
    <tr>
        <th>フリガナ</th>
        <td class="form-input-name">
            {{ $data['last_name_kana'] }}
            {{ $data['first_name_kana'] }}
        </td>
    </tr>
    <tr>
        <th>学校名</th>
        <td class="form-input-wide">
            {{ $data['school_name'] }}
        </td>
    </tr>
    <tr>
        <th>卒業年月日</th>
        <td class="form-input-radio">
            {{ $data['graduation_date'] }}
        </td>
    </tr>
    <tr>
        <th>性 別</th>
        <td class="form-input-radio">
            {{ $data['sex'] }}
        </td>
    </tr>
    <tr>
        <th>生年月日</th>
        <td>{{ $data['birthday_year'] }} 年 {{ $data['birthday_month'] }} 月
            {{ $data['birthday_day'] }} 日</td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td class="form-input-wide">
            {{ $data['email'] }}
        </td>
    </tr>
    <tr>
        <th>顔写真</th>
        <td class="form-input-wide">
            <img src="data:{{ $data['_face']['mime'] }};base64,{{ $data['_face']['base64'] }}" alt="顔写真">
        </td>
    </tr>
</table>
