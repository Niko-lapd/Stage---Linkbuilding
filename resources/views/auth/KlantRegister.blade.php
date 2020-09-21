@extends('layouts.app')

@section('content')

<div class = "samenvatting" style = "background-color: yellow" >

<div class="col-md-4"></div>
    		<div class="col-md-4 text-box"   style = "padding-left: 100px;  padding-top: 40px; ">
    			<h1>Influencers</h1>
    			<p>
                 Verdien geld door op jouw kanaal een product of bedrijf te promoten.
                 <br>
                 _________________________________________________________
                 <ul>
                 <li> Krijg betaald via affiliatelinks </li>
                 <li> Maak een foto, video of schrijf een artikel over het bedrijf</li>
                 <li> Gratis inschrijven </li>
                 </ul>
                
       			</p>
               

    		</div>
    		<div class="col-md-4"></div>

</div>


<br>
<div class = "quote" style = "background-color: white; width: auto;">
<center>
<p style = "font-size: 20px"> <i> Ik schreef graag over mijn hobby, en nu krijg ik er nog betaald voor ook!</i>
     <br>
     Jan Peter
</p>
</div>




<div class="img-register">
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5" style = "font-size:20px; background-color: yellow; padding-top: 10px;"  >
       <b> Hoe werkt het? </b>
        <br>
        <br>
        <ol>
        <li> Schrijf je hiernaast in </li>
        <br>
        <li> Pitch op een briefing </li>
        <br>
        <li> Onderhandelmet de adverteerder </li>
        <br>
        <li> Creeër en promoot </li>
        <br>
        <li> Ontvang je vergoeding</li>
        <br>
        </ol>

        </div>
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body" style ="background-color: yellow;">
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
<section>
<div class = "indekijker" style = " ">
                <P><b> In de kijker </b> <br>
                Word in één klap zichtbaar bij onze adverteerders. </p>
                
              </div>
           </section>   
              
                <div class = "kieszelf" style =  "width: 180px;">
                <P><b> Kies zelf </b> <br>
               bepaal zelf of welke campagnes je pitcht of welke (affiliate) links je plaats in je content. </p>
                
              </div>

              <div class = "verdien" style = "width: 180px;">
                <P><b> Verdien </b> <br>
               Ontvang vergoeding voor jouw unieke content (en promotie) </p>
                
              
              </div>
@endsection

  
