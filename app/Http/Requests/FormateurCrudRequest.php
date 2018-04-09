<?php 

/**
 * FormateurCrudRequest : Request des cruds des Formateurs
 *
 * */

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class FormateurCrudRequest : Request des cruds des Formateurs
 *
 */

class FormateurCrudRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {

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
            'nom' => 'required|min:2|max:255',
            'prenom' => 'required|min:2|max:255',
        ];
    }

}