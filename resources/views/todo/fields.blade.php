
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="todo" class="col-form-label pt-0">{{ __('To Do') }}</label>
        <textarea name="todo" class="form-control" rows="10" cols="20" autocomplete="off" required>
            {{ old('todo', isset($todo) ? $todo->todo : '') }}</textarea>
    </div>
</div>
