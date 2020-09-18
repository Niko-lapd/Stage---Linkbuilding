@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row">
    	<h1 class=""> Opdracht - {{ $opdracht->id }}</h1>

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
			      <th class="text-center">Edit</th>
			      <th class="text-center">Verwijderen</th>
			    </tr>
			  </thead>
			  <tbody class="text-center">
			  	
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
					<td style="font-size: 25px;"><i class="fas fa-edit"></i></td>
					<td style="font-size: 25px;"><i class="far fa-trash-alt"></i></td>
				</tr>
			  
			  </tbody>
			</table>
		</div>  

		<div class="col-md-8 navbar">
<form method="POST" action=" {{ route('CreateBriefing') }} " enctype="multipart/form-data">
				                        @csrf
			  <div class="row">
			  <div class="col-md-12">
	                <textarea required id="PA" type="text" class="form-control @error('PA') is-invalid @enderror" name="PA" value="{{ old('PA') }}" placeholder="" autocomplete="PA" autofocus></textarea>

	                @error('PA')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
		



			  </div>
			<div class="col-md-2 float-right">
				<label></label>
				<button type="submit" class="btn form-control btn-primary button-place">Verstuur</button>
			</div>
			</div>
			</form>
		</div>

		<div class="col-md-4 navbar">
			<label></label>
		</div>

    </div>
</div>

@endsection
