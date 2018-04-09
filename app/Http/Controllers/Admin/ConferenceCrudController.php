<?php

/**
 * ConferenceCrudController : Contrôleur pour gerer les curds des Conferences
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ConferenceCrudRequest as StoreRequest;
use App\Http\Requests\ConferenceCrudRequest as UpdateRequest;

/**
 * Class ConferenceCrudCotroller : Contrôleur pour gerer les curds des Conferences
 *
 */

class ConferenceCrudController extends CrudController {

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
        $this->crud->setModel("App\Models\Conference");
        $this->crud->setRoute("admin/conference");
        $this->crud->setEntityNameStrings('conférence', 'conférences');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns(['titre', ['name' => 'dateDebut',
										   'label' => 'Date de début',
										  ]
		]);
		// ------ CRUD FIELDS
        $this->crud->addField([
			'name' => 'titre',
			'label' => "Titre*"
		]);
		$this->crud->addField([   // date_picker
		   'name' => 'dateDebut',
		   'type' => 'date_picker',
		   'label' => 'Date de début*',
		   // optional:
		   'date_picker_options' => [
		      'todayBtn' => true,
		      'format' => 'dd-mm-yyyy',
		      'language' => 'fr',
		   ],
		]);
		$this->crud->addField([   // date_picker
		   'name' => 'dateFin',
		   'type' => 'date_picker',
		   'label' => 'Date de fin (uniquement pour les congrès)',
		   // optional:
		   'date_picker_options' => [
		      'todayBtn' => true,
		      'format' => 'dd-mm-yyyy',
		      'language' => 'fr',
		   ],
		]);
		$this->crud->addField([    // SELECT
            'label' => "Lieu",
            'type' => 'select2',
            'name' => 'lieu_id',
            'entity' => 'lieu',
            'attribute' => 'nom',
            'model' => "App\Models\Lieu",
        ]);
		$this->crud->addField([
			'name' => 'texte',
			'label' => "Texte",
			'type' => 'wysiwyg',
		]);
		$this->crud->addField([ // pdf
		    'name' => 'pdf',
    		'label' => 'PDF',
    		'type' => 'browse',
    		
		]);
    }
	/**
	* store : Créer une conference
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier une conference
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
