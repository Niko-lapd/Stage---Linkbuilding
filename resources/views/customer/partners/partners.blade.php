@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row">
		<div class="col-md-12 navbar"> 
			<table class="table">
			  <thead>
			    <tr>
			      <th class="text-center">Bedrijfsnaam</th>
			      <th class="text-center">Website</th>
			      <th class="text-center">Type</th>
			      <th class="text-center">Status</th>
			    </tr>
			  </thead>
			  <tbody class="text-center">
			  	{{-- @foreach ( 1 == 1)
				  	@if ( 1 == 1)
						<tr>
							<td>test</td>
						</tr>
					@endif
				@endforeach --}}
			  </tbody>
			</table>
		</div>  
    </div>
</div>

@endsection
