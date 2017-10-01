@extends('layouts.ucp')

@section('body')
   <!-- 标题 -->
	<div class="am-cf am-padding am-padding-bottom-0">
    	<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">Create Dish</strong></div>
    </div>
    <hr/>
    <div class="am-g">
		<div class="am-u-lg-11 am-u-sm-centered">
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">Editing Dish</div>
                    <div class="am-panel-bd">
                        <form class="am-form" action="{{route('ucp.shop.dish.update',['shop'=>$dish->shop_id,'dish'=>$dish->id])}}" method="POST" enctype="multipart/form-data" data-am-validator>
                            <fieldset>
                                {{csrf_field()}}
                                {{method_field('PUT')}}

                                <div class="am-form-group">
                                    <input class="am-form-field am-radius" placeholder="Name" name="dishName" value = "{{$dish->dishName}}" required> 
                                </div>
                                {{--
                                <div class="am-form-group">
                                    <input class="am-form-field am-radius" placeholder="dishPic" name="dishPic" value = "{{$dish->dishPic}}" required> 
                                </div>
                                --}}
                                <p>
                                    @if($dish->dishPic)<img src="{{$dish->dishPic}}"  class="am-img-thumbnail am-radius"  width="140" height="140"/>@endif
                                </p>
                                <div class="am-form-group am-form-file">
                                    <button type="button" class="am-btn am-btn-primary am-btn-sm">
                                        <i class="am-icon-cloud-upload"></i> Select file...</button>
                                    <input id="doc-form-file" type="file" name="dishPic" accept="image/*">
                                </div>
                                <div id="file-list"></div>
                                <script>
                                $(function() {
                                    $('#doc-form-file').on('change', function() {
                                    var fileNames = '';
                                    $.each(this.files, function() {
                                        fileNames += '<span class="am-badge">' + this.name + '</span> ';
                                    });
                                    $('#file-list').html(fileNames);
                                    });
                                });
                                </script>

                                <div class="am-form-group">
                                    <input class="am-form-field am-radius" type="number" placeholder="price" name="price" value = "{{$dish->price}}" required> 
                                </div>
                                <div class="am-form-group">
                                    <textarea class="am-form-field am-radius" placeholder="Description" name="dishDes" rows="5" required>{{$dish->dishDes}}</textarea>
                                </div>
                                
                                <div class="am-form-group">
                                    <label class="am-checkbox-inline">
                                    @if($dish->avaible)
                                        <input id="ck_avai" type="checkbox" name="avai" checked> Avaiable
                                    @else
                                        <input id="ck_avai" type="checkbox" name="avai" > Avaiable
                                    @endif
                                    </label>
                                </div>


                                <input type="hidden" id="ck_cache" class="am-form-field am-radius" value="{{$dish->avaible}}" name="avaible" required> 

                                <input class="am-btn am-btn-primary am-radius am-fr" type="submit" value ="Update">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>


        $('#ck_avai').change(function () {
            //alert(this.checked ? "YES" : "NO");
            $("#ck_cache").val(this.checked ? 1 : 0);
        });
    </script>
@endsection

