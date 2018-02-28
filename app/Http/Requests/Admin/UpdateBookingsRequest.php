<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingsRequest extends FormRequest
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
            'customer_id' => 'required',
            'room_id' => 'required',
            'time_from' => 'required|date_format:'.config('app.date_format').' H:i',
            'time_to' => 'required|date_format:'.config('app.date_format').' H:i',
            'additional_information' => 'required',
        ];
    }
}
