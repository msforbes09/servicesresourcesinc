@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Job Header</h2>
	</div>
	
	<div class="col-md-8 col-md-offset-2">
		<form role="form" action="{{ route('job.update', $job->id) }}" method="post">
			{{ csrf_field() }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					Edit job Area
				</div>
				<div class="panel-body text-center">
					<div class="col-lg-12">
						<div class="form-group {{ $errors->has('job_header') ? ' has-error' : '' }}">
							<label>job Header</label>
							<textarea name="job_header" class="form-control" rows="2" style="font-size: 22px">{{ $job->job_header }}</textarea>
							{!! helpBlock($errors, 'job_header') !!}
						</div>
						<div class="form-group {{ $errors->has('job_btn') ? ' has-error' : '' }}">
							<label>Button Text</label>
							<input name="job_btn" type="text" class="form-control" value="{{ $job->job_btn }}">
							{!! helpBlock($errors, 'job_btn') !!}
						</div>
						<div class="form-group {{ $errors->has('job_link') ? ' has-error' : '' }}">
							<label>Button Link</label>
							<input name="job_link" type="text" class="form-control" value="{{ $job->job_link }}">
							{!! helpBlock($errors, 'job_link') !!}
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<button type="submit" class="btn btn-primary pull-right">Update</button>
					<div class="clearfix"></div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection()