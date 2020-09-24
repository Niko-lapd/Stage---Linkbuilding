@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row text-center">
    		<div class="col-md-4"></div>
    		<div class="col-md-4 text-box">
    			<h1><b>Content & influencer Marketing</b></h1>
				<h1>Makkelijk gemaakt</h1>
    			<p>
				Linkbuilding verbindt adverteerders met het miljoenenbereik van onze 3.600+ influencers. Ons platform maakt samenwerking tussen adverteerders en influencers gemakkelijk en efficient.
    			</p>
    		</div>
    		<div class="col-md-4"></div>

        <div class="col-md-6 bg-orange account-box text-right">
        	<div class="mr-4">
			<h6 style="margin-top:40px;"class="mt-5">Adverteerder</h6>
				<h2 style=" margin-top:0px;" class="mt-5">Laat influencers</h2>
				<h4 class="mt-5">
					Over je merk schrijven en 
				</h4>
				<h4 class="mt-5">
					posten op hun kanaal
				</h4>
				<a class="btn btn-primary mb-5, mt-5" href="/register/partner">Ik ben adverteerder</a>
			</div>
        </div>
        <div class="col-md-6 bg-blue account-box text-left">
        	<div class="ml-4">
			<h6 style="margin-top:40px;" class="mt-5">Influencers</h6>
				<h2 style=" margin-top:0px;" class="mt-5">Verdien met content</h2>
				<h4 class="mt-5">
					Creatie voor adverteerders
				</h4>
				<h4 class="mt-5">
					die bij de passen
				</h4>
				<a class="btn btn-primary mb-5, mt-5" href="/register/klant">Ik ben influencer</a>
			</div>
        </div>
        <div class="col-md-12 test-box">
			
		<div>
		  <blockquote style="margin: 12px 0; box-sizing:content-box;padding-top:35px; text-align:right; height:200px;width:850px; padding-left:360px;font-size: 2em; font-weight: 300; font-style: italic; line-height: 1.3em; text-align: right;
"> "We kregen binnen een dag 57 voorstellen van influencers waarna er 21 goede artikelen live zijn gegaan!"</blockquote>
		   </div>	
		   <div id="Infl">
			   <h3>
				   Aangesloten influencers en publishers
			   </h3>
			   	   Sport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reizen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Familie & Ouderschap&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Eten & Drinken &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Shopping &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Business

		   </div>
		   <div id="Medaal">
				space		   
		   </div>
       	</div>
    </div>
	
</div>
@include('footer')
	@endsection

