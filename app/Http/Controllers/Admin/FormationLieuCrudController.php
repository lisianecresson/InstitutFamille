<?php

/**
 * FormationLieuCrudController : Contrôleur pour gerer les curds des Formations par lieu
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FormationLieuCrudRequest as StoreRequest;
use App\Http\Requests\FormationLieuCrudRequest as UpdateRequest;

/**
 * Class FormationLieuCrudCotroller : Contrôleur pour gerer les curds des Formations par lieu
 *
 */

class FormationLieuCrudController extends CrudController {

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
        $this->crud->setModel("App\Models\FormationLieu");
        $this->crud->setRoute("admin/formationlieu");
        $this->crud->setEntityNameStrings('formation par lieu', 'formations par lieu');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns([['label' => "Nom de la formation",
                                		   'type' => 'select',
                                           'name' => 'formation_id',
                                		   'entity' => 'formation',
                                		   'attribute' => 'titre',
                                		   'model' => "App\Models\Formation"
                            			  ]
                            	, ['label' => "Nom du lieu",
                                		   'type' => 'select',
                                           'name' => 'lieu_id',
                                		   'entity' => 'lieu',
                                		   'attribute' => 'nom',
                                		   'model' => "App\Models\Lieu"
                            			  ],
                            		['label' => "Date de début",
                                           'name' => 'dateDebut',
                            			  ]	  
        ]);
		// ------ CRUD FIELDS
		$this->crud->addField([    // SELECT
            'label' => "Nom de la formation*",
            'type' => 'select2',
            'name' => 'formation_id',
            'entity' => 'formation',
            'attribute' => 'titre',
            'model' => "App\Models\Formation",
        ]);
        $this->crud->addField([    // SELECT
            'label' => "Nom du lieu*",
            'type' => 'select',
            'name' => 'lieu_id',
            'entity' => 'lieu',
            'attribute' => 'nom',
            'model' => "App\Models\Lieu"
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
		   'label' => 'Date de fin',
		   // optional:
		   'date_picker_options' => [
		      'todayBtn' => true,
		      'format' => 'dd-mm-yyyy',
		      'language' => 'fr',
		   ],
		]);
		$this->crud->addField([    // SELECT
            'label' => "Responsable de formation*",
            'type' => 'select2',
            'name' => 'formateur_id',
            'entity' => 'formateur',
            'attribute' => 'full_name',
            'model' => "App\Models\Formateur",
        ]);
        $this->crud->addField([    // SELECT
            'label' => "Lieu",
            'type' => 'select2',
            'name' => 'lieu_id',
            'entity' => 'lieu',
            'attribute' => 'nom',
            'model' => "App\Models\Lieu",
        ]);
        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
    		'label' => "Formateurs",
			'placeholder'=>"Choisir un formateur",
    		'type' => 'select2_multiple',
    		'name' => 'formateurs', // the method that defines the relationship in your Model
    		'entity' => 'formateurs', // the method that defines the relationship in your Model
    		'attribute' => 'full_name', // foreign key attribute that is shown to user
    		'model' => "App\Models\Formateur", // foreign key model
    		'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
		]);
    }
	/**
	* store : Créer une Formation par lieu
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier une Formation par lieu
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
