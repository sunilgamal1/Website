<?php

namespace App\Http\Requests\system;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\system\UniqueCaseSenstiveValidation;

class motionRequest extends FormRequest
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
        $id = $this->route('motion'); // The route parameter is 'motion' for resource routes

        $validate = [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'title_2' => 'nullable|string',
            'sub_title_2' => 'nullable|string',
            'conclusion' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'position' => 'required|integer|min:0',
            'publish_at_home' => 'required',
            'status' => 'required|',
            'about_title' => 'nullable|string|max:255',
        ];

        if ($request->method() == "POST") {
            $validate = array_merge($validate, [
                'slug' => ['required', 'string', 'max:255', new UniqueCaseSenstiveValidation('motions', 'slug')],
                'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'video_1' => 'nullable|mimes:mp4,avi,mov,wmv,flv,webm',
            ]);
        }
        if ($request->method() == "PUT") {
            $validate = array_merge($validate, [
                'slug' => ['required', 'string', 'max:255', new UniqueCaseSenstiveValidation('motions', 'slug', $id)],
                'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'video_1' => 'nullable|mimes:mp4,avi,mov,wmv,flv,webm|max:102400',
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
            'video_1.mimes' => 'The video must be a file of type: mp4, avi, mov, wmv, flv, webm.',
            'video_1.max' => 'The video may not be greater than 100MB.',
            'about_title.max' => 'The about title may not be greater than 255 characters.',
        ];
    }
} 