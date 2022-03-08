@extends('layouts.helloapp')

@section('title','Index')

@section('menuber')
    @parent
    インデックスページ
    @endsection

    @section('content')
    <p>ここが本文のコンテンツです</p>
    <p>Controller value<br>'message'={{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
    @endsection

    @section('footer')
        copyringht 2020 tuyano.
    @endsectio