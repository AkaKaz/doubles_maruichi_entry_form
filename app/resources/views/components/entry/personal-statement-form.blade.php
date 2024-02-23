<table class="entry-table profile-table">
    <tr>
        <th>志望の動機</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[reason]" class="input-text-l" maxlength="111">{{ old('personal_statement.reason') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>入社への意欲・心意気</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[spirit]" class="input-text-l" maxlength="111">{{ old('personal_statement.spirit') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>セールスポイント</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[strength]" class="input-text-l" maxlength="111">{{ old('personal_statement.strength') }}</textarea>
                <span class="form-table-caption">※長所を含め自覚する特筆事項</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>ウイークポイント</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[weakness]" class="input-text-l" maxlength="111">{{ old('personal_statement.weakness') }}</textarea>
                <span class="form-table-caption">※短所を含め自覚する苦手な事項</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>仕事への取組姿勢・正確度・処理スピードに関して</th>
        <td class="form-input-wide">
            <textarea name="personal_statement[attitude]" class="input-text-l" maxlength="111">{{ old('personal_statement.attitude') }}</textarea>
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
                <textarea name="personal_statement[favorite_subject_level]" class="input-text-l" maxlength="74">{{ old('personal_statement.favorite_subject_level') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>スポーツ</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[sport]" class="input-text-l" maxlength="74">{{ old('personal_statement.sport') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>趣味</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[hobby]" class="input-text-l" maxlength="74">{{ old('personal_statement.hobby') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>当社への希望記入欄</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[desire]" class="input-text-l" maxlength="111">{{ old('personal_statement.desire') }}</textarea>
                <span class="form-table-caption">※職種・勤務時間・給与・勤務地・休日他</span>
            </div>
        </td>
    </tr>
    <tr>
        <th rowspan="24">家族構成</th>
        <td>
            <span class="form-table-caption">※親・兄弟・祖父母を含め御記入下さい</span>
        </td>
    </tr>
    @for ($i = 1; $i <= 6; $i++)
        <tr>
            <td>
                <span>家族 {{ $i }}</span>
            </td>
        </tr>
        <tr>
            <td class="form-input-name">
                <div>
                    <span>氏名</span>
                    <input type="text" name="personal_statement[family][{{ $i }}][name]"
                        value="{{ old("personal_statement.family.{$i}.name") }}" class="input-text-s" maxlength="12">
                </div>
                <div>
                    <span>続柄</span>
                    <input type="text" name="personal_statement[family][{{ $i }}][relationship]"
                        value="{{ old("personal_statement.family.{$i}.relationship") }}" class="input-text-xs"
                        maxlength="3">
                </div>
                <div>
                    <span>年齢</span>
                    <select name="personal_statement[family][{{ $i }}][age]">
                        <option value=""> - </option>
                        @for ($age = 0; $age < 100; $age++)
                            <option {{ old("personal_statement.family.{$i}.age") === "$age" ? 'selected' : '' }}>
                                {{ $age }}
                            </option>
                        @endfor
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td class="form-input-name">
                <div>
                    <span>職業・勤務先</span>
                    <input type="text" name="personal_statement[family][{{ $i }}][work]"
                        value="{{ old("personal_statement.family.{$i}.work") }}" class="input-text-s" maxlength="15">
                </div>
                <div>
                    <span>同居の有無</span>
                    <select name="personal_statement[family][{{ $i }}][living]">
                        <option value=""> - </option>
                        <option {{ old("personal_statement.family.{$i}.living") === '同居' ? 'selected' : '' }}>
                            同居
                        </option>
                        <option {{ old("personal_statement.family.{$i}.living") === '別居' ? 'selected' : '' }}>
                            別居
                        </option>
                    </select>
                </div>
            </td>
        </tr>
        @if ($i < 6)
            <tr>
                <td class="form-input-wide">
                    <hr style="margin: 10px 0;">
                </td>
            </tr>
        @endif
    @endfor
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
    <tr>
        <th>
            扶養家族数
            <p>（配偶者除く）</p>
        </th>
        <td class="form-input-wide">
            <div>
                <select name="personal_statement[dependents]">
                    @for ($dependents = 0; $dependents <= 20; $dependents++)
                        <option {{ old('personal_statement.dependents') === "$dependents 人" ? 'selected' : '' }}>
                            {{ $dependents }} 人
                        </option>
                    @endfor
                </select>
            </div>
        </td>
    </tr>
    <tr>
        <th>配偶者</th>
        <td class="form-input-radio">
            <div>
                <label>
                    <input type="radio" value="有" name="personal_statement[spouse]"
                        {{ old('personal_statement.spouse') == '有' ? 'checked' : '' }}>
                    <span>有</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" value="無" name="personal_statement[spouse]"
                        {{ old('personal_statement.spouse') == '無' ? 'checked' : '' }}>
                    <span>無</span>
                </label>
            </div>
        </td>
    </tr>
</table>
