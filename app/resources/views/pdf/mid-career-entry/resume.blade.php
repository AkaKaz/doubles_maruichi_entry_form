<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/tailwind.min.css" />
    <style>
        html,
        body {
            font-family: source-han-serif, sans-serif;
            font-size: 3.3mm;
            line-height: 1.6;
        }

        main {
            width: 150mm;
            margin: auto;
            padding: 9mm 0mm;
        }

        table {
            table-layout: fixed;
            border-collapse: collapse;
            border-top: 0.2mm solid #000;
            border-bottom: 0.2mm solid #000;
            border-left: 0.4mm solid #000;
            border-right: 0.4mm solid #000;
        }

        .cv-table td,
        .cv-table th {
            border: 0.2mm solid #000;
            padding: 0mm 2mm;
        }

        .cv-table th {
            height: 6.5mm;
            text-align: center;
        }

        .cv-table td {
            height: 6mm;
        }

        .cv-table th:nth-child(1),
        .cv-table td:nth-child(1) {
            width: 20mm;
            text-align: center;
        }

        .cv-table th:nth-child(2),
        .cv-table td:nth-child(2) {
            width: 8mm;
            text-align: center;
        }

        .cv-table th:nth-child(3),
        .cv-table td:nth-child(3) {
            width: 122mm;
        }
    </style>
</head>

