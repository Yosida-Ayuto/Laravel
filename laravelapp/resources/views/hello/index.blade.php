<html>
    <head>
    <title>Bland/Index</title>
         <style>
            body {font-size:16pt; color:#999;}
            h1 {font-size:120pt; text-align:right; color:#f6f6f6; 
                margin: -15px 0px 0px 0px; letter-spacing:-4pt;}
         </style>
     </head>
     <body>
        <h1>Blade/Index</h1>
            <p>&#064;foreachデレクティブのテスト</p>
        <ol>
            @foreach($data as $item)
            <li>{{$item}}</li>
            @endforeach
        </ol>
     </body>
</html>
