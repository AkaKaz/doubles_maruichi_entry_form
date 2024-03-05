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
                <th colspan="2">＊入社への意欲・心意気</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['spirit'])->offset(40 * $i)->limit(40)->kana()->str() }}
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
                <th colspan="2">＊仕事への取組姿勢・正確度・処理スピードに関して</th>
            </tr>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['attitude'])->offset(40 * $i)->limit(40)->kana()->str() }}
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
                        <span>{{ mb_convert_kana($i, 'N') }}．{{ MyStr::from($data["favorite_subject{$i}"])->padding(4)->str() }}</span>
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
                <th>＊スポーツ</td>
                <td>
                    {{ MyStr::from($data['sport'])->limit(40)->kana()->str() }}
                </td>
            </tr>
            @for ($i = 1; $i < 2; $i++)
                <tr>
                    <th></th>
                    <td>
                        {{ MyStr::from($data['sport'])->offset(40 * $i)->limit(40)->kana()->str() }}
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
        </table>

        <table class="w-full family-table">
            <tr>
                <td colspan="5">＊家族構成（親・兄弟・祖父母を含め御記入下さい）</td>
            </tr>
            <tr>
                <td class="text-center" style="width: 38mm;">氏　　　名</td>
                <td class="text-center" style="width: 17mm;">続　柄</td>
                <td class="text-center" style="width: 17mm;">年　齢</td>
                <td class="text-center" style="width: 23mm;">同居・別居</td>
                <td class="text-center" style="width: 55mm;">職業・勤務先</td>
            </tr>
            @for ($i = 1; $i <= 6; $i++)
                <tr>
                    <td class="">{{ $data['family'][$i]['name'] }}</td>
                    <td class="text-center">{{ $data['family'][$i]['relationship'] }}</td>
                    <td class="text-right">{{ $data['family'][$i]['age'] }} 歳</td>
                    <td class="text-center">{{ $data['family'][$i]['living'] }}</td>
                    <td class="">{{ $data['family'][$i]['work'] }}</td>
                </tr>
            @endfor
            <tr>
                <td colspan="5">
                    <span>＊通勤時間　{{ $data['commute_hour'] }} 時間　{{ $data['commute_minute'] }} 分</span>
                    <span>　　　＊扶養家族数（配偶者除く）　{{ $data['dependents'] }}</span>
                    <span>　　　＊配偶者　{{ $data['spouse'] }}</span>
                </td>
            </tr>
        </table>
    </main>

</body>

</html>