<body>

    <main>
        <table class="w-full" style="border: none;">
            <tr>
                <td style="padding: 0mm 0mm 2mm; ">
                    <h1 class="align-bottom" style="font-size: 5mm; line-height: 1;">履　歴　書</h1>
                </td>
                <td class="text-right align-bottom" style="font-size: 2.9mm; padding: 2mm 0mm; line-height: 1;">
                    {{ \Carbon\Carbon::now()->format('Y年 m月 d日現在') }}
                </td>
            </tr>
        </table>
        <table class="w-full" style="border-top: 0.4mm solid #000;">
            <tr>
                <td colspan="5" class="px-2" style="height: 6mm; border-bottom: 0.2mm solid #000;">
                    ふりがな　{{ $data['profile']['last_name_kana'] }} {{ $data['profile']['first_name_kana'] }}
                </td>
                <td rowspan="8" class="align-center" style="border: 0.2mm solid #000;">
                    <img src="data:{{ $data['profile']['_face']['mime'] }};base64,{{ $data['profile']['_face']['base64'] }}"
                        alt="写真"
                        style="width: 35mm; height: 45mm; object-fit: contain; overflow: hidden; margin: auto;" />
                </td>
            </tr>
            <tr>
                <td colspan="5" class="px-2" style="height: 8.5mm; border-bottom: 0.2mm solid #000;">
                    氏　　名　<span class="text-xl">
                        {{ $data['profile']['last_name'] }}
                        {{ $data['profile']['first_name'] }}
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="px-2" style="height: 6mm; border-bottom: 0.2mm solid #000;">
                    生年月日　{{ $data['profile']['birthday_year'] }}年
                    {{ $data['profile']['birthday_month'] }}月
                    {{ $data['profile']['birthday_day'] }}日生
                    （満
                    {{ \Carbon\Carbon::parse("{$data['profile']['birthday_year']}-{$data['profile']['birthday_month']}-{$data['profile']['birthday_day']}")->age }}才）
                    {{ $data['profile']['sex'] }}
                </td>
            </tr>
            <tr>
                <td colspan="2" class="px-2" style="height: 6mm; border-bottom: 0.2mm solid #000;">
                    現&nbsp;&nbsp;住&nbsp;&nbsp;所　〒 {{ $data['address']['zip1'] }} − {{ $data['address']['zip2'] }}
                </td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="5" class="px-2" style="height: 10.5mm; border-bottom: 0.2mm solid #000;">
                    {{ MyStr::from($data['address']['pref'] . $data['address']['addr1'])->limit(33)->str() }}
                    <br>
                    {{ $data['address']['addr2'] }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4" style="height: 6mm; border-bottom: 0.2mm solid #000;">
                    電話番号　{{ $data['address']['tel'] }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4" style="height: 6mm; border-bottom: 0.2mm solid #000;">
                    携帯電話　{{ $data['address']['mobile'] }}
                </td>
            </tr>
            <tr>
                <td colspan="5" class="px-2" style="height: 5.5mm;">
                    ＊緊急連絡先（現住所と異なる場合にのみ記入して下さい）
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="5" style="height: 6mm; border-top: 0.4mm solid #000; border-bottom: 0.2mm solid #000;">
                    @if (!array_key_exists('same_addr', $data['emergency']))
                        @if (mb_strlen($data['emergency']['pref'] . $data['emergency']['addr1'] . $data['emergency']['addr2']) > 35)
                            住　　所　<span class="text-xs">
                                〒{{ $data['emergency']['zip1'] }}-{{ $data['emergency']['zip2'] }}&nbsp;{{ $data['emergency']['pref'] }}{{ $data['emergency']['addr1'] }}
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $data['emergency']['addr2'] }}
                            </span>
                        @else
                            住　　所　<span class="text-xs">
                                〒{{ $data['emergency']['zip1'] }}-{{ $data['emergency']['zip2'] }}&nbsp;{{ $data['emergency']['pref'] }}{{ $data['emergency']['addr1'] }}{{ $data['emergency']['addr2'] }}
                            </span>
                        @endif
                    @else
                        住　　所
                    @endif
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" style="height: 6mm; border-bottom: 0.2mm solid #000;">
                    @if (!array_key_exists('same_addr', $data['emergency']))
                        氏　　名　{{ $data['emergency']['name'] }}
                    @else
                        氏　　名
                    @endif
                </td>
                <td></td>
                <td colspan="2" style="height: 6mm; border-bottom: 0.2mm solid #000;">
                    @if (!array_key_exists('same_addr', $data['emergency']))
                        連絡先電話番号　{{ $data['emergency']['tel'] }}
                    @else
                        連絡先電話番号
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 18mm;" />
                <td style="width: 48mm;" />
                <td style="width: 18mm;" />
                <td style="width:  4mm;" />
                <td style="width: 26mm;" />
                <td style="width: 40mm;" />
            </tr>
        </table>

        <table class="w-full cv-table">
            <tr>
                <th>年</th>
                <th>月</th>
                <th>学　　歴　　・　　職　　歴　（各別にまとめて記入する）</th>
            </tr>
            @for ($i = 1; $i <= 14; $i++)
                @if ($data['careers'][$i]['content'])
                    <tr>
                        <td class="text-center">{{ $data['careers'][$i]['year'] }}</td>
                        <td class="text-center">{{ $data['careers'][$i]['month'] }}</td>
                        <td>{{ $data['careers'][$i]['content'] }}</td>
                    </tr>
                @else
                    <tr>
                        <td>　</td>
                        <td>　</td>
                        <td>　</td>
                    </tr>
                @endif
            @endfor
        </table>

        <table class="w-full cv-table">
            <tr>
                <th>年</th>
                <th>月</th>
                <th>免　　許　　・　　資　　格</th>
            </tr>
            @for ($i = 1; $i <= 5; $i++)
                @if ($data['licenses'][$i]['content'])
                    <tr>
                        <td>{{ $data['licenses'][$i]['year'] }}</td>
                        <td>{{ $data['licenses'][$i]['month'] }}</td>
                        <td>{{ $data['licenses'][$i]['content'] }}</td>
                    </tr>
                @else
                    <tr>
                        <td>　</td>
                        <td>　</td>
                        <td>　</td>
                    </tr>
                @endif
            @endfor
        </table>

        <table class="w-full cv-table" style="border-bottom: 0.4mm solid #000;">
            <tr>
                <th>年</th>
                <th>月</th>
                <th>賞　　　　　　　　　　　罰</th>
            </tr>
            @for ($i = 1; $i <= 4; $i++)
                @if ($data['rewards'][$i]['content'])
                    <tr>
                        <td>{{ $data['rewards'][$i]['year'] }}</td>
                        <td>{{ $data['rewards'][$i]['month'] }}</td>
                        <td>{{ $data['rewards'][$i]['content'] }}</td>
                    </tr>
                @else
                    <tr>
                        <td>　</td>
                        <td>　</td>
                        <td>　</td>
                    </tr>
                @endif
            @endfor
        </table>
    </main>

</body>

</html>
