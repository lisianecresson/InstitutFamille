<?php

/**
 * VodCrudController : Contrôleur pour gerer les curds des VOD
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\VodCrudRequest as StoreRequest;
use App\Http\Requests\VodCrudRequest as UpdateRequest;

/**
 * Class VodCrudCotroller : Contrôleur pour gerer les curds des VOD
 *
 */

class VodCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds des VOD
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Vod");
        $this->crud->setRoute("admin/vod");
        $this->crud->setEntityNameStrings('VOD', 'VOD');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns(['titre', 'auteur']);
		// ------ CRUD FIELDS
        $this->crud->addField([
			'name' => 'titre',
			'label' => "Titre*"
		]);
		$this->crud->addField([
			'name' => 'auteur',
			'label' => "Auteur*"
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
			'name' => 'duree',
			'label' => "Durée"
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
	* store : Créer un VOD
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier un VOD
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
