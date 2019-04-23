@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Hero Header</h2>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<form role="form" action="{{ route('hero.update', $hero->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					Edit Hero Area
				</div>
				<div class="panel-body text-center">
					<div class="col-lg-12">
						<div class="form-group {{ $errors->has('hero_header') ? ' has-error' : '' }}">
							<label>Hero Header</label>
							<textarea name="hero_header" class="form-control" rows="2" style="font-size: 26px">{{ $hero->hero_header }}</textarea>
							{!! helpBlock($errors, 'hero_header') !!}
						</div>
						<div class="form-group {{ $errors->has('hero_lead') ? ' has-error' : '' }}">
							<label>Hero Sentence</label>
							<textarea name="hero_lead" class="form-control" rows="3" style="font-size: 18px">{{ $hero->hero_lead }}</textarea>
							{!! helpBlock($errors, 'hero_lead') !!}
						</div>
						<div class="form-group {{ $errors->has('hero_btn') ? ' has-error' : '' }}">
							<label>Button Text</label>
							<input name="hero_btn" type="text" class="form-control" value="{{ $hero->hero_btn }}">
							{!! helpBlock($errors, 'hero_btn') !!}
						</div>
						<div class="form-group {{ $errors->has('hero_link') ? ' has-error' : '' }}">
							<label>Button Link</label>
							<input name="hero_link" type="text" class="form-control" value="{{ $hero->hero_link }}">
							{!! helpBlock($errors, 'hero_link') !!}
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