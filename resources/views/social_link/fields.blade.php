<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="facebook" class="col-form-label pt-0">{{ __('Facebook') }}</label>
        <input type="text" name="facebook" class="form-control"
               value="{{ old('facebook', isset($social_link) ? $social_link->facebook : '') }}"
               autocomplete="off" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="youtube" class="col-form-label pt-0">{{ __('YouTube') }}</label>
        <input type="text" name="youtube" class="form-control"
               value="{{ old('youtube', isset($social_link) ? $social_link->youtube : '') }}"
               autocomplete="off" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="website" class="col-form-label pt-0">{{ __('Website') }}</label>
        <input type="text" name="website" class="form-control"
               value="{{ old('website', isset($social_link) ? $social_link->website : '') }}"
               autocomplete="off" required>
    </div>
</div>
