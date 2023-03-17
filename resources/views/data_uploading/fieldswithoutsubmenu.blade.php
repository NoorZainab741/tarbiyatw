<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="module_id" class="col-form-label pt-0">{{ __('Menu') }}</label>
        <select class="form-control" name="module_id" id="module_id" required>

            <option value="{{ isset($data_uploading) ? $data_uploading->module_id : '' }}">
                {{ isset($data_uploading) ? $data_uploading->module->name : '- - Select - -' }}</option>
            @forelse(_getAllModulesWithoutSubmenu() as $module)
                <option value="{{$module->id}}">{{$module->name}}</option>
            @empty
            @endforelse
        </select>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="title" class="col-form-label pt-0">{{ __('Title') }}</label>
        <input type="text" name="title" class="form-control"
               value="{{ old('title', isset($data_uploading) ? $data_uploading->title : '') }}"
               autocomplete="off" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="author" class="col-form-label pt-0">{{ __('Author') }}</label>
        <input type="text" name="author" class="form-control"
               value="{{ old('author', isset($data_uploading) ? $data_uploading->author : '') }}"
               autocomplete="off" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="hyperlink" class="col-form-label pt-0">{{ __('Hyperlink') }}</label>
        <input type="text" name="hyperlink" class="form-control"
               value="{{ old('hyperlink', isset($data_uploading) ? $data_uploading->hyperlink : '') }}"
               autocomplete="off" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="ppts" class="col-form-label pt-0">{{ __('Ppts') }}</label>
        <input type="file" name="ppts[]" class="form-control" multiple>
    </div>
    <div class="col-md-4 mb-3 ml-5">
        <label for="pdfs" class="col-form-label pt-0">{{ __('Pdfs') }}</label>
        <input type="file" name="pdfs[]" class="form-control" multiple>
    </div>
</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="audios" class="col-form-label pt-0">{{ __('Audios') }}</label>
        <input type="file" name="audios[]" class="form-control" multiple>
    </div>
</div>
<div class="form-row">

    <div class="col-md-12 mb-3">
        <label for="videolinks" class="col-form-label pt-0">{{ __('Video links') }}</label>
        <input type="text" name="videolinks" class="form-control"
               value="{{ old('videolinks', isset($data_uploading) ? $data_uploading->videolinks : '') }}"
               data-role="tagsinput">
    </div>
</div>
