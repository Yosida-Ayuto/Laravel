@extends('layouts.book')

@section('title', '削除ページ')

@section('menu_title')
@parent
削除ページ
@endsection

@section('content')
  <form action = "/book/del" method = "post">
  <table>
      @csrf
   <tr><th>書籍名</th><th>id</th><th>バーコード</th><th>冊数</th><th>値段</th>
       <tr>
           <td>{{$form->name}}</td>
           <td>{{$form->id}}</td>
           <td>{{$form->barcode}}</td>
           <td>{{$form->number}}</td> 
           <td>{{$form->price}}</td> 
           <input type ="hidden" name="id" value ="{{$form->id}}">
       </tr>
   </table>
   <input type="submit" value="削除"></td>
</form>

@endsection

@section('footer')
<td><a href="/book">メニュー</a></td>
@endsection