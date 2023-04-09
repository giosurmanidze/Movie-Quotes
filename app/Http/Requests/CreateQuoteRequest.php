<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuoteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'movie_id' => 'required|integer|exists:movies,id',
            'quote_ka' => 'required|string',
            'quote_en' => 'required|string',
        ];
    }
}
