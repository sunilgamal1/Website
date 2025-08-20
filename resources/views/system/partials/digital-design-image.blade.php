@if(hasPermission($indexUrl.'/'.$item->id.'/digital-design-image', 'get'))
    <a href="{{url($indexUrl.'/'.$item->id.'/digital-design-image')}}" class="btn btn-primary btn-sm btnMargin"><em class="fa fa-image"></em> {{translate('Digital Design Image')}}</a>
@endif 