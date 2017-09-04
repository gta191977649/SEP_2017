@extends('template/base')
@section('body')
	<h1>Dish</h1>

	@foreach($data as $dish)
		<h2>{{ $dish->dishName }}</h2>
		<ul>
			<li>{{ $dish->price }}</li>
			<li>{{ $dish->shop_id }}</li>
			<li>{{ $dish->avaible }}</li>

		</ul>

	@endforeach

@endsection