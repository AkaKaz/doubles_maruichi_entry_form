<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MidCareerEntryRequest extends FormRequest
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
            'profile.last_name'       => 'required|string|max:10',
            'profile.first_name'      => 'required|string|max:10',
            'profile.last_name_kana'  => 'required|string|max:14',
            'profile.first_name_kana' => 'required|string|max:14',
            'profile.school_name'     => 'required|string',
            'profile.sex'             => 'required|string',
            'profile.birthday_year'   => 'required|string',
            'profile.birthday_month'  => 'required|string',
            'profile.birthday_day'    => 'required|string',
            'profile.email'           => 'required|string',
            'profile._face.base64'    => 'string',
            'profile._face.mime'      => 'string',
            'profile.face'            => 'required_without:profile._face.base64|image|mimes:jpeg,png,jpg,gif|max:2048',

            // 住所
            'address.zip1'                 => 'required|string|max:3',
            'address.zip2'                 => 'required|string|max:4',
            'address.pref'                 => 'required|string|max:3',
            'address.addr1'                => 'required|string|max:29',
            'address.addr2'                => 'required|string|max:33',
            'address.tel'                  => 'required|string|max:20',
            'address.mobile'               => 'nullable|string|max:20',
            'address.contact_method'       => 'required|string',
            'address.other_contact_method' => 'required_if:address.contact_method,その他|nullable|string',
            'address.contact_time'         => 'required|string',

            // 帰省先
            'home.same_addr' => 'string',
            'home.zip1'      => 'required_without:home.same_addr|nullable|string|max:3',
            'home.zip2'      => 'required_without:home.same_addr|nullable|string|max:4',
            'home.pref'      => 'required_without:home.same_addr|nullable|string|max:3',
            'home.addr1'     => 'required_without:home.same_addr|nullable|string|max:29',
            'home.addr2'     => 'required_without:home.same_addr|nullable|string|max:33',
            'home.tel'       => 'required_without:home.same_addr|nullable|string|max:20',

            // 学歴・職歴
            'careers.*.content' => 'nullable|string|max:37',
            'careers.*.year'    => 'required_with:careers.*.content|nullable|string',
            'careers.*.month'   => 'required_with:careers.*.content|nullable|string',

            // 免許・資格
            'licenses.*.content' => 'nullable|string|max:37',
            'licenses.*.year'    => 'required_with:licenses.*.content|nullable|string',
            'licenses.*.month'   => 'required_with:licenses.*.content|nullable|string',

            // 賞罰
            'rewards.*.content' => 'nullable|string|max:37',
            'rewards.*.year'    => 'required_with:rewards.*.content|nullable|string',
            'rewards.*.month'   => 'required_with:rewards.*.content|nullable|string',

            // 身上書
            'personal_statement.reason'                 => 'required|string|max:126',
            'personal_statement.strength'               => 'required|string|max:126',
            'personal_statement.weakness'               => 'required|string|max:126',
            'personal_statement.attitude'               => 'required|string|max:126',
            'personal_statement.favorite_subject1'      => 'required|string',
            'personal_statement.favorite_subject2'      => 'required|string',
            'personal_statement.favorite_subject3'      => 'required|string',
            'personal_statement.favorite_subject4'      => 'required|string',
            'personal_statement.favorite_subject5'      => 'required|string',
            'personal_statement.favorite_subject6'      => 'required|string',
            'personal_statement.favorite_subject_level' => 'required|string|max:84',
            'personal_statement.sport'                  => 'required|string|max:84',
            'personal_statement.hobby'                  => 'required|string|max:84',
            'personal_statement.desire'                 => 'required|string|max:126',
            'personal_statement.family.*.name'          => 'nullable|string|max:12',
            'personal_statement.family.*.relationship'  => 'required_with:personal_statement.family.*.name|nullable|string|max:3',
            'personal_statement.family.*.age'           => 'required_with:personal_statement.family.*.name|nullable|string',
            'personal_statement.family.*.work'          => 'required_with:personal_statement.family.*.name|nullable|string|max:16',
            'personal_statement.family.*.living'        => 'required_with:personal_statement.family.*.name|nullable|string',
            'personal_statement.commute_hour'           => 'required|string',
            'personal_statement.commute_minute'         => 'required|string',
            'personal_statement.dependents'             => 'required|string',
            'personal_statement.spouse'                 => 'required|string',
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
            'profile.sex'             => '『プロフィール情報：性別』',
            'profile.birthday_year'   => '『プロフィール情報：生年月日（年）』',
            'profile.birthday_month'  => '『プロフィール情報：生年月日（月）』',
            'profile.birthday_day'    => '『プロフィール情報：生年月日（日）』',
            'profile.email'           => '『プロフィール情報：メールアドレス』',
            'profile.face'            => '『プロフィール情報：顔写真』',

            // 住所
            'address.zip1'                 => '『住所情報：郵便番号(上3桁)』',
            'address.zip2'                 => '『住所情報：郵便番号(下4桁)』',
            'address.pref'                 => '『住所情報：都道府県』',
            'address.addr1'                => '『住所情報：住所１』',
            'address.addr2'                => '『住所情報：住所２』',
            'address.tel'                  => '『住所情報：電話番号』',
            'address.mobile'               => '『住所情報：携帯電話』',
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

            // 学歴・職歴
            'careers.*.content' => '『学歴・職歴:index：内容』',
            'careers.*.year'    => '『学歴・職歴:index：年』',
            'careers.*.month'   => '『学歴・職歴:index：月』',

            // 免許・資格
            'licenses.*.content' => '『免許・資格:index：内容』',
            'licenses.*.year'    => '『免許・資格:index：年』',
            'licenses.*.month'   => '『免許・資格:index：月』',

            // 賞罰
            'rewards.*.content' => '『賞罰:index：内容』',
            'rewards.*.year'    => '『賞罰:index：年』',
            'rewards.*.month'   => '『賞罰:index：月』',

            // 身上書
            'personal_statement.reason'                 => '『身上書：志望の動機』',
            'personal_statement.strength'               => '『身上書：セールスポイント』',
            'personal_statement.weakness'               => '『身上書：ウイークポイント』',
            'personal_statement.attitude'               => '『身上書：仕事への取組姿勢・正確度・処理スピードに関して』',
            'personal_statement.favorite_subject1'      => '『身上書：得意な学科1』',
            'personal_statement.favorite_subject2'      => '『身上書：得意な学科2』',
            'personal_statement.favorite_subject3'      => '『身上書：得意な学科3』',
            'personal_statement.favorite_subject4'      => '『身上書：得意な学科4』',
            'personal_statement.favorite_subject5'      => '『身上書：得意な学科5』',
            'personal_statement.favorite_subject6'      => '『身上書：得意な学科6』',
            'personal_statement.favorite_subject_level' => '『身上書：1番の学科はどの程度得意ですか？』',
            'personal_statement.sport'                  => '『身上書：スポーツ』',
            'personal_statement.hobby'                  => '『身上書：趣味』',
            'personal_statement.desire'                 => '『身上書：当社への希望記入欄』',
            'personal_statement.family.*.name'          => '『身上書：家族構成:index：氏名』',
            'personal_statement.family.*.relationship'  => '『身上書：家族構成:index：続柄』',
            'personal_statement.family.*.age'           => '『身上書：家族構成:index：年齢』',
            'personal_statement.family.*.work'          => '『身上書：家族構成:index：職業・勤務先』',
            'personal_statement.family.*.living'        => '『身上書：家族構成:index：同居の有無』',
            'personal_statement.commute_hour'           => '『身上書：通勤時間(時)』',
            'personal_statement.commute_minute'         => '『身上書：通勤時間(分)』',
            'personal_statement.dependents'             => '『身上書：扶養家族数』',
            'personal_statement.spouse'                 => '『身上書：配偶者』',
        ];
    }

    public function messages(): array
    {
        return [
            'required'         => ':attributeを入力してください',
            'required_if'      => ':attributeを入力してください',
            'required_with'    => ':attributeを入力してください',
            'required_without' => ':attributeを入力してください',
            'image'            => ':attributeは画像ファイルを選択してください',
            'mimes'            => ':attributeは:values形式の画像ファイルを選択してください',
            'max'              => ':attributeは:max文字以内で入力してください',
        ];
    }
}
