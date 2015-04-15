@extends('layout')
@section('title')
Oportunidades
@stop
@section('css')
{{ HTML::style('assets/css/jobs/index.css') }}
@stop
@section('body')
<div class="col-lg-8 col-lg-offset-2">
	{{ Form::model(null, ['role'=>'form', 'class' => 'form-horizontal']) }}
	<div class="form-group">
		<div class="input-group">
			{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Pesquise por palavras chaves como, Java, Php, Ruby, São Paulo ou Empresa x']) }}
			<div class="input-group-btn">
				{{ Form::submit('Pesquisar', ['class' => 'btn btn-primary'])}}
			</div>
		</div>
	</div>
	{{ Form::close() }}
</div>
<div class="col-lg-3">
	<div class="panel">
		<div class="panel-body">

		</div>
	</div>
</div>
<div class="col-lg-9">
	<div class="row" id="jobs">
		@forelse($jobs as $job)
		<div class="col-lg-4 col-md-6 col-sm-6 col-xl-12">
			<div class="panel job">
				<div class="panel-body">
					<p>
						<a href="{{{ URL::route('jobs.show', ['job' => $job->slug]) }}}">
							<span class="title">{{{ str_limit(ucfirst($job->title), 36) }}}</span>
						</a>
						</br>
						<span class="sub-title">
							<small>
							<a>Company</a>
							<span class="pull-right">
								Salário: <b>{{{ $job->salaryToString() }}}</b>
							</span>
							</small>
						</span>
					</p>
					<p>{{{ $job->location }}}</p>
					<p><span class="label label-info label-sm">{{{ strtoupper($job->form) }}}</span></p>
				</div>
			</div>
		</div>
		@empty
		<h3>Resultado não encontrado</h3>
		@endforelse
	</div>
	<div class="row">
		<div class="align-center">
			{{ $jobs->links() }}
		</div>
	</div>
</div>
@stop