<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SystemSettingsUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'system_page_title' => [
                'max:256',
                'nullable',
                'string',
            ],
            'system_logo_text' => [
                'max:20',
                'nullable',
                'string',
            ],
            'additional_footer_link_url' => [
                'nullable',
                'string',
                'required_with:additional_footer_link_text'
            ],
            'additional_footer_link_text' => [
                'max:20',
                'nullable',
                'string',
                'required_with:additional_footer_link_url'
            ],
            'contact_page_enabled' => [
                'boolean',
            ],
            'contact_page_title' => [
                'max:20',
                'nullable',
                'string',
            ],
            'contact_page_content' => [
                'max:10000',
                'nullable',
                'string',
            ],
            'system_custom_header_content' => [
                'nullable',
                'string',
            ],
            // Guest settings
            'system_guest_access' => [
                'boolean',
            ],
            'guest_locale' => [
                'string',
            ],
            'guest_listitem_count' => [
                'integer',
            ],
            'guest_link_display_mode' => [
                'integer',
            ],
            'guest_links_new_tab' => [
                'boolean',
            ],
            'guest_darkmode_setting' => [
                'integer',
            ],
            'guest_share' => [
                'array',
            ],
        ];
    }
}
