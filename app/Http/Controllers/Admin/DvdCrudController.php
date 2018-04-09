<?php

/**
 * DvdCrudController : Contrôleur pour gerer les curds des DVD
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DvdCrudRequest as StoreRequest;
use App\Http\Requests\DvdCrudRequest as UpdateRequest;

/**
 * Class DvdCrudCotroller : Contrôleur pour gerer les curds des DVD
 *
 */

class DvdCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds des DVD
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Dvd");
        $this->crud->setRoute("admin/dvd");
        $this->crud->setEntityNameStrings('DVD', 'DVD');
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
			'name' => 'texte',
			'label' => "Texte*",
			'type' => 'wysiwyg'
		]);
		$this->crud->addField([
			'name' => 'duree',
			'label' => "Durée"
		]);
		$this->crud->addField([
			'name' => 'sousTitre',
			'label' => "Sous titre"
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
	* store : Créer un DVD
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier un DVD
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
