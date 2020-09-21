@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row">
    	<div class="col-md-2"></div>
	    <div class="col-md-8">
	            <div class="card card-line bg-neutral mt-3">
	                <div class="card-body"> 
	                    <h1 class="text-center">Briefing aanmaken</h1>
	                    <form method="POST" action="  " enctype="multipart/form-data">
	                        @csrf

	                      <div class="form-group">
	                        <label for="inputAddress text-left">PA</label>
	                        <input required id="page" type="text" class="form-control @error('page') is-invalid @enderror" name="page"  placeholder="" autocomplete="page" autofocus></input>

	                        @error('page')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">DA</label>
	                        <input required id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="" autocomplete="price" autofocus></input>

	                        @error('price')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>
	                      
	                      <div class="form-group">
	                        <label for="inputAddress text-left">Spam</label>
	                        <input required id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="" autocomplete="title" autofocus></input>

	                        @error('title')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Bezoekers</label>
	                        <input required id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="" autocomplete="title" autofocus></input>

	                        @error('title')
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
	                        <label for="inputAddress text-left">Prijs</label>
	                        <input required id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="" autocomplete="title" autofocus></input>

	                        @error('title')
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
     
    </div>
</div>

@endsection
