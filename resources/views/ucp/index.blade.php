@extends('layouts.ucp')
@section('body')
<!-- 标题 -->
<div class="am-cf am-padding am-padding-bottom-0">
   <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">Home</strong></div>
</div>
<hr/>
<ul class="am-avg-sm-1 am-avg-md-2 am-margin am-padding am-text-center admin-content-list ">
   <li><a href="#" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>Orders<br/>0</a></li>
   <li><a href="#" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>User Type<br/>{{ Auth::user()->type() }}</a></li>
</ul>

<div class="am-cf am-padding am-padding-bottom-0">
   <table class="am-table am-table-bd am-table-striped admin-content-table">
      <thead>
         <tr>
            <th>Order ID</th>
            <th>Shop</th>
            <th>Shop Address</th>
            <th>Total Price</th>
            <th>Operation</th>
         </tr>
      </thead>
      
   </table>
   <div class="am-panel am-panel-default">
      <div class="am-panel-hd ">
         <h3 class="am-panel-title" data-am-collapse="{target: '#notify-1'}">
            Recent Notifications <span class="am-icon-chevron-down am-fr" ></span>
         </h3>
      </div>
      <div id="notify-1" class="am-panel-collapse am-collapse am-in">
         <div class="am-panel-bd">
            @if(!Auth::user()->notifications->count())
            <div class="am-g">
               <div class="am-u-sm-12">
                  <h2 class="am-text-center am-text-xxxl am-margin-top-lg am-text-primary">Nothing Found!</h2>
                  <img class="am-center" src="{{ Asset('res/img/404.png') }}"></img>
               </div>
            </div>
            @endif
            @foreach(Auth::user()->notifications->take(5) as $note)
            <article class="am-comment">
               <a href="#link-to-user-home">
               <img src="" alt="" class="am-comment-avatar" width="48" height="48"/>
               </a>
               <div class="am-comment-main">
                  <header class="am-comment-hd">
                     <!--<h3 class="am-comment-title">评论标题</h3>-->
                     <div class="am-comment-meta">
                        <a href="#" class="am-comment-author">{{ $note->sender->name }}</a>
                        Send at <time>{{ $note->created_at }}</time>
                     </div>
                  </header>
                  <div class="am-comment-bd">
                     <p>
                        {{ $note->body }}
                     </p>
                  </div>
               </div>
            </article>
            <br/>
            @endforeach
         </div>
      </div>
   </div>
</div>
@endsection