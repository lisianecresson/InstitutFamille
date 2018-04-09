<?php
/**
 * FormationLieu: model des Formations par lieu
 *
 * @author: Lisiane Cresson
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Image;
use Storage;

/**
 * Class FormationLieu : model des Formations par lieu
 *
 * @author: Lisiane Cresson
 */

class FormationLieu extends Model
{
  use CrudTrait;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id', 'formation_id', 'lieu_id', 'dateDebut', 'dateFin', 'formateur_id', 
    ];
/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/
 

/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/
     
/**
* formateur: relation 1 à n avec formateur
*
* @author: Lisiane Cresson
* @return belongsTo formateur
*/
        public function formateur(){
            return $this->belongsTo('App\Models\Formateur');
        }

/**
    * formateurs : relation n à m avec formateur
    *
    * @author: Lisiane Creson
    * @return belongsToMany Formateur
    */

    public function formateurs(){
        return $this->belongsToMany('App\Models\Formateur');
    }   

 /**
* lieu: relation 1 à n avec lieu
*
* @author: Lisiane Cresson
* @return belongsTo lieu
*/
        public function lieu(){
            return $this->belongsTo('App\Models\Lieu');
        }
  /**
* formation: relation 1 à n avec formation
*
* @author: Lisiane Cresson
* @return belongsTo formation
*/
        public function formation(){
            return $this->belongsTo('App\Models\Formation');
        }       
        
}