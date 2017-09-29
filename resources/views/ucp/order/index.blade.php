@extends('layouts.ucp')
@section('body')
<<<<<<< HEAD
	<!-- 标题 -->
	<div class="am-cf am-padding am-padding-bottom-0">
    	<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">My Orders</strong> <small>({{ $orders->count() }})</small></div>
    </div>

    <div class="am-g">
			<div class="am-u-sm-12">
				@if($orders->count())
				<table class="am-table am-table-striped am-table-hover table-main">
					<thead>
						<tr>
							<th class="table-id">ID</th><th class="table-title">Name</th><th class="table-type">Surbub</th><th class="table-author am-hide-sm-only">State</th><th class="table-date am-hide-sm-only">Create Date</th><th class="table-set">State</th>
						</tr>
						</thead>
						<tbody>
							@foreach($orders as $order)
							<tr>
								<td>{{ $order->id }}</td>
								<td><a href="#">{{ $order->shop->shop_name }}</a></td>
								<td>{{$order->delivery_contact}}</td>
								<td class="am-hide-sm-only">{{$order->delivery_address}}</td>
								<td class="am-hide-sm-only">{{$order->created_at}}</td>
								<td>
                                    @php
										switch($order->state)
										{
											case 
										}

									@endphp
								</td>
							</tr>

							@endforeach
						</tbody>
					</thead>
				</table>
				@else
					<br/>
					<div class="am-g">
						<div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
							<div class="am-panel am-panel-default">
								<div class="am-panel-hd">SYSTEM</div>
									<div class="am-panel-bd">
										You do not have any comfirmed order yet.
									</div>
								</div>
							</div>
						</div>
					</div>
                <!-- 无数据的时候提示 -->
					
            @endif
            <!-- 店家表格 -->
        </div>
	</div>
=======

	<div class="am-cf am-padding am-padding-bottom-0">
    	<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">My Orders</strong> <small>(Number)</small></div>
    </div>
    <hr/>
    	<div class="am-g">
			<div class="am-u-sm-12">
				<table class="am-table am-table-striped am-table-hover table-main">
					<thead>
						<tr>
							<th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Shop Name</th>
                            <th>Shop Contact</th>
                            <th>Create Date</th>
                            <th>State</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="#">Customer Name</a></td>
								<td>Shop Name</td>
								<td>Shop Address</td>
								<td>2017-09-26</td>
								<td><span class="am-badge am-badge-primary">Comfirmed</span></td>
							</tr>
                            <tr>
								<td>2</td>
								<td><a href="#">Customer Name</a></td>
								<td>Shop Name</td>
								<td>Shop Address</td>
								<td>2017-09-26</td>
								<td><span class="am-badge am-badge-success">Completed</span></td>
							</tr>
                            <tr>
								<td>3</td>
								<td><a href="#">Customer Name</a></td>
								<td>Shop Name</td>
								<td>Shop Address</td>
								<td>2017-09-26</td>
								<td><span class="am-badge am-badge-warning">On Delivery</span></td>
							</tr>
                            <tr>
								<td>4</td>
								<td><a href="#">Customer Name</a></td>
								<td>Shop Name</td>
								<td>Shop Address</td>
								<td>2017-09-26</td>
								<td><span class="am-badge am-badge-danger">Canceled</span></td>
							</tr>
                            

							
						</tbody>
					</thead>
				</table>
                <p>需要改成动态页面.</p>
			</div>
		</div>
>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce
@endsection