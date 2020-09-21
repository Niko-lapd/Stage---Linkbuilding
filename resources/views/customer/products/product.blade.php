@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row">
		<div class="col-md-12"> 
			<div class="row">
			<div class="col-md-12">
					@foreach ($products as $product )
					<div class="col-md-4">
						<div class="col-md-12 navbar text-center">
						<h3 class="">{{ $product->name }}</h3>

						<h4 class="">{{ $product->description }}</h4>

						<h5 class=""> &#8364; {{ number_format(($product->price / 100), 2, '.', ',') }} </h5>

                        <form class="ml-3 mt-3" method="POST" action="/at/to/cart/{{ $product->id }}">
                            @csrf
                            <div class="row">

                            <div class="col-md-12">
                              <div class="text-center">
                                 <button type="submit" class="btn btn-primary">Toevoegen Aan Winkelwagen</button> 
                              </div>
                            </div>

                            </div>

                        </form>
						</div>
					</div>
					@endforeach 
			</div>
		</div>  
    </div>
</div>

@endsection
