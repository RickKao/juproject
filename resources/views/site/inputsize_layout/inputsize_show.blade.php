@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
 
@section('content')
    @if (isset($input))
    	@foreach ($input as $post)
    		{{ $post->id }}
		@endforeach
    @endif

    {{ link_to(URL::previous(), '回上一頁') }}
@endsection
 
@section('script')
@parent

@endsection