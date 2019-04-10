@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
@section('content')
    <h1>{{ $title }}</h1>
    {{Form::open(['url'=>'ju_aluminum/'.$ju_aluminum->id, 'method'=>'put'])}}
    {{Form::label('type', '材料型號')}}<br>
    {{Form::text('type', $ju_aluminum->type)}}<br>
    {{Form::label('name', '材料名稱')}}<br>
    {{Form::text('name', $ju_aluminum->name)}}<br>
    {{Form::label('length', '料長')}}<br>
    {{Form::text('length', $ju_aluminum->length)}}<br>
    {{Form::label('price', '元/M')}}<br>
    {{Form::text('price', $ju_aluminum->price)}}<br>
    {{Form::label('remarks', '備註')}}<br>
    {{Form::text('remarks', $ju_aluminum->remarks)}}<br>
    {{Form::submit('儲存')}}
    {{Form::close()}}
    {{ Form::open(['url'=>'ju_aluminum/'.$ju_aluminum->id, 'method'=>'delete'])}}
    <button type="submit">刪除</button>
    {{Form::close()}}
@endsection