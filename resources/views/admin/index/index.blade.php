@extends('admin.layouts.app')

@section('title','首页')

@section('content_title_time')
	<h3 class="panel-title">Weekly Overview</h3>
	<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
@stop

@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="metric">
				<span class="icon"><i class="fa fa-download"></i></span>
				<p>
					<span class="number">1,252</span>
					<span class="title">Downloads</span>
				</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="metric">
				<span class="icon"><i class="fa fa-shopping-bag"></i></span>
				<p>
					<span class="number">203</span>
					<span class="title">Sales</span>
				</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="metric">
				<span class="icon"><i class="fa fa-eye"></i></span>
				<p>
					<span class="number">274,678</span>
					<span class="title">Visits</span>
				</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="metric">
				<span class="icon"><i class="fa fa-bar-chart"></i></span>
				<p>
					<span class="number">35%</span>
					<span class="title">Conversions</span>
				</p>
			</div>
		</div>
	</div>
@stop