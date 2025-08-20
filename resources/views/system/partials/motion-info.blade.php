@if(hasPermission($indexUrl.'/'.$item->id.'/motion-info', 'get'))
    <a href="{{url($indexUrl.'/'.$item->id.'/motion-info')}}" class="btn btn-info btn-sm btnMargin"><em class="fa fa-info-circle"></em> {{translate('Motion Info')}}</a>
@endif 