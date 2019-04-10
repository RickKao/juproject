@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
@section('content')
    <h1>{{ $title }}</h1>
    {{Form::open(['url'=>'ju_hardware/'.$ju_hardware->id, 'method'=>'put'])}}
    {{Form::label('name', '五金名稱')}}<br>
    {{Form::text('name', $ju_hardware->name)}}<br>
    {{Form::label('price', '五金價格')}}<br>
    {{Form::text('price', $ju_hardware->price)}}<br>
    {{Form::label('amount', '五金數量')}}<br>
    {{Form::text('amount', $ju_hardware->amount)}}<br>
    {{Form::submit('儲存')}}
    {{Form::close()}}
    {{ Form::open(['url'=>'ju_hardware/'.$ju_hardware->id, 'method'=>'delete'])}}
    <button type="submit">刪除</button>
    {{Form::close()}}
@endsection