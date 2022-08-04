<?php

namespace Modules\Admin\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('POST')) {
            return [
                'name'=>'required|string|unique:permissions,name',
                'description'=>'required|string'
            ];
        }elseif($this->isMethod('PUT')){
            return [
                'name'=>'required|string',
                'description'=>'required|string'
            ];
        }
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
