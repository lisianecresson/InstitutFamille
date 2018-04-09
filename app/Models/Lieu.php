<?php
/**
 * Lieu: model des Lieux
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
 * Class Lieu : model des Lieux
 *
 * @author: Lisiane Cresson
 */

class Lieu extends Model
{
  use CrudTrait;
  use Sluggable;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id','nom', 'slug', 'rue', 'numero','codePostal', 'ville', 'texte', 'pays',
    ];
/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/
  /**
   * sluggable : retourn un slug à partir du nom
   *
   * @author: Lisiane Cresson
   * @return slug
   */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nom'
            ]
        ];
    }

    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->nom;
    }


/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/
/**
        * conference: relation 1 à n avec conference
        *
        * @author: Lisiane Cresson
        * @return hasMany Conference
        */

    public function conference(){
        return $this->hasMany('App\Models\Conference');
    }

 /**
        * formation: relation n à m avec formation
        *
        * @author: Lisiane Cresson
        * @return belongsToMany Formations
        */

    public function formations(){
        return $this->belongsToMany('App\Models\Formation');
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

