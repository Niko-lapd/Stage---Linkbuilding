@extends('layouts.sidebar2')

@section('content')

<form method="POST" action="/partner/offers/overzicht/offline/{{ $offer->id }}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    @csrf
	<!-- Modal -->
	<div class="modal fade" id="OfflineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Offer Offline Zetten</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Weet je zeker dat je "{{ $offer->title }}" Offline wil zetten?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
	        <button type="submit" class="btn btn-danger">Offline</button>
	      </div>
	    </div>
	  </div>
	</div>
</form>

<form method="POST" action="/partner/offers/overzicht/online/{{ $offer->id }}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    @csrf
	<!-- Modal -->
	<div class="modal fade" id="OnlineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Offer Online Zetten</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Weet je zeker dat je "{{ $offer->title }}" online wil zetten?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
	        <button type="submit" class="btn btn-success">Online</button>
	      </div>
	    </div>
	  </div>
	</div>

</form>


	<!-- Modal -->
	<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Offer Verwijderen</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Weet je zeker dat je "{{ $offer->title }}" wil verwijderen?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
	        <a href="/partner/offer/verwijder/{{ $offer->id }}" class="btn btn-danger">Verwijderen</a>
	      </div>
	    </div>
	  </div>
	</div>

<div class="container-fluid">
    <div class="row text-center">
		<div class="col-md-12"> 
			<div class="col-md-8">
				<div class="col-md-12 offer-box">
					<div class="col-md-12">
						<h1>{{ $offer->title }}</h1>
						<p> {!! $offer->description !!} </p>

					</div>
				</div>

				<div class="col-md-12 offer-box">
					<div class="col-md-12">
						<table class="table table-bordered">
						  <tbody>
						    <tr>
						      <td class="font-weight-bold"> Website URL:</td>
						      <td><a href="{{ $offer->site }}">{{ $offer->site }}</a></td>
						    </tr>
						    <tr>
						      <td> Bezoekers:</td>
						      <td>{{ $offer->visitors }}</td>
						    </tr>
						    <tr>
						      <td> DA:</td>
						      <td>{{ $offer->DA }}</td>
						    </tr>
						    <tr>
						      <td> PA:</td>
						      <td>{{ $offer->PA }}</td>
						    </tr>
						    <tr>
						      <td> Spam:</td>
						      <td>{{ $offer->spam }}%</td>
						    </tr>
						    <tr>
						      <td> Plaatsing:</td>
						      <td>
							    @if ($offer->link == 1 || $offer->blog == 0)
							    Link
								@else
							    Blog
							    @endif
						      </td>
						    </tr>
						     <tr>
						      <td> Prijs:</td>
						      <td>&euro;{{ number_format(($offer->price / 100), 2, '.', ',') }}</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="col-md-12 offer-box">
					@if ($offer->online == 0)
						<h3>Status: <font color="red">Offline</font></h3>
					@else 
						<h3>Status: <font color="green">Online</font></h3>
					@endif
				</div>
				<div class="col-md-12 offer-box">
					@if ($offer->online == 0)
						<button type="button" class="btn btn-success btn-block mt-2" data-toggle="modal" data-target="#OnlineModal">Online</button>
					@else 
						<button type="button" class="btn btn-danger btn-block mt-2" data-toggle="modal" data-target="#OfflineModal">Offline</button>
					@endif
					<a href="/partner/offers/overzicht/edit/{{ $offer->id }}" class="mt-2 btn btn-block btn-primary">Edit</a>

					<button type="button" class="btn btn-danger btn-block mt-2" data-toggle="modal" data-target="#DeleteModal">Verwijderen</button>

					<a href="/partner/offers/overzicht" class="mt-2 btn btn-block btn-info">Terug</a>

				</div>
			</div>

		</div>    
    </div>
</div>

@endsection