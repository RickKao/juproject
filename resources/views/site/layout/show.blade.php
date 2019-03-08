<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    @if (isset($ju_customer))
        <h1>{{ $ju_customer->title }}</h1>
        <p>{{ $ju_customer->description }}</p>
    @endif

    {{ link_to(URL::previous(), '回上一頁') }}
</body>
</html>