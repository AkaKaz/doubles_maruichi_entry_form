<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/tailwind.min.css" />
    <style>
        html,
        body {
            font-family: source-han-serif, sans-serif;
            font-size: 13px;
            line-height: 1.8;
        }

        .family-table {
            border-top: 2px solid #000;
            border-bottom: 2px solid #000;
        }

        .family-table td {
            border: 1px solid #000;
        }

        .family-table td:first-child,
        .family-table td:last-child {
            border-left: none;
            border-right: none;
        }
    </style>
</head>

<body>

    <main>
        <h1 class="text-center text-2xl mb-6">身　上　書</h1>

        <table class="w-full">
            <tr>
                <td class="w-28 align-top">＊志望の動機</td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['reason'])->padding(111)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td colspan="2">＊入社への意欲・心意気</td>
            </tr>
            <tr>
                <td class="w-28"></td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['spirit'])->padding(111)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td colspan="2">＊セールスポイント（長所を含め自覚する特筆事項）</td>
            </tr>
            <tr>
                <td class="w-28"></td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['strength'])->padding(111)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td colspan="2">＊ウィークポイント（短所を含め自覚する苦手な事項）</td>
            </tr>
            <tr>
                <td class="w-28"></td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['weakness'])->padding(111)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td colspan="2">＊仕事への取組姿勢・正確度・処理スピードに関して</td>
            </tr>
            <tr>
                <td class="w-28"></td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['attitude'])->padding(111)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td colspan="2">＊得意な学科（国・数・社・理・体•その他の中で得意順に書き並べて下さい）</td>
            </tr>
            <tr>
                <td class="w-28"></td>
                <td class="underline underline-offset-8">
                    @for ($i = 1; $i <= 6; $i++)
                        <span>{{ mb_convert_kana($i, 'N') }}．{{ $data["favorite_subject{$i}"] }}　</span>
                    @endfor
                </td>
            </tr>
            <tr>
                <td class="w-28"></td>
                <td>
                    1 番の学科はどの程度得意ですか？
                </td>
            </tr>
            <tr>
                <td class="w-28"></td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['favorite_subject_level'])->padding(74)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td class="w-28 align-top">＊スポーツ</td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['sport'])->padding(74)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td class="w-28 align-top">＊趣　　味</td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['hobby'])->padding(74)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td colspan="2">＊当社への希望記入欄（職種・勤務時間・給与・勤務地・休日他）</td>
            </tr>
            <tr>
                <td class="w-28"></td>
                <td class="underline underline-offset-8">
                    {{ MyStr::from($data['desire'])->padding(111)->kana()->str() }}
                </td>
            </tr>

            <tr>
                <td colspan="2">＊家族構成（親・兄弟・祖父母を含め御記入下さい）</td>
            </tr>
            <tr>
                <td colspan="2">
                    <table class="border-collapse family-table">
                        <tr>
                            <td class="text-center w-52">氏　　　名</td>
                            <td class="text-center w-16">続　柄</td>
                            <td class="text-center w-16">年　齢</td>
                            <td class="text-center w-24">同居・別居</td>
                            <td class="text-center w-64">職業・勤務先</td>
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
                    </table>
                </td>
            </tr>

            <tr>
                <td class="underline underline-offset-8" colspan="2">
                    <span>＊通勤時間　{{ $data['commute_hour'] }} 時間　{{ $data['commute_minute'] }} 分</span>
                    <span>　　　＊扶養家族数（配偶者除く）　{{ $data['dependents'] }}</span>
                    <span>　　　＊配偶者　{{ $data['spouse'] }}</span>
                </td>
            </tr>
        </table>
    </main>

</body>

</html>
