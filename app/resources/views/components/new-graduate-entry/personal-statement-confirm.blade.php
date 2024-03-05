@props(['head' => '', 'foot' => '', 'data' => []])

<table class="entry-table profile-table">
    {{ $head }}
    <tr>
        <th>志望の動機</th>
        <td class="form-input-wide">
            {{ $data['reason'] }}
        </td>
    </tr>
    <tr>
        <th>当社を知ったきっかけ・メディア媒体</th>
        <td class="form-input-wide">
            {{ $data['learned_about'] }}
        </td>
    </tr>
    <tr>
        <th>セールスポイント</th>
        <td class="form-input-wide">
            {{ $data['strength'] }}
        </td>
    </tr>
    <tr>
        <th>ウイークポイント</th>
        <td class="form-input-wide">
            {{ $data['weakness'] }}
        </td>
    </tr>
    <tr>
        <th>学生時代に力を注いだこと</th>
        <td class="form-input-wide">
            {{ $data['focused'] }}
        </td>
    </tr>
    @for ($i = 1; $i <= 6; $i++)
        <tr>
            @if ($i === 1)
                <th rowspan="6">得意な学科</th>
            @endif
            <td class="form-input-wide">
                {{ $i }}. {{ $data['favorite_subject' . $i] }}
            </td>
        </tr>
    @endfor
    <tr>
        <th>1 番の学科はどの程度得意ですか？</th>
        <td class="form-input-wide">
            {{ $data['favorite_subject_level'] }}
        </td>
    </tr>
    <tr>
        <th>学内・外の部活動やクラブ活動</th>
        <td class="form-input-wide">
            {{ $data['activity'] }}
        </td>
    </tr>
    <tr>
        <th>趣味</th>
        <td class="form-input-wide">
            {{ $data['hobby'] }}
        </td>
    </tr>
    <tr>
        <th>当社への希望記入欄</th>
        <td class="form-input-wide">
            {{ $data['desire'] }}
        </td>
    </tr>
    <tr>
        <th>通勤時間</th>
        <td class="form-input-wide">
            {{ $data['commute_hour'] }} 時間
            {{ $data['commute_minute'] }} 分
        </td>
    </tr>
    {{ $foot }}
</table>
