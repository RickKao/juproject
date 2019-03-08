<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    {{Form::open(['url'=>'ju_custom/'.$ju_customer->id, 'method'=>'put'])}}
    {{Form::label('title', '標題')}}<br>
    {{Form::text('title', $ju_customer->title)}}<br>
    {{Form::label('content', '內容')}}<br>
    {{Form::textarea('content', $ju_customer->description)}}<br>
    {{Form::submit('儲存')}}
    {{Form::close()}}
    {{ Form::open(['url'=>'ju_custom/'.$ju_customer->id, 'method'=>'delete'])}}
    <button type="submit">刪除</button>
    {{Form::close()}}
</body>
</html>