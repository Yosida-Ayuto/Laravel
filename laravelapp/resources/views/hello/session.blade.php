@extends('layouts.helloapp')

@section('title','Show')

@section('menuber')
    @parent
    セッションページ
@endsection

@section('content')
<P>{{$session_data}}</p>
<form action ="/hello/session" methodb="post">
    @csrf
    <input type="text" name="imput">
    <input type="submit" value="send">
</form>
@endsection

    @section('footer')\
        copyringht 2020 tuyano.
    @endsection