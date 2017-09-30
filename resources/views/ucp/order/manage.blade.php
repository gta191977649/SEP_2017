@extends('layouts.ucp')
@section('body')
    <!-- 标题 -->
	<div class="am-cf am-padding am-padding-bottom-0">
    	<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">Order Management</strong></div>
    </div>
    <hr/>


    <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-btn-toolbar">
            @if(Auth::user()->type() =="Customer")
            
                <a href="{{ route('ucp.order.state',['orderid' => $order->id , 'state' => $orderStatus::ORDER_FINISHED]) }}" class="am-btn am-btn-success am-radius" {{ $order->state == $orderStatus::ORDER_INDELIVER ? "" : "disabled"}}><span class="am-icon-check"></span> Complete</a>
                <a href="{{ route('ucp.order.state',['orderid' => $order->id , 'state' => $orderStatus::ORDER_CANCELED]) }}" class="am-btn am-btn-danger am-radius" {{ $order->state == $orderStatus::ORDER_CANCELED || $order->state == $orderStatus::ORDER_CANCELEDBYSELLER || $order->state == $orderStatus::ORDER_FINISHED ? "disabled" : ""}}><span class="am-icon-trash-o"></span> Cancel</a>
           
            @else
            
                <a href="{{ route('ucp.order.state',['orderid' => $order->id , 'state' => $orderStatus::ORDER_SHOPCOMFIRMED]) }}" class="am-btn am-btn-primary am-radius" {{ $order->state == $orderStatus::ORDER_CANCELED || $order->state == $orderStatus::ORDER_CANCELEDBYSELLER || $order->state == $orderStatus::ORDER_FINISHED ? "disabled" : ""}}><span class="am-icon-check"></span> Accecpt</a>
                <a href="{{ route('ucp.order.state',['orderid' => $order->id , 'state' => $orderStatus::ORDER_INDELIVER]) }}" class="am-btn am-btn-warning am-radius" {{ $order->state == $orderStatus::ORDER_CANCELED || $order->state == $orderStatus::ORDER_CANCELEDBYSELLER || $order->state == $orderStatus::ORDER_FINISHED ? "disabled" : ""}}><span class="am-icon-truck"></span> Delivery</a>
                <a href="{{ route('ucp.order.state',['orderid' => $order->id , 'state' => $orderStatus::ORDER_CANCELEDBYSELLER]) }}" class="am-btn am-btn-danger am-radius" {{ $order->state == $orderStatus::ORDER_CANCELED || $order->state == $orderStatus::ORDER_CANCELEDBYSELLER || $order->state == $orderStatus::ORDER_FINISHED ? "disabled" : ""}}><span class="am-icon-close"></span> Reject</a>
                
            
            @endif
        </div>
    </div>
   <div class="am-cf am-padding am-padding-bottom-0">

          <div class="am-panel am-panel-default">
            <div class="am-panel-hd">Order Information</div>
            <div class="am-panel-bd">
              <table class="am-table">

              <tbody>

                  <tr>
                      <td>Order ID</td>
                      <td>{{ $order->id }}</td>
                  </tr>
                  <tr>
                      <td>Order Time</td>
                      <td>{{ $order->created_at }}</td>
                  </tr>
                  <tr>
                      <td>Customer Name</td>
                      <td>{{ $order->delivery_contact }}</td>
                  </tr>
                  <tr>
                      <td>Customer Address</td>
                      <td>
                      <div id="customerAddress">
                        {{ $order->delivery_address }}
                       
                      </div>
                        <a href="#" data-am-modal="{target: '#map-modal'}" id="ShowMap"><span class="am-icon-map"></span> Show on map</a>
                      </td>
                  </tr>
                  <tr>
                      <td>Created Time</td>
                      <td>{{ $order->created_at }}</td>
                  </tr>
              </tbody>
              </table>
            </div>
          </div>
        

        <div class="am-panel am-panel-default">
        <div class="am-panel-hd">Order Details</div>
        <div class="am-panel-bd">

            <table class="am-table">
              <thead>
                  <tr>
                      <th>Item</th>
                      <th>Price</th>

                  </tr>
              </thead>
              <tbody>
                  @foreach($order->orderItems as $itm )
                  <tr>
                      <td>{{  $itm->dish->dishName }}</td>
                      <td>${{ $itm->dish->price }}</td>

                  </tr>
                  @endforeach
              </tbody>
            </table>
            <h1 class="am-pagination-right">Total: ${{ $totalPrice }}</h1>

          </div>
        </div>
        <div class="am-pagination-right">
        @if($order->state == $orderStatus::ORDER_COMFIRMED)
            <span class="am-badge am-badge-primary am-radius am-text-xl"> Wating for seller comfirm </span>
        @elseif($order->state == $orderStatus::ORDER_SHOPCOMFIRMED)
            <span class="am-badge am-badge-primary am-radius am-text-xl"> Seller Comfirmed </span>
        @elseif($order->state == $orderStatus::ORDER_INDELIVER)
            <span class="am-badge am-badge-warning am-radius am-text-xl"> On Delivery</span>
        @elseif($order->state == $orderStatus::ORDER_FINISHED)
            <span class="am-badge am-badge-success am-radius am-text-xl"> Completed </span>
        @elseif($order->state == $orderStatus::ORDER_CANCELED || $order->state == $orderStatus::ORDER_CANCELEDBYSELLER)
            <span class="am-badge am-badge-danger am-radius am-text-xl"> Canceled </span>
        
        @endif
        </div>
        <!-- Map -->

        <div class="am-modal am-modal-alert" tabindex="-1" id="map-modal">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">Map Location</div>
                <div class="am-modal-bd">
                    <div id="map" style="height: 500px;"></div>
                    <!-- Google Map(估计代码很坑，因为是JS) -->
    
                    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCAHMEsT8SxFopteetKsuwQjUbpUBtjj4&callback=initMap"></script>
                    <script>
                    $('#ShowMap').click(function (e) {
                        e.preventDefault();
                        //绘制Canvas
                        var marker =null;
                        var map = null;
                        
                        function initMap() {
                        
                            map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 17,
                            center: {lat: -34.397, lng: 150.644}
                            });
                            var geocoder = new google.maps.Geocoder();
                                    
                            setTimeout(function() {
                                google.maps.event.trigger(map, 'resize');
                                geocodeAddress(geocoder, map);
                            }, 200);
                            
                            //geocodeAddress(geocoder, map);
                        }

                        function geocodeAddress(geocoder, resultsMap) {
                            var address = document.getElementById('customerAddress').innerHTML;
                            geocoder.geocode({'address': address}, function(results, status) {
                            if (status === 'OK') {
                                resultsMap.setCenter(results[0].geometry.location);
                                marker = new google.maps.Marker({
                                map: resultsMap,
                                position: results[0].geometry.location
                                });
                                
                            } else {
                                alert('Geocode was not successful for the following reason: ' + status);
                            }
                            });
                        }
                        initMap();
                        

                    });
                    
                    </script>
                </div>
                <div class="am-modal-footer">
                <span class="am-modal-btn">Close</span>
                </div>
            </div>
        </div>
    </div>

@endsection