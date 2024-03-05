@props(['head' => '', 'foot' => '', 'data' => []])

<table class="entry-table address-table">
    {{ $head }}
    <tr>
        <th>郵便番号</th>
        <td class="form-input-zip">
            {{ $data['zip1'] }}
            -
            {{ $data['zip2'] }}
        </td>
    </tr>
    <tr>
        <th>都道府県</th>
        <td class="form-select-pref">
            {{ $data['pref'] }}
        </td>
    </tr>
    <tr>
        <th>住所１</th>
        <td class="form-input-wide">
            {{ $data['addr1'] }}
        </td>
    </tr>
    <tr>
        <th>住所２</th>
        <td class="form-input-wide">
            {{ $data['addr2'] }}
        </td>
    </tr>
    <tr>
        <th>電話番号</th>
        <td class="form-input-wide">
            {{ $data['tel'] }}
        </td>
    </tr>
    {{ $foot }}
</table>
