<?php 

/**
 * SliderCrudRequest : Request des cruds du slider
 *
 * */

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class SliderCrudRequest : Request des cruds des Conferences
 *
 */

class SliderCrudRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {

    /**
     * authorize: Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * rules: Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required',
        ];
    }

}