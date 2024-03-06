<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/tailwind.min.css" />
    <style>
        html,
        body {
            font-family: source-han-serif, sans-serif;
            font-size: 3.2mm;
            line-height: 1.6;
        }

        main {
            width: 150mm;
            margin: auto;
            padding: 9mm 0mm;
        }

        table {
            table-layout: fixed;
        }

        .status-table th,
        .status-table td {
            height: 5.3mm;
        }

        .status-table th {
            width: 20mm;
            font-size: 1rem;
            font-weight: normal;
            text-align: left;
        }

        .status-table td {
            width: 130mm;
            border-bottom: 0.2mm solid #000;
        }

        .family-table td {
            border-bottom: 0.2mm solid #000;
            height: 5.3mm;
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
                <td class="text-center align-bottom" style="padding: 0mm 0mm 7mm;">
                    <h1 style="font-size: 5mm; line-height: 1;">身　　　上　　　書</h1>
                </td>
            </tr>
        </table>
        <table class="w-full status-table">
            <tr>
                <th>＊志望の動機</th>
                <td>
                    {{ MyStr::from($data['reason'])->limit(40)->kana()->str() }}
                </td>
            </tr>
            @for ($i = 1; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['reason'])->offset(40 * $i)->limit(40)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="2">＊当社を知ったきっかけ・メディア媒体</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['learned_about'])->offset(40 * $i)->limit(40)->kana()->str() }}
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
                        {{ MyStr::from($data['strength'])->offset(40 * $i)->limit(40)->kana()->str() }}
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
                        {{ MyStr::from($data['weakness'])->offset(40 * $i)->limit(40)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="2">＊学生時代に力を注いだこと</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['focused'])->offset(40 * $i)->limit(40)->kana()->str() }}
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
                        {{ MyStr::from($data['favorite_subject_level'])->offset(40 * $i)->limit(40)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th colspan="2">＊学内・外の部活動やクラブ活動</td>
            </tr>
            @for ($i = 0; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['activity'])->offset(40 * $i)->limit(40)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th>＊趣　　味</td>
                <td>
                    {{ MyStr::from($data['hobby'])->limit(40)->kana()->str() }}
                </td>
            </tr>
            @for ($i = 1; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['hobby'])->offset(40 * $i)->limit(40)->kana()->str() }}
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
                        {{ MyStr::from($data['desire'])->offset(40 * $i)->limit(40)->kana()->str() }}
                    </td>
                </tr>
            @endfor

            <tr>
                <th>＊通勤時間</th>
                <td>
                    {{ $data['commute_hour'] }} 時間　{{ $data['commute_minute'] }} 分
                </td>
            </tr>
        </table>
    </main>

</body>

</html>
