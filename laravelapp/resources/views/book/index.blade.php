@extends('layouts.book')

@section('title', 'メニュー')

@section('menu_title')
メニュー
@endsection
@section('content')
   <table>
   <tr><th>書籍名</th><th>id</th><th>バーコード</th><th>冊数</th><th>値段</th><th>更新</th><th>削除</th></tr>
   @foreach ($items as $item)
       <tr>
           <!-- 表示 -->
           <td>{{$item->name}}</td>
           <td>{{$item->id}}</td>
           <td>{{$item->barcode}}</td>
           <td>{{$item->number}}</td> 
           <td>{{$item->price}}</td> 
           <!-- 更新 -->
           <td><a href="/book/edit?id={{$item->id}}">更新</a></td>
           <!-- 削除 -->
           <td><a href="/book/del?id={{$item->id}}">削除</a></td>
       </tr>
  @endforeach
   </table>
   <!-- 登録 -->
   <a href="/book/add">新規登録</a>
   <!--　次のページ　-->
   {{$items->links()}}
@endsection