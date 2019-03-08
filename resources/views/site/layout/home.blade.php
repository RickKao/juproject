<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <div>{{ link_to('ju_custom/create', '新增') }}</div>
    @if (isset($ju_customer))
        <ol>
        @foreach ($ju_customer as $post)
            <li>{{ link_to('ju_custom/show/'.$post->id, $post->title) }}
            ({{ link_to('ju_custom/show/'.$post->id.'/edit', '編輯') }})</li>
        @endforeach
        </ol>
    @endif
</body>