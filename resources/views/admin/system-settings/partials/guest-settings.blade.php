<div class="card mt-5">
    <div class="card-header">
        @lang('settings.guest_settings')
    </div>
    <div class="card-body">

        <p>@lang('settings.guest_settings_info')</p>

        <form action="{{ route('save-settings-guest') }}" method="POST">
            @csrf

            <div class="row mt-4">
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="guest_access_enabled">
                            @lang('settings.guest_access')
                        </label>
                        <select id="guest_access_enabled" name="guest_access_enabled"
                            class="simple-select {{ $errors->has('guest_access_enabled') ? ' is-invalid' : '' }}">
                            <x-forms.yes-no-options :setting="systemsettings('guest_access_enabled')"/>
                        </select>
                        <p class="small text-pale mt-1">@lang('settings.guest_access_help')</p>
                        @if ($errors->has('guest_access_enabled'))
                            <p class="invalid-feedback" role="alert">
                                {{ $errors->first('guest_access_enabled') }}
                            </p>
                        @endif
                    </div>

                </div>
                <div class="col-12 col-sm-8 col-md-6">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="locale">
                            @lang('settings.locale')
                        </label>
                        <select id="locale" name="locale"
                            class="simple-select {{ $errors->has('locale') ? ' is-invalid' : '' }}">
                            @foreach(config('app.available_locales') as $key => $locale)
                                <option value="{{ $key }}"
                                    @if(guestsettings('locale') === $key) selected @endif>
                                    {{ $locale }}
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('locale'))
                            <p class="invalid-feedback" role="alert">
                                {{ $errors->first('locale') }}
                            </p>
                        @endif
                    </div>

                </div>
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="listitem_count">
                            @lang('settings.listitem_count')
                        </label>
                        <select id="listitem_count" name="listitem_count"
                            class="form-select{{ $errors->has('listitem_count') ? ' is-invalid' : '' }}">
                            @foreach(config('linkace.listitem_count_values') as $item_count)
                                <option value="{{ $item_count }}" @selected(guestsettings('listitem_count') === $item_count)>
                                    {{ $item_count }} @lang('linkace.entries')
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('listitem_count'))
                            <p class="invalid-feedback" role="alert">
                                {{ $errors->first('listitem_count') }}
                            </p>
                        @endif
                    </div>

                </div>
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="links_new_tab">
                            @lang('settings.links_new_tab')
                        </label>
                        <select id="links_new_tab" name="links_new_tab"
                            class="simple-select {{ $errors->has('links_new_tab') ? ' is-invalid' : '' }}">
                            <x-forms.yes-no-options :setting="guestsettings('links_new_tab')"/>
                        </select>
                        @if ($errors->has('links_new_tab'))
                            <p class="invalid-feedback" role="alert">
                                {{ $errors->first('links_new_tab') }}
                            </p>
                        @endif
                    </div>

                </div>
            </div>

            @include('admin.system-settings.partials.guest.dark-mode')

            @include('admin.system-settings.partials.guest.sharing')

            <button type="submit" class="btn btn-primary">
                <x-icon.save class="me-2"/> @lang('settings.save_settings')
            </button>

        </form>

    </div>
</div>
