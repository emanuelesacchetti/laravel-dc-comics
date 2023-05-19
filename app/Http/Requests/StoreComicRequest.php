<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title'=>'required|max:255', 
            'src'=>'required|max:255|url', 
            'description'=>'nullable|max:2500', 
            'price'=>'required|max:10', 
            'series'=>'required|max:255', 
            'sale_date'=>'nullable|max:100', 
            'type'=>'required|max:100', 
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "E' obbligatorio inserire un titolo",
            'title.max' => "Puoi inserire al massimo 255 caratteri",
            'src.required' => "E' obbligatorio inserire un URL",
            'src.max' => "Puoi inserire al massimo 255 caratteri",
            'src.url' => "Inserire un Url corretto che inizi con HTTP://...",
            'description.max' => "Puoi inserire al massimo 2500 caratteri",
            'price.required' => "E' obbligatorio inserire il prezzo",
            'price.max' => "Puoi inserire al massimo 10 caratteri",
            'series.required' => "E' obbligatorio inserire la serie",
            'series.max' => "Puoi inserire al massimo 10 caratteri",
            'sale_date.max' => "Puoi inserire al massimo 100 caratteri",
            'type.required' => "E' obbligatorio inserire la tipologia",
            'type.max' => "Puoi inserire al massimo 10 caratteri"
        ];
    }
}
