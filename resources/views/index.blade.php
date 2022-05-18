@extends('layouts.app')

@section('content')
<img src="{{ asset('img/top_first_view.png') }}" class="top_img header_margin">

<div class="content_div" style="margin-top: -4px;">
<div class="title_div">
        <div class="title_orange">GAMING配信は新たな世界を手に入れる。</div>
        <div class="top_about_explain">
            オンラインLiveGaming配信はXRを活用し<br>
            今までに無い広大な可能性を楽しみ方を手に入れました。<br>
            CasterGaimngは全ユーザーにエンタエインメントを提供します。
        </div>
        <img src="{{ asset('img/top_logo.png') }}" style="margin:50px;">
    </div>

    <div class="title_div">
        <div class="title_orange">CasterGamingの配信は多くのゲーミングサイトに配信されています。</div>
        <div class="top_about_explain">
            オンラインカジノサイト、アミューズメントサイト、NFTゲーミングサイトなど<br>
            様々なジャンルのゲーミングサイトに映像配信中。<br>
            多くのファンを獲得しユーザーを魅了しています。
        </div>
    </div>


@endsection




@section('content_sp')

<div class="content_div_bg_sp header_margin_sp">
</div>

<div class="content_div_bg" style="padding:20px 0;">
    <div class="title_div">
        <div class="title_en">About</div>
        <div class="title_ja">
            CLUB NOMARとは<br><br>
            本物のラグジュアリーと<br>
            落ち着いた時間を追求した<br>
            大人の為の空間です。<br><br>
            美意識が高く、ご来店いただく紳士様達に<br>
            より一層楽しんで頂くために努力を惜しまない<br>
            一流の女性キャストが揃っております。<br><br>
            私どもはお客さまの満足を追求し一流の<br>
            おもてなしで、一流の皆様をお待ちしています。
        </div>
    </div>
    <div style="width:315px; height:260px; background-color:gray; margin: auto;"></div>
</div>

<div class="content_div">
    <div class="title_div">
        <div class="title_en">Instagram</div>
        <div class="title_ja">
            CLUB NOMARの公式インスタグラムです。<br>
            在籍キャストのご紹介やイベントの最新情報などを<br>
            随時更新しています。<br>
            是非チェックしてください。<br>
        </div>
    </div>



</div>

<div class="content_div_bg" style="padding:20px 0;">
    <div class="title_div">
        <div class="title_en">News</div>
        <div class="title_ja">お知らせ</div>
    </div>
    <div class="top_news_div_sp">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
    </div>
    <div class="top_news_div_sp">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
    </div>
    <a href="{{ route('news_list') }}">
        <img src="{{ asset('img/news_list_btn.png') }}" class="news_list_btn">
    </a>

    <div class="top_secure_sp" style="padding-top:50px;">【CLUB NOMAR安全対策】</div>

    <img src="{{ asset('img/top_border1_sp.png') }}" class="top_border_sp">
    <div class="top_secure_orange_sp">
        スタッフは新型コロナウイルスの<br>
        ワクチンを接種しています。<br>
        店内は常に換気を徹底しており、<br>
        安心してお過ごしいただけます。
    </div>
    <img src="{{ asset('img/top_border2_sp.png') }}" class="top_border_sp">
    <div class="secure_div">
        全スタッフが新型コロナ抗体検査キットによる検査を実施。<br>
        女性キャストも全員実施しています。<br><br>
        ・従業員の入店時の検温<br>
        ・店内消毒の散布<br>
        ・店内接触部分の消毒<br>
        ・店内の換気<br>
        営業にあたり、店内の徹底的な消毒につとめ、<br>
        お客様ならびに従業員の安全を確保し、<br>
        安心して楽しんでいただけるよう努めてまいります。
    </div>
    <div class="more_view_btn_sp">
        <img src="{{ asset('img/detail_open_btn_sp.png') }}" class="detail_btn_sp">
    </div>



</div>


@endsection