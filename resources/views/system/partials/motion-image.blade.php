@if(hasPermission($indexUrl.'/'.$item->id.'/motion-image', 'get'))
    <a href="{{url($indexUrl.'/'.$item->id.'/motion-image')}}" class="btn btn-primary btn-sm btnMargin"><em class="fa fa-image"></em> {{translate('Motion Image')}}</a>
@endif 