@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
 
@section('content')
    {{Form::open(['url'=>'Calcul_size/store', 'method'=>'post'])}}
    客戶:
    {{Form::select('custmor[]', array(
        '123' => '鼎國', 
    ))}}    
    {{Form::label('title','尺寸')}}<br>
    寬:{{Form::text('w_size[]')}}
    高:{{Form::text('h_size[]')}}
    氣高:{{Form::text('e_size[]')}}
    {{Form::select('windows_type[]', array(
        'two_pull' => '二拉', 
        'two_pull_open_w' => '二拉開天活動',
        'two_pull_open_t' => '二拉開天固定', 
        'two_pull_open_w' => '二拉開天活動',
        'three_pull' => '三拉', 
        'three_pull_open_w' => '三拉開天活動',
        'three_pull_open_t' => '三拉開天固定', 
        'four_pull' => '四拉',
        'four_pull_open_w' => '四拉開天活動', 
        'four_pull_open_t' => '四拉開天固定',
    ))}}
    <div id="showBlock"></div>
    <input type="button" id="btn" value="addItem" />
    {{Form::submit('計算')}}
    {{Form::close()}}
@endsection
 
@section('script')
@parent
<script>
  //set the default value
  var txtId = 1;
  
  //add input block in showBlock
  $("#btn").click(function () {
      $("#showBlock").append('<div id="div' + txtId + '">客戶:<select name="custmor[]"><option value="123">頂國</option>寬:<input name="w_size[]" type="text">高:<input name="h_size[]" type="text">氣高:<input name="e_size[]" type="text"><select name="windows_type[]"><option value="two_pull">二拉</option><option value="two_pull_open_w">二拉開天活動</option><option value="two_pull_open_t">二拉開天固定</option><option value="three_pull">三拉</option><option value="three_pull_open_w">三拉開天活動</option><option value="three_pull_open_t">三拉開天固定</option><option value="four_pull">四拉</option><option value="four_pull_open_w">四拉開天活動</option><option value="four_pull_open_t">四拉開天固定</option></select><input type="button" value="del" onclick="deltxt('+txtId+')"></div>');
      txtId++;
  });
  //remove div
  function deltxt(id) {
      $("#div"+id).remove();
  }
</script>
@endsection