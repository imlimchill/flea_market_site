@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <div class="border-b-8">
                <h2 class="text-3xl text-gray-800 font-mono">販売者の個人情報保護方針</h2>
            </div>

            <div class="mt-4">
                当社は、ニトリグループの一員として、関係各位よりお預かりした個人情報を適正かつ厳格に扱うことが当社の社会的責務であることを認識し、「個人情報保護方針」に定めた事項を遵守します。また、個人情報の取扱いを継続的に改善するよう努めます。
                <div class="text-right">株式会社　神田雑貨店</div>
                <div class="text-right">体表　白石大</div>
            </div>
            <form action="/sellerRg/update" method="POST">                
                @csrf
            <div class="grid mt-3 mb-10">
                <div class="mt-8">
                    <div class="mt-2">
                        <div class="border-b border-gray-800 text-xl mt-2 hover:text-gray:300">A　個人情報保護方針</div>

                        <div class="overflow-auto h-40 mt-4 border-2 p-2">
                            <div class="text-lg">1．関連法令・ガイドライン等の遵守</div>
                            &nbsp&nbsp 当社は、個人情報の取得・利用その他の個人情報の取扱いに関し、「個人情報の保護に関する法律」（以下、「法」といいます）、
                            関連する政省令、ガイドライン等を遵守します。<br>
                            <div class="text-lg mt-2">2．利用目的</div>
                            &nbsp&nbsp 当社は、提供を受けた個人情報について、その利用目的を特定するとともに、利用目的の達成に必要な範囲において取扱うこととします。
                            当社における個人情報の利用目的は、【個人情報の利用目的について】をご参照ください。
                            <div class="text-lg mt-2">3．利用目的の変更</div>
                            &nbsp&nbsp 前条の利用目的は、変更前の利用目的と関連性を有すると合理的に認められる範囲でのみ変更することがあります。
                            この場合、当社はホームページ等により変更された利用目的を公表します。
                            <div class="text-lg mt-2">4．利用目的の範囲内での利用</div>
                            &nbsp&nbsp 当社は利用目的の達成に必要な範囲でのみ個人情報を取扱い、その範囲を超える場合には、本人の同意を得ます。ただし、以下のいずれかの場合を除きます。<br>
                            (1) 法令に基づく場合<br>
                            (2) 人の生命、身体または財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき<br>
                            (3) 公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき<br>
                            (4) 国の機関もしくは地方公共団体またはその委託を受けた者が法令に定める事務をすることに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき
                            <div class="text-lg mt-2">5. 適正な取得</div>
                            &nbsp&nbsp 当社は、不正の手段により個人情報を取得しません。
                            <div class="text-lg mt-2">6．要配慮個人情報</div>
                            &nbsp&nbsp 当社が要配慮個人情報（不当な差別や偏見その他の不利益が生じないように取扱いに特に配慮を要するものとして法第2条3項で定義された個人情報）を取得する場合には、あらかじめ本人の同意を得ます。ただし、以下の場合は、あらかじめ本人の同意を得ることなく、要配慮個人情報を得ることがあります。
                            (1) 法令に基づく場合<br>
                            (2) 人の生命、身体または財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき<br>
                            (3) 公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、本人の同意をとることが困難であるとき<br>
                            (4) 国の機関もしくは地方公共団体またはその委託を受けた者が法令に定める事務をすることに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>
                            (5) 当該要配慮個人情報が、本人、国の機関、地方公共団体、法第７６条第１項各号に定める者の他、個人情報保護委員会規則で定める者により公開されている場合<br>
                            (6) その他前各号に定める場合の準じるものとして政令の定める場合
                        </div>
                        <label><input type="checkbox" class="mt-3" name="agree1" value="agree1" @if(old('agree1')) checked @endif> 동의합니다. </label>
                        @error('agree1')
                            <small class="text-red-500">{{ $message }}</small><br>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="grid mt-3 mb-10">
                <div class="mt-8">
                    <div class="mt-2">
                        <div class="border-b border-gray-800 text-xl mt-2 hover:text-gray:300">B　Cookie（クッキー）ポリシー</div>

                        <div class="overflow-auto h-40 mt-4 border-2 p-2">
                            <div class="text-lg">1．Cookieの利用</div>
                            &nbsp&nbsp Cookie（クッキー）とは、サイトにアクセスした際にブラウザに保存される情報です。
                            ニトリグループが管理するウェブサイトおよびサービスにおいては、お客様により便利にサイトを閲覧していただくため、
                            本サイトの継続的な改善のため、Cookieを利用しております（なお、Cookieに個人情報は含まれておりません）。また、ニトリグループは、
                            広告配信事業者と提携することにより、インターネット上の他のサイトにおいて、広告を掲載しています。<br>
                            <div class="text-lg mt-2">2．利用目的</div>
                            &nbsp&nbsp 入力の簡略化などお客様の利便性の向上のため<br>
                            お客様の関心がある情報の表示のため<br>
                            ニトリグループのウェブサイトおよびサービスの改善・向上のため<br>
                            個人が特定されない形でのアクセス解析のため<br>
                            <div class="text-lg mt-2">3．無効にする方法</div>
                            &nbsp&nbsp ニトリサイトへのリンクは、原則として、自由に行っていただいて構いません。
                            ただし、以下のいずれかに該当するかまたは該当するおそれがあるリンクの設定は行わないでください。<br>
                            1. 全てのCookieを無効にする方法
                            ブラウザの設定を変更することで、Cookieを無効にすることができます。
                            この場合、一部のウェブサイトの機能が使用できなくなる、一部のページが正しく表示されなくなる、
                            当社サービスの一部が受けられなくなる場合があります。ブラウザの設定を変更される方は、各ブラウザの製造元へご確認ください。
                            2. 特定のCookieを無効にする方法
                            お客様は、各企業のオプトアウトページより、Cookieを無効化 (オプトアウト) することにより、
                            ニトリグループによる本サイトにおける当社が付与する識別子およびお客様の属性情報の利用を停止することができます。
                            情報提供を停止するための方法はリンク先（リンク貼る、更新の都度移行先ページ変更）にそれぞれ記載されています。この場合、各社が提供する製品やサービスが受けられなくなる場合があります。
                            <div class="text-lg mt-2">4．Googleアナリティクスについて</div>
                            &nbsp&nbsp ニトリグループが管理するウェブサイトにおいては、本サイトの継続的な改善のためGoogleによるアクセス解析ツールGoogle 
                            アナリティクスを使用しております。Googleアナリティクスではデータの収集のためCookieを使用しております。このデータは匿名で収集されて
                            おり、個人は特定されません。この機能はCookieを無効にすることで取集を拒否することができますので、お使いのブラウザの設定をご確認ください。
                            Google アナリティクスでデータが収集、処理される仕組みについては、
                            Google社の「GOOGLE のサービスを使用するサイトやアプリから収集した情報の GOOGLE による使用」新しいウィンドウが開きますをご確認ください。
                        </div>
                        <label><input type="checkbox" class="mt-3" name="agree2" value="agree2" @if(old('agree2')) checked @endif> 동의합니다. </label>
                        @error('agree2')
                            <small class="text-red-500">{{ $message }}</small><br>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="grid justify-items-center">            
                <input type="submit" value="販売者登録" class="mb-10 bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 border border-gray-900 rounded">
            </form>                
            </div>
        </div>
    </div>
@endsection
