@extends('layouts.ucp')
@section('body')

	<div class="am-cf am-padding am-padding-bottom-0">
    	<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">{{Auth::user()->type() =="Customer" ? "My Orders" : "Order Management" }}</strong> <small>({{ $orders->count() }})</small></div>
    </div>
    <hr/>
    	<div class="am-g">
			<div class="am-u-sm-12">
			@if($orders->count())
				<table class="am-table am-table-striped am-table-hover table-main">
					<thead>
						<tr>
							<th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Shop Name</th>
                            <th>Shop Address</th>
                            <th>Create Date</th>
                            {{--<th>view</th>--}}
                            <th>State</th>
							<th>Operation</th>
						</tr>
						</thead>
						<tbody>
						@foreach($orders as $order)
						<tr>
							<td>{{ $order->id }}</td>
							<td><a href="{{ route("ucp.order.show", $order->id) }}">{{ $order->delivery_contact }}</a></td>
							<td>{{ $order->shop->shop_name }}</td>
							<td class="am-hide-sm-only">{{ $order->delivery_address }}</td>
							<td class="am-hide-sm-only">{{ $order->created_at }}</td>
							<td>
								@if($order->state == $orderStatus::ORDER_COMFIRMED)
									<span class="am-badge am-badge-primary am-radius am-text-default"> Waiting for seller comfirm ... </span>
								@elseif($order->state == $orderStatus::ORDER_SHOPCOMFIRMED)
									<span class="am-badge am-badge-primary am-radius am-text-default"> Seller Comfirmed </span>
								@elseif($order->state == $orderStatus::ORDER_INDELIVER)
									<span class="am-badge am-badge-warning am-radius am-text-default"> On Delivery ... </span>
								@elseif($order->state == $orderStatus::ORDER_FINISHED)
									<span class="am-badge am-badge-success am-radius am-text-default"> Completed </span>
								@elseif($order->state == $orderStatus::ORDER_CANCELED || $order->state == $orderStatus::ORDER_CANCELEDBYSELLER)
									<span class="am-badge am-badge-danger am-radius am-text-default"> Canceled </span>
								@endif
								
							<td>
								<div class="am-btn-toolbar">
								<a href="{{ route("ucp.order.show", $order->id) }}" class="am-btn am-btn-default am-btn-xs am-radius"><span class="am-icon-pencil-square-o"></span> Manage</a>	
								</div>
							</td>
						</tr>
						@endforeach
						{{-- 
							====MLS====
		 					@foreach ($orders as $order)
							<tr>
								<td>{{$order->id}}</td>
								<td>{{$order->user->name}}</a></td>
								<td>{{$order->shop->shop_name}}</td>
								<td>{{$order->shop->shop_city}}</td>
								<td>{{$order->updated_at}}</td>
								<td><a href="{{ URL('ucp/order/show/'.$order->id) }}">view</a></td>
								<td>
							     @if($order->status==0)<span class="am-badge am-badge-primary">order submit</span>@endif
								 @if($order->status==1)<span class="am-badge am-badge-primary">Comfirmed</span>@endif
								 @if($order->status==2)<span class="am-badge am-badge-success">Completed</span>@endif
								 @if($order->status==3)<span class="am-badge am-badge-warning">On Delivery</span>@endif
								 @if($order->status==4)<span class="am-badge am-badge-danger">Canceled</span>@endif
								 </button>
								</form>
								</td>
							</tr>
          				 @endforeach
                            
						--}}
							
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
										You do not have any order yet.
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- 无数据的时候提示 -->
			@endif
			</div>
		</div>
@endsection