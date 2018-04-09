<?php 

/**
 * VodCrudRequest : Request des cruds des VOD
 *
 * */

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class VodCrudRequest : Request des cruds des VOD
 *
 */

class VodCrudRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {

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
            'titre' => 'required|min:2|max:255',
            'image' => 'required|min:2|max:255',
            'resume'=> 'required|min:2',
        ];
    }

}