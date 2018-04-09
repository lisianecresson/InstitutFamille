<?php 

/**
 * CoursEnLigneCrudRequest : Request des cruds des cours en ligne
 *
 * */

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class DvdCrudRequest : Request des cruds des cours en ligne
 *
 */

class CoursEnLigneCrudRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {

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
        ];
    }

}