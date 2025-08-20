@extends('system.layouts.listing')
@section('header')
    <x-system.search-form :action="$indexUrl">
        <x-slot name="inputs">
            <x-system.form.form-inline-group
                :input="['name' => 'keyword', 'placeholder' => 'Keyword', 'default' => Request::get('keyword')]"></x-system.form.form-inline-group>
        </x-slot>
    </x-system.search-form>
@endsection

@section('table-heading')
    <tr>
        <th scope="col">{{translate('S.N')}}</th>
        <th scope="col">{{translate('Name')}}</th>
        <th scope="col">{{translate('Banner Image')}}</th>
        <th scope="col">{{translate('Position')}}</th>
        <th scope="col">{{translate('Status')}}</th>
        <th scope="col">{{translate('Action')}}</th>
    </tr>
@endsection

@section('table-data')
    @php $pageIndex = pageIndex($items); @endphp
    @foreach($items as $key=>$item)
        <tr>
            <td>{{SN($pageIndex, $key)}}</td>
            <td>{{ $item->title }}</td>
            <td>
                @if($item->banner_image)
                    <img src="{{ asset('uploads/graphic_art/banner/' . $item->banner_image) }}" alt="Banner Image" class="img-fluid" style="max-width: 100px; max-height: 100px;">
                @else
                    <span class="text-muted">No image</span>
                @endif
            </td>
            <td>{{ $item->position }}</td>
            <td>
                @include('system.partials.graphic-art-status')
            </td>
            <td>
                @include('system.partials.editButton')
                @include('system.partials.deleteButton')
                @include('system.partials.graphic-art-image')
            </td>
        </tr>
    @endforeach
@endsection

@section('scripts')
    @include('system.partials.js.status')
@endsection
