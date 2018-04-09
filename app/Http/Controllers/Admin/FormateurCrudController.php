<?php

/**
 * FormateurCrudController : Contrôleur pour gerer les curds des Formateurs
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FormateurCrudRequest as StoreRequest;
use App\Http\Requests\FormateurCrudRequest as UpdateRequest;

/**
 * Class FormateurCrudCotroller : Contrôleur pour gerer les curds des Formateurs
 *
 */

class FormateurCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds des Formateurs
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Formateur");
        $this->crud->setRoute("admin/formateur");
        $this->crud->setEntityNameStrings('formateur', 'formateurs');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns(['nom', 'prenom']);
		// ------ CRUD FIELDS
        $this->crud->addField([
			'name' => 'nom',
			'label' => "Nom*"
		]);
		$this->crud->addField([
			'name' => 'prenom',
			'label' => "Prenom*"
		]);
		$this->crud->addField([
			'name' => 'titre',
			'label' => "Titre"
		]);
		$this->crud->addField([
			'name' => 'image',
			'label' => "Photo",
			'type' => 'browse'
		]);
		$this->crud->addField([
			'name' => 'texte',
			'label' => "Texte",
			'type' => 'wysiwyg'
		]);
    }
	/**
	* store : Créer un Formateur
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier un Formateur
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
