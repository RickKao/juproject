@extends('site.inputsize_layout.inputsize_layout')
 
@section('title', 'index')
 
@section('style')
@parent
@endsection
 
@section('content')
	<h1></h1>
    @if (isset($input))

    	@for($i = 0; $i < $datacount; $i++)
			<div class="container">
				@if($input["totalfour"]["windows_type"][$i] == "two_pull")
				<div class="row">
					<div class="col-sm-9">
					<p>二拉窗</p>
					<p>紗網顏色:{{$input["totalfour"]["gauze_type"][$i]}}</p>
					</div>
					<div class="col-md-4">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>外框</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>SS1201 外上 x {{$input["totalfour"]["w_size"][$i] - 46}} = {{$input["totalfour"]["windows_number"][$i]}}</td>
							</tr>
							<tr>
								<td>SS1106A 外下 x {{$input["totalfour"]["w_size"][$i] - 46}} = {{$input["totalfour"]["windows_number"][$i]}}</td>
							</tr>
							<tr>
								<td>SS1203 外立 x {{$input["totalfour"]["h_size"][$i] - 46}} = {{($input["totalfour"]["windows_number"][$i]*2)}}</td>
							</tr>
						</tbody>
						</table>
						</div>
					<div class="col-md-4">	
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>內框</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>SS1151 內上 x {{$input["totalfour"]["w_size"][$i]/2 - 91}} = {{($input["totalfour"]["windows_number"][$i]*2)}}</td>
							</tr>
							<tr>
								<td>SS1152 內下低 x {{$input["totalfour"]["w_size"][$i]/2 - 91}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>SS1153 內下高 x {{$input["totalfour"]["w_size"][$i]/2 - 91}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>T1156 小鉤 x {{$input["totalfour"]["h_size"][$i] - 67}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>T1155 內立 x {{$input["totalfour"]["h_size"][$i] - 67}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>T1157 大鉤 x {{$input["totalfour"]["h_size"][$i] - 98}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>T1155 內立 x {{$input["totalfour"]["h_size"][$i] - 98}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
						</tbody>
					</table>
			</div>
			<div class="col-md-4">	
			<table class="table table-bordered">
						<thead>
							<tr>
								<th>紗窗</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>T1161A 紗上 x {{$input["totalfour"]["w_size"][$i]/2 - 91}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>SS1162 紗下 x {{$input["totalfour"]["w_size"][$i]/2 - 91}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>T1456 紗立 x {{$input["totalfour"]["h_size"][$i] - 57}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>SS1166 紗立 x {{$input["totalfour"]["h_size"][$i] - 57}} = {{($input["totalfour"]["windows_number"][$i])}}</td>
							</tr>
							<tr>
								<td>9665B 紗格外橫 x {{$input["totalfour"]["w_size"][$i]/2 - 117}} = {{($input["totalfour"]["windows_number"][$i]*2)}}</td>
							</tr>
							<tr>
								<td>9665B 紗格外立 x {{$input["totalfour"]["h_size"][$i] - 204}} = {{($input["totalfour"]["windows_number"][$i]*2)}}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
				@endif
			</div>
		@endfor
    @endif
    {{ link_to(URL::previous(), '回上一頁') }}
@endsection
 
@section('script')
@parent

@endsection