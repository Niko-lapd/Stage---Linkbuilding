@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row">
    	<h1 class=""> Opdrachten </h1>

		<div class="col-md-12 navbar"> 
			<form method="POST" action=" {{ route('CreateBriefing') }} " enctype="multipart/form-data">
				                        @csrf
			  <div class="row">
			  <div class="col-md-10">
			    <div class="col-md-2">
	                <label>PA</label>
	                <input required id="PA" type="text" class="form-control @error('PA') is-invalid @enderror" name="PA" value="{{ old('PA') }}" placeholder="" autocomplete="PA" autofocus></input>

	                @error('PA')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
			    </div>

			    <div class="col-md-2">
	                <label>DA</label>
	                <input required id="DA" type="text" class="form-control @error('DA') is-invalid @enderror" name="DA" value="{{ old('DA') }}" placeholder="" autocomplete="DA" autofocus></input>

	                @error('DA')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
			    </div>

			    <div class="col-md-2">
	                <label>Spam</label>
	                <input required id="spam" type="text" class="form-control @error('spam') is-invalid @enderror" name="spam" value="{{ old('spam') }}" placeholder="" autocomplete="spam" autofocus></input>

	                @error('spam')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
			    </div>

			    <div class="col-md-2">
	                <label>Bezoekers</label>
	                <input required id="visitors" type="text" class="form-control @error('visitors') is-invalid @enderror" name="visitors" value="{{ old('visitors') }}" placeholder="" autocomplete="visitors" autofocus></input>

	                @error('visitors')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
			    </div>

			    <div class="col-md-2">
	                <label>Prijs</label>
	                <input required id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="" autocomplete="price" autofocus></input>

	                @error('price')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
			    </div>

			    <div class="col-md-2">
					<label>Blog/Link</label>
	                <select class="form-control" name="categorie" required>
	                <option disabled selected>Kies uit</option>
					  <option value="1">Blog</option>
					  <option value="2">Link</option>
					</select>


	                @error('PA')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
			    </div>

			  </div>
			<div class="col-md-2">
				<label></label>
				<button type="submit" class="btn form-control btn-primary button-place">Aanmaken</button>
			</div>
			</div>
			</form>
		</div>

		<div class="col-md-12 navbar"> 
			<table class="table">
			  <thead>
			    <tr>
			      <th class="text-center">PA</th>
			      <th class="text-center">DA</th>
			      <th class="text-center">Spam</th>
			      <th class="text-center">Bezoekers</th>
			      <th class="text-center">Blog/Link</th>
			      <th class="text-center">Prijs</th>
			      <th class="text-center">Reacties</th>
			    </tr>
			  </thead>
			  <tbody class="text-center">
			  	@foreach ($briefings as $opdracht)
				@if ($opdracht->customer_id ==  Auth::user()->id)
				<tr>
					<td>{{ $opdracht->PA }}%</td>
					<td>{{ $opdracht->DA }}%</td>
					<td>{{ $opdracht->spam }}%</td>
					<td>{{ $opdracht->visitors }}</td>
					@if ($opdracht->blog == 1)
					<td>Blog</td>
					@endif
					@if ($opdracht->link == 1)
					<td>Link</td>
					@endif
					<td>&euro; {{ number_format(($opdracht->price / 100), 2, ',', '.') }}</td>
					<td style="font-size: 25px;"><a href="/klant/briefings/opdracht/{{ $opdracht->id }}"><i class="fas fa-envelope"></i></a></td>
				</tr>
				@endif
			  	@endforeach
			  </tbody>
			</table>
		</div>  
    </div>
</div>

@endsection
