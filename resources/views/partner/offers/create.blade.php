@extends('layouts.sidebar2')

@section('content')

<div class="container-fluid">
    <div class="row">
    	<div class="col-md-2"></div>
	    <div class="col-md-8">
	            <div class="card card-line bg-neutral mt-3">
	                <div class="card-body"> 
	                    <h1 class="text-center">Offer aanmaken</h1>
	                    <form method="POST" action=" {{ route('CreateOffer') }} " enctype="multipart/form-data">
	                        @csrf

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Website URL</label>
	                        <input required id="site" type="text" class="form-control @error('site') is-invalid @enderror" name="site" value="{{ old('site') }}" placeholder="" autocomplete="site" autofocus></input>

	                        @error('site')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Categorie</label>
							<select class="mdb-select md-form" required id="categorie" name="categorie">
							  <option value="" disabled selected>Kies uit</option>
							  <option value="1">Blog</option>
							  <option value="2">Link</option>
							</select>
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Pagina</label>
	                        <input required id="page" type="text" class="form-control @error('page') is-invalid @enderror" name="page" value="{{ old('page') }}" placeholder="" autocomplete="page" autofocus></input>

	                        @error('page')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Prijs</label>
	                        <input required id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="" autocomplete="price" autofocus></input>

	                        @error('price')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>
	                      
	                      <div class="form-group">
	                        <label for="inputAddress text-left">Titel</label>
	                        <input required id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="" autocomplete="title" autofocus></input>

	                        @error('title')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">

	                        <label for="description">Descriptie</label>

	                        <textarea id="summary-ckeditor" name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" cols="30" rows="8" placeholder="" required autocomplete="description" autofocus></textarea>

	                        @error('description')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror

	                      </div>

	                      <button type="submit" class="float-right btn btn-primary">Aanmaken</button>
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
