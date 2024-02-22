<table class="entry-table profile-table">
    <tr>
        <th>氏 名</th>
        <td class="form-input-name">
            <div>
                <span>氏</span>
                <input type="text" name="profile[last_name]" value="" class="input-text-s">
            </div>
            <div>
                <span>名</span>
                <input type="text" name="profile[first_name]" value="" class="input-text-s">
            </div>
        </td>
    </tr>
    <tr>
        <th>フリガナ</th>
        <td class="form-input-name">
            <div>
                <span>シ</span>
                <input type="text" name="profile[last_name_kana]" value="" class="input-text-s">
            </div>
            <div>
                <span>メイ</span>
                <input type="text" name="profile[first_name_kana]" value="" class="input-text-s">
            </div>
        </td>
    </tr>
    <tr>
        <th>学校名</th>
        <td class="form-input-wide">
            <div>
                <input type="text" name="profile[school_name]" value="" class="input-text-l">
            </div>
        </td>
    </tr>
    <tr>
        <th>卒業年月日</th>
        <td class="form-input-radio">
            <div>
                <label>
                    <input type="radio" name="profile[graduation_date]" value="1">
                    <span>既卒</span></label>
            </div>
            <div>
                <label>
                    <input type="radio" name="profile[graduation_date]" value="2025">
                    <span>2025年3月卒業見込み</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="profile[graduation_date]" value="2026">
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
                    <input type="radio" value="1" name="profile[sex]">
                    <span>男性</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" value="2" name="profile[sex]">
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
                        <option>{{ $year }}</option>
                    @endfor
                </select>
                <span>年</span>
            </div>
            <div>
                <select name="profile[birthday_month]">
                    @for ($month = 1; $month <= 12; $month++)
                        <option>{{ $month }}</option>
                    @endfor
                </select>
                <span>月</span>
            </div>
            <div>
                <select name="profile[birthday_day]">
                    @for ($day = 1; $day <= 31; $day++)
                        <option>{{ $day }}</option>
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
                <input type="text" name="profile[email]" value="" class="input-text-l">
            </div>
        </td>
    </tr>
</table>
