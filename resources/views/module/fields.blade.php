<div class="form-row">

    <div class="col-md-3 mb-3">
        <label for="menu_id" class="col-form-label pt-0">{{ __('App Menu') }}</label>
        <select class="form-control" name="menu_id" id="menu_id">

            <option value="{{ isset($module) ? $module->menu_id : '' }}">
                {{ isset($module) ? $module->menu->name : '- - Select - -' }}</option>
            @forelse(_getTabNames() as $menu)
                <option value="{{$menu->id}}">{{$menu->name}}</option>
            @empty
            @endforelse
        </select>
    </div>
</div>

<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="name" class="col-form-label pt-0">{{ __('Name') }}</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', isset($module) ? $module->name : '') }}"
               autocomplete="off" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="icon" class="col-form-label pt-0">{{ __('Icon') }}</label>
        <input type="file" name="icon" class="form-control"
               value="{{ old('icon', isset($module) ? $module->icon : '') }}"
               autocomplete="off" required>
    </div>
</div>

