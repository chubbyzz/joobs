@extends('layout')
@section('title')
	# {{{ $job->title }}}
@stop
@section('css')
{{ HTML::style('assets/css/jobs/show.css') }}
@stop
@section('body')
<div class="col-lg-offset-1 col-lg-10">
	<div class="panel">
		<div class="panel-heading">
			<h4>{{{ $job->title }}}<br><small>{{{$job->location}}}</small></h4>
		</div>
		<div class="panel-body">
			@if(is_numeric($job->salary))
				<p><b>Salario:</b> {{{ $job->salaryToString() }}}</p>
			@endif
			<p><b>Quantidade:</b> {{{ $job->numberToString() }}}</p>
			<p><b>Forma de contratação:</b> <span class="label label-info">{{{ ucfirst($job->form) }}}</span></p>
			<p><b>Tipo de contratação:</b> <span class="label label-info">{{{ strtoupper($job->type) }}}</span></p>
			<h5>Descrição</h5>
			<p>{{{ $job->description }}}</p>
			@if($job->requirements)
				<h5>Requisitos</h5>
				<p>{{{ $job->requirements }}}</p>
			@endif
			@if($job->benefits)
				<h5>Beneficios</h5>
				<p>{{{ $job->benefits }}}</p>
			@endif
			<br>
			<br>
			<a
				class="btn btn-block btn-success"
				href="{{{ URL::route('jobs.applay', ['slug' => $job->slug]) }}}"
			>
				Me interessei
			</a>
		</div>
	</div>
</div>
@stop