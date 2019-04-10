@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
@section('content')
    <h1>{{ $title }}</h1>
    <div>{{ link_to('ju_aluminum/create', '新增') }}</div>
    @if (isset($ju_aluminum))
        <ol>
        @foreach ($ju_aluminum as $post)
            <li>{{ link_to('ju_aluminum/show/'.$post->id, $post->name) }}編號:{{ $post->type }}
            {{ link_to('ju_aluminum/show/'.$post->id.'/edit', '編輯') }}</li>
        @endforeach
        </ol>
    @endif
@endsection