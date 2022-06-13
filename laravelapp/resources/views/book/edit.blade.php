@extends('layouts.book')

@section('title', '更新ページ')

@section('menu_title')

@endsection

@section('content')
  <form action = "/book/edit" method = "post">
      <table>
@csrf
            <!--  idは書き換えできないようhidden-->
          <input type ="hidden" name="id" value ="{{$form->id}}">
          @csrf

<!-- 入力部分 -->
    @error('name')
    <tr><th class="error">Error</th>
    <td class="error">{{$message}}</td></tr>
    @enderror 
     <tr><th>書籍名</th><td><input type="text" name="name" value="{{ $form->name }}"></td></tr>
     
     @error('barcode')
    <tr><th class="error">Error</th>
    <td class="error">{{$message}}</td></tr>
    @enderror 
      <tr><th>バーコード</th><td><input type="text" name="barcode"  value="{{ $form->barcode }}"></td></tr>

    @error('number')
    <tr><th class="error">Error</th>
    <td class="error">{{$message}}</td></tr>
    @enderror 
      <tr><th>冊数</th><td><input type="text" name="number"  value="{{ $form->number }}"></td></tr>
    
    @error('price')
    <tr><th class="error">Error</th>
    <td class="error">{{$message}}</td></tr>
    @enderror 
      <tr><th>値段</th><td><input type="text" name="price"  value="{{ $form->price }}"></td></tr>

    
      <tr><th></th><td><input type="submit" value ="登録"></td></tr>
</table>
</form>
      </table>
    </form>


@endsection

@section('footer')
<td><a href="/book">メニュー</a></td>
@endsection