@extends('system.layouts.form')

@section('inputs')

<div class="form-group mb-2">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $motion->title ?? '') }}">
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="slug">Page Slug</label>
    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $motion->slug ?? '') }}" required>
    @error('slug')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="sub_title">Sub Title</label>
    <input type="text" name="sub_title" id="sub_title" class="form-control @error('sub_title') is-invalid @enderror" value="{{ old('sub_title', $motion->sub_title ?? '') }}">
    @error('sub_title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="banner_image">Banner Image</label>
    <input type="file" name="banner_image" id="banner_image" class="form-control @error('banner_image') is-invalid @enderror">
    @if (isset($motion->banner_image))
    <img src="{{ asset('uploads/motion/banner/' . $motion->banner_image) }}" alt="Banner Image" class="img-fluid mt-2" style="max-width: 200px;">
    @endif
    @error('banner_image')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control editor @error('description') is-invalid @enderror">{{ old('description', $motion->description ?? '') }}</textarea>
    @error('description')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="video_1">Video</label>
    <input type="file" name="video_1" id="video_1" class="form-control @error('video_1') is-invalid @enderror" accept="video/*">
    @if (isset($motion->video_1))
    <div class="mt-2">
        <video controls style="max-width: 300px; max-height: 200px;">
            <source src="{{ asset('uploads/motion/videos/' . $motion->video_1) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="text-muted mt-1">Current video: {{ $motion->video_1 }}</p>
    </div>
    @endif
    @error('video_1')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="about_title">About Title</label>
    <input type="text" name="about_title" id="about_title" class="form-control @error('about_title') is-invalid @enderror" value="{{ old('about_title', $motion->about_title ?? '') }}">
    @error('about_title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="banner_image_2">Banner Image 2</label>
    <input type="file" name="banner_image_2" id="banner_image_2" class="form-control @error('banner_image_2') is-invalid @enderror">
    @if (isset($motion->banner_image_2))
    <img src="{{ asset('uploads/motion/banner2/' . $motion->banner_image_2) }}" alt="Banner Image 2" class="img-fluid mt-2" style="max-width: 200px;">
    @endif
    @error('banner_image_2')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="title_2">Title 2</label>
    <input type="text" name="title_2" id="title_2" class="form-control @error('title_2') is-invalid @enderror" value="{{ old('title_2', $motion->title_2 ?? '') }}">
    @error('title_2')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="sub_title_2">Sub Title 2</label>
    <input type="text" name="sub_title_2" id="sub_title_2" class="form-control @error('sub_title_2') is-invalid @enderror" value="{{ old('sub_title_2', $motion->sub_title_2 ?? '') }}">
    @error('sub_title_2')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="conclusion">Conclusion</label>
    <textarea name="conclusion" id="conclusion" class="form-control @error('conclusion') is-invalid @enderror" rows="4">{{ old('conclusion', $motion->conclusion ?? '') }}</textarea>
    @error('conclusion')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="button_text">Button Text</label>
    <input type="text" name="button_text" id="button_text" class="form-control @error('button_text') is-invalid @enderror" value="{{ old('button_text', $motion->button_text ?? '') }}">
    @error('button_text')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="button_link">Button Link</label>
    <input type="text" name="button_link" id="button_link" class="form-control @error('button_link') is-invalid @enderror" value="{{ old('button_link', $motion->button_link ?? '') }}">
    @error('button_link')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="publish_at_home">Publish At Home</label>
    <select name="publish_at_home" id="publish_at_home" class="form-control @error('publish_at_home') is-invalid @enderror">
        <option value="0" {{ (old('publish_at_home', $motion->publish_at_home ?? 0) == 0) ? 'selected' : '' }}>No</option>
        <option value="1" {{ (old('publish_at_home', $motion->publish_at_home ?? 0) == 1) ? 'selected' : '' }}>Yes</option>
    </select>
    @error('publish_at_home')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="position">Position</label>
    <input type="number" name="position" id="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position', $motion->position ?? '') }}">
    @error('position')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
        <option value="1" {{ (old('status', $motion->status ?? 1) == 1) ? 'selected' : '' }}>Active</option>
        <option value="0" {{ (old('status', $motion->status ?? 1) == 0) ? 'selected' : '' }}>Inactive</option>
    </select>
    @error('status')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
@include('system.partials.js.slug',['name' => 'title']);
@include('system.partials.js.imageLoad',['imgPreviewId' => 'image-preview','imageId' => 'banner_image']);
@include('system.partials.js.imageLoad',['imgPreviewId' => 'image-preview-2','imageId' => 'banner_image_2']);
<script>
    $(function() {
        // Auto-generate slug from title
        $('#title').on('keyup', function() {
            var title = $(this).val();
            var slug = title.toLowerCase()
                .replace(/[^a-z0-9 -]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
            $('#slug').val(slug);
        });

        // Image preview functionality
        $('#banner_image').on('change', function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = $('<img>').attr('src', e.target.result).addClass('img-fluid mt-2').css('max-width', '200px');
                    $('#banner_image').next('img').remove();
                    $('#banner_image').after(img);
                };
                reader.readAsDataURL(file);
            }
        });

        $('#banner_image_2').on('change', function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = $('<img>').attr('src', e.target.result).addClass('img-fluid mt-2').css('max-width', '200px');
                    $('#banner_image_2').next('img').remove();
                    $('#banner_image_2').after(img);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endsection 