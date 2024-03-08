@props(['head' => '', 'foot' => '', 'count' => 1, 'name' => 'cv'])

<style>
    .entry-table textarea {
        border: 1px solid #ccc;
    }

    .input-form-work {
        width: 100%;
    }

    .input-form-work div:first-child {
        width: 400px;
    }

    .input-form-work .input-text-l {
        max-width: 514px;
    }

    .work-table th {
        width: 20px;
        height: 1px;
    }
</style>

<table class="entry-table profile-table work-table">
    {{ $head }}
    @for ($i = 1; $i <= $count; $i++)
        <tr>
            <th></th>
            <td class="input-form-work">
                <div>
                    <select name="{{ $name }}[{{ $i }}][start_year]">
                        <option value=""> - </option>
                        @for ($year = 1964; $year <= 2023; $year++)
                            <option {{ old("{$name}.{$i}.start_year") === "$year" ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endfor
                    </select>
                    <span>年</span>
                    <select name="{{ $name }}[{{ $i }}][start_month]">
                        <option value=""> - </option>
                        @for ($month = 1; $month <= 12; $month++)
                            <option {{ old("{$name}.{$i}.start_month") === "$month" ? 'selected' : '' }}>
                                {{ $month }}
                            </option>
                        @endfor
                    </select>
                    <span>月</span>

                    <span>〜</span>

                    <select name="{{ $name }}[{{ $i }}][end_year]">
                        <option value=""> - </option>
                        @for ($year = 1964; $year <= 2023; $year++)
                            <option {{ old("{$name}.{$i}.end_year") === "$year" ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endfor
                    </select>
                    <span>年</span>
                    <select name="{{ $name }}[{{ $i }}][end_month]">
                        <option value=""> - </option>
                        @for ($month = 1; $month <= 12; $month++)
                            <option {{ old("{$name}.{$i}.end_month") === "$month" ? 'selected' : '' }}>
                                {{ $month }}
                            </option>
                        @endfor
                    </select>
                    <span>月</span>
                </div>
                <div>
                    <input type="text" name="{{ $name }}[{{ $i }}][content]"
                        value="{{ old("{$name}.{$i}.content") }}" class="input-text-l" maxlength="31">
                </div>
            </td>
        </tr>
    @endfor
    {{ $foot }}
</table>
