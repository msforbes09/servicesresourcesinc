@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Services</h2>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<form role="form" action="{{ route('service.update', $service->id) }}" method="post">
			{{ csrf_field() }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					Edit service Area
				</div>
				<div class="panel-body text-center">
					<div class="col-lg-12">
						<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
							<label>Service Title</label>
							<textarea name="title" class="form-control" rows="2" style="font-size: 22px">{{ $service->title}}</textarea>
							{!! helpBlock($errors, 'service_header') !!}
						</div>
						<div class="form-group {{ $errors->has('text') ? ' has-error' : '' }}">
							<label>Service Text</label>
							<textarea name="text" class="form-control" rows="16" style="font-size: 16px">{{ $service->text }}</textarea>
							{!! helpBlock($errors, 'service_lead') !!}
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