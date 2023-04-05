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
            'quote' => 'required|string',
            'movie_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
