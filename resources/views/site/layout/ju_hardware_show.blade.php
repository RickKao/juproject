@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
@section('content')
    @if (isset($ju_hardware))
        <p>{{ $ju_hardware->name }}</p>
        <p>{{ $ju_hardware->price }}</p>
        <p>{{ $ju_hardware->amount }}</p>
    @endif

    {{ link_to(URL::previous(), '回上一頁') }}
@endsection