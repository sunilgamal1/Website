@extends('system.layouts.form')

@section('inputs')

<div class="form-group mb-2">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $graphicArt->title ?? '') }}">
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="slug">Page Slug</label>
    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $graphicArt->slug ?? '') }}" required>
    @error('slug')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="sub_title">Sub Title</label>
    <input type="text" name="sub_title" id="sub_title" class="form-control @error('sub_title') is-invalid @enderror" value="{{ old('sub_title', $graphicArt->sub_title ?? '') }}">
    @error('sub_title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="banner_image">Banner Image</label>
    <input type="file" name="banner_image" id="banner_image" class="form-control @error('banner_image') is-invalid @enderror">
    @if (isset($graphicArt->banner_image))
    <img src="{{ asset('uploads/graphic_art/banner/' . $graphicArt->banner_image) }}" alt="Banner Image" class="img-fluid mt-2" style="max-width: 200px;">
    @endif
    @error('banner_image')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="banner_image_name">Banner Image Name</label>
    <input type="text" name="banner_image_name" id="banner_image_name" class="form-control @error('banner_image_name') is-invalid @enderror" value="{{ old('banner_image_name', $graphicArt->banner_image_name ?? '') }}">
    @error('banner_image_name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control editor @error('description') is-invalid @enderror">{{ old('description', $graphicArt->description ?? '') }}</textarea>
    @error('description')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="url_title">URL Title</label>
    <input type="text" name="url_title" id="url_title" class="form-control @error('url_title') is-invalid @enderror" value="{{ old('url_title', $graphicArt->url_title ?? '') }}">
    @error('url_title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="url_link">URL Link</label>
    <input type="text" name="url_link" id="url_link" class="form-control @error('url_link') is-invalid @enderror" value="{{ old('url_link', $graphicArt->url_link ?? '') }}">
    @error('url_link')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="client">Client</label>
    <input type="text" name="client" id="client" class="form-control @error('client') is-invalid @enderror" value="{{ old('client', $graphicArt->client ?? '') }}">
    @error('client')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="year">Year</label>
    <input type="number" name="year" id="year" class="form-control @error('year') is-invalid @enderror" value="{{ old('year', $graphicArt->year ?? '') }}" min="1900" max="{{ date('Y') + 1 }}">
    @error('year')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="role">Role</label>
    <input type="text" name="role" id="role" class="form-control @error('role') is-invalid @enderror" value="{{ old('role', $graphicArt->role ?? '') }}">
    @error('role')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="banner_image_2">Banner Image 2</label>
    <input type="file" name="banner_image_2" id="banner_image_2" class="form-control @error('banner_image_2') is-invalid @enderror">
    @if (isset($graphicArt->banner_image_2))
    <img src="{{ asset('uploads/graphic_art/banner2/' . $graphicArt->banner_image_2) }}" alt="Banner Image 2" class="img-fluid mt-2" style="max-width: 200px;">
    @endif
    @error('banner_image_2')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="banner_image_2_name">Banner Image 2 Name</label>
    <input type="text" name="banner_image_2_name" id="banner_image_2_name" class="form-control @error('banner_image_2_name') is-invalid @enderror" value="{{ old('banner_image_2_name', $graphicArt->banner_image_2_name ?? '') }}">
    @error('banner_image_2_name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="conclusion">Conclusion</label>
    <textarea name="conclusion" id="conclusion" class="form-control @error('conclusion') is-invalid @enderror" rows="4">{{ old('conclusion', $graphicArt->conclusion ?? '') }}</textarea>
    @error('conclusion')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="publish_at_home">Publish At Home</label>
    <select name="publish_at_home" id="publish_at_home" class="form-control @error('publish_at_home') is-invalid @enderror">
        <option value="0" {{ (old('publish_at_home', $graphicArt->publish_at_home ?? 0) == 0) ? 'selected' : '' }}>No</option>
        <option value="1" {{ (old('publish_at_home', $graphicArt->publish_at_home ?? 0) == 1) ? 'selected' : '' }}>Yes</option>
    </select>
    @error('publish_at_home')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
        <option value="1" {{ (old('status', $graphicArt->status ?? 1) == 1) ? 'selected' : '' }}>Active</option>
        <option value="0" {{ (old('status', $graphicArt->status ?? 1) == 0) ? 'selected' : '' }}>Inactive</option>
    </select>
    @error('status')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="position">Position</label>
    <input type="number" name="position" id="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position', $graphicArt->position ?? 0) }}" min="0">
    @error('position')
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

        // Auto-fill image names from file names
        $('#banner_image').on('change', function() {
            var fileName = this.files[0]?.name;
            if (fileName) {
                var nameWithoutExtension = fileName.replace(/\.[^/.]+$/, "");
                $('#banner_image_name').val(nameWithoutExtension);
            }
        });

        $('#banner_image_2').on('change', function() {
            var fileName = this.files[0]?.name;
            if (fileName) {
                var nameWithoutExtension = fileName.replace(/\.[^/.]+$/, "");
                $('#banner_image_2_name').val(nameWithoutExtension);
            }
        });
    });
</script>
@endsection
