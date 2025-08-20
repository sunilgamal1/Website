<?php

namespace App\Http\Requests\system;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\system\UniqueCaseSenstiveValidation;

class digitalDesignRequest extends FormRequest
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
        $id = $this->route('digital_design'); // The route parameter is 'digital_design' for resource routes

        $validate = [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url_title' => 'nullable|string|max:255',
            'url_link' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'section_title_1' => 'nullable|string|max:255',
            'section_description_1' => 'nullable|string',
            'section_title_2' => 'nullable|string|max:255',
            'section_description_2' => 'nullable|string',
            'button_title' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'conclusion' => 'nullable|string',
            'position' => 'required|integer|min:0',
            'publish_at_home' => 'required',
            'status' => 'required|',
        ];

        if ($request->method() == "POST") {
            $validate = array_merge($validate, [
                'slug' => ['required', 'string', 'max:255', new UniqueCaseSenstiveValidation('digital_designs', 'slug')],
                'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }
        if ($request->method() == "PUT") {
            $validate = array_merge($validate, [
                'slug' => ['required', 'string', 'max:255', new UniqueCaseSenstiveValidation('digital_designs', 'slug', $id)],
                'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'sub_title.required' => 'The sub title field is required.',
            'slug.required' => 'The slug field is required.',
            'banner_image.required' => 'The banner image field is required.',
            'banner_image.image' => 'The banner image must be an image.',
            'banner_image.mimes' => 'The banner image must be a file of type: jpeg, png, jpg, gif, svg.',
            'banner_image.max' => 'The banner image may not be greater than 2MB.',
            'banner_image_2.image' => 'The banner image 2 must be an image.',
            'banner_image_2.mimes' => 'The banner image 2 must be a file of type: jpeg, png, jpg, gif, svg.',
            'banner_image_2.max' => 'The banner image 2 may not be greater than 2MB.',
            'banner_image_3.image' => 'The banner image 3 must be an image.',
            'banner_image_3.mimes' => 'The banner image 3 must be a file of type: jpeg, png, jpg, gif, svg.',
            'banner_image_3.max' => 'The banner image 3 may not be greater than 2MB.',
        ];
    }
} 