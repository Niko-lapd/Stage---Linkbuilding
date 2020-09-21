@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row text-center">
    		<div class="col-md-4"></div>
    		<div class="col-md-4 text-box">
    			<h1>xander Box</h1>
    			<p>
    				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
    			</p>
    		</div>
    		<div class="col-md-4"></div>

        <div class="col-md-6 bg-blue account-box text-right">
        	<div class="mr-4">
				<h4 class="mt-5">Partner Account Aanmaken</h4>
				<h4>
					Lorem isum dolor sit amet, consectetuer adiiscing elit.
				</h4>
				<h4>
					Lorem isum dolor sit amet, consectetuer adiiscing elit.
				</h4>
				<a class="btn btn-primary mb-5" href="/register/partner">Als Partner Registreren</a>
			</div>
        </div>
        <div class="col-md-6 bg-orange account-box text-left">
        	<div class="ml-4">
				<h4 class="mt-5">Klant Account Aanmaken</h4>
				<h4>
					Lorem isum dolor sit amet, consectetuer adiiscing elit.
				</h4>
				<h4>
					Lorem isum dolor sit amet, consectetuer adiiscing elit.
				</h4>
				<a class="btn btn-primary mb-5" href="/register/klant">Als Klant Registreren</a>
			</div>
        </div>  
        <div class="col-md-12 test-box">
       	</div>   
    </div>
</div>

@endsection


