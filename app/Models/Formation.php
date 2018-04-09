<?php
/**
 * Formation: model des Formations
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
 * Class Formation : model des Formations
 *
 * @author: Lisiane Cresson
 */

class Formation extends Model
{
  use CrudTrait;
  use Sluggable;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id','titre', 'slug', 'typeFormation_id', 'description', 'temps','public', 'objectif', 'programme', 'theorique', 'methode', 'conditions', 'prix',
    ];
/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/
  /**
   * sluggable : retourn un slug à partir du titre
   *
   * @author: Lisiane Cresson
   * @return slug
   */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titre'
            ]
        ];
    }

    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->titre;
    }

/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/

/**
* typeFormation: relation 1 à n avec typeFormation
*
* @author: Lisiane Cresson
* @return belongsTo typeFormation
*/
        public function typeFormation(){
            return $this->belongsTo('App\Models\TypeFormation');
        }        
 /**
        * lieus: relation n à m avec lieu
        *
        * @author: Lisiane Cresson
        * @return belongsToMany Lieus
        */

    public function lieus(){
        return $this->belongsToMany('App\Models\Lieu');
    }   
     /**
* formationLieu: relation 1 à n avec formationlieu
*
* @author: Lisiane Cresson
* @return belongsTo FormationLieu
*/
        public function formationLieu(){
            return $this->belongsTo('App\Models\FormationLieu');
        }

}