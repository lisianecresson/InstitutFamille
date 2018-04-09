<?php
/**
 * CoursEnLigne: model des cours en ligne
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
 * Class CoursEnLigne : model des cours en ligne
 *
 * @author: Lisiane Cresson
 */

class CoursEnLigne extends Model
{
  use CrudTrait;
  use Sluggable;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id','titre', 'slug', 'texte', 'date', 'heure', 'prix', 'stock', 'formateur_id',
    ];
/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/
    protected $casts = [
        'date' => 'date_format:dd/mm/yyyy',
        'heure' => 'time',
    ];
    


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
* formateur: relation 1 à n avec formateur
*
* @author: Lisiane Cresson
* @return belongsTo Formateur
*/
        public function formateur(){
            return $this->belongsTo('App\Models\Formateur');
        }


}

