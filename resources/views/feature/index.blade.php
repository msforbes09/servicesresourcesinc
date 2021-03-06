@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Feature</h2>
	</div>

	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Feature Panel
			</div>
			<div class="panel-body" style="font-style: justify">
				<h2 class="text-center">{{ $feature->feature_title }}</h2>
				<br/>
				<p>{!! $feature->feature_text !!}</p>
				<br/>
			</div>
			<div class="panel-footer">
				<a href="{{ route('feature.edit', $feature->id) }}" type="button" class="btn btn-primary pull-right">Edit Content</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection()