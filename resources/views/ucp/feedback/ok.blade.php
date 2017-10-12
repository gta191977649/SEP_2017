@extends('layouts.ucp')
@section('body')
<div class="am-cf am-padding am-padding-bottom-0">
    <div class="am-g">
        <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
            <div class="am-panel am-panel-success">
                <div class="am-panel-hd">SYSTEM</div>
                    <div class="am-panel-bd">
                        Thanks for your rating !
                        <br/>
                        <a href="{{ route('ucp.index') }}">Back to ucp home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection