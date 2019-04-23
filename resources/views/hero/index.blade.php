@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Hero Header</h2>
	</div>

	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Primary Panel
			</div>
			<div class="panel-body text-center">
				<h2>{{ $hero->hero_header }}</h2>
				<br/>
				<h4>{{ $hero->hero_lead }}</h4>
				<br/>
				<p>button text: <button class="btn btn-default">{{ $hero->hero_btn }}</button></p>
				<br/>
				<p>button link: <b>{{ $hero->hero_link }}<b></p>
			</div>
			<div class="panel-footer">
				<a href="{{ route('hero.edit', $hero->id) }}" type="button" class="btn btn-primary pull-right">Edit Content</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection()