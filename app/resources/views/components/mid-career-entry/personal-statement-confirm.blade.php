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
        <th>入社への意欲・心意気</th>
        <td class="form-input-wide">
            {{ $data['spirit'] }}
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
        <th>仕事への取組姿勢・正確度・処理スピードに関して</th>
        <td class="form-input-wide">
            {{ $data['attitude'] }}
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
        <th>スポーツ</th>
        <td class="form-input-wide">
            {{ $data['sport'] }}
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
    @for ($i = 1; $i <= 6; $i++)
        <tr>
            @if ($i === 1)
                <th rowspan="6">家族構成</th>
            @endif
            <td class="form-input-wide">
                家族{{ $i }}：
                {{ $data['family'][$i]['name'] }}
                ({{ $data['family'][$i]['relationship'] }}: {{ $data['family'][$i]['age'] }}歳)
                {{ $data['family'][$i]['living'] }}
                {{ $data['family'][$i]['work'] }}
            </td>
        </tr>
    @endfor
    <tr>
        <th>通勤時間</th>
        <td class="form-input-wide">
            {{ $data['commute_hour'] }} 時間
            {{ $data['commute_minute'] }} 分
        </td>
    </tr>
    <tr>
        <th>
            扶養家族数
            <p>（配偶者除く）</p>
        </th>
        <td class="form-input-wide">
            {{ $data['dependents'] }}
        </td>
    </tr>
    <tr>
        <th>配偶者</th>
        <td class="form-input-wide">
            {{ $data['spouse'] }}
        </td>
    </tr>
    {{ $foot }}
</table>
