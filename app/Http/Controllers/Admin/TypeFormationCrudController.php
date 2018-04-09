<?php

/**
 * TypeFormationCrudController : Contrôleur pour gerer les curds des Types de Formation
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TypeFormationCrudRequest as StoreRequest;
use App\Http\Requests\TypeFormationCrudRequest as UpdateRequest;

/**
 * Class TypeFormationCrudCotroller : Contrôleur pour gerer les curds des Type de Formation
 *
 */

class TypeFormationCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds des Memoires
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\TypeFormation");
        $this->crud->setRoute("admin/typeformation");
        $this->crud->setEntityNameStrings('Type de formation', 'Types de formation');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns(['type']);
		// ------ CRUD FIELDS
        $this->crud->addField([
			'name' => 'type',
			'label' => "Type de formation*"
		]);
		$this->crud->addField([
			'name' => 'description',
			'label' => "Description",
			'type' => 'wysiwyg'
		]);
    }
	/**
	* store : Créer un type de formation
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier un type de formation
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
