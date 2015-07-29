<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required',
            'excerpt'=> 'required',
            'content' => 'required',
            'status' => 'required',
            'date_start',
            'date_end',
            'thumbnail_link' =>'mimes:jpeg,jpg,png',
            'tags'
        ];
    }
}
