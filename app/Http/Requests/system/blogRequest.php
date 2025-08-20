<?php

namespace App\Http\Requests\system;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\system\UniqueCaseSenstiveValidation;

class blogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        $id = $this->route('blog'); // Assuming your route parameter is named 'blog'

        $validate = [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'conclusion' => 'nullable|string',
            'tags' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
            'status' => 'boolean',
            'position' => 'integer|min:0',
        ];

        if ($request->method() == "POST") {
            $validate = array_merge($validate, [
                'slug' => ['required', 'string', 'max:255', new UniqueCaseSenstiveValidation('blogs', 'slug')],
                'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }
        if ($request->method() == "PUT") {
            $validate = array_merge($validate, [
                'slug' => ['required', 'string', 'max:255', new UniqueCaseSenstiveValidation('blogs', 'slug', $id)],
                'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }

        return $validate;
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'slug.required' => 'The slug field is required.',
            'sub_title.required' => 'The sub title field is required.',
            'position.integer' => 'The position must be a number.',
            'position.min' => 'The position must be at least 0.',
            'banner_image.image' => 'The banner image must be an image.',
            'banner_image.mimes' => 'The banner image must be a file of type: jpeg, png, jpg, gif, svg.',
            'banner_image.max' => 'The banner image may not be greater than 2MB.',
            'image.image' => 'The image must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image may not be greater than 2MB.',
            'published_at.date' => 'The published at must be a valid date.',
        ];
    }
} 