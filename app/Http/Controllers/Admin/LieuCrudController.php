<?php

/**
 * LieuCrudController : Contrôleur pour gerer les curds des Lieux
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\LieuCrudRequest as StoreRequest;
use App\Http\Requests\LieuCrudRequest as UpdateRequest;

/**
 * Class LieuCrudCotroller : Contrôleur pour gerer les curds des Lieux
 *
 */

class LieuCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds des Lieux
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Lieu");
        $this->crud->setRoute("admin/lieu");
        $this->crud->setEntityNameStrings('Lieu', 'Lieux');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns(['nom']);
		// ------ CRUD FIELDS
        $this->crud->addField([
			'name' => 'nom',
			'label' => "Nom*"
		]);
		$this->crud->addField([
			'name' => 'rue',
			'label' => "Rue"
		]);
		$this->crud->addField([
			'name' => 'numero',
			'label' => "Numero"
		]);
		$this->crud->addField([
			'name' => 'codePostal',
			'label' => "Code postal*",
		]);
		$this->crud->addField([
			'name' => 'ville',
			'label' => "Ville*"
		]);
		$this->crud->addField([
			'name' => 'pays',
			'label' => "Pays"
		]);
		$this->crud->addField([
			'name' => 'texte',
			'label' => "Texte",
			'type' => 'wysiwyg'
		]);
    }
	/**
	* store : Créer un Lieu
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier un Lieu
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
