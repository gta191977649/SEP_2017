@extends('layouts.ucp')
@section('body')
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
@endsection