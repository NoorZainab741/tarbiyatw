<div class="form-row">

    <div class="col-md-3 mb-3">
        <label for="module_id" class="col-form-label pt-0">{{ __('Menu') }}</label>
        <select class="form-control" name="module_id" id="module_id" required>

            <option value="{{ isset($sub_menu) ? $sub_menu->module_id : '' }}">
                {{ isset($sub_menu) ? $sub_menu->module->name : '- - Select - -' }}</option>
            @forelse(_getAllModulesWithoutSubmenu() as $module)
                <option value="{{$module->id}}">{{$module->name}}</option>
            @empty
            @endforelse
        </select>
    </div>
</div>

<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="name" class="col-form-label pt-0">{{ __('Name') }}</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', isset($sub_menu) ? $sub_menu->name : '') }}"
               autocomplete="off" required>
    </div>
</div>
