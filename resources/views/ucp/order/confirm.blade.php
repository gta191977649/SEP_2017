@extends('layouts.ucp')
@section('body')
    <h1>Comfirm</h1>
    </hr>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderItems as $orderItem)
                <tr>
                    <td>{{ $orderItem->dish->dishName }}</td>
                    <td>${{ $orderItem->dish->price }}</td>
                    <td>
                        @php 
                        $qty = 0;
                        foreach($order->orderItemsQty as $j)
                        {
                                
                            if($j->dish_id == $orderItem->dish_id )
                            {
                                    $qty = $j->qty;
                            }
                        }
                        @endphp
                        {{  $qty }}
                    </td>
                                    
                    <td>
                        ${{  $qty * $orderItem->dish->price }}
                    </td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
    </div>


     
    {{csrf_field()}}
    @if($contacts->count())
    <table class="am-table table table-striped  am-table-hover table-main">
        <thead>
            <tr>
                {{--<th class="table-id">ID</th>--}}
                <th>Receiver</th>
                <th>Address</th>
                <th>ZipCode</th>
                <th>Phone</th>
                
            </tr>
            </thead>

            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    {{--<td>{{ $contact->id }}</td>--}}
                    <td><a href="{{ route('ucp.contact.edit',$contact->id) }}">{{ $contact->cont_firstname }} {{ $contact->cont_lastname }}</a></td>
                    <td>{{ $contact->cont_street_number }}, {{ $contact->cont_street }}, {{ $contact->cont_city }}, {{ $contact->cont_state }}</td>
                    <td>{{ $contact->cont_zipcode }}</td>
                    <td>{{ $contact->cont_phone }}</td>
                   
                    <td>
                     
      
                       
                    </td>
                

                </tr>
        
                @endforeach
            </tbody>
        </thead>
    </table>
    <h3>Addtional Note</h3> 
    </hr>
    <div class="form-group">
         {{$order->note}}
    </div>
    <br>
        <form action="{{route("ucp.order.edit", $order->id)}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                    {{csrf_field()}}
            <select name="status" id="status">
        <!--    <option value="0" @if($order->status==0) selected="selected" @endif >   <span class="am-badge am-badge-primary">order submit</span></option>-->
            @if(Auth::user()->id==$order->user_id)
                <option value="2" @if($order->status==2) selected="selected" @endif >Completed</option>
                <option value="4" @if($order->status==4) selected="selected" @endif >Canceled</span></option> 
            @else
                 <option value="1" @if($order->status==1) selected="selected" @endif >Comfirmed</option>
                 <option value="3" @if($order->status==3) selected="selected" @endif >On Delivery</option>
            @endif
    
            </select>
                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" type="submit">submit</button>
        </form>
    @else
        
       
    @endif

        
    

@endsection