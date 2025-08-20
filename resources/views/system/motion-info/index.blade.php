@extends('system.layouts.form')

@section('inputs')
@endsection

@section('custom-form')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <br/>
            <div class="card-header pb-0 mb-4">
                <div class="content-display clearfix custom-border">
                    <div class="panel panel-default custom-padding">
                        <div class="panel-body">
                            @include('system.partials.message')
                            <form method="post" action="#">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-2">
                                    <label>Motion Info Sections</label>
                                    
                                    @error('titles')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    
                                    <div id="info-container" data-initial-index="{{ isset($infos) && count($infos) > 0 ? count($infos) : 1 }}">
                                        @if(isset($infos) && count($infos) > 0)
                                            @foreach($infos as $index => $info)
                                            <div class="info-input-group mb-3" data-index="{{ $index }}" data-existing-info="{{ $info->id }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="titles[]" class="form-control @error('titles.' . $index) is-invalid @enderror" value="{{ $info->title }}" placeholder="Enter title">
                                                        @error('titles.' . $index)
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <input type="hidden" name="existing_infos[]" value="{{ $info->id }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Info</label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <textarea name="infos[]" class="form-control @error('infos.' . $index) is-invalid @enderror" rows="3" placeholder="Enter info">{{ $info->info }}</textarea>
                                                                @error('infos.' . $index)
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <button type="button" class="btn btn-danger btn-sm ms-2 remove-info">
                                                                <i class="fa fa-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        @else
                                            <div class="info-input-group mb-3" data-index="0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="titles[]" class="form-control @error('titles.0') is-invalid @enderror" placeholder="Enter title">
                                                        @error('titles.0')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Info</label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <textarea name="infos[]" class="form-control @error('infos.0') is-invalid @enderror" rows="3" placeholder="Enter info"></textarea>
                                                                @error('infos.0')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <button type="button" class="btn btn-danger btn-sm ms-2 remove-info" style="display: none;">
                                                                <i class="fa fa-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <button type="button" class="btn btn-success btn-sm" id="add-info">
                                        <i class="fa fa-plus"></i> Add Another Info Section
                                    </button>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            {{ translate('Save') }}
                                        </button>
                                        <a href="{{ url($indexUrl) }}" class="btn btn-secondary">
                                            <em class="fa fa-window-close"></em>
                                            {{ translate('Cancel') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- panel -->
                </div><!-- ends content-display -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        let infoIndex = parseInt($('#info-container').data('initial-index'));

        // Add new info input
        $('#add-info').click(function() {
            const newGroup = `
            <div class="info-input-group mb-3" data-index="${infoIndex}">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Title</label>
                        <input type="text" name="titles[]" class="form-control" placeholder="Enter title">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Info</label>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <textarea name="infos[]" class="form-control" rows="3" placeholder="Enter info"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm ms-2 remove-info">
                                <i class="fa fa-trash"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;

            $('#info-container').append(newGroup);
            infoIndex++;

            // Show remove buttons for all groups
            updateRemoveButtons();
        });

        // Remove info input
        $(document).on('click', '.remove-info', function() {
            const group = $(this).closest('.info-input-group');
            const existingInfoId = group.data('existing-info');
            
            if (existingInfoId) {
                // Add hidden input to mark existing info for deletion
                $('<input>').attr({
                    type: 'hidden',
                    name: 'delete_infos[]',
                    value: existingInfoId
                }).appendTo('form');
            }
            
            group.remove();
            updateRemoveButtons();
        });

        // Function to update remove buttons visibility
        function updateRemoveButtons() {
            const groups = $('.info-input-group');
            if (groups.length > 1) {
                groups.find('.remove-info').show();
            } else {
                groups.find('.remove-info').hide();
            }
        }

        // Initialize remove buttons visibility
        updateRemoveButtons();
    });
</script>
@endsection 