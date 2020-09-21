@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row">
		<div class="col-md-12"> 
			<div class="row">
				<div class="col-md-8">
					@foreach( $carts as $cart)
						@if (Auth::user()->id == $cart->customer_id)
							@foreach( $products as $product)
								@if ($product->id == $cart->product_id)
								<div class="col-md-12 navbar text-center">
									<a href="/cart/remove/{{ $cart->id }}" class="btn btn-danger float-right"><i class="fas fa-minus"></i></a>
									<h3> {{ $product->name }} </h3>
									<h4> {{ $product->description }} </h4>
									<h4> &#8364; {{ number_format(($product->price / 100), 2, ',', '.') }} </h4>
								</div>
								@endif
							@endforeach
						@endif
					@endforeach
				</div>
				@if (!empty($cart->id) && Auth::user()->id == $cart->customer_id)
					<div class="col-md-4 navbar">
						@foreach( $carts as $cart)
							@if ( Auth::user()->id == $cart->customer_id)
								@foreach( $products as $product)
									@if ($product->id == $cart->product_id)
									<div class="col-md-8">
										<h5> {{ $product->name }} </h5>
									</div>
									<div class="col-md-4">
										<h5> &#8364; {{ number_format(($product->price / 100), 2, ',', '.') }} </h5>
									</div>
									@endif
								@endforeach
							@endif
						@endforeach

						
						<div class="col-md-12 hr"></div>
						<div class="col-md-8"> <h5 class="bold">Totaal</h5></div>
						<div class="col-md-4">
							<h5 class="bold"> &#8364; {{ number_format(( $cart_total / 100), 2, ',', '.') }} </h5>
						</div>
						<div class="col-md-12">
						<form method="POST" action="{{ route('checkout') }}">
						@csrf
							<div class="text-center">
								<button type="submit" class="btn btn-block btn-primary">Afrekenen</button> 
							</div>
						</form>					
						</div>

						</div>
						@else 

						<div class="col-md-12">
							<div class="text-center">
								<a href="/klant/producten">
									<i class="fas fa-cart-plus" style="font-size: 200px;"></i>
								</a>
								<h1>Helaas is uw Winkelwagen Leeg</h1>
								<h4>Voeg iets toe aan uw winkelwagen</h4>
								<a href="/klant/producten" class="btn btn-primary text-center">
									Doorgaan met winkelen
								</a>
							</div>
						</div>
				@endif
			</div>  
	    </div>
	</div>
</div>
@endsection
