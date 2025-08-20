<?php

namespace App\Http\Requests\system;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\system\UniqueCaseSenstiveValidation;

class graphicArtRequest extends FormRequest
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
        $id = $this->route('graphic_art'); // Assuming your route parameter is named 'graphic_art'

        $validate = [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'banner_image_name' => 'nullable|string|max:255',
            'description' => 'required|string',
            'url_title' => 'nullable|string|max:255',
            'url_link' => 'nullable|string|max:255',
            'client' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'banner_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'banner_image_2_name' => 'nullable|string|max:255',
            'conclusion' => 'nullable|string',
            'publish_at_home' => 'boolean',
            'status' => 'boolean',
            'position' => 'integer|min:0',
        ];

        if ($request->method() == "POST") {
            $validate = array_merge($validate, [
                'slug' => ['required', 'string', 'max:255', new UniqueCaseSenstiveValidation('graphic_arts', 'slug')],
                'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }
        if ($request->method() == "PUT") {
            $validate = array_merge($validate, [
                'slug' => ['required', 'string', 'max:255', new UniqueCaseSenstiveValidation('graphic_arts', 'slug', $id)],
                'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'client.required' => 'The client field is required.',
            'year.required' => 'The year field is required.',
            'role.required' => 'The role field is required.',
            'position.integer' => 'The position must be a number.',
            'position.min' => 'The position must be at least 0.',
            'banner_image.image' => 'The banner image must be an image.',
            'banner_image.mimes' => 'The banner image must be a file of type: jpeg, png, jpg, gif, svg.',
            'banner_image.max' => 'The banner image may not be greater than 2MB.',
            'banner_image_2.image' => 'The banner image 2 must be an image.',
            'banner_image_2.mimes' => 'The banner image 2 must be a file of type: jpeg, png, jpg, gif, svg.',
            'banner_image_2.max' => 'The banner image 2 may not be greater than 2MB.',
        ];
    }
}
