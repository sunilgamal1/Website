@extends('system.layouts.form')

@section('inputs')

<div class="form-group mb-2">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $blog->title ?? '') }}">
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="slug">Page Slug</label>
    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $blog->slug ?? '') }}" required>
    @error('slug')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="sub_title">Sub Title</label>
    <input type="text" name="sub_title" id="sub_title" class="form-control @error('sub_title') is-invalid @enderror" value="{{ old('sub_title', $blog->sub_title ?? '') }}">
    @error('sub_title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('author', $blog->author ?? '') }}">
    @error('author')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="banner_image">Banner Image</label>
    <input type="file" name="banner_image" id="banner_image" class="form-control @error('banner_image') is-invalid @enderror">
    @if (isset($blog) && isset($blog->banner_image))
    <img src="{{ asset('uploads/blog/banner/' . $blog->banner_image) }}" alt="Banner Image" class="img-fluid mt-2" style="max-width: 200px;">
    @endif
    @error('banner_image')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="image">Image</label>
    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
    @if (isset($blog) && isset($blog->image))
    <img src="{{ asset('uploads/blog/images/' . $blog->image) }}" alt="Image" class="img-fluid mt-2" style="max-width: 200px;">
    @endif
    @error('image')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control editor @error('description') is-invalid @enderror" rows="4">{{ old('description', $blog->description ?? '') }}</textarea>
    @error('description')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="content">Content</label>
    <textarea name="content" id="content" class="form-control editor @error('content') is-invalid @enderror" rows="8">{{ old('content', $blog->content ?? '') }}</textarea>
    @error('content')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="conclusion">Conclusion</label>
    <textarea name="conclusion" id="conclusion" class="form-control @error('conclusion') is-invalid @enderror" rows="4">{{ old('conclusion', $blog->conclusion ?? '') }}</textarea>
    @error('conclusion')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- <div class="form-group mb-2">
    <label for="tags">Tags</label>
    <input type="text" name="tags" id="tags" class="form-control @error('tags') is-invalid @enderror" value="{{ old('tags', $blog->tags ?? '') }}" placeholder="Enter tags separated by commas">
    @error('tags')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> -->

<div class="form-group mb-2">
    <label for="published_at">Published At</label>
    <input type="date" name="published_at" id="published_at" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at', isset($blog) && $blog->published_at ? $blog->published_at->format('Y-m-d') : '') }}">
    @error('published_at')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
        <option value="1" {{ (old('status', $blog->status ?? 1) == 1) ? 'selected' : '' }}>Active</option>
        <option value="0" {{ (old('status', $blog->status ?? 1) == 0) ? 'selected' : '' }}>Inactive</option>
    </select>
    @error('status')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="position">Position</label>
    <input type="number" name="position" id="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position', $blog->position ?? 0) }}" min="0">
    @error('position')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

@endsection

@section('scripts')
@include('system.partials.js.slug',['name' => 'title']);
@include('system.partials.js.imageLoad',['imgPreviewId' => 'image-preview','imageId' => 'banner_image']);
@include('system.partials.js.imageLoad',['imgPreviewId' => 'image-preview-2','imageId' => 'image']);
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

        $('#image').on('change', function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = $('<img>').attr('src', e.target.result).addClass('img-fluid mt-2').css('max-width', '200px');
                    $('#image').next('img').remove();
                    $('#image').after(img);
                };
                reader.readAsDataURL(file);
            }
        });

        // Tags input enhancement
        $('#tags').on('keyup', function() {
            var value = $(this).val();
            // Remove extra spaces and commas
            value = value.replace(/\s*,\s*/g, ', ').replace(/,\s*$/, '');
            $(this).val(value);
        });
    });
</script>
@endsection 