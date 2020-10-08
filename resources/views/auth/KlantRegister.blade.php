@extends('layouts.app')

@section('content')

<br><br><br>
<div class = "inschrijfinformatieinfluencer">
<div class = "schrijfjein" style = "background-color: #6cb2eb; padding-left: 50px; padding-top: 50px; width: 500px; padding-right: 50px; padding-bottom: 50px; margin-left: 75px;">
<p><b> Schrijf je gratis in</b></p><br>
Schrijf en promoot authentieke content voor adverteerders via jouw kanalen.<p>
<p>________________________________________________________<p>
<ul>
<li>Krijg betaald per artikel/video/post of affiliate-link.</li>
<li>Maak een artikel, video of foto voor het merk.</li>
<li>inschrijven is gratis.</li>
</ul>
</div>
<div class ="inschrijfplaatje"style = "float: right;">
<P> Hier komt een plaatje </P>
</div>
</div>
<br>
<div class = "quote" style = "background-color: white;">
<center>
<P><i> Dankzij deze site krijg ik betaald om te schrijven over mijn hobby!</i><br>
<b> Piet Petersma </b> </p>
</center>

</div>
<div class="img-register">
<div class="container">
    <div class="row">
    <div class = "hoewerkthetinfluencer" style= "float: left; border: 5px solid #6cb2eb; padding: 10px;">
    <p><b> Hoe werkt het? </b><br>
    ________________________________<br>
    <ol>
    <li> Schrijf je gratis hiernaast in. </li><br>
    <li> Pitch in op een briefing.</li><br>
    <li> Onderhandel met een adverteerder.</li><br>
    <li> Creëer en promoot. </li><br>
    <li> Ontvang je vergoeding</li><br>
    </ol>

    </div>
      
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('klant-register') }}">
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
                        <div class = "form-group radiobutton">
                        <center>
                        <input type="checkbox" name="privacypolicy" value="accepteer" required /><a> Ik ga akkoord met de Privacy Policy </a> <br>
                         <input type="checkbox" name="algemenevoorwaarden" value="accepteer" required /><a> Ik ga akkoord met de Algemene Voorwaarden & Aanvullende affiliate voorwaarden </a>
                         <center>
 
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
<div class= "voordeleninfluencers">
<div class= "indekijker" style = "float: left; padding:40px; width: 300px; background-color:#6cb2eb; margin-left: 300px; margin-top: 70px;">
<p><b> In de kijker </b><br>
_____________________________<br>
Word in één klap zichtbaar bij onze duizenden adverteerders.</P>
</div>
<div class= "kieszelf" style = "float: left; padding:40px; width: 300px; background-color:#6cb2eb; margin-left: 100px; margin-top: 70px;" >
<p><b> Kies zelf </b><br>
_____________________________<br>
Bepaal zelf op welke campagnes je pitcht of welke (affiliate) links je plaatst in je content.</P>
</div>
<div class= "Verdien" style = "float: left; padding:40px; width: 300px; background-color:#6cb2eb; margin-left: 100px; margin-top: 70px;">
<p><b> Verdien</b><br>
_____________________________<br>
Ontvang vergoeding voor jouw unieke content (en promotie).</P>
</div>


</div>



</div>

<br>
@include('footer')
@endsection
