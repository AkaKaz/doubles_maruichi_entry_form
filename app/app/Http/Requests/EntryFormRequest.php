<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // プロフィール
            'profile.last_name'       => 'required|string',
            'profile.first_name'      => 'required|string',
            'profile.last_name_kana'  => 'required|string',
            'profile.first_name_kana' => 'required|string',
            'profile.school_name'     => 'required|string',
            'profile.graduation_date' => 'required|string',
            'profile.sex'             => 'required|string',
            'profile.birthday_year'   => 'required|string',
            'profile.birthday_month'  => 'required|string',
            'profile.birthday_day'    => 'required|string',
            'profile.email'           => 'required|string',

            // 住所
            'address.zip1'                 => 'required|string',
            'address.zip2'                 => 'required|string',
            'address.pref'                 => 'required|string',
            'address.addr1'                => 'required|string',
            'address.addr2'                => 'required|string',
            'address.tel'                  => 'required|string',
            'address.contact_method'       => 'required|string',
            'address.other_contact_method' => 'required_if:address.contact_method,その他|nullable|string',
            'address.contact_time'         => 'required|string',

            // 帰省先
            'home.same_addr' => 'string',
            'home.zip1'      => 'required_without:home.same_addr|nullable|string',
            'home.zip2'      => 'required_without:home.same_addr|nullable|string',
            'home.pref'      => 'required_without:home.same_addr|nullable|string',
            'home.addr1'     => 'required_without:home.same_addr|nullable|string',
            'home.addr2'     => 'required_without:home.same_addr|nullable|string',
            'home.tel'       => 'required_without:home.same_addr|nullable|string',
        ];
    }

    public function attributes(): array
    {
        return [
            // プロフィール
            'profile.last_name'       => '『プロフィール情報：氏名(氏)』',
            'profile.first_name'      => '『プロフィール情報：氏名(名)』',
            'profile.last_name_kana'  => '『プロフィール情報：フリガナ(シ)』',
            'profile.first_name_kana' => '『プロフィール情報：フリガナ(メイ)』',
            'profile.school_name'     => '『プロフィール情報：学校名』',
            'profile.graduation_date' => '『プロフィール情報：卒業年月日』',
            'profile.sex'             => '『プロフィール情報：性別』',
            'profile.birthday_year'   => '『プロフィール情報：生年月日（年）』',
            'profile.birthday_month'  => '『プロフィール情報：生年月日（月）』',
            'profile.birthday_day'    => '『プロフィール情報：生年月日（日）』',
            'profile.email'           => '『プロフィール情報：メールアドレス』',

            // 住所
            'address.zip1'                 => '『住所情報：郵便番号(上3桁)』',
            'address.zip2'                 => '『住所情報：郵便番号(下4桁)』',
            'address.pref'                 => '『住所情報：都道府県』',
            'address.addr1'                => '『住所情報：住所１』',
            'address.addr2'                => '『住所情報：住所２』',
            'address.tel'                  => '『住所情報：電話番号』',
            'address.contact_method'       => '『住所情報：連絡方法』',
            'address.other_contact_method' => '『住所情報：連絡方法(その他)』',
            'address.contact_time'         => '『住所情報：連絡可能時間帯』',

            // 帰省先
            'home.same_addr' => '現住所と同じ',
            'home.zip1'      => '『帰省先住所：郵便番号(上3桁)』',
            'home.zip2'      => '『帰省先住所：郵便番号(下4桁)』',
            'home.pref'      => '『帰省先住所：都道府県』',
            'home.addr1'     => '『帰省先住所：住所１』',
            'home.addr2'     => '『帰省先住所：住所２』',
            'home.tel'       => '『帰省先住所：電話番号』',
        ];
    }

    public function messages(): array
    {
        return [
            'required'         => ':attributeを入力してください',
            'required_if'      => ':attributeを入力してください',
            'required_without' => ':attributeを入力してください',
        ];
    }
}
