@extends('admin.layouts.app')

@section('title','文章管理')

@section('content_title_time')
	<h3 class="panel-title">文章管理--->分类列表</h3>
	<p class="panel-subtitle"><a href="{{ url('article/category/create') }}" class="btn btn-primary">添加分类</a></p>
@stop

@section('content')
	<!-- BORDERED TABLE -->
	<div class="panel">
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>编号</th>
						<th>分类名称</th>
						<th>分类描述</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach($category as $value)
					<tr>
						<td>{{ $value->id }}</td>
						<td>{{ $value->name }}</td>
						<td>{{ $value->description }}</td>
						<td>@steve</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- END BORDERED TABLE -->
@stop