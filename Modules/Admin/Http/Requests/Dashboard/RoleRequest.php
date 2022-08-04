<?php

namespace Modules\Admin\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
                'name'=>'required|string|unique:roles,name',
                'permissions'=>'required|array',
                'permissions.*'=>'exists:permissions,id',
                'description'=>'required|string'
            ];
        }elseif($this->isMethod('PUT')){
            return [
                'name'=>'required|string',
                'permissions'=>'required|array',
                'permissions.*'=>'exists:permissions,id',
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
