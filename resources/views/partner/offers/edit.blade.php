@extends('layouts.sidebar2')

@section('content')

<div class="container-fluid">
    <div class="row">
    	<div class="col-md-2"></div>
	    <div class="col-md-8">
	            <div class="card card-line bg-neutral mt-3">
	                <div class="card-body"> 
	                    <h1 class="text-center">Offer Bewerken</h1>
	                    <form method="POST" action=" {{ route('CreateOffer') }} " enctype="multipart/form-data">
	                        @csrf

	                      <div class="form-group">

	                        <label for="inputAddress text-left">Prijs</label>
	                        <input required id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $offer->price }}" placeholder="" autocomplete="price" autofocus></input>

	                        @error('price')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>
	                      
	                      <div class="form-group">
	                        <label for="inputAddress text-left">Titel</label>
	                        <input required id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $offer->title }}" placeholder="" autocomplete="title" autofocus></input>

	                        @error('title')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">

	                        <label for="description">Descriptie</label>

	                        <textarea id="summary-ckeditor" name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{!! $offer->description !!}" cols="30" rows="8" placeholder="" required autocomplete="description" autofocus>{!! $offer->description !!}</textarea>

	                        @error('description')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror

	                      </div>

	                      <button type="submit" class="float-right btn btn-primary">Opslaan</button>
	                    </form>
	                </div>
	            </div> 
	        </div>

	    </div>
	</div>

	<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<script>
	    CKEDITOR.replace( 'summary-ckeditor' );

	    $(document).ready(function() {
$('.mdb-select').materialSelect();
});
	</script>       
    </div>
</div>

@endsection
