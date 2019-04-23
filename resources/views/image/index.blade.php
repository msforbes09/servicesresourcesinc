@php
$hero = $images->filter(function($item) {
	return $item->section == 'hero';
})->first();

$job = $images->filter(function($item) {
	return $item->section == 'job';
})->first();

$branch = $images->filter(function($item) {
	return $item->section == 'branch';
})->first();
@endphp

@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Background Images</h2>
	</div>

	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Background and Other Images
			</div>
			<div class="panel-body text-center">
				<h1>{{ $hero->section }} image</h1>
				<img class="img-responsive img-rounded" src="{{ url('assets/images/background') }}{{ '/'. $hero->file }}" alt="User profile picture" style="width:100%;">
				<a href="{{ route('image.edit', $hero->id) }}" type="button" class="btn btn-primary pull-right" style="margin-top: 15px">Update Image</a>
			</div>
			<hr>
			<div class="panel-body text-center">
				<h1>{{ $job->section }} image</h1>
				<img class="img-responsive img-rounded" src="{{ url('assets/images/background') }}{{ '/'. $job->file }}" alt="User profile picture" style="width:100%;">
				<a href="{{ route('image.edit', $job->id) }}" type="button" class="btn btn-primary pull-right" style="margin-top: 15px">Update Image</a>
			</div>
			<div class="panel-body text-center">
				<h1>{{ $branch->section }} image</h1>
				<img class="img-responsive img-rounded" src="{{ url('assets/images/background') }}{{ '/'. $branch->file }}" alt="User profile picture" style="width:100%;">
				<a href="{{ route('image.edit', $branch->id) }}" type="button" class="btn btn-primary pull-right" style="margin-top: 15px">Update Image</a>
			</div>
		</div>
	</div>
</div>
@endsection()