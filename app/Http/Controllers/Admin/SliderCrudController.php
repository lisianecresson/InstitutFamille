<?php

/**
 * SliderCrudController : Contrôleur pour gerer les curds du slider
 *
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SliderCrudRequest as StoreRequest;
use App\Http\Requests\SliderCrudRequest as UpdateRequest;

/**
 * Class SliderCrudCotroller : Contrôleur pour gerer les curds du slider
 *
 */

class SliderCrudController extends CrudController {

	/**
	* setup : construit l'affichage des cruds du slider
	*
	*/

	public function setup() {
		/*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Slider");
        $this->crud->setRoute("admin/slider");
        $this->crud->setEntityNameStrings('slider', 'slider');
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// ------ CRUD COLUMNS
        $this->crud->setColumns([['label' => "Evenement",
                                		   'type' => 'select',
                                           'name' => 'conference_id',
                                		   'entity' => 'conference',
                                		   'attribute' => 'Full_Evenement',
                                		   'model' => "App\Models\Conference"
                            	],
                            	
		]);

		// ------ CRUD FIELDS
		
		$this->crud->addField([ // pdf
		    'name' => 'image',
    		'label' => 'Image',
    		'type' => 'browse',
    		
		]);
		$this->crud->addField([    // SELECT
            'label' => "Evenement",
            'type' => 'select2',
            'name' => 'conference_id',
            'entity' => 'conference',
            'attribute' => 'Full_Evenement',
            'model' => "App\Models\Conference",
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
