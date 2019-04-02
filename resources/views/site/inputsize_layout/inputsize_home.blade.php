@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
 
@section('content')
    {{Form::open(['url'=>'Calcul_size/store', 'method'=>'post'])}}
    客戶:
    {{Form::select('totalfour[custmor][]', array(
        '123' => '鼎國', 
    ))}}    
    {{Form::label('title','尺寸')}}<br>
    寬:{{Form::text('totalfour[w_size][]')}} mm
    高:{{Form::text('totalfour[h_size][]')}} mm
    氣高:{{Form::text('totalfour[e_size][]')}} mm
    數量:{{Form::text('totalfour[windows_number][]')}}
    {{Form::select('totalfour[windows_type][]', array(
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
    沙網顏色:{{Form::select('totalfour[gauze_type][]',array(
        '還未確認' => '還未確認',
        '不編網' => '不編網',
        '灰網' => '灰網',
        '黑網' => '黑網',
        '白鐵網' => '白鐵網',
    ))}}
    <div id="showBlock"></div>
    <div class="btn-group">
        <button type="button" id="btn" value="addItem" class="btn btn-primary"/>增加</button>
    </div>
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
      $("#showBlock").append('<div id="div' + txtId + '">客戶:<select name="totalfour[custmor][]"><option value="123">頂國</option>寬:<input name="totalfour[w_size][]" type="text">高:<input name="totalfour[h_size][]" type="text">氣高:<input name="totalfour[e_size][]" type="text">數量:<input name="totalfour[windows_number][]" type="text"><select name="totalfour[windows_type][]"><option value="two_pull">二拉</option><option value="two_pull_open_w">二拉開天活動</option><option value="two_pull_open_t">二拉開天固定</option><option value="three_pull">三拉</option><option value="three_pull_open_w">三拉開天活動</option><option value="three_pull_open_t">三拉開天固定</option><option value="four_pull">四拉</option><option value="four_pull_open_w">四拉開天活動</option><option value="four_pull_open_t">四拉開天固定</option></select><select name="totalfour[gauze_type][]"><option value="還未確認">還未確認</option><option value="不編網">不編網</option><option value="灰網">灰網</option><option value="黑網">黑網</option><option value="白鐵網">白鐵網</option></select><input type="button" value="del" onclick="deltxt('+txtId+')"></div>');
      txtId++;
  });
  //remove div
  function deltxt(id) {
      $("#div"+id).remove();
  }
</script>
@endsection