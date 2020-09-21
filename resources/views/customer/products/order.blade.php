@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row">
		<div class="col-md-12"> 
			<div class="row">
        @foreach ($orders as $order)
        @if (Auth::user()->id == $order->customer_id)
        <div class="col-md-12 navbar">
            <table class="table table-border">
              <tbody>
                <tr class="font-weight-bold">
                <td></td>
                  <td class="text-right">Order Datum: {{ $order->created_at->format('d-m-Y') }}</td>
                </tr>
                @foreach(unserialize($order->cart) as $cart)
                  <tr class="text-center">
                    @foreach ($products as $product)
                      @if ($cart->product_id == $product->id)
                        <td>
                          {{ $product->name }}
                        </td>
                      @endif 
                    @endforeach 
                    <td>&#8364; {{ number_format(($cart->price / 100), 2, '.', ',') }} </td>
                  </tr>
                @endforeach

      					<tr>
      						<td class="bold text-center">Totaal:</td>
      						<td class="bold text-center">&#8364; {{ number_format(($order->OrderTotal / 100), 2, '.', ',') }} </td>
      					<tr>
              </tbody>
            </table>

        </div>

        @endif
        @endforeach				
			</div>
		</div>  
    </div>
</div>

@endsection
