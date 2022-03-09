@extends('layouts.jissyu')

@section('title', 'jissyu')

@section('menu_title')
    Laravelについて
 @endsection

 @section('menu_content')
<ul>
    <li>特徴</li>
    <li>バージョン</li>
</ul>
@section('components.menu')
@___(3)___('menu_title')
特徴
@___(4)___

@slot('menu_content')
<p>Laravelは、MVCのWebアプリケーション開発用の無料・オープンソースのPHPで書かれたWebアプリケーションフレームワークである。</p>
@endslot
@___(5)___
@endsection

@section('content')
   <p>開発元：Taylor Otwell</p>
   <p>初版：2011年6月</p>
<p>プログラミング言語：PHP</p>
<p>対応OS：クロスプラットフォーム</p>
<p>公式サイト：laravel.com</p>
@___(6)___('___(7)___', ['subview_title'=>'バージョン',
'subview_content'=>'2020年3月より最新バージョンは7。PHPは7.2.5以上。'])
@endsection


@section('footer')
copyringht oopyright 2020 東京クリエイター工学院
@endsection
