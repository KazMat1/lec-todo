<?php

namespace App\Http\Requests\Folders;

use App\Http\Requests\BaseRequest;

class StoreFolderRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:20',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'タイトル',
        ];
    }
}
