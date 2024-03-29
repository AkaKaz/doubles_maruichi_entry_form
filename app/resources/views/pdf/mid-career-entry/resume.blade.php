<html>

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
            width: 175mm;
            margin: auto;
            padding: 11mm 0mm 0mm;
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
            height: 8mm;
            text-align: center;
        }

        .cv-table td {
            height: 7mm;
        }

        .cv-table th:nth-child(1),
        .cv-table td:nth-child(1) {
            width: 23mm;
            text-align: center;
        }

        .cv-table th:nth-child(2),
        .cv-table td:nth-child(2) {
            width: 9mm;
            text-align: center;
        }

        .cv-table th:nth-child(3),
        .cv-table td:nth-child(3) {
            width: 143mm;
        }
    </style>
</head>

<body>

    <main>
        <table class="w-full" style="border: none;">
            <tr>
                <td style="height: 10mm; padding: 0mm 0mm 2mm;">
                    <h1 class="align-bottom" style="font-size: 6mm; font-weight: 600; line-height: 1;">履　歴　書</h1>
                </td>
                <td class="text-right align-bottom" style="font-size: 3.5mm; padding: 2mm 0mm; line-height: 1;">
                    {{ \Carbon\Carbon::now()->format('Y年 m月 d日現在') }}
                </td>
            </tr>
        </table>
        <table class="w-full" style="border-top: 0.4mm solid #000;">
            <tr>
                <td colspan="5" class="px-2" style="height: 7mm; border-bottom: 0.2mm solid #000;">
                    ふりがな　{{ $data['profile']['last_name_kana'] }} {{ $data['profile']['first_name_kana'] }}
                </td>
                <td rowspan="8" class="align-center" style="border: 0.2mm solid #000;">
                    <img src="data:{{ $data['profile']['_face']['mime'] }};base64,{{ $data['profile']['_face']['base64'] }}"
                        alt="写真"
                        style="width: 40mm; height: 60mm; object-fit: contain; overflow: hidden; margin: 2mm 2.5mm;" />
                </td>
            </tr>
            <tr>
                <td colspan="5" class="px-2" style="height: 10mm; border-bottom: 0.2mm solid #000;">
                    氏　　名　<span class="text-xl">
                        {{ $data['profile']['last_name'] }}
                        {{ $data['profile']['first_name'] }}
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="px-2" style="height: 7mm; border-bottom: 0.2mm solid #000;">
                    生年月日　{{ $data['profile']['birthday_year'] }}年
                    {{ $data['profile']['birthday_month'] }}月
                    {{ $data['profile']['birthday_day'] }}日生
                    （満
                    {{ \Carbon\Carbon::parse("{$data['profile']['birthday_year']}-{$data['profile']['birthday_month']}-{$data['profile']['birthday_day']}")->age }}才）
                    {{ $data['profile']['sex'] }}
                </td>
            </tr>
            <tr>
                <td colspan="2" class="px-2" style="height: 7mm; border-bottom: 0.2mm solid #000;">
                    現&nbsp;&nbsp;住&nbsp;&nbsp;所　〒 {{ $data['address']['zip1'] }} − {{ $data['address']['zip2'] }}
                </td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="5" class="px-2" style="height: 12mm; border-bottom: 0.2mm solid #000;">
                    {{ MyStr::from($data['address']['pref'] . $data['address']['addr1'])->limit(33)->str() }}
                    <br>
                    {{ $data['address']['addr2'] }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4" style="height: 7mm; border-bottom: 0.2mm solid #000;">
                    電話番号　{{ $data['address']['tel'] }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4" style="height: 7mm; border-bottom: 0.2mm solid #000;">
                    携帯電話　{{ $data['address']['mobile'] }}
                </td>
            </tr>
            <tr>
                <td colspan="5" class="px-2" style="height: 7mm;">
                    ＊緊急連絡先（現住所と異なる場合にのみ記入して下さい）
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="5" style="height: 7mm; border-top: 0.2mm solid #000; border-bottom: 0.2mm solid #000;">
                    住　　所
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" style="height: 7mm; border-bottom: 0.2mm solid #000;">
                    氏　　名
                </td>
                <td></td>
                <td colspan="2" style="height: 7mm; border-bottom: 0.2mm solid #000;">
                    連絡先電話番号
                </td>
            </tr>
            <tr>
                <td style="width: 20mm;" />
                <td style="width: 55mm;" />
                <td style="width: 20mm;" />
                <td style="width:  5mm;" />
                <td style="width: 30mm;" />
                <td style="width: 45mm;" />
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
