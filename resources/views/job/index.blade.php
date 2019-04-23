@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Job Header</h2>
	</div>

	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Job Panel
			</div>
			<div class="panel-body text-center">
				<h3>{{ $job->job_header }}</h3>
				<br/>
				<br/>
				<p>button text: <button class="btn btn-default">{{ $job->job_btn }}</button></p>
				<br/>
				<p>button link: <b>{{ $job->job_link }}<b></p>
			</div>
			<div class="panel-footer">
				<a href="{{ route('job.edit', $job->id) }}" type="button" class="btn btn-primary pull-right">Edit Content</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection()