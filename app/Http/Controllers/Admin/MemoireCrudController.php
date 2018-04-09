<?php

/**
 * MemoireCrudController : Contrôleur pour gerer les curds des Memoires d'étudiant
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\MemoireCrudRequest as StoreRequest;
use App\Http\Requests\MemoireCrudRequest as UpdateRequest;

/**
 * Class MemoireCrudCotroller : Contrôleur pour gerer les curds des Memoires
 *
 */

class MemoireCrudController extends CrudController {

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
        $this->crud->setModel("App\Models\Memoire");
        $this->crud->setRoute("admin/memoire");
        $this->crud->setEntityNameStrings('mémoire', 'mémoires');
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
			'label' => "Image",
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
			'name' => 'etudiant',
			'label' => "Nom de l'étudiant*"
		]);
    }
	/**
	* store : Créer une Memoire
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier une Memoire
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
