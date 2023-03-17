
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="about" class="col-form-label pt-0">{{ __('About Us') }}</label>
        <textarea name="about" class="form-control" rows="10" cols="20" autocomplete="off" required>
            {{ old('about', isset($about_u) ? $about_u->about : '') }}</textarea>
    </div>
</div>
