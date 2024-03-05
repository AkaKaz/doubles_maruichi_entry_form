@props(['head' => '', 'foot' => '', 'count' => 1, 'name' => 'cv'])

<style>
    .entry-table textarea {
        border: 1px solid #ccc;
    }

    .input-form-cv {
        width: 100%;
    }

    .input-form-cv div:first-child {
        width: 200px;
    }

    .resume-table th {
        width: 20px;
        height: 1px;
    }
</style>

<table class="entry-table profile-table resume-table">
    {{ $head }}
    @for ($i = 1; $i <= $count; $i++)
        <tr>
            <th></th>
            <td class="input-form-cv">
                <div>
                    <select name="{{ $name }}[{{ $i }}][year]">
                        <option value=""> - </option>
                        @for ($year = 1964; $year <= 2023; $year++)
                            <option {{ old("{$name}.{$i}.year") === "$year" ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endfor
                    </select>
                    <span>年</span>
                    <select name="{{ $name }}[{{ $i }}][month]">
                        <option value=""> - </option>
                        @for ($month = 1; $month <= 12; $month++)
                            <option {{ old("{$name}.{$i}.month") === "$month" ? 'selected' : '' }}>
                                {{ $month }}
                            </option>
                        @endfor
                    </select>
                    <span>月</span>
                </div>
                <div>
                    <input type="text" name="{{ $name }}[{{ $i }}][content]"
                        value="{{ old("{$name}.{$i}.content") }}" class="input-text-l" maxlength="35">
                </div>
            </td>
        </tr>
    @endfor
    {{ $foot }}
</table>
