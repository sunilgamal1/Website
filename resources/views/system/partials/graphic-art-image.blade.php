@if(hasPermission($indexUrl.'/'.$item->id.'/graphic-art-image', 'get'))
    <a href="{{url($indexUrl.'/'.$item->id.'/graphic-art-image')}}" class="btn btn-primary btn-sm btnMargin"><em class="fa fa-image"></em> {{translate('Graphic Art Image')}}</a>
@endif
