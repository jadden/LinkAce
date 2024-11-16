<div class="card mt-5">
    <div class="card-header">
        @lang('settings.settings')
    </div>
    <div class="card-body">

        <form action="{{ route('save-settings-system') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="page_title">
                            @lang('settings.page_title')
                        </label>
                        <input type="text" id="page_title" name="page_title" class="form-control"
                            value="{{ old('page_title') ?: systemsettings('page_title') }}">
                        @if ($errors->has('page_title'))
                            <p class="invalid-feedback mt-1" role="alert">
                                {{ $errors->first('page_title') }}
                            </p>
                        @endif
                    </div>

                </div>
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="logo_text">
                            @lang('settings.logo_text')
                        </label>
                        <input type="text" id="logo_text" name="logo_text" class="form-control" maxlength="20"
                            value="{{ old('logo_text') ?: systemsettings('logo_text') }}">
                        @if ($errors->has('logo_text'))
                            <p class="invalid-feedback mt-1" role="alert">
                                {{ $errors->first('logo_text') }}
                            </p>
                        @endif
                    </div>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-12"><h5>@lang('settings.additional_footer_link')</h5></div>
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="additional_footer_link_url">
                            @lang('settings.additional_footer_link_url')
                        </label>
                        <input type="url" id="additional_footer_link_url" name="additional_footer_link_url"
                            class="form-control"
                            value="{{ old('additional_footer_link_url') ?: systemsettings('additional_footer_link_url') }}">
                        @if ($errors->has('additional_footer_link_url'))
                            <p class="invalid-feedback mt-1" role="alert">
                                {{ $errors->first('additional_footer_link_url') }}
                            </p>
                        @endif
                    </div>

                </div>
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="additional_footer_link_text">
                            @lang('settings.additional_footer_link_text')
                        </label>
                        <input type="text" id="additional_footer_link_text" name="additional_footer_link_text"
                            class="form-control" maxlength="20"
                            value="{{ old('additional_footer_link_text') ?: systemsettings('additional_footer_link_text') }}">
                        @if ($errors->has('additional_footer_link_text'))
                            <p class="invalid-feedback mt-1" role="alert">
                                {{ $errors->first('additional_footer_link_text') }}
                            </p>
                        @endif
                    </div>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-12">
                    <h5>@lang('settings.contact_page')</h5>
                    <p class="my-3 small">@lang('settings.contact_page_info')</p>
                </div>
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="contact_page_enabled">
                            @lang('settings.contact_page_enabled')
                        </label>
                        <select id="contact_page_enabled" name="contact_page_enabled"
                            class="simple-select {{ $errors->has('contact_page_enabled') ? ' is-invalid' : '' }}">
                            <x-forms.yes-no-options :setting="systemsettings('contact_page_enabled')"/>
                        </select>
                        <p class="small text-pale mt-1">@lang('settings.guest_access_help')</p>
                        @if ($errors->has('contact_page_enabled'))
                            <p class="invalid-feedback" role="alert">
                                {{ $errors->first('contact_page_enabled') }}
                            </p>
                        @endif
                    </div>

                </div>
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="contact_page_title">
                            @lang('settings.contact_page_title')
                        </label>
                        <input type="text" id="contact_page_title" name="contact_page_title"
                            class="form-control" maxlength="20"
                            value="{{ old('contact_page_title') ?: systemsettings('contact_page_title') }}">
                        @if ($errors->has('contact_page_title'))
                            <p class="invalid-feedback mt-1" role="alert">
                                {{ $errors->first('contact_page_title') }}
                            </p>
                        @endif
                    </div>

                </div>
                <div class="col-12">

                    <div class="mb-4">
                        <label class="form-label" for="contact_page_content">
                            @lang('settings.contact_page_content')
                        </label>
                        <textarea name="contact_page_content" id="contact_page_content" rows="4"
                            class="form-control{{ $errors->has('contact_page_content') ? ' is-invalid' : '' }}"
                        >{{ old('contact_page_content', systemsettings('contact_page_content')) }}</textarea>
                        @error('contact_page_content')
                        <p class="invalid-feedback" role="alert">
                            {{ $errors->first('contact_page_content') }}
                        </p>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-8 col-md-6">

                    <div class="mb-4">
                        <label class="form-label" for="custom_header_content">
                            @lang('settings.custom_header_content')
                        </label>
                        <textarea name="custom_header_content" id="custom_header_content" rows="4"
                            class="form-control{{ $errors->has('custom_header_content') ? ' is-invalid' : '' }}"
                        >{{ old('custom_header_content', systemsettings('custom_header_content')) }}</textarea>
                        <p class="small text-pale mt-1">@lang('settings.custom_header_content_help')</p>
                        @error('custom_header_content')
                        <p class="invalid-feedback" role="alert">
                            {{ $errors->first('custom_header_content') }}
                        </p>
                        @enderror
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                <x-icon.save class="me-2"/> @lang('settings.save_settings')
            </button>

        </form>

    </div>
</div>
