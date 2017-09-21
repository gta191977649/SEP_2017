@extends('layouts.ucp')
@section('body')


        <!-- 标题 -->
	<div class="am-cf am-padding am-padding-bottom-0">
    	<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">Home</strong></div>
    </div>
    <hr/>

    <ul class="am-avg-sm-1 am-avg-md-2 am-margin am-padding am-text-center admin-content-list ">
        <li><a href="#" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>Orders<br/>0</a></li>
        <li><a href="#" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>User Type<br/>Customer</a></li>
    </ul>
<div class="am-cf am-padding am-padding-bottom-0">


          <div class="am-panel am-panel-default">
            <div class="am-panel-hd ">
                <h3 class="am-panel-title" data-am-collapse="{target: '#notify-1'}">
                    Recent Notifications <span class="am-icon-chevron-down am-fr" ></span>
                </h3></div>
                <div id="notify-1" class="am-panel-collapse am-collapse am-in">
            <div class="am-panel-bd">

          
                 <div class="am-g">
        <div class="am-u-sm-12">
          <h2 class="am-text-center am-text-xxxl am-margin-top-lg am-text-primary">Nothing Found!</h2>
          

        </div>
      </div>
           
          
                   
                
            </div>
            </div>
        </div>
        </div>
        
        
        


@endsection