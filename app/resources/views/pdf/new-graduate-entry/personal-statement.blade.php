<html>

@php
    const STATUS_TABLE_TEXTS = 42;
@endphp

<head>
    <link rel="stylesheet" type="text/css" href="css/tailwind.min.css" />
    <style>
        html,
        body {
            font-family: source-han-serif, sans-serif;
            font-size: 3.7mm;
            line-height: 1.6;
        }

        main {
            width: 180mm;
            margin: auto;
            padding: 11mm 0mm;
        }

        table {
            table-layout: fixed;
        }

        .status-table th,
        .status-table td {
            height: 6.25mm;
        }

        .status-table th {
            width: 23mm;
            font-size: 1rem;
            font-weight: normal;
            text-align: left;
        }

        .status-table td {
            width: 78.5mm;
            border-bottom: 0.2mm solid #000;
        }
    </style>
</head>

<body>

    <main>
        <table class="w-full" style="border: none;">
            <tr>
                <td class="text-center align-bottom" style="height: 15mm; padding: 0mm 0mm 9mm;">
                    <h1 style="font-size: 6mm; font-weight: 600; line-height: 1;">身　　　上　　　書</h1>
                </td>
            </tr>
        </table>
        <table class="w-full status-table">
            <tr>
                <th>＊志望の動機</th>
                <td colspan="3">
                    {{ MyStr::from($data['reason'])->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                </td>
            </tr>
            @for ($i = 1; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td colspan="2">
                        {{ MyStr::from($data['reason'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            @for ($i = 0; $i < count(config('const.learned_about_media')); $i += 2)
                @if ($i === 0)
                    <tr>
                        <th colspan="3">＊当社を知ったきっかけ・メディア媒体</th>
                    </tr>
                @endif

                <tr>
                    <th></th>
                    <td>
                        @if (array_key_exists('learned_about_media', $data) && $i < count($data['learned_about_media']))
                            {{ $data['learned_about_media'][$i] }}
                        @endif
                    </td>
                    <td>
                        @if (array_key_exists('learned_about_media', $data) && $i + 1 < count($data['learned_about_media']))
                            {{ $data['learned_about_media'][$i + 1] }}
                        @endif
                    </td>
                </tr>
            @endfor

            {{-- セールスポイント --}}
            <tr>
                <th colspan="3">＊セールスポイント（長所を含め自覚する特筆事項）</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td colspan="2">
                        {{ MyStr::from($data['strength'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="3">＊ウィークポイント（短所を含め自覚する苦手な事項）</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td colspan="2">
                        {{ MyStr::from($data['weakness'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="3">＊学生時代に力を注いだこと</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td colspan="2">
                        {{ MyStr::from($data['focused'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="3">＊得意な学科（国・数・社・理・体•その他の中で得意順に書き並べて下さい）</th>
            </tr>
            <tr>
                <th></th>
                <td colspan="2">
                    @for ($i = 1; $i <= 6; $i++)
                        <span>{{ mb_convert_kana($i, 'N') }}．{{ MyStr::from($data["favorite_subject{$i}"])->rpad(4)->str() }}</span>
                    @endfor
                </td>
            </tr>
            <tr>
                <th></th>
                <td colspan="2" style="border-bottom: none;">
                    1 番の学科はどの程度得意ですか？
                </td>
            </tr>
            @for ($i = 0; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td colspan="2">
                        {{ MyStr::from($data['favorite_subject_level'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="3">＊学内・外の部活動やクラブ活動</td>
            </tr>
            @for ($i = 0; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td colspan="2">
                        {{ MyStr::from($data['activity'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th>＊趣　　味</td>
                <td colspan="2">
                    {{ MyStr::from($data['hobby'])->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                </td>
            </tr>
            @for ($i = 1; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td colspan="2">
                        {{ MyStr::from($data['hobby'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            @for ($i = 0; $i < count(config('const.work_places')); $i += 2)
                @if ($i === 0)
                    <tr>
                        <th colspan="3">＊希望就業場所</th>
                    </tr>
                @endif

                <tr>
                    <th></th>
                    <td>
                        @if (array_key_exists('work_places', $data) && $i < count($data['work_places']))
                            {{ $data['work_places'][$i] }}
                        @endif
                    </td>
                    <td>
                        @if (array_key_exists('work_places', $data) && $i + 1 < count($data['work_places']))
                            {{ $data['work_places'][$i + 1] }}
                        @endif
                    </td>
                </tr>
            @endfor
        </table>
    </main>

</body>

</html>
