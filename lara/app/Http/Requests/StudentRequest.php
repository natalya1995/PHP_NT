<?php

namespace App\Http\Requests;
use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
   public function rules()
{
     return [
            'name' => 'required|min:3|max:20',
            'address' => 'required|min:5|max:30',
            'school_ID'=>'required|min:1|max:30'

        ];
}
}
