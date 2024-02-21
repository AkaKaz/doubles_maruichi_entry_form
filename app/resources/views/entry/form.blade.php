@extends('template')

@section('title-area')
    <h1 class="contents-main-title">新卒採用エントリーフォーム</h1>
    <span class="contents-sub-title">ENTRY FORM</span>
@endsection

@section('main-area')
    <div class="heading-texts">
        <p>下記のエントリーシートに応募情報を入力し、<span>「入力内容を確認」</span>ボタンをクリックしてください。<br>
            採用において収集される応募者の個人情報について、応募エントリーいただいた皆様のプライバシーを尊重し、<br>
            個人情報を保護するために細心の注意を払い厳重に管理しております。</p>

        <p>詳しくは「<a href="https://www.maruichi-yg.com/recruit/privacy-policy/">個人情報保護方針について</a>」をご確認ください。</p>
    </div>

    <h2 class="entry-form-title">プロフィール情報の入力</h2>
    <p class="entry-form-attention">※全ての項目が入力必須項目となります。</p>

    <form name="form" method="post" id="form" action="index.php?act=confirm">

        <style>
            .err {
                text-align: left;
                color: #c00;
                line-height: 1.5;
                margin-bottom: 1.5em;
            }
        </style>

        <div class="form-box clearfix">

            <h3>プロフィール情報</h3>

            <table class="entry-table profile-table">
                <tr>
                    <th>氏 名</th>
                    <td class="form-input-name">
                        <div><span>氏</span><input type="text" name="a1" value="" class="input-text-s"></div>
                        <div><span>名</span><input type="text" name="a2" value="" class="input-text-s"></div>
                    </td>
                </tr>
                <tr>
                    <th>フリガナ</th>
                    <td class="form-input-name">
                        <div><span>シ</span><input type="text" name="a3" value="" class="input-text-s"></div>
                        <div><span>メイ</span><input type="text" name="a4" value="" class="input-text-s"></div>
                    </td>
                </tr>
                <tr>
                    <th>学校名</th>
                    <td class="form-input-wide">
                        <div><input type="text" name="a5" value="" class="input-text-l"></div>
                    </td>
                </tr>
                <tr>
                    <th>卒業年月日</th>
                    <td class="form-input-radio">
                        <div><label><input type="radio" name="a6" value="1"><span>既卒</span></label></div>
                        <div><label><input type="radio" name="a6" value="2025"><span>2025年3月卒業見込み</span></label>
                        </div>
                        <div><label><input type="radio" name="a6" value="2026"><span>2026年3月卒業見込み</span></label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>性 別</th>
                    <td class="form-input-radio">
                        <div><label><input type="radio" value="1" name="a7"><span>男性</span></label></div>
                        <div><label><input type="radio" value="2" name="a7"><span>女性</span></label></div>
                    </td>
                </tr>
                <tr>
                    <th>生年月日</th>
                    <td>
                        <div><select name="a8">
                                <option>1964</option>
                                <option>1965</option>
                                <option>1966</option>
                                <option>1967</option>
                                <option>1968</option>
                                <option>1969</option>
                                <option>1970</option>
                                <option>1971</option>
                                <option>1972</option>
                                <option>1973</option>
                                <option>1974</option>
                                <option>1975</option>
                                <option>1976</option>
                                <option>1977</option>
                                <option>1978</option>
                                <option>1979</option>
                                <option>1980</option>
                                <option>1981</option>
                                <option>1982</option>
                                <option>1983</option>
                                <option>1984</option>
                                <option>1985</option>
                                <option>1986</option>
                                <option>1987</option>
                                <option>1988</option>
                                <option>1989</option>
                                <option>1990</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                                <option>1994</option>
                                <option>1995</option>
                                <option>1996</option>
                                <option>1997</option>
                                <option>1998</option>
                                <option>1999</option>
                                <option>2000</option>
                                <option>2001</option>
                                <option>2002</option>
                                <option>2003</option>
                                <option>2004</option>
                                <option>2005</option>
                                <option>2006</option>
                                <option>2007</option>
                                <option>2008</option>
                                <option>2009</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                            </select><span>年</span></div>
                        <div><select name="a9">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select><span>月</span></div>
                        <div><select name="a10">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                            </select><span>日</span></div>
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td class="form-input-wide">
                        <div><input type="text" name="a11" value="" class="input-text-l"></div>
                    </td>
                </tr>
            </table>

        </div>

        <div class="form-box clearfix">

            <h3>住所情報</h3>

            <table class="entry-table address-table">
                <tr>
                    <th>郵便番号</th>
                    <td class="form-input-zip">
                        <div><input type="text" name="b1" value=""
                                class="input-text-zip1"><span>-</span><input type="text" name="b2" value=""
                                class="input-text-zip2"></div>
                        <div><button type="button" class="zip-search"
                                onclick="AjaxZip3.zip2addr('b1','b2','b3','b4');">住所検索</button></div>
                    </td>
                </tr>
                <tr>
                    <th>都道府県</th>
                    <td class="form-select-pref">
                        <div><select name="b3">
                                <option value="">選択してください</option>
                                <option>北海道</option>
                                <option>青森県</option>
                                <option>岩手県</option>
                                <option>宮城県</option>
                                <option>秋田県</option>
                                <option>山形県</option>
                                <option>福島県</option>
                                <option>茨城県</option>
                                <option>栃木県</option>
                                <option>群馬県</option>
                                <option>埼玉県</option>
                                <option>千葉県</option>
                                <option>東京都</option>
                                <option>神奈川県</option>
                                <option>新潟県</option>
                                <option>富山県</option>
                                <option>石川県</option>
                                <option>福井県</option>
                                <option>山梨県</option>
                                <option>長野県</option>
                                <option>岐阜県</option>
                                <option>静岡県</option>
                                <option>愛知県</option>
                                <option>三重県</option>
                                <option>滋賀県</option>
                                <option>京都府</option>
                                <option>大阪府</option>
                                <option>兵庫県</option>
                                <option>奈良県</option>
                                <option>和歌山県</option>
                                <option>鳥取県</option>
                                <option>島根県</option>
                                <option>岡山県</option>
                                <option>広島県</option>
                                <option>山口県</option>
                                <option>徳島県</option>
                                <option>香川県</option>
                                <option>愛媛県</option>
                                <option>高知県</option>
                                <option>福岡県</option>
                                <option>佐賀県</option>
                                <option>長崎県</option>
                                <option>熊本県</option>
                                <option>大分県</option>
                                <option>宮崎県</option>
                                <option>鹿児島県</option>
                                <option>沖縄県</option>
                            </select></div>
                    </td>
                </tr>
                <tr>
                    <th>住所１</th>
                    <td class="form-input-wide">
                        <div>
                            <input type="text" name="b4" value="" class="input-text-l">
                            <span class="form-table-caption">郵便番号を入力して [住所検索] をクリックすると、住所が入力されます。</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>住所２</th>
                    <td class="form-input-wide">
                        <div>
                            <input type="text" name="b5" value="" class="input-text-l">
                            <span class="form-table-caption">住所１以降をご入力ください。</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td class="form-input-wide">
                        <div>
                            <input type="text" name="b6" value="" class="input-text-l">
                            <span class="form-table-caption">※携帯番号可</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>連絡方法</th>
                    <td class="form-input-radio">
                        <div><label><input type="radio" value="2" name="b8"><span>電話</span></label></div>
                        <div><label><input type="radio" value="3" name="b8"><span>休暇中連絡先への電話</span></label>
                        </div>
                        <div><label><input type="radio" value="4" name="b8"><span>その他</span></label><input
                                type="text" name="b9" value=""></div>
                    </td>
                </tr>
                <tr>
                    <th>連絡可能時間帯</th>
                    <td class="form-input-wide">
                        <div>
                            <input type="text" name="b10" class="input-text-l" value="">
                            <span class="form-table-caption">例：9:00～17：00</span>
                        </div>
                    </td>
                </tr>
            </table>

        </div>


        <div class="form-box clearfix">

            <h3>帰省先住所</h3>

            <table class="entry-table address-table slide">
                <tr>
                    <td colspan="2" class="form-input-check">
                        <div>現住所と異なる場合は入力して下さい。現住所と同様の場合はチェックして下さい。</div>
                        <div><label><input class="ha" type="checkbox" name="ha"
                                    value="現住所と同じ"><span>現住所と同じ</span></label></div>
                    </td>
                </tr>
                <tr>
                    <th>郵便番号</th>
                    <td class="form-input-zip">
                        <div><input type="text" name="c1" value="" class="input-text-zip1"></div>
                        <div><span>-</span></div>
                        <div><input type="text" name="c2" value="" class="input-text-zip2"></div>
                        <div><button type="button" class="zip-search"
                                onclick="AjaxZip3.zip2addr('c1','c2','c3','c4');">住所検索</button></div>
                    </td>
                </tr>
                <tr>
                    <th>都道府県</th>
                    <td class="form-select-pref">
                        <div><select name="c3">
                                <option value="">選択してください</option>
                                <option>北海道</option>
                                <option>青森県</option>
                                <option>岩手県</option>
                                <option>宮城県</option>
                                <option>秋田県</option>
                                <option>山形県</option>
                                <option>福島県</option>
                                <option>茨城県</option>
                                <option>栃木県</option>
                                <option>群馬県</option>
                                <option>埼玉県</option>
                                <option>千葉県</option>
                                <option>東京都</option>
                                <option>神奈川県</option>
                                <option>新潟県</option>
                                <option>富山県</option>
                                <option>石川県</option>
                                <option>福井県</option>
                                <option>山梨県</option>
                                <option>長野県</option>
                                <option>岐阜県</option>
                                <option>静岡県</option>
                                <option>愛知県</option>
                                <option>三重県</option>
                                <option>滋賀県</option>
                                <option>京都府</option>
                                <option>大阪府</option>
                                <option>兵庫県</option>
                                <option>奈良県</option>
                                <option>和歌山県</option>
                                <option>鳥取県</option>
                                <option>島根県</option>
                                <option>岡山県</option>
                                <option>広島県</option>
                                <option>山口県</option>
                                <option>徳島県</option>
                                <option>香川県</option>
                                <option>愛媛県</option>
                                <option>高知県</option>
                                <option>福岡県</option>
                                <option>佐賀県</option>
                                <option>長崎県</option>
                                <option>熊本県</option>
                                <option>大分県</option>
                                <option>宮崎県</option>
                                <option>鹿児島県</option>
                                <option>沖縄県</option>
                            </select></div>
                    </td>
                </tr>
                <tr>
                    <th>住所１</th>
                    <td>
                        <div>
                            <input type="text" name="c4" value="" class="input-text-l">
                            <span class="form-table-caption">郵便番号を入力して [住所検索] をクリックすると、住所が入力されます。</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>住所２</th>
                    <td>
                        <div>
                            <input type="text" name="c5" value="" class="input-text-l">
                            <span class="form-table-caption">住所１以降をご入力ください。</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>
                        <div>
                            <input type="text" name="c6" value="" class="input-text-l">
                            <span class="form-table-caption">※携帯番号可</span>
                        </div>
                    </td>
                </tr>

            </table>

        </div>

        <div class="form-footer">
            <button type="reset" onClick="location.href='./'"><span>入力内容をクリア</span><i class="fa fa-angle-left"
                    aria-hidden="true"></i></button>
            <button type="submt" onClick="document.form.submit();"><span>入力内容を確認</span><i class="fa fa-angle-right"
                    aria-hidden="true"></i></button>
        </div>

    </form>
@endsection
