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
                            <form method="post" action="#" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-2">
                                    <label>Digital Design Images</label>
                                    
                                    @error('images')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    
                                    <div id="image-container" data-initial-index="{{ isset($images) && count($images) > 0 ? count($images) : 1 }}">
                                        @if(isset($images) && count($images) > 0)
                                            @foreach($images as $index => $image)
                                            <div class="image-input-group mb-3" data-index="{{ $index }}" data-existing-image="{{ $image->id }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Image Name</label>
                                                        <input type="text" name="image_names[]" class="form-control @error('image_names.' . $index) is-invalid @enderror" value="{{ $image->image_name }}" placeholder="Enter image name">
                                                        @error('image_names.' . $index)
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <input type="hidden" name="existing_images[]" value="{{ $image->id }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Image File</label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <input type="file" name="images[]" class="form-control" accept="image/*">
                                                                <div class="invalid-feedback"></div>
                                                                <small class="text-muted">Current: {{ $image->image }}</small>
                                                            </div>
                                                            <button type="button" class="btn btn-danger btn-sm ms-2 remove-image">
                                                                <i class="fa fa-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="image-preview mt-2">
                                                    <img src="{{ asset('uploads/digital-design/images/' . $image->image) }}" alt="Preview" class="img-fluid" style="max-width: 200px;">
                                                </div>
                                            </div>
                                            @endforeach
                                        @else
                                            <div class="image-input-group mb-3" data-index="0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Image Name</label>
                                                        <input type="text" name="image_names[]" class="form-control @error('image_names.0') is-invalid @enderror" placeholder="Enter image name">
                                                        @error('image_names.0')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Image File</label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <input type="file" name="images[]" class="form-control @error('images.0') is-invalid @enderror" accept="image/*">
                                                                @error('images.0')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <button type="button" class="btn btn-danger btn-sm ms-2 remove-image" style="display: none;">
                                                                <i class="fa fa-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="image-preview mt-2" style="display: none;">
                                                    <img src="" alt="Preview" class="img-fluid" style="max-width: 200px;">
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <button type="button" class="btn btn-success btn-sm" id="add-image">
                                        <i class="fa fa-plus"></i> Add Another Image
                                    </button>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            {{ translate('Upload') }}
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script>
    $(document).ready(function() {
        let imageIndex = parseInt($('#image-container').data('initial-index'));

        // Add new image input
        $('#add-image').click(function() {
            const newGroup = `
            <div class="image-input-group mb-3" data-index="${imageIndex}">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Image Name</label>
                        <input type="text" name="image_names[]" class="form-control" placeholder="Enter image name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Image File</label>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <input type="file" name="images[]" class="form-control" accept="image/*">
                                <div class="invalid-feedback"></div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm ms-2 remove-image">
                                <i class="fa fa-trash"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>
                <div class="image-preview mt-2" style="display: none;">
                    <img src="" alt="Preview" class="img-fluid" style="max-width: 200px;">
                </div>
            </div>
        `;

            $('#image-container').append(newGroup);
            imageIndex++;

            // Show remove buttons for all groups
            updateRemoveButtons();
        });

        // Remove image input
        $(document).on('click', '.remove-image', function() {
            const group = $(this).closest('.image-input-group');
            const existingImageId = group.data('existing-image');
            
            if (existingImageId) {
                // Add hidden input to mark existing image for deletion
                $('<input>').attr({
                    type: 'hidden',
                    name: 'delete_images[]',
                    value: existingImageId
                }).appendTo('form');
            }
            
            group.remove();
            updateRemoveButtons();
        });

        // Image preview functionality
        $(document).on('change', 'input[type="file"]', function() {
            const file = this.files[0];
            const preview = $(this).closest('.image-input-group').find('.image-preview');
            const img = preview.find('img');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img.attr('src', e.target.result);
                    preview.show();
                };
                reader.readAsDataURL(file);
            } else {
                preview.hide();
            }
        });

        // Function to update remove buttons visibility
        function updateRemoveButtons() {
            const groups = $('.image-input-group');
            if (groups.length > 1) {
                groups.find('.remove-image').show();
            } else {
                groups.find('.remove-image').hide();
            }
        }

        // Initialize remove buttons visibility
        updateRemoveButtons();
    });
</script>
@endsection 