@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">About Us</h2>
	</div>

	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				About Us Panel
			</div>
			<div class="panel-body" style="font-style: justify">
				<h2 class="text-center">{{ $about->about_title }}</h2>
				<br/>
				<p>{!! $about->about_text !!}</p>
				<br/>
			</div>
			<div class="panel-footer">
				<a href="{{ route('about.edit', $about->id) }}" type="button" class="btn btn-primary pull-right">Edit Content</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection()