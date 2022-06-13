@extends('layouts.book')

@section('title', '登録ページ')



@section('content')

@if (count($errors) > 0)
<p>入力に誤りがあります</p>
@endif

  <form action = "/book/add" method = "post">
      <table>
@csrf

    <!-- 入力部分 -->
        @error('name')
        <tr><th class="error">Error</th>
        <td class="error">{{$message}}</td></tr>
        @enderror 
         <tr><th>書籍名</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
         
         @error('barcode')
        <tr><th class="error">Error</th>
        <td class="error">{{$message}}</td></tr>
        @enderror 
          <tr><th>バーコード</th><td><input type="text" name="barcode"  value="{{old('barcode')}}"></td></tr>

        @error('number')
        <tr><th class="error">Error</th>
        <td class="error">{{$message}}</td></tr>
        @enderror 
          <tr><th>冊数</th><td><input type="text" name="number"  value="{{old('number')}}"></td></tr>
        
        @error('price')
        <tr><th class="error">Error</th>
        <td class="error">{{$message}}</td></tr>
        @enderror 
          <tr><th>値段</th><td><input type="text" name="price"  value="{{old('price')}}"></td></tr>

        
          <tr><th></th><td><input type="submit" value ="登録"></td></tr>
</table>
</form>


@endsection

@section('footer')
<td><a href="/book">メニュー</a></td>
@endsection