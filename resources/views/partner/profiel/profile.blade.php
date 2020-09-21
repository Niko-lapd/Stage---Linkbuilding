@extends('layouts.sidebar2')

@section('content')

<div class="container-fluid">
    <div class="row">
		<div class="col-md-6">  
			<div class="col-md-12 navbar">
				<h2 class="text-center">Persoonlijk</h2>
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form method="POST" action="/partner/Profile-Personal/{{ Auth::user()->id}}" enctype="multipart/form-data">
						{{ method_field('PUT') }}
	                        @csrf

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Voornaam</label>
	                        <input required id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ Auth::user()->firstname }}" placeholder="" autocomplete="firstname" autofocus></input>

	                        @error('firstname')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror

	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Achternaam</label>
	                        <input required id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ Auth::user()->lastname }}" placeholder="" autocomplete="lastname" autofocus></input>

	                        @error('lastname')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Email</label>
	                        <input required id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" placeholder="" autocomplete="email" autofocus></input>

	                        @error('email')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Telefoonnummer</label>
	                        <input required id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ Auth::user()->phonenumber }}" placeholder="" autocomplete="phonenumber" autofocus></input>

	                        @error('phonenumber')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <button type="submit" class="float-right btn btn-primary">Opslaan</button>
	                    </form>
	                </div>			
			</div>
			<form method="POST" action="/partner/Profile-image/{{ Auth::user()->id}}" enctype="multipart/form-data">
			{{ method_field('PUT') }}
	        @csrf

			<div class="col-md-12 navbar text-center">
				<h2 class="text-center">Profielfoto</h2>
				@if ( Auth::user()->PFimg == "default.png")
					<img class="text-center center" style="width: 150px; height: 150px;" src="/uploads/small/{{ Auth::user()->PFimg}}">
				@else 
					<img class="text-center center" src="/uploads/small/{{ Auth::user()->PFimg}}">
				@endif

				<div class="col-md-3"></div>
				<div class="col-md-6">
				<div class="fileUpload btn btn-primary">
				    <span><i class="fas fa-paperclip"></i> Selecteer Bestand</span>
				    <input id="image" name="image" type="file" class="upload" />
				</div>
				
				<button type="submit" class="btn btn-primary">Opslaan</button>
				</div>
			
			</form>

		</div>
		</div>
		<div class="col-md-6">  
			<div class="col-md-12 navbar">
				<h2 class="text-center">Betaling</h2>
				<div class="col-md-3"></div>
				<div class="col-md-6">	

					@if ( $check->isEmpty() )

					<form method="POST" action="{{ route('CreateBetaling') }}" enctype="multipart/form-data">
	                        @csrf

	                      <div class="form-group">
	                      	<label class="blue" for="inputAddress">Adres</label>
	                      	<br>
	                        <label for="inputAddress text-left">Straat</label>
	                        <input required id="straat" type="text" class="form-control @error('straat') is-invalid @enderror" name="straat" value="{{ old('straat') }}" placeholder="" autocomplete="straat" autofocus></input>

	                        @error('straat')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror

	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Huis Nummer</label>
	                        <input required id="huisnummer" type="text" class="form-control @error('huisnummer') is-invalid @enderror" name="huisnummer" value="{{ old('huisnummer') }}" placeholder="" autocomplete="huisnummer" autofocus></input>

	                        @error('huisnummer')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>
	                      
	                      <div class="form-group">
	                        <label for="inputAddress text-left">Postcode</label>
	                        <input required id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') }}" placeholder="" autocomplete="postcode" autofocus></input>

	                        @error('postcode')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Stad</label>
	                        <input required id="stad" type="text" class="form-control @error('stad') is-invalid @enderror" name="stad" value="{{ old('stad') }}" placeholder="" autocomplete="stad" autofocus></input>

	                        @error('stad')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Land</label>
	                        <input required id="land" type="text" class="form-control @error('land') is-invalid @enderror" name="land" value="{{ old('land') }}" placeholder="" autocomplete="land" autofocus></input>

	                        @error('land')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <br>

	                      <div class="form-group">
	                      	<label class="blue" for="inputAddress">Bedrijf</label>
	                      	<br>
	                        <label for="inputAddress text-left">Bedrijfsnaam</label>
	                        <input required id="bedrijfsnaam" type="text" class="form-control @error('bedrijfsnaam') is-invalid @enderror" name="bedrijfsnaam" value="{{ old('bedrijfsnaam') }}" placeholder="" autocomplete="bedrijfsnaam" autofocus></input>

	                        @error('bedrijfsnaam')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>	

	                      <div class="form-group">
	                        <label for="inputAddress text-left">KVK nummer</label>
	                        <input required id="KVK" type="text" class="form-control @error('KVK') is-invalid @enderror" name="KVK" value="{{ old('KVK') }}" placeholder="" autocomplete="KVK" autofocus></input>

	                        @error('KVK')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>  

	                      <div class="form-group">
	                        <label for="inputAddress text-left">BTW nummer/id</label>
	                        <input required id="BTW" type="text" class="form-control @error('BTW') is-invalid @enderror" name="BTW" value="{{ old('BTW') }}" placeholder="" autocomplete="BTW" autofocus></input>

	                        @error('BTW')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>  

	                      <br>

	                      <div class="form-group">
	                      	<label class="blue" for="inputAddress">Financieel contact</label>
	                      	<br>
	                        <label for="inputAddress text-left">Voornaam</label>
	                        <input required id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" placeholder="" autocomplete="firstname" autofocus></input>

	                        @error('firstname')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Achternaam</label>
	                        <input required id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="" autocomplete="lastname" autofocus></input>

	                        @error('lastname')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>                  

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Email</label>
	                        <input required id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="" autocomplete="email" autofocus></input>

	                        @error('email')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div> 

	                      <button type="submit" class="float-right btn btn-primary">Opslaan</button>
	                </form>

	                @else   

					<form method="POST" action="/partner/Profile-Betaling/{{ Auth::user()->id}} }" enctype="multipart/form-data">
						{{ method_field('PUT') }}
	                        @csrf

	                      <div class="form-group">
	                      	<label class="blue" for="inputAddress">Adres</label>
	                      	<br>
	                        <label for="inputAddress text-left">Straat</label>
	                        <input required id="straat" type="text" class="form-control @error('straat') is-invalid @enderror" name="straat" value="{{ $check[0]->straat }}" placeholder="" autocomplete="straat" autofocus></input>

	                        @error('straat')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror

	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Huis Nummer</label>
	                        <input required id="huisnummer" type="text" class="form-control @error('huisnummer') is-invalid @enderror" name="huisnummer" value="{{ $check[0]->huisnummer }}" placeholder="" autocomplete="huisnummer" autofocus></input>

	                        @error('huisnummer')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>
	                      
	                      <div class="form-group">
	                        <label for="inputAddress text-left">Postcode</label>
	                        <input required id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ $check[0]->postcode }}" placeholder="" autocomplete="postcode" autofocus></input>

	                        @error('postcode')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Stad</label>
	                        <input required id="stad" type="text" class="form-control @error('stad') is-invalid @enderror" name="stad" value="{{ $check[0]->stad }}" placeholder="" autocomplete="stad" autofocus></input>

	                        @error('stad')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Land</label>
	                        <input required id="land" type="text" class="form-control @error('land') is-invalid @enderror" name="land" value="{{ $check[0]->land }}" placeholder="" autocomplete="land" autofocus></input>

	                        @error('land')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <br>

	                      <div class="form-group">
	                      	<label class="blue" for="inputAddress">Bedrijf</label>
	                      	<br>
	                        <label for="inputAddress text-left">Bedrijfsnaam</label>
	                        <input required id="bedrijfsnaam" type="text" class="form-control @error('bedrijfsnaam') is-invalid @enderror" name="bedrijfsnaam" value="{{ $check[0]->bedrijfsnaam }}" placeholder="" autocomplete="bedrijfsnaam" autofocus></input>

	                        @error('bedrijfsnaam')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>	

	                      <div class="form-group">
	                        <label for="inputAddress text-left">KVK nummer</label>
	                        <input required id="KVK" type="text" class="form-control @error('KVK') is-invalid @enderror" name="KVK" value="{{ $check[0]->KVK }}" placeholder="" autocomplete="KVK" autofocus></input>

	                        @error('KVK')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>  

	                      <div class="form-group">
	                        <label for="inputAddress text-left">BTW nummer/id</label>
	                        <input required id="BTW" type="text" class="form-control @error('BTW') is-invalid @enderror" name="BTW" value="{{ $check[0]->BTW }}" placeholder="" autocomplete="BTW" autofocus></input>

	                        @error('BTW')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>  

	                      <br>

	                      <div class="form-group">
	                      	<label class="blue" for="inputAddress">Financieel contact</label>
	                      	<br>
	                        <label for="inputAddress text-left">Voornaam</label>
	                        <input required id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $check[0]->firstname }}" placeholder="" autocomplete="firstname" autofocus></input>

	                        @error('firstname')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Achternaam</label>
	                        <input required id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $check[0]->lastname }}" placeholder="" autocomplete="lastname" autofocus></input>

	                        @error('lastname')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div>                  

	                      <div class="form-group">
	                        <label for="inputAddress text-left">Email</label>
	                        <input required id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $check[0]->email }}" placeholder="" autocomplete="email" autofocus></input>

	                        @error('email')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                        @enderror
	                      </div> 

	                      <button type="submit" class="float-right btn btn-primary">Opslaan</button>
	                    </form>

	                    @endif
	                   
	                </div>
			</div>
		</div>

    </div>
</div>

@endsection
