<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/tailwind.min.css" />
    <style>
        html,
        body {
            font-family: source-han-serif, sans-serif;
            font-size: 12px;
            line-height: 1.8;
        }

        table {
            border-collapse: collapse;
            border-left: 2px solid #000;
            border-right: 2px solid #000;
        }

        table th,
        table td {
            padding: 3px 10px;
        }

        .cv-table td,
        .cv-table th {
            border: 1px solid #000;
        }

        .ub {
            border-top: 1px solid #000;
        }

        .bb {
            border-bottom: 1px solid #000;
        }

        .picture-box {
            border: 1px solid #000;
        }

        .picture-box img {
            margin: auto;
            width: 30mm;
            height: 40mm;
        }
    </style>
</head>

<body>

    <h1 class="text-2xl mb-2">履　歴　書</h1>
    <p class="absolute right-12 top-12 text-sm">
        {{ \Carbon\Carbon::now()->format('Y年 m月 d日現在') }}
    </p>

    <table class="w-full" style="border-top: 2px solid #000;">
        <tr>
            <td colspan="5" class="bb">
                ふりがな　{{ $data['profile']['last_name_kana'] }} {{ $data['profile']['first_name_kana'] }}
            </td>
            <td rowspan="9" class="w-48 picture-box">
                {{-- <img src="" alt="写真" style="border: 1px solid red;" /> --}}
                <div style="width: 30mm; height: 40mm;" />
            </td>
        </tr>
        <tr>
            <td colspan="5" class="bb py-12">
                氏　　名　<span class="text-xl">
                    {{ $data['profile']['last_name'] }}
                    {{ $data['profile']['first_name'] }}
                </span>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="bb">
                生年月日　{{ $data['profile']['birthday_year'] }}年
                {{ $data['profile']['birthday_month'] }}月
                {{ $data['profile']['birthday_day'] }}日生
                （満
                {{ \Carbon\Carbon::parse("{$data['profile']['birthday_year']}-{$data['profile']['birthday_month']}-{$data['profile']['birthday_day']}")->age }}才）
                {{ $data['profile']['sex'] }}
            </td>
        </tr>
        <tr>
            <td colspan="2" class="bb w-40">
                現住所　　〒 {{ $data['address']['zip1'] }} − {{ $data['address']['zip2'] }}
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="5">
                {{ $data['address']['pref'] }}
                {{ $data['address']['addr1'] }}
            </td>
        </tr>
        <tr>
            <td colspan="5" class="bb">
                {{ $data['address']['addr2'] }}
            </td>
        </tr>
        <tr>
            <td class=""></td>
            <td colspan="4" class="bb">
                電話番号　{{ $data['address']['tel'] }}
            </td>
        </tr>
        <tr>
            <td class=""></td>
            <td colspan="4" class="bb">
                携帯電話　{{ $data['address']['tel'] }}
            </td>
        </tr>
        <tr>
            <td colspan="5">
                ＊緊急連絡先（現住所と異なる場合にのみ記入して下さい）
            </td>
        </tr>
        <tr>
            <td class="ub"></td>
            <td colspan="5" class="bb ub">
                @if (!$data['home']['same_addr'])
                    住　　所　<span class="text-xs">
                        〒{{ $data['home']['zip1'] }}-{{ $data['home']['zip2'] }}
                        {{ '　　　　　' }}{{ $data['home']['pref'] }}{{ $data['home']['addr1'] }}<br>{{ $data['home']['addr2'] }}
                    </span>
                @else
                    住　　所
                @endif
            </td>
        </tr>
        <tr>
            <td class=""></td>
            <td colspan="2" class="bb">
                氏　　名
            </td>
            <td class=""></td>
            <td colspan="2" class="bb">
                @if (!$data['home']['same_addr'])
                    連絡先電話番号　{{ $data['home']['tel'] }}
                @else
                    連絡先電話番号
                @endif
            </td>
        </tr>
        <tr>
            <td class="w-20"></td>
            <td class="w-36"></td>
            <td class=""></td>
            <td class="w-4"></td>
            <td class=""></td>
            <td class="w-48"></td>
        </tr>
    </table>

    <table class="w-full cv-table">
        <tr>
            <th class="w-24">年</th>
            <th class="w-12">月</th>
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
            <th class="w-24">年</th>
            <th class="w-12">月</th>
            <th>免　　許　　・　　資　　格</th>
        </tr>
        @for ($i = 1; $i <= 5; $i++)
            @if ($data['licenses'][$i]['content'])
                <tr>
                    <td class="text-center">{{ $data['licenses'][$i]['year'] }}</td>
                    <td class="text-center">{{ $data['licenses'][$i]['month'] }}</td>
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

    <table class="w-full cv-table" style="border-bottom: 2px solid #000;">
        <tr>
            <th class="w-24">年</th>
            <th class="w-12">月</th>
            <th>賞　　　　　　　　　　　罰</th>
        </tr>
        @for ($i = 1; $i <= 4; $i++)
            @if ($data['rewards'][$i]['content'])
                <tr>
                    <td class="text-center">{{ $data['rewards'][$i]['year'] }}</td>
                    <td class="text-center">{{ $data['rewards'][$i]['month'] }}</td>
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

</body>

</html>
