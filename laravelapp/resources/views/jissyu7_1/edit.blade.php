@extends('layouts.jissyu')
@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報更新画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="___(21)___" method="post">
    @method('___(22)___')
 <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>mail: </th><td><input type="text" name="mail"
         value="{{$item->mail}}"></td></tr>
      <tr><th>age: </th><td><input type="text" name="age"
         value="{{$item->age}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
