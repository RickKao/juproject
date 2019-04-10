@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
@section('content')
    <h1>{{ $title }}</h1>
    <div>{{ link_to('ju_hardware/create', '新增') }}</div>
    @if (isset($ju_hardware))
        <ol>
        @foreach ($ju_hardware as $post)
            <li>{{ link_to('ju_hardware/show/'.$post->id, $post->name) }}
            ({{ link_to('ju_hardware/show/'.$post->id.'/edit', '編輯') }})</li>
        @endforeach
        </ol>
    @endif
@endsection