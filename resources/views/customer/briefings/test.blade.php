@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row text-center">
		<div class="col-md-12"> 
			<div class="col-md-8">
				<div class="col-md-12 offer-box">
		<div class="col-md-12"> 
			<table class="table">
			  <thead>
			    <tr>
			      <th class="text-center">PA</th>
			      <th class="text-center">DA</th>
			      <th class="text-center">Spam</th>
			      <th class="text-center">Bezoekers</th>
			      <th class="text-center">Blog/Link</th>
			      <th class="text-center">Prijs</th>
			    </tr>
			  </thead>
			  <tbody class="text-center">
				<tr>
					<td>25</td>
					<td>15</td>
					<td>1</td>
					<td>3000</td>
					<td>Blog</td>
					<td>€35,00</td>
				</tr>
			  </tbody>
			</table>
		</div>
				</div>
		<div class="col-md-12 offer-box mt-3">
			<table class="table">
			  <thead>
			    <tr>
			      <th class="text-center">Aanbod</th>
			      <th class="text-center">Gebruiker</th>
			      <th class="text-center">Accepteren</th>
			      <th class="text-center">Weigeren</th>
			      <th class="text-center">Tegenaanbod</th>
			    </tr>
			  </thead>
			  <tbody class="text-center">
				<tr>
					<td>€25,00</td>
					<td>Xander Plieger</td>
					<td style="font-size: 25px;"><i class="fas fa-check"></i></td>
					<td style="font-size: 25px;"><i class="fas fa-times"></i></td>
					<td style="font-size: 25px;"><i class="fas fa-money-bill-wave"></i></td>
				</tr>
			  </tbody>
			</table>
		</div>
			</div>

			<div class="col-md-4">
				<div class="col-md-12 offer-box">
						<h3>Status: <font color="green">Online</font></h3>
				</div>
				<div class="col-md-12 offer-box">
					<button type="button" class="btn btn-danger btn-block mt-2" data-toggle="modal" data-target="#OfflineModal">Offline</button>

					<a href="/partner/offers/overzicht" class="mt-2 btn btn-block btn-info">Terug</a>

				</div>
			</div>

		</div>    
    </div>
</div>

@endsection