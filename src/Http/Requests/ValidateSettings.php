<?php

namespace LaravelLiberu\Facebook\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSettings extends FormRequest
{
    public function rules()
    {
        return [
            'domain_verification' => 'required|boolean',
            'verification_code' => 'nullable|string',
            'page_id' => 'nullable|string',
        ];
    }
}
