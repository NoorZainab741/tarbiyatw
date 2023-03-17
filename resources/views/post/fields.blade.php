<div class="form-row">
    <div class="col-md-4 mb-3 mr-5">
        <label for="type" class="col-form-label pt-0">{{ __('Type') }}</label>
        <select class="form-control" name="type" id="type" required>

            <option value="{{ isset($post) ? $post->type : '' }}">
                {{ isset($post) ? $post->type : '- - Select - -' }}</option>
                <option value="Daily Quran">Daily Quran</option>
                <option value="Daily Hadith">Daily Hadith</option>
                <option value="Daily Book">Daily Book</option>
                <option value="Namaz">Namaz</option>
                <option value="Roza">Roza</option>
                <option value="Zakaat">Zakaat</option>
                <option value="Hajj O Ummrah">Hajj O Ummrah</option>
        </select>

    </div>
</div>
<div class="m-t-10">
    <tr>
        <td><h5>For Quran & Hadith</h5></td>
        <br>
    </tr>
</div>
        <div class="form-row">
<div class="col-md-4 mb-3">
    <label for="reference" class="col-form-label pt-0">{{ __('Reference') }}</label>
    <input type="text" name="reference" class="form-control"
           value="{{ old('reference', isset($post) ? $post->reference : '') }}"
           autocomplete="off" >
</div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="arabic" class="col-form-label pt-0">{{ __('Arabic') }}</label>
        <textarea name="arabic" class="form-control" rows="10" cols="20" autocomplete="off" required>
            {{ old('arabic', isset($post) ? $post->arabic : '') }}</textarea>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="arabic" class="col-form-label pt-0">{{ __('Translation') }}</label>
        <textarea name="translation" class="form-control" rows="10" cols="20" autocomplete="off" required>
            {{ old('translation', isset($post) ? $post->translation : '') }}</textarea>
    </div>
</div>

<div class="m-t-5">
    <tr>
        <td><h5>For Books & Videos links</h5></td>
        <br>
    </tr>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="translation" class="col-form-label pt-0">{{ __('Title') }}</label>
        <input type="text" name="title" class="form-control"
               value="{{ old('title', isset($post) ? $post->title : '') }}"
               autocomplete="off" >
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="hyperlink" class="col-form-label pt-0">{{ __('Hyperlink') }}</label>
        <textarea name="hyperlink" class="form-control" rows="2" cols="20" autocomplete="off" required>
            {{ old('hyperlink', isset($post) ? $post->hyperlink : '') }}</textarea>
    </div>
</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="images" class="col-form-label pt-0">{{ __('Images') }}</label>
        <input type="file" name="images[]" class="form-control" multiple>
    </div>
</div>
