@props(['head' => '', 'foot' => '', 'data' => []])

<table class="entry-table profile-table">
    {{ $head }}
    <tr>
        <th>志望の動機</th>
        <td class="form-input-wide">
            {{ $data['reason'] }}
        </td>
    </tr>
    @if (array_key_exists('learned_about_media', $data))
        @foreach ($data['learned_about_media'] as $media)
            <tr>
                @if ($loop->first)
                    <th rowspan="{{ count($data['learned_about_media']) }}">当社を知ったきっかけ・メディア媒体</th>
                @endif
                <td class="form-input-wide">
                    {{ $media }}
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <th>当社を知ったきっかけ・メディア媒体</th>
            <td class="form-input-wide"></td>
        </tr>
    @endif
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
    @if (array_key_exists('work_places', $data))
        @foreach ($data['work_places'] as $work_place)
            <tr>
                @if ($loop->first)
                    <th rowspan="{{ count($data['work_places']) }}">希望就業場所</th>
                @endif
                <td class="form-input-wide">
                    {{ $work_place }}
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <th>希望就業場所</th>
            <td class="form-input-wide"></td>
        </tr>
    @endif
    <tr>
        <th></th>
        <td></td>
    </tr>
    @if (array_key_exists('work_jobs', $data))
        @foreach ($data['work_jobs'] as $work_job)
            <tr>
                @if ($loop->first)
                    <th rowspan="{{ count($data['work_jobs']) }}">希望就業職種</th>
                @endif
                <td class="form-input-wide">
                    {{ $work_job }}
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <th>希望就業職種</th>
            <td class="form-input-wide"></td>
        </tr>
    @endif
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
