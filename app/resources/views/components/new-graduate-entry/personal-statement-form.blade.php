<table class="entry-table profile-table">
    <tr>
        <th>志望の動機</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[reason]" class="input-text-l" maxlength="120">{{ old('personal_statement.reason') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>当社を知ったきっかけ・メディア媒体</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[learned_about]" class="input-text-l" maxlength="120">{{ old('personal_statement.learned_about') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>セールスポイント</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[strength]" class="input-text-l" maxlength="120">{{ old('personal_statement.strength') }}</textarea>
                <span class="form-table-caption">※長所を含め自覚する特筆事項</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>ウイークポイント</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[weakness]" class="input-text-l" maxlength="120">{{ old('personal_statement.weakness') }}</textarea>
                <span class="form-table-caption">※短所を含め自覚する苦手な事項</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>学生時代に力を注いだこと</th>
        <td class="form-input-wide">
            <textarea name="personal_statement[focused]" class="input-text-l" maxlength="120">{{ old('personal_statement.focused') }}</textarea>
        </td>
    </tr>
    <tr>
        <th rowspan="7">得意な学科</th>
        <td class="form-input-wide">
            <div>
                <span class="form-table-caption">※得意順に選んでください</span>
            </div>
        </td>
    </tr>
    @for ($i = 1; $i <= 6; $i++)
        <tr>
            <td class="form-input-wide">
                <div>
                    <span>{{ $i }}.</span>
                    <select name="personal_statement[favorite_subject{{ $i }}]">
                        <option value="">選択してください</option>
                        @foreach (['国語', '数学', '社会', '理科', '体育', 'その他'] as $subject)
                            <option value="{{ $subject }}"
                                {{ old("personal_statement.favorite_subject{$i}") === $subject ? 'selected' : '' }}>
                                {{ $subject }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </td>
        </tr>
    @endfor
    <tr>
        <th>1 番の学科はどの程度得意ですか？</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[favorite_subject_level]" class="input-text-l" maxlength="80">{{ old('personal_statement.favorite_subject_level') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>学内・外の部活動やクラブ活動</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[activity]" class="input-text-l" maxlength="80">{{ old('personal_statement.activity') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>趣味</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[hobby]" class="input-text-l" maxlength="80">{{ old('personal_statement.hobby') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>当社への希望記入欄</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[desire]" class="input-text-l" maxlength="120">{{ old('personal_statement.desire') }}</textarea>
                <span class="form-table-caption">※職種・勤務時間・給与・勤務地・休日他</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>通勤時間</th>
        <td class="form-input-radio">
            <div>
                <select name="personal_statement[commute_hour]">
                    @for ($hour = 0; $hour < 10; $hour++)
                        <option {{ old('personal_statement.commute_hour') === "$hour" ? 'selected' : '' }}>
                            {{ $hour }}</option>
                    @endfor
                </select>
                <span>時間</span>
            </div>
            <div>
                <select name="personal_statement[commute_minute]">
                    @for ($minute = 0; $minute < 60; $minute++)
                        <option {{ old('personal_statement.commute_minute') === "$minute" ? 'selected' : '' }}>
                            {{ $minute }}</option>
                    @endfor
                </select>
                <span>分</span>
            </div>
        </td>
    </tr>
</table>
