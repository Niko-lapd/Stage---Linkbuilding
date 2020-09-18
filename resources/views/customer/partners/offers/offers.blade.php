@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row text-center">
		<div class="col-md-12"> 
			<div class="row">
			  	@foreach ( $offers as $offer)
				  	@if ( $offer->online == 1)
							<a href=/partner/offers/overzicht/{{$offer->id}}>
								<div class="col-md-3">
									<div class="col-md-12 offer-box">

										<div class="card">
										  <div class="card-body">
										    <h4 class="card-title"> {{$offer->title}} </h4>
										  </div>
										  <ul class="list-group list-group-flush">
										    <li class="list-group-item">{{$offer->site}}</li>

										    @if ($offer->link == 1 || $offer->blog == 0)
										    <li class="list-group-item">Link</li>
											@else
										    <li class="list-group-item">Blog</li>
										    @endif
										    <li class="list-group-item">&euro;{{ number_format(($offer->price / 100), 2, '.', ',') }}</li>
										  </ul>
										  <div class="card-body">
										    <a href="/partner/offers/overzicht/{{$offer->id}}" class="card-link">Meer Informatie <i class="fas fa-angle-right"></i></a>
										  </div>
										</div>


									</div>
								</div>
							</a>
					@endif
				@endforeach
			</div>
		</div>    
    </div>
</div>

@endsection
