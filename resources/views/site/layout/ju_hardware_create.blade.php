@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
@section('content')
    {{Form::open(['url'=>'ju_hardware/store', 'method'=>'post'])}}
    {{Form::label('title', '五金名稱')}}<br>
    {{Form::text('name')}}<br>
    {{Form::label('title', '五金單價')}}<br>
    {{Form::text('price')}}<br>
    {{Form::label('title', '五金數量')}}<br>
    {{Form::text('amount')}}<br>
    {{Form::submit('新增')}}
    {{Form::close()}}
@endsection