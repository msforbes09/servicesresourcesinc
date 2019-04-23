@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Hero Header</h2>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<form role="form" action="{{ route('card.update', $card->id) }}" method="post">
			{{ csrf_field() }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					Edit Card
				</div>
				<div class="panel-body text-center">
					<div class="col-lg-12">
						<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
							<label>Card Title</label>
							<textarea name="title" class="form-control" rows="2" style="font-size: 20px">{{ $card->title }}</textarea>
							{!! helpBlock($errors, 'title') !!}
						</div>
						<div class="form-group {{ $errors->has('text') ? ' has-error' : '' }}">
							<label>Card Text</label>
							<textarea name="text" class="form-control" rows="2" style="font-size: 18px">{{ $card->text }}</textarea>
							{!! helpBlock($errors, 'text') !!}
						</div>

						<div class="form-group {{ $errors->has('icon') ? ' has-error' : '' }}">
							<label>Icon	<span class="text-primary">go to www.fontawesome.io/icons to select icon</span></label>
							<input name="icon" type="text" class="form-control" value="{{ $card->icon }}">
							{!! helpBlock($errors, 'icon') !!}
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