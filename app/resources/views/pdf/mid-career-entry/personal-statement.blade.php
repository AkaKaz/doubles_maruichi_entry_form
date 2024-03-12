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
            width: 157mm;
            border-bottom: 0.2mm solid #000;
        }

        .family-table td {
            border-bottom: 0.2mm solid #000;
            height: 6.5mm;
            padding: 0mm 1mm;
        }

        .family-table td:nth-child(2),
        .family-table td:nth-child(3),
        .family-table td:nth-child(4) {
            border-left: 0.2mm solid #000;
            border-right: 0.2mm solid #000;
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
                <td>
                    {{ MyStr::from($data['reason'])->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                </td>
            </tr>
            @for ($i = 1; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['reason'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            {{-- セールスポイント --}}
            <tr>
                <th colspan="2">＊セールスポイント（長所を含め自覚する特筆事項）</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['strength'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="2">＊ウィークポイント（短所を含め自覚する苦手な事項）</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['weakness'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="2">＊仕事への取組姿勢・正確度・処理スピードに関して</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['attitude'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="2">＊得意な学科（国・数・社・理・体•その他の中で得意順に書き並べて下さい）</th>
            </tr>
            <tr>
                <th></th>
                <td>
                    @for ($i = 1; $i <= 6; $i++)
                        <span>{{ mb_convert_kana($i, 'N') }}．{{ MyStr::from($data["favorite_subject{$i}"])->rpad(4)->str() }}</span>
                    @endfor
                </td>
            </tr>
            <tr>
                <th></th>
                <td style="border-bottom: none;">
                    1 番の学科はどの程度得意ですか？
                </td>
            </tr>
            @for ($i = 0; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['favorite_subject_level'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th>＊スポーツ</td>
                <td>
                    {{ MyStr::from($data['sport'])->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                </td>
            </tr>
            @for ($i = 1; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['sport'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th>＊趣　　味</td>
                <td>
                    {{ MyStr::from($data['hobby'])->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                </td>
            </tr>
            @for ($i = 1; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['hobby'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="2">＊当社への希望記入欄（職種・勤務時間・給与・勤務地・休日他）</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['desire'])->offset(STATUS_TABLE_TEXTS * $i)->limit(STATUS_TABLE_TEXTS)->kana()->str() }}
                    </td>
                </tr>
            @endfor
        </table>

        <table class="w-full family-table">
            <tr>
                <td colspan="5">
                    <span>＊通勤時間　{{ MyStr::from($data['commute_hour'])->lpad(2)->kana()->str() }}
                        時間　{{ MyStr::from($data['commute_minute'])->lpad(2)->kana()->str() }} 分</span>
                    <span>　　　　　＊扶養家族数（配偶者除く）　{{ MyStr::from($data['dependents'])->lpad(2)->kana()->str() }}</span>
                    <span>　　　　　＊配偶者　{{ $data['spouse'] }}</span>
                </td>
            </tr>
        </table>
    </main>

</body>

</html>
