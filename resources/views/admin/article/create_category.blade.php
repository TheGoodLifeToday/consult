@extends('admin.layouts.app')

@section('title','添加分类')

@section('content_title_time')
	<h3 class="panel-title">文章管理--->添加分类</h3>
	<p class="panel-subtitle"></p>
@stop

@section('content')
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" action="{{ url('article/category') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
				    <label for="name" class="col-sm-2 control-label">分类名称</label>
				    <div class="col-sm-4">
				      <input type="text" name="name" class="form-control" id="name" placeholder="名称">
				    </div>
				</div>
				<div class="form-group">
				    <label for="description" class="col-sm-2 control-label">分类描述</label>
				    <div class="col-sm-4">
				      <input type="text" name="description" class="form-control" id="description" placeholder="描述">
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-primary">提交</button>
				    </div>
				</div>
			</form>
				
		</div>
	</div>
@stop