@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Branches</h2>
	</div>
	<div class="col-sm-8 col-md-offset-2">
		<div class="alert alert-info">
			<h4>Note !!!</h4>
			<p>Include html tag for editing content it is use to properly fomat text like &lt;li&gt; &lt;/li&gt; and &lt;br&gt;.</p>
		</div>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<form role="form" action="{{ route('branch.store') }}" method="post">
			{{ csrf_field() }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					Create Branch
				</div>
				<div class="panel-body text-center">
					<div class="col-lg-12">
						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<label>Branch Name</label>
							<input name="name" type="text" class="form-control" value="{{ old('name') }}">
							{!! helpBlock($errors, 'name') !!}
						</div>
						<div class="form-group {{ $errors->has('tag') ? ' has-error' : '' }}">
							<label>Branch Tag</label>
							<input name="tag" type="text" class="form-control" value="{{ old('tag') }}">
							{!! helpBlock($errors, 'tag') !!}
						</div>
						<div class="form-group {{ $errors->has('phones') ? ' has-error' : '' }}">
							<label>Branch Phone</label>
							<textarea name="phones" class="form-control" rows="2">{{ old('phones') }}</textarea>
							{!! helpBlock($errors, 'phones') !!}
						</div>
						<div class="form-group {{ $errors->has('emails') ? ' has-error' : '' }}">
							<label>Branch Email</label>
							<textarea name="emails" class="form-control" rows="2">{{ old('emails') }}</textarea>
							{!! helpBlock($errors, 'phones') !!}
						</div>
						<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
							<label>Address</label>
							<textarea name="address" class="form-control" rows="2">{{ old('address') }}</textarea>
							{!! helpBlock($errors, 'address') !!}
						</div>
						<div class="form-group {{ $errors->has('src_map') ? ' has-error' : '' }}">
							<label>Map Source</label>
							<textarea name="src_map" class="form-control" rows="4">{{ old('src_map') }}</textarea>
							{!! helpBlock($errors, 'src_map') !!}
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<button type="submit" class="btn btn-primary pull-right">Create</button>
					<div class="clearfix"></div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection()