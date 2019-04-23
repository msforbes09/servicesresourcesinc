@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Hero Header</h2>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<form action="{{ route('image.update', $image->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					Upload Image
				</div>
				<div class="panel-body text-center">
					<h1>{{ $image->section }} image</h1>
					<div class="col-md-8 col-md-offset-2">
						<img class="img-responsive img-rounded" src="{{ url('assets/images/background') }}{{ '/'. $image->file }}" alt="User profile picture" style="width:100%;">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">
						<label for="">Chose Image File:</label>
						<input type="file" name="file">
						{!! helpBlock($errors, 'file') !!}
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