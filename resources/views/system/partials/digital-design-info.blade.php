@if(hasPermission($indexUrl.'/'.$item->id.'/digital-design-info', 'get'))
    <a href="{{url($indexUrl.'/'.$item->id.'/digital-design-info')}}" class="btn btn-info btn-sm btnMargin"><em class="fa fa-info-circle"></em> {{translate('Digital Design Info')}}</a>
@endif 