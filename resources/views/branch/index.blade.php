@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Branches</h2>
	</div>
	<div class="col-xs-12" style="padding-bottom: 15px;">
		<a href="{{ route('branch.create') }}" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Branch</a>
		<div class="clearfix"></div>
	</div>
	@foreach ($branches as $key => $branch)
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Branch {{ $key + 1 }}
				</div>
				<div class="panel-body text-center">
					<div class="row">
						<div class="col-md-3">
							<h3>{{ $branch->name }}</h3>
							<p>branch tag: {{ $branch->tag }}</p>
							<p>{!! $branch->phones !!}</p>
							<p>{!! $branch->emails !!}</p>
						</div>
						<div class="col-md-4">
							<br>
							<br>
							<br>
							<p>{!! $branch->address !!}</p>
							<p>branch map source: {{ $branch->src_map }}</p>
						</div>
						<div class="col-md-5">
							<div class="mbr-map"><iframe frameborder="0" style="border:0" src="{{ $branch->src_map }}" allowfullscreen=""></iframe></div>
						</div>	
					</div>	
				</div>
				<div class="panel-footer">
					<form action="{{ route('branch.destroy', $branch->id) }}" method="post" id="delete">
						{{ csrf_field() }} {{ method_field('DELETE') }}
						<a href="javascript:void(0)" class="btn btn-danger pull-right branch-delete">Delete branch</a>
					</form>
					<a href="{{ route('branch.edit', $branch->id) }}" type="button" class="btn btn-primary pull-right">Edit branch</a>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	@endforeach
		
</div>
@endsection()