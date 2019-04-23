@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Services</h2>
	</div>
		
	@foreach ($services as $key => $service)
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					service {{ $key + 1 }}
				</div>
				<div class="panel-body text-center">			
	                <h3>{{ $service->title }}</h3>
	                <br/>
	                <p>{{ $service->text }}</p>
				</div>
				<div class="panel-footer">
					<a href="{{ route('service.edit', $service->id) }}" type="button" class="btn btn-primary pull-right">Edit service</a>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	@endforeach
		
</div>
@endsection()