<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    {{Form::open(['url'=>'ju_custom/store', 'method'=>'post'])}}
    {{Form::label('title', '標題')}}<br>
    {{Form::text('title')}}<br>
    {{Form::label('內容')}}<br>
    {{Form::textarea('content')}}<br>
    {{Form::submit('發表文章')}}
    {{Form::close()}}
</body>
</html>