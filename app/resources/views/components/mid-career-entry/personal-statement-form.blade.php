<table class="entry-table profile-table">
    <tr>
        <th>志望の動機</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[reason]" class="input-text-l" maxlength="126">{{ old('personal_statement.reason') }}</textarea>
            </div>
        </td>
    </tr>
    @foreach (config('const.learned_about_media') as $media)
        <tr>
            @if ($loop->first)
                <th rowspan="{{ count(config('const.learned_about_media')) }}">当社を知ったきっかけ・メディア媒体</th>
            @endif
            <td class="form-input-radio">
                <div>
                    <label>
                        <input type="checkbox" name="personal_statement[learned_about_media][]" value="{{ $media }}"
                            {{ in_array($media, old('personal_statement.learned_about_media', [])) ? 'checked' : '' }} />
                        {{ $media }}
                    </label>
                </div>
            </td>
        </tr>
    @endforeach
    <tr>
        <th>セールスポイント</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[strength]" class="input-text-l" maxlength="126">{{ old('personal_statement.strength') }}</textarea>
                <span class="form-table-caption">※長所を含め自覚する特筆事項</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>ウイークポイント</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[weakness]" class="input-text-l" maxlength="126">{{ old('personal_statement.weakness') }}</textarea>
                <span class="form-table-caption">※短所を含め自覚する苦手な事項</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>仕事への取組姿勢・正確度・処理スピードに関して</th>
        <td class="form-input-wide">
            <textarea name="personal_statement[attitude]" class="input-text-l" maxlength="126">{{ old('personal_statement.attitude') }}</textarea>
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
                <textarea name="personal_statement[favorite_subject_level]" class="input-text-l" maxlength="84">{{ old('personal_statement.favorite_subject_level') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>スポーツ</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[sport]" class="input-text-l" maxlength="84">{{ old('personal_statement.sport') }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <th>趣味</th>
        <td class="form-input-wide">
            <div>
                <textarea name="personal_statement[hobby]" class="input-text-l" maxlength="84">{{ old('personal_statement.hobby') }}</textarea>
            </div>
        </td>
    </tr>
    @foreach (config('const.work_places') as $work_place)
        <tr>
            @if ($loop->first)
                <th rowspan="{{ count(config('const.work_places')) }}">希望就業場所</th>
            @endif
            <td class="form-input-radio">
                <div>
                    <label>
                        <input type="checkbox" name="personal_statement[work_places][]" value="{{ $work_place }}"
                            {{ in_array($work_place, old('personal_statement.work_places', [])) ? 'checked' : '' }} />
                        {{ $work_place }}
                    </label>
                </div>
            </td>
        </tr>
    @endforeach
    <tr>
        <th></th>
        <td></td>
    </tr>
    @foreach (config('const.work_jobs') as $work_job)
        <tr>
            @if ($loop->first)
                <th rowspan="{{ count(config('const.work_jobs')) }}">希望就業職種</th>
            @endif
            <td class="form-input-radio">
                <div>
                    <label>
                        <input type="checkbox" name="personal_statement[work_jobs][]" value="{{ $work_job }}"
                            {{ in_array($work_job, old('personal_statement.work_jobs', [])) ? 'checked' : '' }} />
                        {{ $work_job }}
                    </label>
                </div>
            </td>
        </tr>
    @endforeach
    <tr>
        <th>
            扶養家族数
            <p>（配偶者除く）</p>
        </th>
        <td class="form-input-wide">
            <div>
                <select name="personal_statement[dependents]">
                    @for ($dependents = 0; $dependents <= 20; $dependents++)
                        <option {{ old('personal_statement.dependents') === "{$dependents}人" ? 'selected' : '' }}>
                            {{ $dependents }}人
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
