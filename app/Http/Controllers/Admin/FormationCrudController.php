<?php

/**
 * FormationCrudController : Contrôleur pour gerer les curds des Formations
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FormationCrudRequest as StoreRequest;
use App\Http\Requests\FormationCrudRequest as UpdateRequest;

/**
 * Class FormationCrudCotroller : Contrôleur pour gerer les curds des Formations
 *
 */

class FormationCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds des Conferences
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Formation");
        $this->crud->setRoute("admin/formation");
        $this->crud->setEntityNameStrings('formation', 'formations');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns(['titre', 
        ]);
		// ------ CRUD FIELDS
        $this->crud->addField([
			'name' => 'titre',
			'label' => "Titre*"
		]);
		$this->crud->addField([    // SELECT
            'label' => "Type de la formation*",
            'type' => 'select2',
            'name' => 'typeFormation_id',
            'entity' => 'typeFormation',
            'attribute' => 'type',
            'model' => "App\Models\TypeFormation",
        ]);
        $this->crud->addField([
			'name' => 'description',
			'label' => "Description",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([
			'name' => 'objectif',
			'label' => "Objectif",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([
			'name' => 'public',
			'label' => "Public concerné",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([
			'name' => 'temps',
			'label' => "Durée de la formation",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([
			'name' => 'programme',
			'label' => "Programme",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([
			'name' => 'theorique',
			'label' => "Apport théorique",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([
			'name' => 'methode',
			'label' => "Méthodes pédagogiques",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([
			'name' => 'conditions',
			'label' => "Conditions",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([
			'name' => 'prix',
			'label' => "Prix",
			'type' => 'wysiwyg',
		]);   

    }
	/**
	* store : Créer une Formation
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier une Formation
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
