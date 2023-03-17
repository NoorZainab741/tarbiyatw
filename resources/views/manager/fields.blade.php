<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="name" class="col-form-label pt-0">{{ __('Name') }}</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', isset($manager) ? $manager->name : '') }}"
               autocomplete="off" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="email" class="col-form-label pt-0">{{ __('Email') }}</label>
        <input type="email" name="email" class="form-control"
               value="{{ old('email', isset($manager) ? $manager->email : '') }}"
               autocomplete="off" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="password" class="col-form-label pt-0">{{ __('Password') }}</label>
        <input type="password" name="password" class="form-control"
               value=""
               autocomplete="off">
    </div>
    <div class="col-md-3 mb-3">
        <label for="phone" class="col-form-label pt-0">{{ __('Phone') }}</label>
        <input type="tel" name="phone" class="form-control"
               value="{{ old('phone', isset($manager) ? $manager->phone : '') }}"
               autocomplete="off" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="gender" class="col-form-label pt-0">{{ __('Gender') }}</label>
        <select class="form-control" name="gender" id="gender">
            <option value="{{ isset($manager) ? $manager->gender : '' }}">
                {{ isset($manager) ? $manager->gender : '' }}
            </option>
            <optgroup label="Gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </optgroup>
        </select>
    </div>
    <div class="col-md-3 mb-3">
        <label for="role" class="col-form-label pt-0">{{ __('Role') }}</label>
        <input type="text" name="role" class="form-control"
               value="manager" readonly
               autocomplete="off" required>
    </div>
</div>
