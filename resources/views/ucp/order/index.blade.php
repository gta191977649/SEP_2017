@extends('layouts.ucp')
@section('body')

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
@endsection