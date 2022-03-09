@extends('layouts.helloapp')

@section('title','Index')

@section('menuber')
    @parent
    インデックスページ
    @endsection

    @section('content')
    <p>ここが本文のコンテンツです</p>
    <p>これは、<middleware>google.com</middleware>へのリンクです</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです</p>
@endsection

    @section('footer')
        copyringht 2020 tuyano.
    @endsection