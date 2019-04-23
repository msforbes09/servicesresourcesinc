@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">About Us</h2>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<div class="alert alert-info">
			<h4>Note !!!</h4>
			<p>Include html tag for editing content it is use to properly fomat text like &lt;li&gt; &lt;/li&gt; and &lt;br&gt;.</p>
		</div>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<form role="form" action="{{ route('about.update', $about->id) }}" method="post">
			{{ csrf_field() }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					Edit About Us
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<div class="form-group {{ $errors->has('about_title') ? ' has-error' : '' }}">
							<label>Title</label>
							<input name="about_title" type="text" class="form-control" value="{{ $about->about_title }}" style="font-size: 24px">
							{!! helpBlock($errors, 'about_title') !!}
						</div>
						<div class="form-group {{ $errors->has('about_text') ? ' has-error' : '' }}">
							<label>About Sentence <span class="text-primary">Note : html tag are require to include for proper format</span></label>
							<textarea name="about_text" class="form-control" rows="30">{{ $about->about_text }}</textarea>
							{!! helpBlock($errors, 'about_text') !!}
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