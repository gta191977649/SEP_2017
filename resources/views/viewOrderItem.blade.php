+	<h1>Dish</h1>

	@foreach($data as $orderItem)
		<h2>{{ $orderItem->orderItemName }}</h2>
		<ul>
			<li>{{ $orderItem->price }}</li>
			<li>{{ $orderItem->orderItemQty }}</li>
			<li>{{ $orderItem->order_id }}</li>
			<li>{{ $orderItem->shop_id }}</li>
			<li>{{ $orderItem->dish_id }}</li>

		</ul>

