@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
@section('content')
    {{Form::open(['url'=>'ju_aluminum/store', 'method'=>'post'])}}
    {{Form::label('title', '材料型號')}}<br>
    {{Form::text('type')}}<br>
    {{Form::label('title', '材料名稱')}}<br>
    {{Form::text('name')}}<br>
    {{Form::label('title', '料長')}}<br>
    {{Form::text('length')}}<br>
    {{Form::label('title', '元/M')}}<br>
    {{Form::text('price')}}<br>
    {{Form::label('title', '備註')}}<br>
    {{Form::text('remarks')}}<br>
    {{Form::submit('新增')}}
    {{Form::close()}}
@endsection