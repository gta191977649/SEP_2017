@extends('layouts.ucp')
@section('body')
  <!-- 标题 -->
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">Transaction Details</strong> <small>(  {{ $transaction->transactionItems->count() }} )</small></div>
    </div>
  <!-- 标题 -->
  <hr>
    <div class="am-cf am-padding am-padding-bottom-0">

          <div class="am-panel am-panel-default">
            <div class="am-panel-hd">Customer Information</div>
            <div class="am-panel-bd">
              <table class="am-table">

              <tbody>

                  <tr>
                      <td>Transaction ID</td>
                      <td>{{ $transaction->id }}</td>
                  </tr>
                  <tr>
                      <td>Custoner Name</td>
                      <td>{{ $transaction->cust_name }}</td>
                  </tr>
                  <tr>
                      <td>Phone</td>
                      <td>{{ $transaction->cust_phone }}</td>
                  </tr>
                  <tr>
                      <td>Contact Address</td>
                      <td>{{ $transaction->cust_cont_address }}</td>
                  </tr>
                  <tr>
                      <td>Created Time</td>
                      <td>{{ $transaction->created_at }}</td>
                  </tr>
              </tbody>
              </table>
            </div>
          </div>

          <div class="am-panel am-panel-default">
          <div class="am-panel-hd">Shop Information</div>
            <div class="am-panel-bd">
              <table class="am-table">

              <tbody>

                  <tr>
                      <td>Shop Name</td>
                      <td>{{ $transaction->shop_name }}</td>
                  </tr>
                  <tr>
                      <td>Shop Address</td>
                      <td>{{ $transaction->shop_address }}</td>
                  </tr>
                  <tr>
                      <td>Phone</td>
                      <td>{{ $transaction->shop_phone }}</td>
                  </tr>
                  <tr>
                      <td>Addtional Note</td>
                      <td>{{ $transaction->note }}</td>
                  </tr>

              </tbody>
              </table>

            </div>

          </div>

          <div class="am-panel am-panel-default">
          <div class="am-panel-hd">Order Items</div>
          <div class="am-panel-bd">

            <table class="am-table">
              <thead>
                  <tr>
                      <th>Item</th>
                      <th>Price</th>

                  </tr>
              </thead>
              <tbody>
                  @foreach($transaction->transactionItems as $itm )
                  <tr>
                      <td>{{  $itm->dish_name }}</td>
                      <td>${{ $itm->dish_price }}</td>

                  </tr>
                  @endforeach
              </tbody>
            </table>
            <h1 class="am-pagination-right">Total: ${{ $transaction->transactionItems->sum('dish_price') }}</h1>

          </div>
        </div>

        <script src="{{ asset('js/jquery.barrating.min.js') }}"></script>
        <!-- Feedback & Rate -->
        @if(Auth::user()->user_type == 0)
        @if(!$transaction->isRate())
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd">Rate</div>
          <div class="am-panel-bd">
            <form class="am-form" method="post" action="{{ route('feedback.create',['transactionid' => $transaction->id , 'shopid' => $transaction->shopSells->shop_id ]) }}">
            {{csrf_field()}}
            
            <div class="am-form-group">
                <label>What do you think this order?</label>
                <select id="rate" name="rate">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                    <script>
                        $(function() {
                            $('#rate').barrating({
                                theme: 'fontawesome-stars'
                            });
                        });
                    </script>
            </div>
            <div class="am-form-group">
                <label>Any comments?</label>
                <textarea name="comment" id="comment" rows="4" required></textarea>
            </div>
            <input type="submit" value="Rate" class="am-btn am-btn-primary">
            </form>
          </div>
        </div>
        @else
        <div class="am-panel am-panel-default">
            <div class="am-panel-hd">Rate</div>
            <div class="am-panel-bd">
            <span style ="font-size:20px;">
                Rate:
            </span>
            <br/>
            <span style ="font-size:30px;">
            @for($i = 0;$i < 5; $i++)
                @if($i < $transaction->feedback->rate)
                     <span class='am-icon-star'></span> 
                @else
                    <span class='am-icon-star-o'></span> 
                @endif
            @endfor
            </span>
            <br/>
            <span style ="font-size:20px;">
                Comment:
            </span>
            <p>
                {{ $transaction->feedback->comment }}
            </p>
            
            </div>
        </div>
        
        @endif
        @endif
</div>
@endsection
