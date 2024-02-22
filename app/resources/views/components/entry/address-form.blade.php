@props(['head' => '', 'foot' => '', 'name' => 'address'])

<table class="entry-table address-table">
    {{ $head }}
    <tr>
        <th>郵便番号</th>
        <td class="form-input-zip">
            <div>
                <input type="text" name="{{ $name }}[zip1]" value="" class="input-text-zip1">
                <span>-</span>
                <input type="text" name="{{ $name }}[zip2]" value="" class="input-text-zip2">
            </div>
            <div>
                <button type="button" class="zip-search" onclick="AjaxZip3.zip2addr('b1','b2','b3','b4');">
                    住所検索
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <th>都道府県</th>
        <td class="form-select-pref">
            <div>
                <select name="{{ $name }}[pref]">
                    <option value="">選択してください</option>
                    @foreach (config('const.prefs') as $pref)
                        <option>{{ $pref }}</option>
                    @endforeach
                </select>
            </div>
        </td>
    </tr>
    <tr>
        <th>住所１</th>
        <td class="form-input-wide">
            <div>
                <input type="text" name="{{ $name }}[addr1]" value="" class="input-text-l">
                <span class="form-table-caption">郵便番号を入力して [住所検索] をクリックすると、住所が入力されます。</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>住所２</th>
        <td class="form-input-wide">
            <div>
                <input type="text" name="{{ $name }}[addr2]" value="" class="input-text-l">
                <span class="form-table-caption">住所１以降をご入力ください。</span>
            </div>
        </td>
    </tr>
    <tr>
        <th>電話番号</th>
        <td class="form-input-wide">
            <div>
                <input type="text" name="{{ $name }}[tel]" value="" class="input-text-l">
                <span class="form-table-caption">※携帯番号可</span>
            </div>
        </td>
    </tr>
    {{ $foot }}
</table>
