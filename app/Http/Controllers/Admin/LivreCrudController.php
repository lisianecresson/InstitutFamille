<?php

/**
 * LivreCrudController : Contrôleur pour gerer les curds des Livres
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\LivreCrudRequest as StoreRequest;
use App\Http\Requests\LivreCrudRequest as UpdateRequest;

/**
 * Class LivreCrudCotroller : Contrôleur pour gerer les curds des Livres
 *
 */

class LivreCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds des Livres
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Livre");
        $this->crud->setRoute("admin/livre");
        $this->crud->setEntityNameStrings('livre', 'livres');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns(['titre']);
		// ------ CRUD FIELDS
        $this->crud->addField([
			'name' => 'titre',
			'label' => "Titre*"
		]);
		$this->crud->addField([
			'name' => 'image',
			'label' => "Image*",
			'type' => 'browse'
		]);
		$this->crud->addField([
			'name' => 'resume',
			'label' => "Résumé*",
			'type' => 'wysiwyg'
		]);
		$this->crud->addField([
			'name' => 'texte',
			'label' => "Texte",
			'type' => 'wysiwyg'
		]);
		$this->crud->addField([
			'name' => 'prix',
			'label' => "Prix*",
			'type' => 'number'
		]);
		$this->crud->addField([
			'name' => 'stock',
			'label' => "En stock",
			'type' => 'checkbox'
		]);
    }
	/**
	* store : Créer un Livre
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier un Livre
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
