@extends('layouts.app')

@section('content')
<div class="img-register">
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('partner-register') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="firstname" placeholder="Voornaam*" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="lastname" placeholder="Achternaam*" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       {{--  <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="phonenumber" placeholder="telefoonnummer*" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>

                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="company_name" placeholder="bedrijfsnaam*" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input placeholder="E-mail*" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="password" placeholder="Password*" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Password confirm*" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

{{--                         <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                @if($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" style="display:block;"> 
                                        <strong>{{ $error->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3 text-center">
                                <button type="submit" class="btn-block btn btn-primary">
                                    {{ __('Registreren ') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link none" href="/login">
                                        {{ __("Heeft u al een account?" ) }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="quotatie-voorbeschrijving">
<blockquote style="box-sizing:border-box;padding-right:200px;padding-top:125px;">
"Het is een pluspunt dat de influencers </br> zelf met voorstellen komen.
</blockquote>
</div>
<div class="hoe-het-werkt-adverteerder">
@include('slideshow')
</div>
<div class="Cases-voorpagina">
@include('cases')
</div>
<div class="Campagne-voorpagina">
@include('Campagnes')
</div>
<div class="Abboe-voorpagina">
@include('Abbieo')
</div>
<div class="Voordelen-voorpagina">
@include('Voordeeltjes')
</div>
<div class="inschrijven-voorpagina">
@include('inschrijven-voorpagina')
</div>
@include('footer')
@endsection
