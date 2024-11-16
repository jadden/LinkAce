<?php

namespace App\Http\Controllers;

use App\Settings\SystemSettings;

class ContactController extends Controller
{
    public function __invoke(SystemSettings $systemSettings)
    {
        if (!$systemSettings->contact_page_enabled) {
            abort(404);
        }

        return view('app.contact', [
            'title' => $systemSettings->contact_page_title,
            'content' => $systemSettings->contact_page_content,
        ]);
    }
}
