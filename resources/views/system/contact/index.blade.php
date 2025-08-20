@extends('system.layouts.listing')
@section('create')
@show
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
        <th scope="col">{{translate('Email')}}</th>
        <th scope="col">{{translate('Option')}}</th>
        <th scope="col">{{translate('Sent At')}}</th>
        <th scope="col">{{translate('Message')}}</th>
        <th scope="col">{{translate('Action')}}</th>
    </tr>
@endsection

@section('table-data')
    @php $pageIndex = pageIndex($items); @endphp
    @foreach($items as $key=>$item)
        <tr>
            <td>{{SN($pageIndex, $key)}}</td>
            <td>{{ $item->name ?? 'N/A'    }}</td>
            <td>{{ $item->email ?? 'N/A'    }}</td>
            <td>{{ $item->option ?? 'N/A'    }}</td>
            <td>{{ $item->created_at ?? 'N/A'    }}</td>
            <td>{{ Str::limit($item->message, 30) ?? 'N/A'    }}</td>
            <td>
                <button class="btn btn-primary btn-sm view-message" data-bs-toggle="modal"
                data-bs-target="#messageModal" data-message="{{ $item->message }}" data-name="{{ $item->name }}" data-company="{{ $item->company }}">
                    <em class="fa fa-eye"></em>
                </button>
            </td>
            <!-- <td>
                @if(hasPermission($indexUrl.'/'.$item->id.'/show', 'get'))
                    <a href="{{url($indexUrl.'/'.$item->id.'/show')}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Show"><em class="fa fa-eye"></em></a>
                @endif -->

                <!-- @include('system.partials.deleteButton') -->
            <!-- </td> -->
        </tr>
    @endforeach
@endsection

@section('scripts')
    @include('system.partials.js.status')
    
    <!-- Message Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Contact Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="fw-bold">Name:</label>
                        <p id="modalName"></p>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Company:</label>
                        <p id="modalCompany"></p>
                    </div>
                    <div>
                        <label class="fw-bold">Message:</label>
                        <p id="modalMessage" style="white-space: pre-wrap;"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle message modal
            const messageModal = document.getElementById('messageModal');
            if (messageModal) {
                messageModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const message = button.getAttribute('data-message');
                    const name = button.getAttribute('data-name');
                    const company = button.getAttribute('data-company');

                    const modalMessage = messageModal.querySelector('#modalMessage');
                    const modalName = messageModal.querySelector('#modalName');
                    const modalCompany = messageModal.querySelector('#modalCompany');

                    modalMessage.textContent = message || 'N/A';
                    modalName.textContent = name || 'N/A';
                    modalCompany.textContent = company || 'N/A';
                });
            }
        });
    </script>
@endsection
