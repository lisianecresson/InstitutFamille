<?php
/**
 * Conference: model des Conferences
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
 * Class Conference : model des Conferences
 *
 * @author: Lisiane Cresson
 */

class Conference extends Model
{
  use CrudTrait;
  use Sluggable;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id','titre', 'slug', 'texte', 'dateDebut','dateFin', 'lieu_id', 'pdf',
    ];
/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/

  /**
   * getFullNameAttribute : retourn la date, le lieu et le titre de l'evenement
   *
   * @author: Lisiane Cresson
   * @return full_name
   */
  public function getFullEvenementAttribute($value) {
     return $this->dateDebut.' - '.$this->lieu->ville.' - '.$this->titre;
  }


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
* lieu: relation 1 à n avec lieu
*
* @author: Lisiane Cresson
* @return belongsTo lieu
*/
        public function lieu(){
            return $this->belongsTo('App\Models\Lieu');
        }
/**
* slider: relation 1 à n avec slider
*
* @author: Lisiane Cresson
* @return hasMany slider
*/

    public function conference(){
        return $this->hasMany('App\Models\Slider');
    }

}