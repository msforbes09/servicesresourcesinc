@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Cards</h2>
	</div>
	@foreach ($cards as $key => $card)
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Card {{ $key + 1 }}
				</div>
				<div class="panel-body text-center">			
					<div class="card-img iconbox">
						<i class="fa {{ $card->icon }}" style="font-size: 54px; margin-top: 20%;"></i>
	                </div>
	                <h3>{{ $card->title }}</h3>
	                <p>{{ $card->text }}</p>
				</div>
				<div class="panel-footer">
					<a href="{{ route('card.edit', $card->id) }}" type="button" class="btn btn-primary pull-right">Edit Card</a>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	@endforeach
		
</div>
@endsection()