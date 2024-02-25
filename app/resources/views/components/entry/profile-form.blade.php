<table class="entry-table profile-table">
    <tr>
        <th>氏 名</th>
        <td class="form-input-name">
            <div>
                <span>氏</span>
                <input type="text" name="profile[last_name]" value="{{ old('profile.last_name') }}" class="input-text-s">
            </div>
            <div>
                <span>名</span>
                <input type="text" name="profile[first_name]" value="{{ old('profile.first_name') }}"
                    class="input-text-s">
            </div>
        </td>
    </tr>
    <tr>
        <th>フリガナ</th>
        <td class="form-input-name">
            <div>
                <span>シ</span>
                <input type="text" name="profile[last_name_kana]" value="{{ old('profile.last_name_kana') }}"
                    class="input-text-s">
            </div>
            <div>
                <span>メイ</span>
                <input type="text" name="profile[first_name_kana]" value="{{ old('profile.first_name_kana') }}"
                    class="input-text-s">
            </div>
        </td>
    </tr>
    <tr>
        <th>学校名</th>
        <td class="form-input-wide">
            <div>
                <input type="text" name="profile[school_name]" value="{{ old('profile.school_name') }}"
                    class="input-text-l">
            </div>
        </td>
    </tr>
    <tr>
        <th>卒業年月日</th>
        <td class="form-input-radio">
            <div>
                <label>
                    <input type="radio" name="profile[graduation_date]" value="既卒"
                        {{ old('profile.graduation_date') == '既卒' ? 'checked' : '' }}>
                    <span>既卒</span></label>
            </div>
            <div>
                <label>
                    <input type="radio" name="profile[graduation_date]" value="2025年3月卒業見込み"
                        {{ old('profile.graduation_date') == '2025年3月卒業見込み' ? 'checked' : '' }}>
                    <span>2025年3月卒業見込み</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="profile[graduation_date]" value="2026年3月卒業見込み"
                        {{ old('profile.graduation_date') == '2026年3月卒業見込み' ? 'checked' : '' }}>
                    <span>2026年3月卒業見込み</span>
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <th>性 別</th>
        <td class="form-input-radio">
            <div>
                <label>
                    <input type="radio" value="男性" name="profile[sex]"
                        {{ old('profile.sex') == '男性' ? 'checked' : '' }}>
                    <span>男性</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" value="女性" name="profile[sex]"
                        {{ old('profile.sex') == '女性' ? 'checked' : '' }}>
                    <span>女性</span>
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <th>生年月日</th>
        <td>
            <div>
                <select name="profile[birthday_year]">
                    @for ($year = 1964; $year <= 2023; $year++)
                        <option {{ old('profile.birthday_year') === "$year" ? 'selected' : '' }}>
                            {{ $year }}
                        </option>
                    @endfor
                </select>
                <span>年</span>
            </div>
            <div>
                <select name="profile[birthday_month]">
                    @for ($month = 1; $month <= 12; $month++)
                        <option {{ old('profile.birthday_month') === "$month" ? 'selected' : '' }}>
                            {{ $month }}
                        </option>
                    @endfor
                </select>
                <span>月</span>
            </div>
            <div>
                <select name="profile[birthday_day]">
                    @for ($day = 1; $day <= 31; $day++)
                        <option {{ old('profile.birthday_day') === "$day" ? 'selected' : '' }}>
                            {{ $day }}
                        </option>
                    @endfor
                </select>
                <span>日</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td class="form-input-wide">
            <div>
                <input type="text" name="profile[email]" value="{{ old('profile.email') }}" class="input-text-l">
            </div>
        </td>
    </tr>
    <tr>
        <th>顔写真</th>
        <td class="form-input-wide">
            <div>
                <input type="file" accept="image/png,imgage/jpeg,image/bmp" name="profile[face]"
                    class="input-text-l">
                @if (old('profile._face.base64'))
                    <input type="hidden" name="profile[_face][mime]" value="{{ old('profile._face.mime') }}">
                    <input type="hidden" name="profile[_face][base64]" value="{{ old('profile._face.base64') }}">
                @endif
            </div>
        </td>
    </tr>
</table>
