@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
@section('content')
    @if (isset($ju_aluminum))
        <p>{{ $ju_aluminum->type }}</p>
        <p>{{ $ju_aluminum->name }}</p>
        <p>{{ $ju_aluminum->length }}</p>
        <p>{{ $ju_aluminum->price }}</p>
        <p>{{ $ju_aluminum->remarks }}</p>
    @endif

    {{ link_to(URL::previous(), '回上一頁') }}
@endsection