@extends('layouts.helloapp')

@section('title','Show')

@section('menuber')
    @parent
    詳細ページ
@endsection

@section('content')
@if($items != null)
@foreach($items as $item)
    <table with="400px">
        <tr><th width="50px">  id:</th><td width = "500px">{{$item->id}}</td></tr>
        <tr><th width="50px">name:</th><td width = "500px">{{$item->name}}</td></tr>
        <tr><th width="50px">mail:</th><td width = "500px">{{$item->mail}}</td></tr>
        <tr><th width="50px">age:</th><td  width = "500px">{{$item->age}}</td></tr>
    <table>

    @section('footer')
        copyringht 2020 tuyano.
    @endsection