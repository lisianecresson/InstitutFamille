<?php

/**
 * CoursEnLigneCrudController : Contrôleur pour gerer les curds des cours en ligne
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CoursEnLigneCrudRequest as StoreRequest;
use App\Http\Requests\CoursEnLigneCrudRequest as UpdateRequest;

/**
 * Class DvdCrudCotroller : Contrôleur pour gerer les curds des cours en ligne
 *
 */

class CoursEnLigneCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds des cours en ligne
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\CoursEnLigne");
        $this->crud->setRoute("admin/coursenligne");
        $this->crud->setEntityNameStrings('cours en ligne', 'cours en ligne');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns(['titre', ['label' => "Nom du formateur",
                                		   'type' => 'select',
                                           'name' => 'formateur_id',
                                		   'entity' => 'formateur',
                                		   'attribute' => 'full_name',
                                		   'model' => "App\Models\Formateur"
                            			  ]
        ]);
		// ------ CRUD FIELDS
        $this->crud->addField([
			'name' => 'titre',
			'label' => "Titre*"
		]);
		$this->crud->addField([    // SELECT
            'label' => "Formateur*",
            'type' => 'select2',
            'name' => 'formateur_id',
            'entity' => 'formateur',
            'attribute' => 'full_name',
            'model' => "App\Models\Formateur",
        ]);
        $this->crud->addField([
			'name' => 'texte',
			'label' => "Texte",
			'type' => 'wysiwyg'
		]);
		$this->crud->addField([   // date_picker
		   'name' => 'date',
		   'type' => 'date_picker',
		   'label' => 'Date',
		   // optional:
		   'date_picker_options' => [
		      'todayBtn' => true,
		      'format' => 'dd-mm-yyyy',
		      'language' => 'fr'
		   ],
		]);

		$this->crud->addField([   // Time
  		    'name' => 'heure',
    		'label' => 'Heure',
    		'type' => 'time'
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
	* store : Créer un cours en ligne
	*
	* @return parent::storeCrud()
	*/
	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	/**
	* update : Modifier un cours en ligne
	*
	* @return parent::updateCrud()
	*/

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
