@props(['head' => '', 'foot' => '', 'count' => 1, 'data' => []])

<table class="entry-table profile-table">
    {{ $head }}
    @for ($i = 1; $i <= $count; $i++)
        @if ($data[$i]['content'])
            <tr>
                <th>
                    {{ $data[$i]['year'] }}年{{ $data[$i]['month'] }}月
                </th>
                <td class="input-form-wide">
                    {{ $data[$i]['content'] }}
                </td>
            </tr>
        @endif
    @endfor
    {{ $foot }}
</table>
